<?php
// Handle form submission and send email
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = isset($_POST['fullname']) ? htmlspecialchars(trim($_POST['fullname'])) : '';
    $company = isset($_POST['company']) ? htmlspecialchars(trim($_POST['company'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $address = isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '';
    $contact_method = isset($_POST['contact_method']) ? htmlspecialchars($_POST['contact_method']) : 'email';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
    $items_json = isset($_POST['items_json']) ? $_POST['items_json'] : '[]';

    // Validate required fields
    if ($fullname && $company && $email && $address) {
        // Parse items JSON
        $items = json_decode($items_json, true) ?: [];
        
        // Build email content
        $to = 'lizette.macalindol@gmail.com';
        $subject = 'New Inquiry Form Submission from ' . $fullname;
        
        $items_list = '';
        if (!empty($items)) {
            $items_list = "<h3>Inquiry Items:</h3><ul>";
            foreach ($items as $item) {
                $model = htmlspecialchars($item['model'] ?? 'N/A');
                $type = htmlspecialchars($item['type'] ?? 'N/A');
                $brand = htmlspecialchars($item['brand'] ?? 'N/A');
                $qty = intval($item['qty'] ?? 1);
                $items_list .= "<li><strong>$model</strong> ($type) - $brand - Qty: $qty</li>";
            }
            $items_list .= "</ul>";
        } else {
            $items_list = "<p>No items selected</p>";
        }

        $body = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .header { background: #2B11DB; color: white; padding: 15px; border-radius: 5px; }
        .section { margin: 20px 0; }
        .label { font-weight: bold; color: #2B11DB; }
        ul { list-style: none; padding-left: 0; }
        li { padding: 8px 0; border-bottom: 1px solid #eee; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h2>New Inquiry Submission</h2>
    </div>
    
    <div class=\"section\">
        <p><span class=\"label\">Full Name:</span> " . $fullname . "</p>
        <p><span class=\"label\">Company:</span> " . $company . "</p>
        <p><span class=\"label\">Email:</span> " . $email . "</p>
        <p><span class=\"label\">Phone:</span> " . ($phone ?: 'Not provided') . "</p>
        <p><span class=\"label\">Address:</span> " . nl2br($address) . "</p>
        <p><span class=\"label\">Preferred Contact Method:</span> " . ucfirst($contact_method) . "</p>
    </div>
    
    <div class=\"section\">
        " . $items_list . "
    </div>
    
    <div class=\"section\">
        <p><span class=\"label\">Message:</span></p>
        <p>" . nl2br($message ?: 'No message provided') . "</p>
    </div>
    
    <hr>
    <p style=\"font-size: 12px; color: #666;\">This inquiry was submitted via ANDISON INDUSTRIAL website.</p>
</body>
</html>
        ";

        // Email headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        // Send email
        $mail_sent = mail($to, $subject, $body, $headers);

        // Handle file upload if provided
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'uploads/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_name = basename($_FILES['file']['name']);
            $file_path = $upload_dir . time() . '_' . $file_name;
            move_uploaded_file($file_tmp, $file_path);
        }

        // Show success message and clear localStorage
        $success_message = $mail_sent ? "Inquiry submitted successfully! We'll contact you soon." : "Error sending inquiry. Please try again.";
        echo "<script>alert('" . addslashes($success_message) . "'); if(" . ($mail_sent ? 'true' : 'false') . ") { localStorage.removeItem('inquiryItems'); window.location.href='inquirylist.php'; }</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Inquiry Form - ANDISON INDUSTRIAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        :root{--accent:#2B11DB;--muted:#f5f7fb;--card:#ffffff;--success:#10b981;--danger:#ef4444}
        *{box-sizing:border-box}
        body{font-family:'Segoe UI', -apple-system, BlinkMacSystemFont, Tahoma, Geneva, Verdana, sans-serif;background:linear-gradient(135deg, #f5f7fb 0%, #eff2ff 100%);color:#1f2937;margin:0;padding:142px 20px 48px 20px}
        .container{max-width:800px;margin:0 auto}
        .form-card{background:var(--card);border-radius:16px;padding:32px 28px;box-shadow:0 10px 40px rgba(43,17,219,0.08);border:1px solid rgba(43,17,219,0.05)}
        h1{color:var(--accent);font-size:24px;margin:0 0 6px;font-weight:700;letter-spacing:-0.5px}
        .form-subtitle{color:#6b7280;font-size:13px;margin-bottom:24px;line-height:1.5}
        .form-section{margin-bottom:20px;padding-bottom:16px;border-bottom:2px solid #f3f4f6}
        .form-section:last-of-type{border-bottom:none}
        .section-title{font-size:12px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:12px}
        .form-row{margin-bottom:14px}
        label{display:block;font-size:13px;margin-bottom:6px;color:#374151;font-weight:600;letter-spacing:0.3px}
        input[type="text"], input[type="email"], input[type="tel"], select, textarea, input[type="number"]{
            width:100%;padding:12px 14px;border-radius:8px;border:2px solid #e5e7eb;background:#fff;font-size:14px;color:#1f2937;transition:all 0.3s;font-family:inherit}
        input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus, select:focus, textarea:focus, input[type="number"]:focus{
            outline:none;border-color:var(--accent);background:#fafbff;box-shadow:0 0 0 3px rgba(43,17,219,0.1)}
        input[type="text"]::placeholder, input[type="email"]::placeholder, input[type="tel"]::placeholder, textarea::placeholder{
            color:#9ca3af}
        textarea{min-height:120px;resize:vertical;line-height:1.6}
        #address, #message{font-family:inherit;font-size:14px;line-height:1.6;color:#1f2937}
        .small{font-size:12px;color:#9ca3af;margin-top:8px;line-height:1.5}
        .row{display:flex;gap:14px}
        .col{flex:1}
        .actions{display:flex;justify-content:flex-end;gap:12px;margin-top:20px;padding-top:16px;border-top:2px solid #f3f4f6}
        .btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:10px 22px;border-radius:8px;border:2px solid;font-weight:700;cursor:pointer;font-size:13px;transition:all 0.3s;text-decoration:none}
        .btn-clear{background:#f3f4f6;border-color:#d1d5db;color:#374151}
        .btn-clear:hover{background:#e5e7eb;border-color:#9ca3af;transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,0.1)}
        .btn-submit{background:var(--accent);border-color:var(--accent);color:#fff}
        .btn-submit:hover{background:#2008c0;border-color:#2008c0;transform:translateY(-2px);box-shadow:0 6px 20px rgba(43,17,219,0.3)}
        .btn-submit:active{transform:translateY(0)}
        .required{color:#ef4444;margin-left:4px;font-weight:700}
        @media (max-width:640px){.row{flex-direction:column};.form-card{padding:24px 18px}}
        .form-row .options{display:flex;gap:20px;align-items:center;margin-top:10px;flex-wrap:wrap}
        .form-row .options label{display:inline-flex;align-items:center;gap:8px;cursor:pointer;font-weight:500;margin:0}
        .form-row .options input[type="radio"]{width:20px;height:20px;margin:0;cursor:pointer;accent-color:var(--accent)}
        .inquiry-items-section{background:#f9fafb;border-radius:8px;padding:16px;border:2px dashed #e5e7eb}
        .inquiry-items-section .small{margin-top:0}
        /* Header */
        header {
            background: linear-gradient(135deg, #2B11DB 0%, #2B11DB 100%);
            color: white;
            padding: 14px 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            width: 100%;
        }

        .header-top {
            display: flex;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            gap: 20px;
            margin-bottom: 12px;
        }

        .header-buttons {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: auto;
        }

        .logo {
            font-size: 16px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 0 0 auto;
        }

        .logo-box img {
            height: 50px;
            width: auto;
            display: block;
        }

        .back-button {
            background: linear-gradient(135deg, #00D7B3 0%, #00C8A8 100%);
            color: #1f2937;
            border: none;
            padding: 12px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            margin-left: auto;
            font-size: 14px;
            box-shadow: 0 4px 15px rgba(0, 215, 179, 0.3);
            position: relative;
            overflow: hidden;
            letter-spacing: 0.3px;
        }

        .back-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .back-button:hover::before {
            width: 300px;
            height: 300px;
        }

        .back-button:hover {
            background: linear-gradient(135deg, #00E6FF 0%, #00C8F7 100%);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 217, 255, 0.5);
        }

        .back-button:active {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 215, 179, 0.3);
        }

        .back-button i {
            display: none;
        }

        @media (max-width: 768px) {
            .header-buttons {
                gap: 8px;
            }

            .back-button {
                padding: 11px 22px;
                font-size: 13px;
                border-radius: 50px;
                gap: 6px;
            }

            .header-top {
                gap: 12px;
                flex-wrap: wrap;
            }

            .header-buttons {
                width: 100%;
                flex-basis: 100%;
                margin-left: 0 !important;
            }
        }

        @media (max-width: 480px) {
            .back-button {
                padding: 10px 20px;
                font-size: 12px;
                flex: 1;
                justify-content: center;
                border-radius: 50px;
            }

            .header-buttons {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <header>
        <div class="header-top">
            <div class="logo">
                <div class="logo-box">
                    <a href="home.php"><img src="assets/HOME/image-removebg-preview.png" alt="Andison Industrial" /></a>
                </div>
            </div>
            <div class="header-buttons">
                <a href="javascript:void(0);" onclick="history.back()" class="back-button" title="Go back to previous page">
                    <i class="bi bi-arrow-left"></i> <span>Back</span>
                </a>
            </div>
        </div>
    </header>
        <div class="form-card" role="region" aria-labelledby="inquiryHeading">
            <h1 id="inquiryHeading">Inquiry Form</h1>
            <p class="form-subtitle">Share your product requirements and we'll get back to you within 24 hours</p>
            
            <form id="inquiryForm" action="inquirylist.php" method="post" enctype="multipart/form-data">
                <!-- Inquiry Items Section -->
                <div class="form-section">
                    <div class="section-title"><i class="bi bi-box-seam"></i> Inquiry Items</div>
                    <div class="inquiry-items-section" id="inquiryItemsContainer">
                        <p class="small">📦 No items added yet. Use <strong>"ADD TO INQUIRY LIST"</strong> on product pages to add items.</p>
                    </div>
                </div>
                <input type="hidden" id="items_json" name="items_json" value="">

                <!-- Contact Information Section -->
                <div class="form-section">
                    <div class="section-title"><i class="bi bi-person-lines-fill"></i> Contact Information</div>
                    
                    <div class="form-row">
                        <label for="fullname">Full Name <span class="required">*</span></label>
                        <input id="fullname" name="fullname" type="text" placeholder="John Doe" required>
                    </div>

                    <div class="form-row">
                        <label for="company">Company <span class="required">*</span></label>
                        <input id="company" name="company" type="text" placeholder="Your Company Name" required>
                    </div>

                    <div class="row">
                        <div class="col form-row">
                            <label for="email">Email <span class="required">*</span></label>
                            <input id="email" name="email" type="email" placeholder="john@example.com" required>
                        </div>
                        <div class="col form-row">
                            <label for="phone">Phone <span style="color:#9ca3af;font-weight:400">(Optional)</span></label>
                            <input id="phone" name="phone" type="tel" placeholder="+63 912 345 6789">
                        </div>
                    </div>

                    <div class="form-row">
                        <label for="address">Delivery Address <span class="required">*</span></label>
                        <textarea id="address" name="address" placeholder="Street address, city, state, postal code" required></textarea>
                    </div>
                </div>

                <!-- Preferences Section -->
                <div class="form-section">
                    <div class="section-title"><i class="bi bi-chat-dots"></i> Communication Preferences</div>
                    
                    <div class="form-row">
                        <label>Preferred Contact Method <span class="required">*</span></label>
                        <div class="options">
                            <label><input type="radio" name="contact_method" value="email" checked> <i class="bi bi-envelope"></i> Email</label>
                            <label><input type="radio" name="contact_method" value="phone"> <i class="bi bi-telephone"></i> Phone</label>
                        </div>
                    </div>
                </div>

                <!-- Additional Information Section -->
                <div class="form-section">
                    <div class="section-title"><i class="bi bi-chat-left-text"></i> Additional Information</div>
                    
                    <div class="form-row">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Tell us about your project, specifications, timeline, or any special requirements..."></textarea>
                        <p class="small">💡 Tip: Include project details to help us serve you better</p>
                    </div>

                    <div class="form-row">
                        <label for="file">Attachments <span style="color:#9ca3af;font-weight:400">(Optional)</span></label>
                        <input id="file" name="file" type="file" accept="image/*,application/pdf">
                        <p class="small">📎 Supported: Images (JPG, PNG) and PDF documents</p>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="actions">
                    <button type="button" class="btn btn-clear" id="clearBtn"><i class="bi bi-arrow-clockwise"></i> Clear</button>
                    <button type="submit" class="btn btn-submit"><i class="bi bi-send-fill"></i> Submit Inquiry</button>
                </div>
                <p class="small" style="margin-top:16px;text-align:center">✓ Your information is secure and will be used solely to respond to your inquiry</p>
            </form>
        </div>
    </div>

    <script>
        (function(){
            var form = document.getElementById('inquiryForm');
            var clear = document.getElementById('clearBtn');
            clear.addEventListener('click', function(){ form.reset(); });
            // basic client-side validation feedback
            form.addEventListener('submit', function(e){
                if(!form.checkValidity()){
                    e.preventDefault();
                    form.reportValidity();
                    return;
                }
                // attach inquiry items to form
                try{
                    var items = JSON.parse(localStorage.getItem('inquiryItems')||'[]');
                    document.getElementById('items_json').value = JSON.stringify(items);
                }catch(err){ document.getElementById('items_json').value = '[]'; }
            });
        })();
    </script>
    <script>
        // Render and manage inquiry list stored in localStorage
        (function(){
            function getItems(){ try{ return JSON.parse(localStorage.getItem('inquiryItems')||'[]'); }catch(e){ return []; } }
            function setItems(items){ localStorage.setItem('inquiryItems', JSON.stringify(items)); }
            var container = document.getElementById('inquiryItemsContainer');

            function render(){
                var items = getItems();
                if(!items || items.length === 0){ container.innerHTML = '<p class="small">No items added yet. Use "add to inquiry list" on product pages to add items.</p>'; return; }
                var html = '<ul style="list-style:none;padding:0;margin:0;">';
                items.forEach(function(it, idx){
                    html += '<li style="display:flex;align-items:center;justify-content:space-between;padding:8px 0;border-bottom:1px solid #f0f2f5;">'
                         + '<div style="flex:1">'
                         + '<strong>' + (it.model||'Unnamed') + '</strong>'
                         + '<div style="font-size:13px;color:#666">' + (it.brand||'') + ' • ' + (it.type||'') + '</div>'
                         + '</div>'
                         + '<div style="display:flex;gap:8px;align-items:center">'
                         + '<input data-idx="'+idx+'" class="item-qty" type="number" min="1" value="'+(it.qty||1)+'" style="width:64px;padding:6px;border:1px solid #e6e9ef;border-radius:6px">'
                         + '<button data-idx="'+idx+'" class="item-remove" type="button" style="background:#fff;border:1px solid #e6e9ef;padding:6px 8px;border-radius:6px;cursor:pointer">Remove</button>'
                         + '</div>'
                         + '</li>';
                });
                html += '</ul>';
                container.innerHTML = html;
            }

            // events
            container.addEventListener('click', function(e){
                var rem = e.target.closest('.item-remove');
                if(rem){ var idx = parseInt(rem.dataset.idx,10); var items = getItems(); items.splice(idx,1); setItems(items); render(); }
            });
            container.addEventListener('change', function(e){
                var q = e.target.closest('.item-qty');
                if(q){ var idx = parseInt(q.dataset.idx,10); var items = getItems(); var val = parseInt(q.value,10) || 1; items[idx].qty = val; setItems(items); render(); }
            });

            // clear button also clears items
            var clearBtn = document.getElementById('clearBtn');
            if(clearBtn){ clearBtn.addEventListener('click', function(){ localStorage.removeItem('inquiryItems'); render(); }); }

            render();
        })();
    </script>
</body>
</html>
