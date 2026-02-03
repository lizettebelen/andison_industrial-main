<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ANDISON INDUSTRIAL</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #2b00d9 0%, #2b00b0 100%);
            color: white;
            padding: 14px 0;
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

        .logo {
            font-size: 16px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 0 0 auto;
        }

        .logo-box {
            background: transparent;
            color: #2b00d9;
            padding: 0;
            border-radius: 0;
            font-weight: 800;
            letter-spacing: 0.6px;
        }

        .logo-box img {
            height: 50px;
            width: auto;
            display: block;
        }

        .header-contact {
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 13px;
            flex: 0 0 auto;
        }

        .contact-link {
            color: rgba(255,255,255,0.95);
            text-decoration: none;
            font-weight: 600;
            padding-bottom: 8px;
            white-space: nowrap;
            position: relative;
            display: inline-block;
        }

        .contact-link::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            transform-origin: center;
            width: 64px;
            height: 3px;
            background: rgba(255,255,255,0.18);
            bottom: -6px;
            border-radius: 2px;
            transition: transform 220ms ease;
        }

        .contact-link:hover::after,
        .contact-link:focus-visible::after {
            transform: translateX(-50%) scaleX(1);
        }

        /* Contact popover */
        .contact-dropdown {
            position: relative;
            display: inline-block;
        }

        .contact-popover {
            position: absolute;
            left: 50%;
            top: calc(100% + 12px);
            width: 320px;
            background: #fff;
            color: #111;
            border-radius: 8px;
            padding: 14px 16px;
            box-shadow: 0 10px 30px rgba(10,10,20,0.12);
            opacity: 0;
            visibility: hidden;
            transform: translateX(-50%) translateY(-6px) scale(0.98);
            transition: opacity 180ms ease, transform 180ms ease, visibility 180ms;
            z-index: 120;
        }

        .contact-popover::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: -8px;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #fff;
            filter: drop-shadow(0 -1px 0 rgba(0,0,0,0.03));
        }

        .contact-dropdown:hover:not(.closed) .contact-popover,
        .contact-dropdown:focus-within:not(.closed) .contact-popover {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0) scale(1);
        }

        .contact-close {
            position: absolute;
            top: 8px;
            right: 8px;
            background: transparent;
            border: none;
            color: #666;
            font-weight: 700;
            font-size: 24px;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 6px;
            line-height: 1;
        }

        .contact-close:hover { background: rgba(0,0,0,0.06); color: #333; }

        .contact-dropdown.closed .contact-popover {
            opacity: 0 !important;
            visibility: hidden !important;
            transform: translateX(-50%) translateY(-6px) scale(0.98) !important;
        }

        .contact-list { list-style: none; margin: 0; padding: 6px 0; }
        .contact-list li { display:flex; gap:12px; align-items:center; padding:10px 6px; }
        .contact-list .icon { font-size:18px; width:28px; text-align:center; color:#111; }
        .contact-list a { color: #111; text-decoration:none; font-weight:600; }
        .contact-list a:hover { text-decoration:underline; }

        .search-bar {
            flex: 1 1 auto;
            display: flex;
            justify-content: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .search-bar .search-field {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 8px;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            height: 40px;
            padding: 10px 16px 10px 40px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 6px;
            font-size: 15px;
            background: rgba(255,255,255,0.95);
            color: #333;
        }

        .search-bar input::placeholder {
            color: #999;
        }

        .search-bar .search-field::before {
            content: '🔍';
            position: absolute;
            left: 12px;
            font-size: 16px;
            pointer-events: none;
            color: #666;
        }

        .search-btn {
            display: none;
        }

        .inquiry-btn {
            background: #00d894;
            color: #002b2b;
            border: none;
            padding: 10px 18px;
            border-radius: 999px;
            font-weight: 800;
            cursor: pointer;
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
        }

        .inquiry-btn:hover { filter: brightness(0.95); }
        
        .right-actions {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        /* Navigation */
        nav {
            position: relative;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(10px);
        }

        .nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            min-height: 52px;
            gap: 18px;
            justify-content: flex-start;
            padding-left: 160px;
        }

        .browse-toggle {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 80;
            background: transparent;
            border: none;
            color: white;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 14px;
            cursor: pointer;
            font-size: 15px;
        }

        .nav-list {
            list-style: none;
            display: flex;
            gap: 28px;
            margin: 0;
            padding: 0;
        }

        .nav-list a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            padding: 12px 6px;
            display: block;
            transition: color 0.2s;
            position: relative;
        }

        .nav-list a:hover { color: #00d4aa; }

        .nav-list a.active {
            border-bottom: 3px solid #00d4aa;
            padding-bottom: 9px;
        }

        /* Overlay sidebar */
        .overlay-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.08);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.25s ease, visibility 0.25s;
            z-index: 60;
        }

        .overlay-backdrop.active {
            opacity: 1;
            visibility: visible;
        }

        .sidebar-overlay {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 300px;
            max-width: 88%;
            background: #fff;
            box-shadow: 6px 0 30px rgba(2,6,23,0.08);
            transform: translateX(-100%);
            transition: transform 0.28s ease;
            z-index: 70;
            padding: 28px 20px;
            overflow-y: auto;
        }

        .sidebar-overlay.active {
            transform: translateX(0);
        }

        .sidebar-overlay h3 {
            font-size: 16px;
            margin-bottom: 12px;
            color: #222;
            font-weight: 700;
        }

        .sidebar-list { list-style: none; padding: 0; margin: 0; }
        .sidebar-list li { border-bottom: 1px solid #f3f4f6; }
        .sidebar-list a { display:flex; gap:12px; padding:14px 6px; color:#222; text-decoration:none; align-items:center; }
        .sidebar-list a:hover { background:#fbfdff; color:#0015d1; }
        .sidebar-icon { color:#4a21d9; width:28px; text-align:center; }

        .sidebar-close { background: transparent; border: none; color:#666; font-weight:700; cursor:pointer; position:absolute; right:12px; top:12px; }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .page-title {
            font-size: 42px;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        .page-subtitle {
            font-size: 18px;
            color: #666;
            text-align: center;
            margin-bottom: 60px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-section {
            margin-bottom: 60px;
        }

        .section-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            border-left: 4px solid #0015d1;
            padding-left: 20px;
        }

        .section-content {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-card {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            border-left: 4px solid #0015d1;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 21, 209, 0.1);
        }

        .feature-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .feature-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .feature-text {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        .values-section {
            background: linear-gradient(135deg, #e0f7f4 0%, #d0f0ec 100%);
            padding: 50px;
            border-radius: 8px;
            margin-bottom: 60px;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .value-item {
            background: white;
            padding: 25px;
            border-radius: 6px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .value-icon {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .value-title {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .value-text {
            font-size: 13px;
            color: #666;
            line-height: 1.5;
        }

        .team-section {
            margin-top: 60px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .team-member {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .team-member:hover {
            transform: translateY(-5px);
        }

        .team-avatar {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #0015d1 0%, #0066cc 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            color: white;
        }

        .team-info {
            padding: 20px;
            text-align: center;
        }

        .team-name {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .team-role {
            font-size: 13px;
            color: #0015d1;
            font-weight: 600;
        }

        /* Footer */
        footer {
            background: #0015d1;
            color: white;
            padding: 30px 20px;
            margin-top: 80px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-copyright {
            font-size: 13px;
        }

        .footer-links {
            display: flex;
            gap: 25px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            font-size: 13px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #00d4aa;
        }

        @media (max-width: 768px) {
            .nav-inner { justify-content: space-between; padding-left: 20px; }
            .nav-list { position: static; transform: none; left: auto; margin: 8px auto 0; justify-content: center; flex-wrap: wrap; gap: 15px; }
            .browse-toggle { position: static; transform: none; left: auto; top: auto; padding: 6px 10px; }
            
            .page-title {
                font-size: 32px;
            }

            .section-title {
                font-size: 22px;
            }

            .values-section {
                padding: 30px 20px;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <?php
        // Set page title
        $page_title = "About Us";
        $company_name = "ANDISON INDUSTRIAL";
        
        // Contact information
        $phone = "+1(234) 567 8900";
        $phone2 = "+1(234) 567 8900";
        $phone3 = "+1(639) 977 803 7398";
        $email = "info@andison-industrial.com";
    ?>

    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="logo">
                <div class="logo-box"><img src="assets/image-removebg-preview.png" alt="Andison Industrial" /></div>
            </div>

            <div class="search-bar">
                <div class="search-field">
                    <input type="text" placeholder="Search for products">
                </div>
            </div>

            <div class="right-actions">
                <button class="inquiry-btn">INQUIRY LIST</button>
                <div class="header-contact">
                    <div class="contact-dropdown" tabindex="0" aria-haspopup="true">
                        <a href="#contact" class="contact-link" aria-label="Contact Us">Contact Us ▾</a>
                        <div class="contact-popover" role="menu" aria-hidden="true">
                            <button class="contact-close" aria-label="Close contact popover">✕</button>
                            <ul class="contact-list">
                                <li><span class="icon">📞</span><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
                                <li><span class="icon">📞</span><a href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a></li>
                                <li><span class="icon">📞</span><a href="tel:<?php echo $phone3; ?>"><?php echo $phone3; ?></a></li>
                                <li><span class="icon">📧</span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav>
            <div class="nav-inner">
                <button id="browseToggle" class="browse-toggle"><span class="hamburger">☰</span> BROWSE PRODUCTS</button>
                <ul class="nav-list">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="aboutus.php" class="active">About Us</a></li>
                    <li><a href="brands.php">Brands</a></li>
                    <li><a href="industries.php">Industries</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Sidebar overlay -->
    <div id="overlay" class="overlay-backdrop" aria-hidden="true"></div>
    <aside id="sidebar" class="sidebar-overlay" aria-hidden="true">
        <button class="sidebar-close" id="closeSidebar">✕</button>
        <h3>Categories</h3>
        <ul class="sidebar-list">
            <li><a href="#arc-handmetal-machine"><span class="sidebar-icon">🔧</span> Arc HandMetal Machine</a></li>
            <li><a href="#arc-handmetal-robots"><span class="sidebar-icon">🤖</span> Arc HandMetal Robots</a></li>
            <li><a href="#batteries"><span class="sidebar-icon">🔋</span> Batteries</a></li>
            <li><a href="#drilling-lifting"><span class="sidebar-icon">🏗️</span> Drilling and Lifting</a></li>
            <li><a href="#gas-detectors"><span class="sidebar-icon">📊</span> Portable Gas Detectors</a></li>
            <li><a href="#ventilators"><span class="sidebar-icon">💨</span> Portable Ventilators</a></li>
            <li><a href="#power-tools"><span class="sidebar-icon">🔩</span> Power Tools</a></li>
            <li><a href="#protection-safety"><span class="sidebar-icon">🛡️</span> Protection and Safety</a></li>
            <li><a href="#handmetal-accessories"><span class="sidebar-icon">⚙️</span> HandMetal Accessories</a></li>
            <li><a href="#handmetal-consumables"><span class="sidebar-icon">📦</span> HandMetal Consumables</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <h1 class="page-title">About Andison Industrial</h1>
        <p class="page-subtitle">Leading provider of high-quality industrial solutions and equipment for over two decades.</p>

        <!-- Company Overview Section -->
        <div class="about-section">
            <h2 class="section-title">COMPANY</h2>
            <p class="section-content">
                Andison Industrial Sales Inc. stands as a significant industrial supplier for leading companies across the Philippines. Strategically situated amidst the expansive industrial landscape south of Metro Manila. Andison serves multi-national and export giants within the automotive and motorcycle assembly factories, power generation, oil refineries, petrochemical plant, metal fabrications, mining, shipyard, and other top contractors.
            </p>
            <p class="section-content">
                With specialize knowledge, Andison embraces the evolution of technology and consistently adopts new trends. We offer various solutions to our clientele by providing high quality products, technical solutions, support and services, given consultation to meet the evolving needs of our clients. 
            </p>
            <p class="section-content">
                Today, as representatives of various world-class brands, Andison has one of the industry’s broadest portfolio of products. Our range of products includes Robotic & Automated Welding Systems, Welding & Cutting Machines, Equipment and Consumables, Industrial Tools & Supplies, Gas Detector & Monitoring Devices, Safety Products, PPEs and many others.
            </p>
        </div>

        <!-- Mission & Vision -->
        <div class="about-section">
            <div class="features-grid">
                <div class="feature-card" style="border-left-color: #00d894;">
                    <div class="feature-icon">🎯</div>
                    <div class="feature-title">Our Mission</div>
                    <p class="feature-text">To deliver innovative solutions and high-quality products to businesses in the Philippines at cost-effective prices. We aimed to cultivate lasting relationships with our industrial clients, ensuing mutual growth and success.</p>
                </div>
                <div class="feature-card" style="border-left-color: #0015d1;">
                    <div class="feature-icon">🚀</div>
                    <div class="feature-title">Our Vision</div>
                    <p class="feature-text">To contribute to our country’s industrialization by being a major supplier to the industries.</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#sitemap">Sitemap</a>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2026 <?php echo $company_name; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        (function(){
            var browseToggle = document.getElementById('browseToggle');
            var sidebar = document.getElementById('sidebar');
            var overlay = document.getElementById('overlay');
            var closeBtn = document.getElementById('closeSidebar');

            function openSidebar(){
                sidebar.classList.add('active');
                overlay.classList.add('active');
                sidebar.setAttribute('aria-hidden','false');
                overlay.setAttribute('aria-hidden','false');
            }

            function closeSidebar(){
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
                sidebar.setAttribute('aria-hidden','true');
                overlay.setAttribute('aria-hidden','true');
            }

            if(browseToggle){
                browseToggle.addEventListener('click', function(e){ e.preventDefault(); openSidebar(); });
            }
            if(closeBtn) closeBtn.addEventListener('click', closeSidebar);
            if(overlay) overlay.addEventListener('click', closeSidebar);
            document.addEventListener('keydown', function(e){ if(e.key === 'Escape') closeSidebar(); });
        })();
    </script>

    <script>
        // Manage aria states for contact dropdown (improves accessibility)
        (function(){
            var dropdowns = document.querySelectorAll('.contact-dropdown');
            dropdowns.forEach(function(dd){
                var pop = dd.querySelector('.contact-popover');
                var link = dd.querySelector('.contact-link');
                dd.addEventListener('keydown', function(e){
                    if(e.key === 'Escape') { link.blur(); pop.setAttribute('aria-hidden','true'); }
                });
                dd.addEventListener('focusin', function(){ pop.setAttribute('aria-hidden','false'); dd.setAttribute('aria-expanded','true'); });
                dd.addEventListener('focusout', function(){ setTimeout(function(){ if(!dd.contains(document.activeElement)){ pop.setAttribute('aria-hidden','true'); dd.setAttribute('aria-expanded','false'); } }, 10); });
                dd.addEventListener('mouseenter', function(){ 
                    if(dd.classList.contains('closed')) return;
                    pop.setAttribute('aria-hidden','false'); dd.setAttribute('aria-expanded','true'); 
                });
                dd.addEventListener('mouseleave', function(){ pop.setAttribute('aria-hidden','true'); dd.setAttribute('aria-expanded','false'); dd.classList.remove('closed'); });

                var closeBtn = dd.querySelector('.contact-close');
                if(closeBtn){
                    closeBtn.addEventListener('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();
                        pop.setAttribute('aria-hidden','true');
                        dd.setAttribute('aria-expanded','false');
                        dd.classList.add('closed');
                        document.activeElement.blur();
                    });
                }
            });
        })();
    </script>
</body>
</html>
    