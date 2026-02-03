<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industries - ANDISON INDUSTRIAL</title>
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
            padding-top: 142px;
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
            overflow: visible;
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
            padding-left: 160px; /* space for the left Browse toggle */
        }

        /* Pin the browse toggle to the left side of the nav area */
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

        .nav-list li { position: relative; }

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

        nav li:nth-child(3) .nav-dropdown {
            min-width: 650px;
            max-width: 650px;
            padding: 24px 28px;
        }

        nav li:nth-child(3) .nav-dropdown ul {
            display: grid !important;
            grid-template-columns: repeat(5, 1fr) !important;
            gap: 12px 20px !important;
            margin-top: 16px !important;
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
        .sidebar-icon { color:#4a21d9; width:28px; text-align:center; }

        .sidebar-close { background: transparent; border: none; color:#666; font-weight:700; cursor:pointer; position:absolute; right:12px; top:12px; }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .industries-section {
            padding: 60px 0;
        }

        .industries-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .industries-header h1 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 15px;
            color: #2b00d9;
        }

        .industries-header p {
            font-size: 16px;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .industries-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .industry-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            padding: 40px;
            background: #f8f9fa;
            border-radius: 12px;
            border: 1px solid #e9ecef;
        }

        .industry-card.reverse {
            grid-template-columns: 1fr 1fr;
            direction: rtl;
        }

        .industry-card.reverse > * {
            direction: ltr;
        }

        .industry-content h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #2b00d9;
        }

        .industry-content p {
            color: #555;
            margin-bottom: 15px;
            line-height: 1.8;
        }

        .read-more-btn {
            background: transparent;
            color: #2b00d9;
            border: none;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            padding: 10px 0;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .read-more-btn:hover {
            gap: 12px;
        }

        .read-more-btn::after {
            content: '▼';
            font-size: 12px;
            transition: transform 0.3s ease;
        }

        .read-more-btn.active::after {
            transform: rotate(180deg);
        }

        .expanded-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .expanded-content.show {
            max-height: 1000px;
        }

        .expanded-content-inner {
            padding-top: 20px;
            border-top: 1px solid #ddd;
            margin-top: 20px;
        }

        .expanded-content p {
            color: #555;
            margin-bottom: 15px;
            line-height: 1.8;
        }

        .products-list {
            margin-top: 15px;
            padding-left: 20px;
        }

        .products-list li {
            color: #555;
            margin-bottom: 8px;
            list-style-type: disc;
        }

        .industry-image img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        @media (max-width: 768px) {
            .industry-card {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .industry-card.reverse {
                direction: ltr;
            }

            .industries-header h1 {
                font-size: 32px;
            }

            .header-top {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
            }

            .nav-inner { justify-content: space-between; padding-left: 20px; }
            .nav-list { position: static; transform: none; left: auto; margin: 8px auto 0; justify-content: center; flex-wrap: wrap; }
            .browse-toggle { position: static; transform: none; left: auto; top: auto; padding: 6px 10px; }
        }

        /* Footer */
        footer {
            background: #0015d1;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
            flex-wrap: wrap;
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

        .footer-copyright {
            font-size: 12px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 20px;
        }
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
            flex-wrap: wrap;
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
    </style>
</head>
<body>
    <?php
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
                        <a href="brands.php">Brands</a>
                        <div class="nav-dropdown">
                            <h4>Featured Brands</h4>
                            <ul>
                                <li><a href="brands.php#panasonic-connect">Panasonic Connect</a></li>
                                <li><a href="brands.php#kobelco">Kobelco</a></li>
                                <li><a href="brands.php#metrode">Metrode</a></li>
                                <li><a href="brands.php#dryrod-ii">DryRod. II</a></li>
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
                        <a href="industries.php" class="active">Industries</a>
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
    <main class="container">
        <section class="industries-section">
            <div class="industries-header">
                <h1>Our Industrial Expertise</h1>
                <p>Andison Industrial proudly serves a diverse range of sectors, delivering precision, innovation, and reliability to drive progress in every industry we touch.</p>
            </div>

            <div class="industries-grid">
                <!-- Motor Vehicle Industry -->
                <div class="industry-card">
                    <div class="industry-content">
                        <h2>Motor Vehicle Industry</h2>
                        <p>This industry manufactures automobiles, motorcycles, buses, and truck vans. They have a growing presence in the Philippine market, especially with the high demand for motorcycles. We offer a wide assortment of welding equipment and consumables necessary to produce world-class products.</p>
                        <button class="read-more-btn" onclick="toggleExpanded(this)">Read More</button>
                        <div class="expanded-content">
                            <div class="expanded-content-inner">
                                <p>Top multinational and domestic automotive companies choose our Panasonic Welding Systems to significantly improve weld quality and boost efficiency while reducing production costs. We provide consultation, training, maintenance, and reliable after-sales service to satisfy our customers’ expectations.</p>
                                <p><strong>Some of our products used in this industry are:</strong></p>
                                <ul class="products-list">
                                    <li>Arc Welding Robot with Power Source</li>
                                    <li>Arc Welding Equipment and Filler Metals</li>
                                    <li>Power Tools and Hand Tools</li>
                                    <li>Personal Protective Equipment (PPEs)</li>
                                </ul>
                                <p>For items not found on our website, kindly see our contact details and send us an inquiry.</p>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="industry-image">
                        <img src="assets/HOME/photo_2026-02-03_10-30-46.jpg" alt="Motor Vehicle Industry">
                    </div>
                </div>

                <!-- Metal Fabrication and Industrial Projects -->
                <div class="industry-card reverse">
                    <div class="industry-content">
                        <h2>Metal Fabrication and Industrial</h2>
                        <p>Bridges, railways, refineries, shipyards, transmission lines, and other large-scale projects require steel frames and other metals to support the large infrastructures. Workers in the metal fabrication industry do welding, metal cutting, and fastening to assemble metal parts.</p>
                        <button class="read-more-btn" onclick="toggleExpanded(this)">Read More</button>
                        <div class="expanded-content">
                            <div class="expanded-content-inner">
                                <p>We supply our clients with equipment that makes quality welds in a short time. Our safety products protect workers from hazards such as working from heights, glaring lights, and hazardous gases.</p>
                                <p><strong>Some of our products used in this industry are:</strong></p>
                                <ul class="products-list">
                                    <li>Arc Welding Equipment and Filler Metals</li>
                                    <li>Pipe Cutting and Beveling Equipment</li>
                                    <li>Gas Welding and Cutting Equipment</li>
                                    <li>Power Tools and Hand Tools</li>
                                    <li>Personal Protective Equipment (PPEs)</li>
                                </ul>
                                <p>For items not found on our website, kindly see our <a href="#contact">contact details</a> and send your inquiry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="industry-image">
                        <img src="assets/HOME/photo_2026-02-03_10-30-46 (2).jpg" alt="Metal Fabrication">
                    </div>
                </div>

                <!-- Power Generation -->
                <div class="industry-card">
                    <div class="industry-content">
                        <h2>Power Generation</h2>
                        <p>The Power Generation Industry is vital in a country’s growth. They must be a reliable partner in meeting the Philippine Energy Market’s ever-growing demands.</p>
                        <button class="read-more-btn" onclick="toggleExpanded(this)">Read More</button>
                        <div class="expanded-content">
                            <div class="expanded-content-inner">
                                <p>From plant maintenance, shutdown, building power transmission lines, and other infrastructures, we work closely with our clients and supply much-needed equipment, tools, and consumables to help finish their projects on schedule.</p>
                                <p><strong>Some of our products used in this industry are:</strong></p>
                                <ul class="products-list">
                                    <li>Arc Welding Equipment and Filler Metal</li>
                                    <li>Power Tools and Hand Tools</li>
                                    <li>Bearings, Maintenance Tools and Equipment</li>
                                    <li>Height Protection Equipment and other PPEs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="industry-image">
                        <img src="assets/HOME/photo_2026-02-03_10-30-47.jpg" alt="Power Generation">
                    </div>
                </div>

                <!-- Oil and Petrochemical Industry -->
                <div class="industry-card reverse">
                    <div class="industry-content">
                        <h2>Oil and Petrochemical Industry</h2>
                        <p>Oil refineries use fractional distillation and other methods to process crude oil into more useful products like petroleum, gasoline, and other fuels. During the distillation, heavier by-products settle at the bottom. Petrochemical plants crack the by-products and further process them into more useful chemicals. Other industries use these petrochemicals to create different products.</p>
                        <button class="read-more-btn" onclick="toggleExpanded(this)">Read More</button>
                        <div class="expanded-content">
                            <div class="expanded-content-inner">
                                <p>Oil refineries use fractional distillation and other methods to process crude oil into more useful products like petroleum, gasoline, and other fuels. During the distillation, heavier by-products settle at the bottom. Petrochemical plants crack the by-products and further process them into more useful chemicals. Other industries use these petrochemicals to create everyday items including deodorants, perfumes, plastics, fertilizer, and car tires.</p>
                                <p><strong>Some of our products used in this industry are:</strong></p>
                                <ul class="products-list">
                                    <li>Arc Welding Equipment and Filler Metals</li>
                                    <li>Portable and Area Hazardous Gas Detectors</li>
                                    <li>Air Movers and Industrial Ventilators</li>
                                    <li>Bearings, Maintenance Tools and Equipment</li>
                                    <li>Pipe Cutting and Beveling Machine</li>
                                    <li>Power Tools and Hand Tools</li>
                                    <li>Personal Protective Equipment (PPEs)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="industry-image">
                        <img src="assets/HOME/photo_2026-02-03_10-30-47 (2).jpg" alt="Oil and Petrochemical">
                    </div>
                </div>

                <!-- Mining Industry -->
                <div class="industry-card">
                    <div class="industry-content">
                        <h2>Mining Industry</h2>
                        <p>This industry extracts coal, oil, metals, and other raw materials from the earth. These resources are processed by other industries to create products such as fuel, jewelry, construction materials, and everyday items. Mining is vital to the economy.</p>
                        <button class="read-more-btn" onclick="toggleExpanded(this)">Read More</button>
                        <div class="expanded-content">
                            <div class="expanded-content-inner">
                                <p>However, digging deep into the ground could pose a safety risk to workers without the proper equipment. We at Andison promote safety by providing high-quality PPEs. Our portfolio includes various <em>single and multi-gas detectors</em> including maintenance-free gas detectors. We provide clients with training on the proper use of the equipment to fully use its functions and ensure a safe working environment. We also do recalibration for the gas detectors.</p>
                                <p><strong>Some of our products used in this industry are:</strong></p>
                                <ul class="products-list">
                                    <li>Portable and Area Hazardous Gas Detectors</li>
                                    <li>PPEs and other Safety Products</li>
                                    <li>Air Movers and Ventilators</li>
                                    <li>Bearings, Maintenance Tools and Equipment</li>
                                    <li>Cordless Power Tools</li>
                                    <li>Floodlights and other Light Sources</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="industry-image">
                        <img src="assets/HOME/photo_2026-02-03_10-30-47 (3).jpg" alt="Mining Industry">
                    </div>
                </div>

                <!-- Shipyard -->
                <div class="industry-card reverse">
                    <div class="industry-content">
                        <h2>Shipyard</h2>
                        <p>World trade relies heavily on freight ships because it offers a high capacity at a low cost in transporting goods. Being an archipelago, the Philippines also uses ships to ferry people to the country’s many islands. Shipyards play a critical role in maintaining ships, ensuring they are seaworthy and safe.</p>
                        <button class="read-more-btn" onclick="toggleExpanded(this)">Read More</button>
                        <div class="expanded-content">
                            <div class="expanded-content-inner">
                                <p>Metal fabrication is an integral part of the shipbuilding industry. Andison has a wide product catalog for working with metal fabrication, providing clients with equipment ready for the job.</p>
                                <p><strong>Some of our products used in this industry are:</strong></p>
                                <ul class="products-list">
                                    <li>Arc Welding Equipment and Filler Metals</li>
                                    <li>Gas Welding and Cutting Equipment</li>
                                    <li>Air Movers and Industrial Ventilators</li>
                                    <li>Power Tools and Hand Tools</li>
                                    <li>Pipe Cutting and Beveling Machine</li>
                                    <li>Personal Protective Equipment (PPEs)</li>
                                    <li>Portable Gas Detectors</li>
                                </ul>
                                <p>For items not found on our website, kindly see our <a href="#contact">contact details</a> and send your inquiry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="industry-image">
                        <img src="assets/HOME/photo_2026-02-03_10-30-47 (4).jpg" alt="Shipyard">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#sitemap">Sitemap</a>
            </div>
            <div class="footer-copyright">
                &copy; 2024 ANDISON INDUSTRIAL. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        function toggleExpanded(button) {
            const expandedContent = button.nextElementSibling;
            button.classList.toggle('active');
            expandedContent.classList.toggle('show');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const browseToggle = document.getElementById('browseToggle');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            const closeSidebar = document.getElementById('closeSidebar');
            const contactDropdown = document.querySelector('.contact-dropdown');
            const contactClose = document.querySelector('.contact-close');

            // Browse toggle
            if (browseToggle) {
                browseToggle.addEventListener('click', function() {
                    sidebar.classList.add('active');
                    overlay.classList.add('active');
                });
            }

            // Close sidebar
            if (closeSidebar) {
                closeSidebar.addEventListener('click', function() {
                    sidebar.classList.remove('active');
                    overlay.classList.remove('active');
                });
            }

            // Close on overlay click
            if (overlay) {
                overlay.addEventListener('click', function() {
                    sidebar.classList.remove('active');
                    overlay.classList.remove('active');
                });
            }

            // Contact dropdown close
            if (contactClose) {
                contactClose.addEventListener('click', function(e) {
                    e.preventDefault();
                    contactDropdown.classList.add('closed');
                    setTimeout(() => {
                        contactDropdown.classList.remove('closed');
                    }, 3000);
                });
            }

            // Set active nav link
            const currentPage = 'industries.php';
            document.querySelectorAll('.nav-list a').forEach(link => {
                if (link.href.includes(currentPage)) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
