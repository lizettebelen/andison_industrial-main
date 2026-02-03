<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial Solutions Inc. - Homepage Redesign</title>
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

        /* when user explicitly closes, keep hidden until they move away */
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

        .nav-list li { }

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

        /* Hero Section */
        .hero {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23888888" width="1200" height="600"/></svg>');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 60px 20px;
            min-height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
        }

        .hero-slide {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.6s ease;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
        }

        /* blurred full-bleed background taken from the slide's background-image */
        .hero-slide::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: inherit;
            background-size: cover;
            background-position: center;
            filter: blur(6px) brightness(0.85);
            transform: scale(1.06);
            z-index: 0;
        }

        /* subtle dark overlay above the blur to improve text contrast */
        .hero-slide::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.18);
            z-index: 1;
        }

        .hero-slide.active {
            opacity: 1;
        }

        /* centered clear image card on top of the blurred background */
        .hero-content {
            max-width: 900px;
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 18px;
        }

        .hero-content h1,
        .hero-content p,
        .hero-content .cta-button {
            display: none;
        }

        .hero-thumb {
            width: 560px;
            max-width: 86%;
            height: 220px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 6px;
            box-shadow: 0 18px 40px rgba(2,6,23,0.45);
            overflow: hidden;
        }

        .hero-content {
            max-width: 800px;
            position: relative;
            z-index: 10;
        }

        .hero-indicators {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 20;
        }

        .hero-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: background 0.3s;
        }

        .hero-dot.active {
            background: rgba(255,255,255,0.9);
        }

        .hero-dot:hover {
            background: rgba(255,255,255,0.7);
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.9);
        }

        .cta-button {
            background: #00d4aa;
            color: white;
            padding: 12px 35px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            background: #00b88a;
        }

        /* Section */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 20px;
        }

        section h2 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .section-description {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
            color: #666;
            line-height: 1.8;
        }

        /* Product Highlights */
        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .product-card {
            background: #f5f5f5;
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #888 0%, #666 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 60px;
            position: relative;
            overflow: hidden;
        }

        .product-image iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .play-btn {
            width: 60px;
            height: 60px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .play-btn:hover {
            background: rgba(0, 0, 0, 0.9);
        }

        .product-info {
            padding: 20px;
            background: white;
        }

        .product-info h3 {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        .product-info p {
            font-size: 13px;
            color: #666;
            line-height: 1.6;
        }

        /* Featured Section */
        .featured-section {
            background: linear-gradient(135deg, #e0f7f4 0%, #d0f0ec 100%);
            padding: 50px 30px;
            border-radius: 8px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
        }

        .featured-badge {
            display: inline-block;
            background: #00d4aa;
            color: white;
            padding: 5px 12px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .featured-content h3 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #333;
        }

        .featured-content p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .featured-btn {
            background: #0015d1;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 3px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .featured-btn:hover {
            background: #0011a0;
        }

        .featured-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #0066cc 0%, #004499 100%);
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 60px;
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

        /* Responsive */
        @media (max-width: 768px) {
            .header-top {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
            }

            nav li {
                margin-right: 20px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .featured-section {
                grid-template-columns: 1fr;
            }

            .footer-links {
                flex-direction: column;
                gap: 10px;
            }
        }

        /* Overlay sidebar (full-height left panel) */
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

        @media (max-width: 768px) {
            .main-wrapper {
                grid-template-columns: 1fr;
                padding: 0 12px;
            }

            .sidebar {
                position: static;
            }
            .nav-inner { justify-content: space-between; padding-left: 20px; }
            .nav-list { position: static; transform: none; left: auto; margin: 8px auto 0; justify-content: center; flex-wrap: wrap; }
            .browse-toggle { position: static; transform: none; left: auto; top: auto; padding: 6px 10px; }
        }
    </style>
</head>
<body>
        <?php
        // Set page title
        $page_title = "Home";
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
                    <li><a href="home.php" class="active">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
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

    <!-- Hero Section -->
    <section class="hero" id="heroSlider">
        <div class="hero-slide active" style="background-image: url('assets/photo_2026-02-02_14-29-26.jpg');">
            <div class="hero-content">
                <div class="hero-thumb" style="background-image: url('assets/photo_2026-02-02_14-29-26.jpg');"></div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('assets/photo_2026-02-02_14-29-26 (2).jpg');">
            <div class="hero-content">
                <div class="hero-thumb" style="background-image: url('assets/photo_2026-02-02_14-29-26 (2).jpg');"></div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('assets/photo_2026-02-02_14-29-26 (3).jpg');">
            <div class="hero-content">
                <div class="hero-thumb" style="background-image: url('assets/photo_2026-02-02_14-29-26 (3).jpg');"></div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('assets/photo_2026-02-02_14-29-26 (4).jpg');">
            <div class="hero-content">
                <div class="hero-thumb" style="background-image: url('assets/photo_2026-02-02_14-29-26 (4).jpg');"></div>
            </div>
        </div>
        <div class="hero-indicators">
            <span class="hero-dot active" data-slide="0"></span>
            <span class="hero-dot" data-slide="1"></span>
            <span class="hero-dot" data-slide="2"></span>
            <span class="hero-dot" data-slide="3"></span>
        </div>
    </section>

    <!-- Product Highlights & News -->
    <section id="products">
        <div class="container">
            <h2>Product Highlights & News</h2>
            <p class="section-description">
                We will still keep the Youtube embeded video for product highlights. The video contents will be updated once in a while. 
                Then same as before with News, Events, and Announcements section that can be added.
            </p>

            <div class="highlights-grid">
                <div class="product-card">
                    <div class="product-image">
                        <iframe src="https://www.youtube.com/embed/3bQ5YW167pQ" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="product-info">
                        <h3>Revolutionizing Manufacturing Processes</h3>
                        <p>Discover how our innovative technology is transforming industrial manufacturing.</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <iframe src="https://www.youtube.com/embed/3bQ5YW167pQ" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="product-info">
                        <h3>Innovations in Sustainable Industrial Solutions</h3>
                        <p>Learn about our commitment to eco-friendly and sustainable products.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Product -->
    <section>
        <div class="container">
            <div class="featured-section">
                <div class="featured-content">
                    <span class="featured-badge">FEATURED</span>
                    <h3>New Generation Industrial Drills Launched!</h3>
                    <p>Discover our latest advancements in drilling technology offering unparalleled precision and durability for all heavy-duty applications. Explore the future of industrial performance.</p>
                    <button class="featured-btn">Read More</button>
                </div>
                <div class="featured-image">
                    ▶
                </div>
            </div>
        </div>
    </section>

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
                    // ignore hover if user explicitly closed; mouseleave will clear
                    if(dd.classList.contains('closed')) return;
                    pop.setAttribute('aria-hidden','false'); dd.setAttribute('aria-expanded','true'); 
                });
                dd.addEventListener('mouseleave', function(){ pop.setAttribute('aria-hidden','true'); dd.setAttribute('aria-expanded','false'); dd.classList.remove('closed'); });

                // close button behavior
                var closeBtn = dd.querySelector('.contact-close');
                if(closeBtn){
                    closeBtn.addEventListener('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();
                        pop.setAttribute('aria-hidden','true');
                        dd.setAttribute('aria-expanded','false');
                        dd.classList.add('closed');
                        // blur everything in the dropdown to remove :focus-within
                        document.activeElement.blur();
                    });
                }
            });
        })();
    </script>
    <script>
        // Hero slider functionality
        (function(){
            var slider = document.getElementById('heroSlider');
            var slides = slider.querySelectorAll('.hero-slide');
            var dots = slider.querySelectorAll('.hero-dot');
            var currentSlide = 0;
            var autoplayInterval;

            function showSlide(n) {
                slides.forEach(function(slide) { slide.classList.remove('active'); });
                dots.forEach(function(dot) { dot.classList.remove('active'); });
                slides[n].classList.add('active');
                dots[n].classList.add('active');
                currentSlide = n;
            }

            function nextSlide() {
                showSlide((currentSlide + 1) % slides.length);
            }

            function goToSlide(n) {
                showSlide(n);
                clearInterval(autoplayInterval);
                autoplayInterval = setInterval(nextSlide, 5000);
            }

            // Dot click handlers
            dots.forEach(function(dot, index) {
                dot.addEventListener('click', function() {
                    goToSlide(index);
                });
            });

            // Auto-play
            autoplayInterval = setInterval(nextSlide, 5000);
        })();
    </script>
</body>
</html>
