<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Services - ANDISON INDUSTRIAL</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
	<style>
		/* Copied header, nav and sidebar styles from aboutus.php to ensure parity */
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		html {
			background: white !important;
			height: auto;
			overflow-y: scroll !important;
		}

		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			line-height: 1.6;
			color: #333;
			padding-top: 142px;
			background: white !important;
			height: auto;
			overflow-y: visible !important;
		}

		main {
			background: white !important;
			height: auto;
		}

		/* Header */
		header {
			background: linear-gradient(135deg, #2B11DB 0%, #2B11DB 100%);
			color: white;
			padding: 20px 0;
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

		.contact-link { color: rgba(255,255,255,0.95); text-decoration: none; font-weight: 600; padding-bottom: 8px; white-space: nowrap; position: relative; display: inline-block; }
		.contact-link::after { content: ''; position: absolute; left: 50%; transform: translateX(-50%) scaleX(0); transform-origin: center; width: 64px; height: 3px; background: rgba(255,255,255,0.18); bottom: -6px; border-radius: 2px; transition: transform 220ms ease; }
		.contact-link:hover::after, .contact-link:focus-visible::after { transform: translateX(-50%) scaleX(1); }

		.contact-dropdown { position: relative; display: inline-block; }
		.contact-popover { position: absolute; left: 50%; top: calc(100% + 12px); width: 320px; background: #fff; color: #111; border-radius: 8px; padding: 14px 16px; box-shadow: 0 10px 30px rgba(10,10,20,0.12); opacity: 0; visibility: hidden; transform: translateX(-50%) translateY(-6px) scale(0.98); transition: opacity 180ms ease, transform 180ms ease, visibility 180ms; z-index: 120; }
		.contact-popover::before { content: ''; position: absolute; left: 50%; transform: translateX(-50%); top: -8px; width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-bottom: 10px solid #fff; filter: drop-shadow(0 -1px 0 rgba(0,0,0,0.03)); }
		.contact-dropdown:hover:not(.closed) .contact-popover, .contact-dropdown:focus-within:not(.closed) .contact-popover { opacity: 1; visibility: visible; transform: translateX(-50%) translateY(0) scale(1); }
		.contact-close { position: absolute; top: 8px; right: 8px; background: transparent; border: none; color: #666; font-weight: 700; font-size: 24px; cursor: pointer; padding: 4px 8px; border-radius: 6px; line-height: 1; }
		.contact-close:hover { background: rgba(0,0,0,0.06); color: #333; }
		.contact-list { list-style: none; margin: 0; padding: 6px 0; }
		.contact-list li { display:flex; gap:12px; align-items:center; padding:10px 6px; }
		.contact-list .icon { font-size:18px; width:28px; text-align:center; color:#2B11DB; }
		.contact-list a { color: #111; text-decoration:none; font-weight:600; }

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
			background: linear-gradient(135deg, #00D7B3 0%, #00D7B3 100%);
			color: #1a1a2e;
			border: none;
			padding: 10px 24px;
			border-radius: 25px;
			font-weight: 700;
			cursor: pointer;
			box-shadow: 0 4px 15px rgba(0, 217, 255, 0.3);
			text-decoration: none;
			display: inline-flex;
			align-items: center;
			gap: 8px;
			transition: all 0.3s ease;
			font-size: 14px;
			letter-spacing: 0.5px;
		}

		.inquiry-btn:hover { 
			background: linear-gradient(135deg, #00E6FF 0%, #00C8F7 100%);
			box-shadow: 0 6px 20px rgba(0, 217, 255, 0.5);
			transform: translateY(-2px);
		}

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
			padding-left: 160px;
		}

		.browse-toggle {
			position: absolute;
			left: 20px;
			top: 50%;
			transform: translateY(-50%);
			z-index: 80;
			background: transparent;
			border: none;
			color: white;
			font-weight: 700;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			gap: 10px;
			padding: 8px 14px;
			cursor: pointer;
			font-size: 15px;
			height: 40px;
			min-width: 150px;
		}

		.nav-list {
			list-style: none;
			display: flex;
			gap: 28px;
			margin: 0;
			padding: 0;
			align-items: center;
			height: 40px;
		}

		.nav-list li {
			position: relative;
			display: flex;
			align-items: center;
		}

		.nav-list a {
			color: white;
			text-decoration: none;
			font-size: 15px;
			padding: 8px 6px;
			display: flex;
			align-items: center;
			transition: color 0.2s;
			position: relative;
			height: 40px;
			line-height: 40px;
		}

		.nav-list a:hover {
			color: #00d4aa;
		}

		.nav-list > li > a {
			position: relative;
			padding: 10px 14px;
			color: rgba(255,255,255,0.92);
			transition: color 180ms ease, background 180ms ease;
		}

		.nav-list > li > a.active {
			background: rgba(0,0,0,0.14);
			color: #fff;
			font-weight: 700;
			border-radius: 6px;
			box-shadow: inset 0 -6px 18px rgba(0,0,0,0.06);
		}

		.nav-list > li > a.active::after {
			content: '';
			position: absolute;
			left: 50%;
			bottom: -8px;
			transform: translateX(-50%);
			width: 44px;
			height: 6px;
			border-radius: 6px;
			background: linear-gradient(90deg, #00ffd1 0%, #00d4aa 50%, #2B11DB 100%);
			box-shadow: 0 8px 28px rgba(0,212,170,0.18), 0 0 40px rgba(43,17,219,0.08);
			pointer-events: none;
		}

		.nav-list > li > a:hover::after {
			width: 56px;
		}

		.nav-dropdown {
			position: absolute;
			top: 100%;
			left: 50%;
			transform: translateX(-50%) translateY(8px);
			background: white;
			min-width: 280px;
			border-radius: 16px;
			box-shadow: 0 8px 24px rgba(0,0,0,0.15);
			opacity: 0;
			visibility: hidden;
			transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
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
			color: #2B11DB;
		}

		.nav-dropdown p {
			color: #666;
			font-size: 13px;
			line-height: 1.6;
			margin: 0;
		}

		/* Brands dropdown grid layout */
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
		.nav-list > li:hover .nav-dropdown {
			opacity: 1;
			visibility: visible;
			transform: translateX(-50%) translateY(0);
		}

		/* Overlay sidebar */
		.overlay-backdrop { position: fixed; inset: 0; background: rgba(0,0,0,0.08); opacity: 0; visibility: hidden; transition: opacity 0.25s ease, visibility 0.25s; z-index: 60; pointer-events: none; }
		.overlay-backdrop.active { opacity: 1; visibility: visible; pointer-events: auto; }
		.sidebar-overlay { position: fixed; left: 0; top: calc(14px + 50px + 14px + 12px + 52px); bottom: 0; width: 300px; max-width: 88%; background: #fff; box-shadow: 6px 0 30px rgba(2,6,23,0.08); transform: translateX(-100%); transition: transform 0.28s ease; z-index: 70; padding: 28px 20px; overflow-y: auto; }
		.sidebar-overlay.active { transform: translateX(0); }
		.sidebar-overlay h3 { font-size: 18px; margin-bottom: 24px; color: #222; font-weight: 700; letter-spacing: 0.5px; }
		.sidebar-list { list-style: none; padding: 0; margin: 0; }
		.sidebar-list li { border-bottom: 1px solid #e5e7eb; }
		.sidebar-list a { display: flex; gap: 12px; padding: 16px 12px; color: #1f2937; text-decoration: none; align-items: center; justify-content: space-between; transition: all 0.2s ease; font-size: 15px; }
		.sidebar-list a:hover { background: #f3f4f6; color: #2B11DB; padding-left: 16px; }
		.sidebar-icon { color: #5b21b6; width: 24px; height: 24px; text-align: center; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
		.sidebar-list a .sidebar-label { flex: 1; }
		.sidebar-list a .sidebar-arrow { width: 20px; height: 20px; display: none; align-items: center; justify-content: center; color: #9ca3af; font-size: 14px; flex-shrink: 0; margin-left: 8px; }
		.sidebar-list li.has-sub a .sidebar-arrow { display: flex; }
		.sidebar-sublist { list-style: none; margin: 0; padding: 8px 0 8px 44px; display: none; background: #fafafa; margin-left: 12px; margin-right: 12px; padding-left: 16px; border-left: 2px solid #e5e7eb; padding-top: 8px; padding-bottom: 8px; }
		.sidebar-sublist li { padding: 4px 0; border: none; }
		.sidebar-sublist a { color: #4b5563; font-size: 14px; padding: 6px 8px; display: block; text-decoration: none; justify-content: flex-start; }
		.sidebar-sublist a:hover { color: #2B11DB; background: transparent; padding-left: 12px; }
		.nested-toggle { position: absolute; right: 0; top: 6px; background: transparent; border: none; color: #9ca3af; cursor: pointer; padding: 0; width: 20px; height: 20px; display: inline-flex; align-items: center; justify-content: center; font-size: 12px; }
		.nested-toggle .bi { transition: transform 200ms ease; }
		.nested-toggle[aria-expanded="true"] .bi { transform: rotate(90deg); }
		.sidebar-nested-sublist { list-style: none; margin: 10px 0 10px -12px; padding: 0; display: none; }
		.sidebar-nested-sublist a { color: #5a6b7d; font-size: 13px; padding: 10px 12px 10px 28px; display: block; text-decoration: none; position: relative; transition: all 0.25s ease; border-radius: 6px; margin: 2px 0; }
		.sidebar-nested-sublist a::before { content: ''; position: absolute; left: 8px; top: 50%; transform: translateY(-50%); width: 6px; height: 6px; background: linear-gradient(135deg, #2B11DB 0%, #6d28d9 100%); border-radius: 50%; box-shadow: 0 2px 4px rgba(43, 17, 219, 0.2); }
		.sidebar-nested-sublist a:hover { color: #2B11DB; background: rgba(43, 17, 219, 0.08); padding-left: 32px; transform: translateX(4px); }
		.sidebar-nested-sublist.collapsed { display: none; }
		.sidebar-nested-sublist:not(.collapsed) { display: block; }
		.sidebar-list li.has-sub { position: relative; }
		.has-sub > a { padding-right: 40px; }
		.sub-toggle { position: absolute; right: 12px; top: 16px; transform: none; background: transparent; border: none; color: #9ca3af; cursor: pointer; padding: 0; width: 24px; height: 24px; display: inline-flex; align-items: center; justify-content: center; border-radius: 0; box-shadow: none; }
		.sub-toggle .bi { transition: transform 200ms ease; font-size: 16px; }
		.sub-toggle[aria-expanded="true"] .bi { transform: rotate(90deg); }
		.sidebar-sublist.collapsed { display: none; }
		.sidebar-sublist:not(.collapsed) { display: block; }
		.sidebar-close { background: transparent; border: none; color: #9ca3af; font-weight: 700; cursor: pointer; position: static; font-size: 16px; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; transition: color 0.2s ease; flex-shrink: 0; }
		.sidebar-close:hover { color: #333; }

		/* Section */
		.container {
			width: 100%;
			background: white !important;
		}

		.container > * {
			max-width: 1200px;
			margin: 0 auto;
			padding: 0 20px;
		}

		section {
			width: 100%;
			padding: 60px 20px;
			position: relative;
			z-index: 10;
			background: white !important;
		}

		.services-section {
			width: 100%;
			padding: 60px 20px;
			background: #f5f5f7 !important;
		}

		.services-header {
			text-align: center;
			max-width: 800px;
			margin: 0 auto 60px;
		}

		.services-label {
			font-size: 14px;
			font-weight: 700;
			letter-spacing: 2px;
			color: #2B11DB;
			text-transform: uppercase;
			margin-bottom: 12px;
		}

		.services-header h2 {
			font-size: 48px;
			font-weight: 700;
			color: #111;
			margin-bottom: 16px;
			margin-top: 0;
		}

		.services-intro {
			font-size: 16px;
			line-height: 1.8;
			color: #666;
			margin: 0;
		}

		.services-grid-cards {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
			gap: 32px;
			margin-top: 60px;
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
		}

		.service-card {
			background: white;
			border-radius: 12px;
			padding: 40px 24px;
			text-align: center;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}

		.service-card:hover {
			transform: translateY(-8px);
			box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
		}

		.card-icon {
			font-size: 48px;
			color: #2B11DB;
			margin-bottom: 20px;
			display: flex;
			justify-content: center;
			height: 64px;
			align-items: center;
		}

		.card-title {
			font-size: 22px;
			font-weight: 700;
			color: #2B11DB;
			margin: 16px 0;
		}

		.card-desc {
			font-size: 15px;
			line-height: 1.7;
			color: #666;
			margin: 16px 0 24px;
		}

		.read-more {
			display: inline-flex;
			align-items: center;
			gap: 6px;
			color: #2B11DB;
			text-decoration: none;
			font-weight: 600;
			font-size: 14px;
			transition: color 0.2s;
		}

		.read-more:hover {
			color: #1a0099;
		}

		.read-more i {
			font-size: 14px;
			transition: transform 0.2s;
		}

		.read-more:hover i {
			transform: translateX(4px);
		}

		.featured-section {
			background: white !important;
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
		}

		.featured-image {
			background: white !important;
		}

		.service-card {
			background: #fff;
			border-radius: 12px;
			padding: 22px;
			border: 1px solid rgba(15,23,42,0.04);
			box-shadow: 0 8px 18px rgba(2,6,23,0.04);
			transition: transform .22s ease;
		}

		.service-card:hover {
			transform: translateY(-6px);
		}

		.service-icon {
			width: 64px;
			height: 64px;
			border-radius: 12px;
			background: linear-gradient(135deg,#00D7B3,#00C8A8);
			display: flex;
			align-items: center;
			justify-content: center;
			color: white;
			font-size: 28px;
			margin-bottom: 12px;
		}

		.service-title {
			font-weight: 700;
			color: #111;
			margin-bottom: 8px;
		}

		.service-desc {
			color: #58606b;
			font-size: 14px;
			line-height: 1.6;
		}

		.cta {
			display: flex;
			justify-content: flex-end;
			margin-top: 20px;
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
		}

		.btn-primary {
			background: linear-gradient(135deg,#00D7B3 0%,#00C8A8 100%);
			color: #082;
			border-radius: 40px;
			padding: 10px 20px;
			text-decoration: none;
			font-weight: 700;
			box-shadow: 0 6px 20px rgba(0,215,179,0.14);
		}

		/* Footer */
		footer {
			background: #2B11DB;
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
			transition: color 0.1s;
		}

		.footer-links a:hover {
			color: #00d4aa;
		}

		.footer-copyright {
			font-size: 12px;
			border-top: 1px solid rgba(255, 255, 255, 0.2);
			padding-top: 20px;
		}

		@media (max-width: 640px) { .header-top { padding: 0 12px } .container { padding: 18px } }
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
	<header>
		<div class="header-top">
			<div class="logo">
				<div class="logo-box"><a href="home.php"><img src="assets/HOME/image-removebg-preview.png" alt="Andison Industrial" /></a></div>
			</div>

			<div class="search-bar">
				<div class="search-field">
					<input type="text" placeholder="Search for products">
				</div>
			</div>

			<div class="right-actions">
				<a href="inquirylist.php" class="inquiry-btn">INQUIRY LIST</a>
				<div class="header-contact">
					<div class="contact-dropdown" tabindex="0" aria-haspopup="true">
						<a href="#contact" class="contact-link" aria-label="Contact Us">Contact Us ▾</a>
						<div class="contact-popover" role="menu" aria-hidden="true">
							<button class="contact-close" aria-label="Close contact popover">✕</button>
							<ul class="contact-list">
							<li><span class="icon"><i class="bi bi-telephone"></i></span><a href="tel:<?php echo isset($phone)?$phone:''; ?>"><?php echo isset($phone)?$phone:''; ?></a></li>
							<li><span class="icon"><i class="bi bi-telephone"></i></span><a href="tel:<?php echo isset($phone2)?$phone2:''; ?>"><?php echo isset($phone2)?$phone2:''; ?></a></li>
							<li><span class="icon"><i class="bi bi-telephone"></i></span><a href="tel:<?php echo isset($phone3)?$phone3:''; ?>"><?php echo isset($phone3)?$phone3:''; ?></a></li>
							<li><span class="icon"><i class="bi bi-envelope"></i></span><a href="mailto:<?php echo isset($email)?$email:''; ?>"><?php echo isset($email)?$email:''; ?></a></li>
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
						<a href="services.php" class="active">Services</a>
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

		<!-- Sidebar overlay -->
		<div id="overlay" class="overlay-backdrop" aria-hidden="true"></div>
		<aside id="sidebar" class="sidebar-overlay" aria-hidden="true">
			<div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 12px; border-bottom: 1px solid #e5e7eb;">
				<h3 style="margin: 0; font-size: 18px; color: #1f2937;">Categories</h3>
				<button class="sidebar-close" id="closeSidebar">✕</button>
			</div>
			<ul class="sidebar-list">
				<li class="has-sub">
					<a href="arc-welding-machine/arc-welding-machine.php"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-lightning-charge"></i></span><span class="sidebar-label">Arc Welding Machine</span></a>
					<button class="sub-toggle" aria-expanded="false" aria-controls="sub-arc-welding" title="Toggle subcategories"><i class="bi bi-chevron-right"></i></button>
					<ul id="sub-arc-welding" class="sidebar-sublist collapsed">
						<li><a href="arc-welding-machine/mig-welding-machine.php">MIG Welding Machine</a></li>
						<li><a href="arc-welding-machine/co1-mag-welding-machine.php">CO1/MAG Welding Machine</a></li>
						<li><a href="arc-welding-machine/stud-welding-machine.php">STUD Welding Machine</a></li>
						<li><a href="arc-welding-machine/tig-welding-machine.php">TIG Welding Machine</a></li>
					</ul>
				</li>
				<li>
					<a href="#arc-handmetal-robots"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-robot"></i></span><span class="sidebar-label">Arc HandMetal Robots</span><span class="sidebar-arrow"><i class="bi bi-chevron-right"></i></span></a>
				</li>
				<li>
					<a href="#batteries"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-lightning-fill"></i></span><span class="sidebar-label">Batteries</span><span class="sidebar-arrow"><i class="bi bi-chevron-right"></i></span></a>
				</li>
				<li class="has-sub">
					<a href="drilling-and-lifting/drilling-and-lifting.php"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-hammer"></i></span><span class="sidebar-label">Drilling and Lifting</span></a>
					<button class="sub-toggle" aria-expanded="false" aria-controls="sub-drilling-lifting" title="Toggle subcategories"><i class="bi bi-chevron-right"></i></button>
					<ul id="sub-drilling-lifting" class="sidebar-sublist collapsed">
						<li><a href="drilling-and-lifting/lifting.php">Lifting</a></li>
						<li><a href="drilling-and-lifting/magnetic-drill.php">Magnetic Drill</a></li>
						<li><a href="drilling-and-lifting/cutters.php">Cutters</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="gas-detectors/portable-gas-detectors.php"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-bullseye"></i></span><span class="sidebar-label">Portable Gas Detectors</span></a>
					<button class="sub-toggle" aria-expanded="false" aria-controls="sub-gas-detectors" title="Toggle subcategories"><i class="bi bi-chevron-right"></i></button>
					<ul id="sub-gas-detectors" class="sidebar-sublist collapsed">
						<li><a href="gas-detectors/single-gas-detector.php">Single Gas Detector</a></li>
						<li><a href="gas-detectors/multi-gas-detector.php">Multi Gas Detector</a></li>
						<li><a href="gas-detectors/docking-data-management.php">Docking and Data Management</a></li>
						<li><a href="gas-detectors/calibration-gas-regulators.php">Calibration Gas and Regulators</a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="portable-ventilators/portable-ventilators.php"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-fan"></i></span><span class="sidebar-label">Portable Ventilators</span></a>
					<button class="sub-toggle" aria-expanded="false" aria-controls="sub-ventilators" title="Toggle subcategories"><i class="bi bi-chevron-right"></i></button>
					<ul id="sub-ventilators" class="sidebar-sublist collapsed">
						<li><a href="portable-ventilators/portable-ventilator-accessories.php">Portable Ventilator Accessories</a></li>
					</ul>
				</li>
				<li>
					<a href="#power-tools"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-tools"></i></span><span class="sidebar-label">Power Tools</span><span class="sidebar-arrow"><i class="bi bi-chevron-right"></i></span></a>
				</li>
				<li class="has-sub">
					<a href="protection/protection.php"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-shield-check"></i></span><span class="sidebar-label">Protection and Safety</span></a>
					<button class="sub-toggle" aria-expanded="false" aria-controls="sub-protection-safety" title="Toggle subcategories"><i class="bi bi-chevron-right"></i></button>
					<ul id="sub-protection-safety" class="sidebar-sublist collapsed">
						<li><a href="protection/eye-protection.php">Eye Protection</a></li>
						<li><a href="protection/foot-protection.php">Foot Protection</a></li>
						<li class="has-nested-sub">
							<a href="protection/hand-protection.php">Hand Protection</a>
							<button class="nested-toggle" aria-expanded="false" aria-controls="nested-hand-protection" title="Toggle subcategories"><i class="bi bi-chevron-right"></i></button>
							<ul id="nested-hand-protection" class="sidebar-nested-sublist collapsed">
								<li><a href="protection/working-gloves.php">Working Gloves</a></li>
								<li><a href="protection/chemical-liquid-protection-gloves.php">Chemical and Liquid Protection Gloves</a></li>
								<li><a href="protection/disposable-gloves.php">Disposable Gloves</a></li>
								<li><a href="protection/welding-gloves.php">Welding Gloves</a></li>
							</ul>
						</li>
						<li><a href="protection/hearing-respiratory-protection.php">Hearing &amp; Respiratory Protection</a></li>
						<li class="has-nested-sub">
							<a href="protection/body-protection.php">Body Protection</a>
							<button class="nested-toggle" aria-expanded="false" aria-controls="nested-body-protection" title="Toggle subcategories"><i class="bi bi-chevron-right"></i></button>
							<ul id="nested-body-protection" class="sidebar-nested-sublist collapsed">
								<li><a href="protection/chemical-flame-retardant.php">Chemical and Flame Retardant</a></li>
								<li><a href="protection/liquid-spray-splash.php">Liquid Spray and Splash</a></li>
								<li><a href="protection/particulate-low-hazard.php">Particulate and Low Hazard</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="welding-accessories/welding-accessories.php"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-gear"></i></span><span class="sidebar-label">Welding Accessories</span></a>
					<button class="sub-toggle" aria-expanded="false" aria-controls="sub-welding-accessories" title="Toggle subcategories"><i class="bi bi-chevron-right"></i></button>
					<ul id="sub-welding-accessories" class="sidebar-sublist collapsed">
						<li><a href="welding-accessories/welding-head-face-protection.php">Welding, Head & Face Protection</a></li>
					</ul>
				</li>
				<li>
					<a href="#handmetal-consumables"><span class="sidebar-icon" aria-hidden="true"><i class="bi bi-box"></i></span><span class="sidebar-label">HandMetal Consumables</span><span class="sidebar-arrow"><i class="bi bi-chevron-right"></i></span></a>
				</li>
			</ul>
		</aside>

	<main class="container">
		<section class="services-section">
			<div class="services-header">
				<p class="services-label">SERVICES</p>
				<h2>Service We Provide</h2>
				<p class="services-intro">We deliver comprehensive industrial solutions including welding equipment, safety systems, protective gear, and expert support to keep your operations running smoothly.</p>
			</div>

			<div class="services-grid-cards">
				<div class="service-card">
					<div class="card-icon"><i class="bi bi-lightning-charge"></i></div>
					<h3 class="card-title">Arc Welding Solutions</h3>
					<p class="card-desc">Advanced MIG, TIG, STUD, and CO2/MAG welding machines for precision manufacturing and heavy construction.</p>
					<a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
				</div>

				<div class="service-card">
					<div class="card-icon"><i class="bi bi-hammer"></i></div>
					<h3 class="card-title">Drilling & Lifting</h3>
					<p class="card-desc">High-precision magnetic drills, annular cutters, and lifting magnets engineered for industrial safety.</p>
					<a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
				</div>

				<div class="service-card">
					<div class="card-icon"><i class="bi bi-bullseye"></i></div>
					<h3 class="card-title">Gas Detection Systems</h3>
					<p class="card-desc">Real-time safety monitoring with multi-gas and single-gas detectors plus calibration services.</p>
					<a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
				</div>

				<div class="service-card">
					<div class="card-icon"><i class="bi bi-shield-check"></i></div>
					<h3 class="card-title">Personal Protective Equipment</h3>
					<p class="card-desc">Complete ANSI-certified PPE including welding gloves, respiratory equipment, and chemical protection.</p>
					<a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
				</div>

				<div class="service-card">
					<div class="card-icon"><i class="bi bi-fan"></i></div>
					<h3 class="card-title">Portable Ventilation</h3>
					<p class="card-desc">Flexible fume extraction and ventilation solutions for welding and industrial environments.</p>
					<a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
				</div>

				<div class="service-card">
					<div class="card-icon"><i class="bi bi-box"></i></div>
					<h3 class="card-title">Premium Industrial Brands</h3>
					<p class="card-desc">Authorized distributor of world-class brands including Panasonic, KOBELCO, and ANSELL.</p>
					<a href="#" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
				</div>
			</div>

			<div class="cta">
				<a class="btn-primary" href="contact.php">Contact Us</a>
			</div>
		</section>
	</main>

	<footer>
		<div class="footer-content">
			<div class="footer-links">
				<a href="home.php">Home</a>
				<a href="aboutus.php">About Us</a>
				<a href="brands.php">Brands</a>
				<a href="industries.php">Industries</a>
				<a href="services.php">Services</a>
				<a href="contact.php">Contact Us</a>
			</div>
			<div class="footer-copyright">
				&copy; 2026 ANDISON INDUSTRIAL. All rights reserved.
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

			if(browseToggle){ browseToggle.addEventListener('click', function(e){ e.preventDefault(); openSidebar(); }); }
			if(closeBtn) closeBtn.addEventListener('click', closeSidebar);
			if(overlay) overlay.addEventListener('click', closeSidebar);
			document.addEventListener('keydown', function(e){ if(e.key === 'Escape') closeSidebar(); });
		})();
	</script>

	<script>
		// Nested sublist toggle behavior
		(function(){
			var nestedToggles = document.querySelectorAll('.nested-toggle');
			nestedToggles.forEach(function(btn){
				var targetId = btn.getAttribute('aria-controls');
				var list = document.getElementById(targetId);
				if(!list) return;
				var storageKey = 'sidebar_nested_' + targetId;
				try {
					var stored = localStorage.getItem(storageKey);
					if(stored === 'true'){
						btn.setAttribute('aria-expanded','true');
						list.classList.remove('collapsed');
					} else {
						btn.setAttribute('aria-expanded','false');
						list.classList.add('collapsed');
					}
				} catch(e){
					btn.setAttribute('aria-expanded','false');
					list.classList.add('collapsed');
				}

				btn.addEventListener('click', function(e){
					e.preventDefault();
					var expanded = btn.getAttribute('aria-expanded') === 'true';
					if(expanded){
						btn.setAttribute('aria-expanded','false');
						list.classList.add('collapsed');
						try { localStorage.setItem(storageKey,'false'); } catch(e){}
					} else {
						btn.setAttribute('aria-expanded','true');
						list.classList.remove('collapsed');
						try { localStorage.setItem(storageKey,'true'); } catch(e){}
					}
				});
			});
		})();
	</script>

	<script>
		// ============================================
		// PAGE TRANSITION EFFECTS (match home/brands)
		// ============================================
		(function(){
			document.addEventListener('click', function(e){
				var link = e.target.closest('a[href*=".php"], a[href^="#"]');
				if(!link) return;

				var href = link.getAttribute('href');
				if(!href) return;

				// Skip anchor-only and javascript links
				if(href.startsWith('#') || href.startsWith('javascript:')) return;
				if(!href.includes('.php')) return;

				e.preventDefault();
				document.body.style.animation = 'none';

				setTimeout(function(){ window.location.href = href; }, 0);
			});

			window.addEventListener('load', function(){
				document.body.style.animation = 'pageEnter 0.18s ease';
			});
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
		(function(){
			var toggles = document.querySelectorAll('.sub-toggle');
			toggles.forEach(function(btn){
				var targetId = btn.getAttribute('aria-controls');
				var list = document.getElementById(targetId);
				if(!list) return;
				var storageKey = 'sidebar_sub_' + targetId;
				try {
					var stored = localStorage.getItem(storageKey);
					if(stored === 'true'){
						btn.setAttribute('aria-expanded','true');
						list.classList.remove('collapsed');
					} else {
						btn.setAttribute('aria-expanded','false');
						list.classList.add('collapsed');
					}
				} catch(e){
					btn.setAttribute('aria-expanded','false');
					list.classList.add('collapsed');
				}

				btn.addEventListener('click', function(e){
					e.preventDefault();
					var expanded = btn.getAttribute('aria-expanded') === 'true';
					if(expanded){
						btn.setAttribute('aria-expanded','false');
						list.classList.add('collapsed');
						try { localStorage.setItem(storageKey,'false'); } catch(e){}
					} else {
						btn.setAttribute('aria-expanded','true');
						list.classList.remove('collapsed');
						try { localStorage.setItem(storageKey,'true'); } catch(e){}
					}
				});
			});
		})();
	</script>

	</body>
	</html>

