  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Our Trusted Brands & Partners - ANDISION INDUSTRIAL</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
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
          background: #fff;
          scroll-behavior: smooth;
          padding-top: 142px;
      }

      html {
          scroll-padding-top: 150px;
      }

          /* Header */
        header {
            background: linear-gradient(135deg, #2b00d9 0%, #2b00b0 100%);
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
            padding: 50 20px;
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

        .nav-list > li {
            position: relative;
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

        /* Navigation Dropdown */
        .nav-dropdown {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(8px);
            background: white;
            min-width: 280px;
            border-radius: 8px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s;
            z-index: 110;
            padding: 16px;
            margin-top: 8px;
        }

        .nav-dropdown::before {
            content: '';
            position: absolute;
            top: -8px;
            left: 50%;
            transform: translateX(-50%);
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid white;
            filter: drop-shadow(0 -2px 2px rgba(0,0,0,0.05));
        }

        .nav-list > li:hover .nav-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        /* Dropdown animation */
        @keyframes dropdownIn {
            from { opacity: 0; transform: translateY(-8px) scale(0.98); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }

        .nav-list > li:hover .nav-dropdown { animation: dropdownIn 220ms cubic-bezier(.2,.8,.2,1); }

        /* Underline reveal on dropdown links */
        .nav-dropdown ul a { position: relative; overflow: hidden; }
        .nav-dropdown ul a::after {
            content: '';
            position: absolute;
            left: 12px;
            right: 12px;
            bottom: 8px;
            height: 3px;
            background: #00d4aa;
            border-radius: 4px;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 260ms ease;
            opacity: 0.95;
        }
        .nav-dropdown ul a:hover::after { transform: scaleX(1); }

        /* Overlay and sidebar animations */
        @keyframes overlayFadeIn { from { opacity: 0; } to { opacity: 1; } }
        .overlay-backdrop.active { animation: overlayFadeIn 220ms ease forwards; }

        .sidebar-overlay { transition: transform 320ms cubic-bezier(.2,.8,.2,1); }
        .sidebar-overlay.active { transform: translateX(0); }

        /* Browse toggle icon rotate when sidebar opens (JS toggles .open class) */
        .browse-toggle .bi-list { transition: transform 260ms ease; }
        .browse-toggle.open .bi-list { transform: rotate(90deg) scale(1.05); }

        .nav-dropdown h4 {
            color: #2b00d9;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 12px;
            padding-bottom: 8px;
            border-bottom: 2px solid #f0f0f0;
        }

        .nav-dropdown ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-dropdown ul li {
            margin: 0;
        }

        .nav-dropdown ul a {
            color: #333;
            font-size: 14px;
            padding: 8px 12px;
            display: block;
            border-radius: 4px;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .nav-dropdown ul a:hover {
            background: #f0f5ff;
            color: #2b00d9;
        }

        .nav-dropdown p {
            color: #666;
            font-size: 13px;
            line-height: 1.6;
            margin: 0;
        }

        /* Brands dropdown specific styling */
        nav li:nth-child(3) .nav-dropdown {
            min-width: 650px;
            max-width: 650px;
            max-height: none;
            overflow: visible;
            padding: 24px 28px;
        }

        /* Grid layout for brands dropdown list */
        nav li:nth-child(3) .nav-dropdown ul {
            display: grid !important;
            grid-template-columns: repeat(5, 1fr) !important;
            gap: 12px 20px !important;
            margin-top: 16px !important;
        }

        nav li:nth-child(3) .nav-dropdown ul li {
            margin: 0 !important;
        }

        nav li:nth-child(3) .nav-dropdown ul a {
            padding: 6px 8px !important;
            font-size: 14px !important;
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
            top: calc(14px + 50px + 14px + 12px + 52px);
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
        .sidebar-icon { color:#4a21d9; width:28px; text-align:center; font-size: 18px; }

        .sidebar-close { background: transparent; border: none; color:#666; font-weight:700; cursor:pointer; position:absolute; right:12px; top:12px; }
              display: inline-block;
              margin-top: 20px;
              color: #0015d1;
              text-decoration: none;
              font-weight: 600;
              font-size: 16px;
              transition: color 0.3s;
          }
            
          .dropdown-link:hover {
              color: #00d4aa;
          }

        /* BRANDS DROPDOWN – FINAL SPACING FIX */
          .brands-list {
              display: grid;
              grid-template-columns: repeat(4, 1fr);
              row-gap: 12px;        
              column-gap: 24px;
              margin-top: 28px;
          }

          /* BRAND ITEM TEXT */
          .brand-item {
              font-size: 14px;
              font-weight: 400;
              line-height: 1.6;      /* controlled height */
              padding: 6px 8px;
              white-space: normal;   /* ⬅️ ALLOW WRAP */
              border-radius: 4px;
              transition: background 0.2s ease;
              cursor: pointer;
              color: #666;
              max-width: 100%;
              word-break: break-word;
          }

          .brand-item:hover {
              background: #e0f0f5;
              color: #333;
          }


          /* Main Content */
          .main-content {
              max-width: 1400px;
              margin: 0 auto;
              padding: 60px 20px;
              position: relative;
              z-index: 1;
          }

          .page-title {
              text-align: center;
              font-size: 42px;
              font-weight: bold;
              color: #333;
              margin-bottom: 50px;
          }

          /* Content Layout with Sidebar */
          .content-wrapper {
              display: flex;
              gap: 40px;
              align-items: flex-start;
          }

          /* Brand List Sidebar */
          .brand-sidebar {
              flex: 0 500px 200px;
              background: #f8f9fa;
              padding: 20px;
              border-radius: 8px;
              max-height: 600px;
              overflow-y: auto;
              position: sticky;
              top: 20px;
          }

          .brand-sidebar h3 {
              font-size: 16px;
              font-weight: bold;
              color: #333;
              margin-bottom: 15px;
              padding-bottom: 10px;
              border-bottom: 2px solid #0015d1;
          }

          .brand-sidebar-list {
              list-style: none;
              padding: 0;
              margin: 0;
          }

          .brand-sidebar-list li {
              margin-bottom: 8px;
          }

          .brand-sidebar-list a {
              color: #333;
              text-decoration: none;
              font-size: 14px;
              font-weight: 500;
              display: block;
              padding: 6px 8px;
              border-radius: 4px;
              transition: background 0.2s ease;
          }

          .brand-sidebar-list a:hover {
              background: #e0f0f5;
              color: #333;
          }

          /* Brands Grid */
          .brands-grid-wrapper {
              flex: 1;
          }

          .brands-grid {
              display: grid;
              grid-template-columns: repeat(5, 1fr);
              gap: 25px;
          }

          .brand-card {
              background: white;
              border-radius: 8px;
              padding: 25px;
              box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
              transition: transform 0.3s, box-shadow 0.3s, z-index 0s;
              display: flex;
              flex-direction: column;
              align-items: center;
              text-align: center;
              position: relative;
              cursor: pointer;
              z-index: 1;
          }

          /* Make brand card anchors look and act like the card */
          a.brand-card {
              text-decoration: none;
              color: inherit;
              display: flex;
          }

          /* Overlay shown on hover with the brand name and clickable */
          .brand-overlay {
              position: absolute;
              inset: 0;
              display: flex;
              align-items: center;
              justify-content: center;
              background: rgba(0,0,0,0.62);
              color: #ffffff;
              opacity: 0;
              transition: opacity 0.18s ease;
              border-radius: 8px;
              padding: 12px;
              font-weight: 700;
              text-align: center;
              pointer-events: none;
          }

          .brand-card:hover .brand-overlay {
              opacity: 1;
              pointer-events: auto;
          }

          .brand-card:hover {
              transform: translateY(-5px);
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
              z-index: 1000;
          }

         

          

          .brand-card:hover::before {
              opacity: 1;
              transform: translateX(-50%) translateY(-8px);
          }

          .brand-card:hover::after {
              opacity: 1;
              transform: translateX(-50%) translateY(-3px);
          }

          .brand-logo {
              width: 100%;
              height: 120px;
              display: flex;
              align-items: center;
              justify-content: center;
              margin-bottom: 8px;
              background: #f8f8f8;
              border-radius: 4px;
              padding: 12px;
          }

          .brand-logo img {
              max-width: 100%;
              max-height: 100%;
              object-fit: contain;
          }

          .brand-logo-text {
              font-size: 18px;
              font-weight: bold;
              color: #333;
          }

          .brand-name {
              font-size: 20px;
              font-weight: bold;
              margin-bottom: 4px;
          }

          .brand-description {
              font-size: 12px;
              color: #666;
              line-height: 1.3;
          }

          /* Hide cards after 20th initially */
          .brand-card:nth-child(n+21) {
              display: none;
          }

          .brand-card.visible {
              display: flex !important;
          }

          /* See More Button */
          .see-more-container {
              width: 100%;
              display: flex;
              justify-content: center;
              margin-top: 40px;
              margin-bottom: 20px;
          }

          .see-more-btn {
              background: #2b00d9;
              color: white;
              border: none;
              padding: 12px 40px;
              border-radius: 6px;
              font-size: 16px;
              font-weight: 600;
              cursor: pointer;
              transition: background 0.3s ease, transform 0.2s ease;
              box-shadow: 0 4px 12px rgba(43, 0, 217, 0.3);
          }

          .see-more-btn:hover {
              background: #1f0099;
              transform: translateY(-2px);
              box-shadow: 0 6px 16px rgba(43, 0, 217, 0.4);
          }

          .see-more-btn:active {
              transform: translateY(0);
          }

          .see-more-btn.hidden {
              display: none;
          }

          /* Footer */
          footer {
              background: #0015d1;
              color: white;
              padding: 30px 20px;
          }

          .footer-content {
              max-width: 1400px;
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
              font-size: 10px;
              transition: color 0.3s;
          }

          .footer-links a:hover {
              color: #00d4aa;
          }

          /* Contact Section */
          .contact-section {
              background: linear-gradient(135deg, #e0f7f4 0%, #d0f0ec 100%);
              padding: 60px 20px;
              margin-top: 60px;
          }

          .contact-container {
              max-width: 1200px;
              margin: 0 auto;
          }

          .contact-section h2 {
              text-align: center;
              font-size: 36px;
              font-weight: bold;
              color: #333;
              margin-bottom: 40px;
          }

          .contact-grid {
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
              gap: 30px;
              margin-top: 30px;
          }

          .contact-item {
              background: white;
              padding: 30px;
              border-radius: 8px;
              box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
              text-align: center;
              transition: transform 0.3s, box-shadow 0.3s;
          }

          .contact-item:hover {
              transform: translateY(-5px);
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
          }

          .contact-icon {
              font-size: 40px;
              margin-bottom: 15px;
          }

          .contact-item h3 {
              font-size: 20px;
              font-weight: bold;
              color: #333;
              margin-bottom: 15px;
          }

          .contact-item a {
              color: #0015d1;
              text-decoration: none;
              font-size: 16px;
              font-weight: 600;
              transition: color 0.3s;
          }

          .contact-item a:hover {
              color: #00d4aa;
              text-decoration: underline;
          }

          .contact-item p {
              color: #666;
              font-size: 16px;
              margin: 0;
          }

          /* Responsive */
          @media (max-width: 1200px) {
              .brands-grid {
                  grid-template-columns: repeat(3, 1fr);
              }

              .content-wrapper {
                  flex-direction: column;
              }

              .brand-sidebar {
                  flex: 1;
                  max-height: none;
                  position: static;
                  width: 100%;
              }
          }

          @media (max-width: 900px) {
              .brands-grid {
                  grid-template-columns: repeat(2, 1fr);
              }

              .header-top {
                  display: grid;
                  grid-template-columns: auto 1fr auto;
                  align-items: center;   /* 🔥 key para same vertical level */
                  gap: 24px;
                  max-width: 1400px;
                  margin: 0 auto;
                  padding: 16px 24px;
              }

              .logo {
                display: flex;
                align-items: center;
                height: 44px;          /* same visual height as search */
                background: white;
                color: #2a00d7;
                font-weight: 800;
                padding: 0 18px;
                border-radius: 6px;
                font-size: 16px;
            }

              .search-bar {
                  order: 3;
                  width: 100%;
                  max-width: 100%;
                  margin: 0;
              }
          }
          .inquiry-btn {
    display: flex;
    align-items: center;
}

.header-contact {
    display: flex;
    align-items: center;
    height: 44px;
}


          @media (max-width: 600px) {
              .brands-grid {
                  grid-template-columns: 1fr;
              }

              .page-title {
                  font-size: 32px;
              }

              .contact-section h2 {
                  font-size: 28px;
              }

              .contact-grid {
                  grid-template-columns: 1fr;
                  gap: 20px;
              }

              .nav-container {
                  justify-content: space-between;
                  padding-left: 20px;
              }

              nav ul {
                  position: static;
                  transform: none;
                  left: auto;
                  margin: 8px auto 0;
                  justify-content: center;
                  flex-wrap: wrap;
                  gap: 15px;
              }

              .menu-toggle {
                  position: static;
                  transform: none;
                  left: auto;
                  top: auto;
                  padding: 6px 10px;
              }

              .footer-content {
                  flex-direction: column;
                  text-align: center;
              }

              .brands-list {
                  grid-template-columns: repeat(3, 1fr);
              }

              nav li:nth-child(3) .nav-dropdown {
                  max-width: 100%;
                  min-width: 750px;
              }
          }
      </style>
  </head>
  <body>
      <?php
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
                                  <li><span class="icon"><i class="bi bi-telephone"></i></span><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
                                  <li><span class="icon"><i class="bi bi-telephone"></i></span><a href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a></li>
                                  <li><span class="icon"><i class="bi bi-telephone"></i></span><a href="tel:<?php echo $phone3; ?>"><?php echo $phone3; ?></a></li>
                                  <li><span class="icon"><i class="bi bi-envelope"></i></span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Navigation -->
          <nav>
              <div class="nav-inner">
                  <button id="browseToggle" class="browse-toggle"><span class="hamburger"><i class="bi bi-list"></i></span> BROWSE PRODUCTS</button>
                  <ul class="nav-list">
                      <li>
                          <a href="home.php">Home</a>
                          <div class="nav-dropdown">
                              <h4>Welcome</h4>
                              <p>Discover our complete range of industrial welding solutions and equipment.</p>
                          </div>
                      </li>
                      <li>
                          <a href="aboutus.php">About Us</a>
                          <div class="nav-dropdown">
                              <h4>Our Company</h4>
                              <ul>
                                  <li><a href="aboutus.php#mission">Our Mission</a></li>
                                  <li><a href="aboutus.php#history">Company History</a></li>
                                  <li><a href="aboutus.php#team">Our Team</a></li>
                              </ul>
                          </div>
                      </li>
                      <li>
                          <a href="brands.php" class="active">Brands</a>
                          <div class="nav-dropdown">
                              <h4>Featured Brands</h4>
                              <ul>
                                  <li><a href="brands.php#panasonic">Panasonic Connect</a></li>
                                  <li><a href="brands.php#kobelco">Kobelco</a></li>
                                  <li><a href="brands.php#metrode">Metrode</a></li>
                                  <li><a href="brands.php#weldcraft">DryRod. II</a></li>
                                  <li><a href="brands.php#weldcraft">Weldcraft</a></li>
                                  <li><a href="brands.php#weldcraft">Truweld</a></li>
                                  <li><a href="brands.php#weldcraft">Arcair</a></li>
                                  <li><a href="brands.php#weldcraft">Magnaflux</a></li>
                                  <li><a href="brands.php#weldcraft">Tempilstik</a></li>
                                  <li><a href="brands.php#weldcraft">Tanaka</a></li>
                                  <li><a href="brands.php#weldcraft">Chiyoda</a></li>
                                  <li><a href="brands.php#weldcraft">Yutaka</a></li>
                                  <li><a href="brands.php#weldcraft">Hard Workers</a></li>
                                  <li><a href="brands.php#weldcraft">Soyer</a></li>
                                  <li><a href="brands.php#weldcraft">Aquasol</a></li>
                                  <li><a href="brands.php#weldcraft">SK</a></li>
                                  <li><a href="brands.php#weldcraft">Coppus</a></li>
                                  <li><a href="brands.php#weldcraft">GWI</a></li>
                                  <li><a href="brands.php#weldcraft">RAC</a></li>
                                  <li><a href="brands.php#weldcraft">Weldas</a></li>
                                  <li><a href="brands.php#weldcraft">Uvex</a></li>
                                  <li><a href="brands.php#weldcraft">Aces</a></li>
                                  <li><a href="brands.php#weldcraft">Microgard</a></li>
                                  <li><a href="brands.php#weldcraft">Ansell</a></li>
                                  <li><a href="brands.php#weldcraft">Alfra</a></li>
                                  <li><a href="brands.php#weldcraft">Bosch</a></li>
                                  <li><a href="brands.php#weldcraft">Makita</a></li>
                                  <li><a href="brands.php#weldcraft">Weller</a></li>
                                  <li><a href="brands.php#weldcraft">Garryson</a></li>
                                  <li><a href="brands.php#weldcraft">Spilfyter</a></li>
                                  <li><a href="brands.php#weldcraft">Dalo</a></li>
                                  <li><a href="brands.php#weldcraft">Motolite</a></li>
                            
                                
                              </ul>
                          </div>
                      </li>
                      <li>
                          <a href="industries.php">Industries</a>
                          <div class="nav-dropdown">
                              <h4>Industries We Serve</h4>
                              <ul>
                                  <li><a href="industries.php#manufacturing">Manufacturing</a></li>
                                  <li><a href="industries.php#construction">Construction</a></li>
                                  <li><a href="industries.php#automotive">Automotive</a></li>
                                  <li><a href="industries.php#shipbuilding">Shipbuilding</a></li>
                              </ul>
                          </div>
                      </li>
                      <li>
                          <a href="services.php">Services</a>
                          <div class="nav-dropdown">
                              <h4>Our Services</h4>
                              <ul>
                                  <li><a href="services.php#consultation">Technical Consultation</a></li>
                                  <li><a href="services.php#training">Training Programs</a></li>
                                  <li><a href="services.php#maintenance">Equipment Maintenance</a></li>
                                  <li><a href="services.php#support">After-Sales Support</a></li>
                              </ul>
                          </div>
                      </li>
                      <li>
                          <a href="contact.php">Contact Us</a>
                          <div class="nav-dropdown">
                              <h4>Get In Touch</h4>
                              <p>Reach out to our team for inquiries, quotes, or technical support.</p>
                          </div>
                      </li>
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
              <li><a href="#arc-handmetal-machine"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-hammer"></i></span> Arc HandMetal Machine</a></li>
              <li><a href="#arc-handmetal-robots"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-robot"></i></span> Arc HandMetal Robots</a></li>
              <li><a href="#batteries"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-battery-half"></i></span> Batteries</a></li>
              <li><a href="#drilling-lifting"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-wrench"></i></span> Drilling and Lifting</a></li>
              <li><a href="#gas-detectors"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-bullseye"></i></span> Portable Gas Detectors</a></li>
              <li><a href="#ventilators"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-fan"></i></span> Portable Ventilators</a></li>
              <li><a href="#power-tools"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-tools"></i></span> Power Tools</a></li>
              <li><a href="#protection-safety"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-shield-check"></i></span> Protection and Safety</a></li>
              <li><a href="#handmetal-accessories"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-gear"></i></span> HandMetal Accessories</a></li>
              <li><a href="#handmetal-consumables"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-box"></i></span> HandMetal Consumables</a></li>
          </ul>
      </aside>

      <!-- Main Content -->
      <div class="main-content">
          <h1 class="page-title">Our Trusted Brands & Partners</h1>
          
          

              <!-- Brands Grid -->
              <div class="brands-grid-wrapper">
                  <div class="brands-grid">
              <!-- Row 1 -->
              <div class="brand-card" data-brand-name="Panasonic Connect">
                  <div class="brand-logo">
                      <img src="assets/brands/PANASONIC.jpg" alt="Panasonic Connect" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none; color: #0066cc; font-size: 16px;">Panasonic</div>
                  </div>
              </div>
              <div class="brand-card" data-brand-name="Robot Systems">
                  <div class="brand-logo">
                      <img src="assets/brands/ROBOT SYSTEMS.jpg" alt="Robot Systems Peripherals" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none; color: #0066cc; font-size: 24px; font-weight: bold;">Robot Systems</div>
                  </div>
              </div>

              <div class="brand-card" data-brand-name="Kobelco">
                  <div class="brand-logo">
                      <img src="assets/brands/KOBELCO.jpg" alt="Kobelco" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none; color: #0066cc; font-size: 24px; font-weight: bold;">K</div>
                  </div>
              </div>

              <div class="brand-card" data-brand-name="Metrode">
                  <div class="brand-logo">
                      <img src="assets/brands/METRODE.jpg" alt="Metrode" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Metrode</div>
                  </div>
              </div>

              <div class="brand-card" data-brand-name="DryRod. II">
                  <div class="brand-logo">
                      <img src="assets/brands/DRYROD.jpg" alt="DryRod. II" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">DryRod. II</div>
                  </div>
              </div>

              <!-- Row 2 -->
              <div class="brand-card" data-brand-name="Weldcraft">
                  <div class="brand-logo">
                      <img src="assets/brands/WELDCRAFT.jpg" alt="Weldcraft" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Weldcraft</div>
                  </div>
              </div>

              <div class="brand-card" data-brand-name="Truweld">
                  <div class="brand-logo">
                      <img src="assets/brands/TRUWELD.jpg" alt="Truweld" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Truweld</div>
                  </div>
              </div>

              <div class="brand-card" data-brand-name="Arcair">
                  <div class="brand-logo">
                      <img src="assets/brands/ARCAIR.jpg" alt="Arcair" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Arcair</div>
                  </div>
                  
              </div>

              <div class="brand-card" data-brand-name="Magnaflux">
                  <div class="brand-logo">
                      <img src="assets/brands/MAGNAFLUX.jpg" alt="Magnaflux" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Magnaflux</div>
                  </div>
              </div>

              <!-- Row 3 -->
              <div class="brand-card" data-brand-name="Tempilstik">
                  <div class="brand-logo">
                      <img src="assets/brands/TEMPILSTIK.jpg" alt="Tempilstik" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Tempilstik</div>
                  </div>
              </div>

              <div class="brand-card" data-brand-name="Tanaka">
                  <div class="brand-logo">
                      <img src="assets/brands/TANAKA.jpg" alt="Tanaka" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Tanaka</div>
                  </div>
              </div>

              <div class="brand-card" data-brand-name="Chiyoda">
                  <div class="brand-logo">
                      <img src="assets/brands/CHIYODA.jpg" alt="Chiyoda" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none; font-size: 28px; font-weight: bold;">Chiyoda</div>
                  </div>
              </div>

              <div class="brand-card" data-brand-name="Yutaka">
                  <div class="brand-logo">
                      <img src="assets/brands/YUTAKA.jpg" alt="Yutaka" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Yutaka</div>
                  </div>
              </div>

              <!-- Row 4 -->
              <div class="brand-card" data-brand-name="Hard Workers">
                  <div class="brand-logo">
                      <img src="assets/brands/HARDWORKER.jpg" alt="Hard Workers" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Hard Workers</div>
                  </div>
              
              </div>

              <div class="brand-card" data-brand-name="Soyer">
                  <div class="brand-logo">
                      <img src="assets/brands/SOYER.jpg" alt="Soyer" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Soyer</div>
                  </div>
              </div>

              <div class="brand-card" id="aquasol" data-brand-name="Aquasol">
                  <div class="brand-logo">
                      <img src="assets/brands/AQUASOL.jpg" alt="Aquasol" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Aquasol</div>
                  </div>
                  
              </div>

              

              <!-- Row 5 -->
              <div class="brand-card" id="coppus" data-brand-name="Coppus">
                  <div class="brand-logo">
                      <img src="assets/brands/COPPUS.jpg" alt="Coppus" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Coppus</div>
                  </div>
              </div>

              <div class="brand-card" id="BW Technologies" data-brand-name="BW Technologies">
                  <div class="brand-logo">
                      <img src="assets/brands/BW Technologies.jpg" alt="BW Technologies" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none; font-size: 20px; font-weight: bold;">BW Technologies</div>
                  </div>
              </div>

              <div class="brand-card" id="rac" data-brand-name="RAE Systems">
                  <div class="brand-logo">
                      <img src="assets/brands/RAE Systems.jpg" alt="RAE Systems" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none; font-size: 20px; font-weight: bold;">RAE Systems</div>
                  </div>
                  
              </div>

              <div class="brand-card" id="weldas" data-brand-name="Weldas">
                  <div class="brand-logo">
                      <img src="assets/brands/WELDAS.jpg" alt="Weldas" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Weldas</div>
                  </div>
                 
              </div>

              <!-- Row 6 -->
              <div class="brand-card" id="uvex" data-brand-name="Uvex">
                  <div class="brand-logo">
                      <img src="assets/brands/UVEX.jpg" alt="Uvex" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Uvex</div>
                  </div>

              </div>

              <div class="brand-card" id="aces" data-brand-name="Aces">
                  <div class="brand-logo">
                      <img src="assets/brands/ACES.jpg" alt="Aces" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Aces</div>
                  </div>
                  
              </div>

              <div class="brand-card" id="microgard" data-brand-name="Microgard">
                  <div class="brand-logo">
                      <img src="assets/brands/MICROGARD.jpg" alt="Microgard" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Microgard</div>
                  </div>
                  
              </div>

              <div class="brand-card" id="ansell" data-brand-name="Ansell">
                  <div class="brand-logo">
                      <img src="assets/brands/ANSELL.jpg" alt="Ansell" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Ansell</div>
                  </div>
                  
          </div>

              <!-- Row 7 -->
              <div class="brand-card" id="alfra" data-brand-name="Alfra">
                  <div class="brand-logo">
                      <img src="assets/brands/ALFRA.jpg" alt="Alfra" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Alfra</div>
                  </div>
                  
              </div>

              <div class="brand-card" id="bosch" data-brand-name="Bosch">
                  <div class="brand-logo">
                      <img src="assets/brands/BOSCH.jpg" alt="Bosch" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Bosch</div>
                      </div>
                    </div>

              <div class="brand-card" id="makita" data-brand-name="Makita">
                  <div class="brand-logo">
                      <img src="assets/brands/MAKITA.jpg" alt="Makita" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Makita</div>
                  </div>
                  
                  </div>

              <div class="brand-card" id="weiler" data-brand-name="Weiler">
                  <div class="brand-logo">
                      <img src="assets/brands/WEILER.jpg" alt="Weiler" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Weiler</div>
                      </div>
                  
                      </div>

              <!-- Row 8 -->
              <div class="brand-card" id="garryson" data-brand-name="Garryson">
                  <div class="brand-logo">
                      <img src="assets/brands/GARRYSON.jpg" alt="Garryson" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Garryson</div>
                  </div>
                 
              </div>

              <div class="brand-card" id="spilfyter" data-brand-name="Spilfyter">
                  <div class="brand-logo">
                      <img src="assets/brands/SPILFYTER.jpg" alt="Spilfyter" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Spilfyter</div>
                  </div>
                  
          </div>

              <div class="brand-card" id="dalo" data-brand-name="Dalo">
                  <div class="brand-logo">
                      <img src="assets/brands/DALO.jpg" alt="Dalo" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Dalo</div>
                  </div>
                
              </div>

              <div class="brand-card" id="motolite" data-brand-name="Motolite">
                  <div class="brand-logo">
                      <img src="assets/brands/MOTOLITE.jpg" alt="Motolite" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                      <div class="brand-logo-text" style="display:none;">Motolite</div>
                  </div>
                  
              </div>
                  </div>
              </div>
              <div class="see-more-container">
                  <button class="see-more-btn" id="seeMoreBtn">See More Brands</button>
              </div>
          </div>
      </div>

    

      <!-- Footer -->
      <footer>
          <div class="footer-content">
              <div class="footer-copyright">
                  <p>&copy; 2023 <?php echo $company_name; ?>. All rights reserved.</p>
              </div>
              <div class="footer-links">
                  <a href="#privacy">Privacy Policy</a>
                  <a href="#terms">Terms of Service</a>
                  <a href="#sitemap">Sitemap</a>
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
        // Ensure the browse toggle icon rotates when sidebar opens
        (function(){
            var bt = document.getElementById('browseToggle');
            var sb = document.getElementById('sidebar');
            var ov = document.getElementById('overlay');
            var closeBtn = document.getElementById('closeSidebar');
            if (bt) bt.addEventListener('click', function(e){ e.preventDefault(); if(sb.classList.contains('active')){ sb.classList.remove('active'); ov.classList.remove('active'); bt.classList.remove('open'); } else { sb.classList.add('active'); ov.classList.add('active'); bt.classList.add('open'); } });
            if (ov) ov.addEventListener('click', function(){ sb.classList.remove('active'); ov.classList.remove('active'); if(bt) bt.classList.remove('open'); });
            if (closeBtn) closeBtn.addEventListener('click', function(){ sb.classList.remove('active'); ov.classList.remove('active'); if(bt) bt.classList.remove('open'); });
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

      <script>
          // Auto-set data-brand-description attribute and ID from brand name
          (function(){
              var brandCards = document.querySelectorAll('.brand-card');
              brandCards.forEach(function(card){
                  var descElement = card.querySelector('.brand-description');
                  if(descElement){
                      card.setAttribute('data-brand-description', descElement.textContent.trim());
                  }
                  // Generate ID from brand name for navigation
                  var brandName = card.getAttribute('data-brand-name');
                  if(brandName){
                      var id = brandName.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
                      card.setAttribute('id', id);
                  }
              });
          })();
      </script>

      <script>
          // Make each brand card clickable and add a centered hover overlay showing the brand name
          (function(){
              var cards = Array.from(document.querySelectorAll('.brand-card'));
              cards.forEach(function(card){
                  var name = card.getAttribute('data-brand-name') || (card.querySelector('.brand-name') && card.querySelector('.brand-name').textContent.trim());
                  if(!name) return;

                  // Generate ID from brand name
                  var id = name.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
                  
                  var href = 'brand.php?name=' + encodeURIComponent(name);

                  // Create wrapper anchor and copy attributes
                  var wrapper = document.createElement('a');
                  wrapper.className = card.className || 'brand-card';
                  wrapper.href = href;
                  wrapper.id = id; // Set the ID on the wrapper
                  Array.from(card.attributes).forEach(function(attr){ 
                      if(attr.name !== 'id') { // Don't duplicate ID
                          wrapper.setAttribute(attr.name, attr.value); 
                      }
                  });

                  // Move children into wrapper
                  while(card.firstChild){ wrapper.appendChild(card.firstChild); }

                  // Create overlay element (shows on hover)
                  var overlay = document.createElement('div');
                  overlay.className = 'brand-overlay';
                  overlay.textContent = name;
                  wrapper.appendChild(overlay);

                  // Replace original card with wrapper anchor
                  card.parentNode.replaceChild(wrapper, card);
              });

              // See More functionality - Run after cards are converted
              var seeMoreBtn = document.getElementById('seeMoreBtn');
              var allCards = document.querySelectorAll('.brand-card');
              var isExpanded = false;

              if(seeMoreBtn && allCards.length > 20){
                  seeMoreBtn.addEventListener('click', function(){
                      if(!isExpanded){
                          // Show all cards
                          allCards.forEach(function(card){
                              card.classList.add('visible');
                          });
                          seeMoreBtn.textContent = 'Show Less';
                          isExpanded = true;
                      } else {
                          // Hide cards after 20
                          allCards.forEach(function(card, index){
                              if(index >= 20){
                                  card.classList.remove('visible');
                              }
                          });
                          seeMoreBtn.textContent = 'See More Brands';
                          isExpanded = false;
                          // Scroll to top of grid
                          var brandsGrid = document.querySelector('.brands-grid');
                          if(brandsGrid){
                              brandsGrid.scrollIntoView({ behavior: 'smooth', block: 'start' });
                          }
                      }
                  });
              } else if(seeMoreBtn && allCards.length <= 20) {
                  // Hide button if 20 or fewer cards
                  seeMoreBtn.style.display = 'none';
              }
          })();
      </script>
  </body>
  </html>
  </html>