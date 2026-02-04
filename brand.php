<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    $brand_name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Brand';
    ?>
    <title><?php echo $brand_name; ?> - ANDISON INDUSTRIAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8f9fa;
            padding-top: 142px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

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
            background: rgba(255,255,255,0.1);
            color: white;
            border: 2px solid rgba(255,255,255,0.3);
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
            margin-left: auto;
        }

        .back-button:hover {
            background: rgba(255,255,255,0.2);
            border-color: rgba(255,255,255,0.5);
        }

        /* Brand Container */
        .brand-container {
            max-width: 1500px;
            margin: 1px auto 40px;
            padding: 0 40px;
            flex: 1;
        }

        .brand-header {
            background: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            text-align: center;
        }

        .brand-header h1 {
            color: #2B11DB;
            font-size: 48px;
            margin-bottom: 10px;
        }

        .brand-header p {
            color: #666;
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto;
        }

        .brand-content {
            background: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .brand-content h2 {
            color: #2B11DB;
            font-size: 32px;
            margin-bottom: 20px;
            border-bottom: 3px solid #2B11DB;
            padding-bottom: 5px;
        }

        .brand-content h3 {
            color: #333;
            font-size: 24px;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .brand-content p {
            color: #555;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .brand-content ul {
            margin-left: 30px;
            margin-bottom: 20px;
        }

        .brand-content li {
            margin-bottom: 10px;
            color: #555;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            margin-top: 30px;
            justify-content: center;
        }

        .product-card {
            flex: 0 1 calc(20% - 20px);
            min-width: 240px;
            max-width: 280px;
        }

        @media (min-width: 1500px) {
            .product-card {
                flex: 0 1 calc(20% - 20px);
            }
        }

        .product-card {
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(43,17,219,0.15);
            border-color: #2B11DB;
        }

        .product-image {
            width: 100%;
            height: 220px;
            background: linear-gradient(135deg, #f0f0f0 0%, #e0e0e0 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            font-size: 60px;
            color: #ccc;
        }

        .product-card h4 {
            color: #2B11DB;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: 700;
        }

        .product-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }

        .product-badge {
            display: inline-block;
            background: #00d4aa;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .contact-section {
            background: linear-gradient(135deg, #2B11DB 0%, #1a0a8f 100%);
            color: white;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            margin-top: 30px;
        }

        .contact-section h3 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .contact-section p {
            font-size: 16px;
            margin-bottom: 25px;
        }

        .contact-btn {
            background: white;
            color: #2B11DB;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .contact-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Footer */
        footer {
            background: #2B11DB;
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-top: 60px;
            margin-left: calc(-50vw + 50%);
            margin-right: calc(-50vw + 50%);
            width: 100vw;
            position: relative;
            left: 0;
            right: 0;
        }

        .footer-content {
            flex-direction: column;
            text-align: center;
        }

        .footer-copyright {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .footer-links {
            display: flex;
            gap: 15px;
            justify-content: center;
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

        @media (max-width: 768px) {
            .brand-header h1 {
                font-size: 32px;
            }

            .brand-content {
                padding: 25px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php
    $company_name = "ANDISON INDUSTRIAL";
    $brand_name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Brand';
    
    // Brand information database
    $brands_info = [
        'Panasonic Connect' => [
            'description' => 'Leading manufacturer of welding robots and automated welding systems.',
            'products' => [
                ['model' => 'YD-350KR2', 'type' => 'Welding Robot', 'badge' => 'Popular', 'image' => 'assets/brands%20items/PANASONIC/CO2,MAG,MIG Welding Machine/YD-350KR2.jpg'],
                ['model' => 'YD-500KR2', 'type' => 'Welding Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/CO2,MAG,MIG Welding Machine/YD-500KR2.jpg'],
                ['model' => 'YD-600KH2', 'type' => 'Welding Robot', 'badge' => 'Heavy Duty', 'image' => 'assets/brands%20items/PANASONIC/CO2,MAG,MIG Welding Machine/YD-600KH2.jpg'],
                ['model' => 'YD-350RX1', 'type' => 'Welding Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/CO2,MAG,MIG Welding Machine/YD-350RX1.jpg'],
                ['model' => 'YD-350GR3', 'type' => 'Welding Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/CO2,MAG,MIG Welding Machine/YD-350GR3.jpeg'],
                ['model' => 'YD-350VR1', 'type' => 'Welding Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/CO2,MAG,MIG Welding Machine/YD-350VR1.jpg'],
                ['model' => 'YD-400VP1', 'type' => 'Welding Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/CO2,MAG,MIG Welding Machine/YD-400VP1.png'],
                ['model' => 'YD-350GZ4', 'type' => 'Welding Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/CO2,MAG,MIG Welding Machine/YD-350GZ4.jpeg'],
                ['model' => 'YD-200BL3', 'type' => 'Welding Robot', 'badge' => 'Compact', 'image' => 'assets/brands%20items/PANASONIC/TIG Welding Machine/YC-200BL3.jpeg'],
                ['model' => 'YD-300BZ3', 'type' => 'Welding Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/TIG Welding Machine/YC-300BZ3.jpeg'],
                ['model' => 'YD-300BP4', 'type' => 'Welding Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/TIG Welding Machine/YC-300BP4.png'],
                ['model' => 'YD-300WX4', 'type' => 'Welding Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/TIG Welding Machine/YC-300WX4.jpg'],
                ['model' => 'YP-060PF3', 'type' => 'Positioner', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic Positioner 1.webp'],
                ['model' => 'YP-080PF3', 'type' => 'Positioner', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic Positioner 2.webp'],
                ['model' => 'YP-130PF1', 'type' => 'Positioner', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic Positioner 3.jpg'],
                ['model' => 'TM/TL G3 Series', 'type' => 'Welding System', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic TAWERS WG3 Welding Robot.jpg'],
                ['model' => 'TM/TL TAWERS Series', 'type' => 'Welding System', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic TAWERS SAWP Welding Robot.jpg'],
                ['model' => 'Super Active TAWERS', 'type' => 'Welding System', 'badge' => 'Advanced', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic TAWERS SAWP Welding Robot.jpg'],
                ['model' => 'TM/TL G4 Series', 'type' => 'Welding System', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic TAWERS WG4 Welding Robot.jpg'],
                ['model' => 'TM/TL TAWERS WG4 Series', 'type' => 'Welding System', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic TAWERS WG4 Welding Robot.jpg'],
                ['model' => 'Active TAWERS 4 AWP4-WG4 Series', 'type' => 'Welding System', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic TAWERS AWP4 Welding Robot - 1.png'],
                ['model' => 'Tig Welding Robot', 'type' => 'TIG Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic Tig Welding Robot 1.png'],
                ['model' => 'Plasma Cutting Robot', 'type' => 'Cutting Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic Plasma Cutting Robot 1.jpg'],
                ['model' => 'Handling Robot for Welding', 'type' => 'Handling Robot', 'badge' => '', 'image' => 'assets/brands%20items/PANASONIC/Arc Welding Robot/Panasonic G3 Welding Robot.jpg'],
                ['model' => 'DTPS 3', 'type' => 'Software/System', 'badge' => '', 'image' => ''],
                ['model' => 'VPRS', 'type' => 'Software/System', 'badge' => '', 'image' => ''],
                ['model' => 'iWNB', 'type' => 'Software/System', 'badge' => '', 'image' => ''],
                ['model' => 'i-Reporter', 'type' => 'Software/System', 'badge' => '', 'image' => '']
            ],
            
        ],
        'BW Technologies' => [
            'description' => 'A manufacturer of gas detection instrumentation intended to protect personnel and facilities around the world.',
            'products' => [
                ['model' => 'BW Clip', 'type' => 'Gas Equipment', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW Clip 1.jpg'],
                ['model' => 'BW Solo', 'type' => 'Gas Equipment', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW Solo 1.jpg'],
                ['model' => 'BW Clip 4 - Low Maintenance', 'type' => 'Gas Equipment', 'badge' => 'Low Maintenance', 'image' => 'assets/brands%20items/BW/BW Clip4 - 1.jpg'],
                ['model' => 'BW Microclip XL', 'type' => 'Gas Equipment', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW MicroClip XL 1.jpg'],
                ['model' => 'BW Microclip X3', 'type' => 'Gas Equipment', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW MicroClip X3 - 2.jpg'],
                ['model' => 'BW Max XT II', 'type' => 'Gas Equipment', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW Max XT II 1.jpg'],
                ['model' => 'BW Icon', 'type' => 'Gas Equipment', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW Icon 1.jpg'],
                ['model' => 'BW Flex', 'type' => 'Gas Equipment', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW Flex 4 - 1.jpg'],
                ['model' => 'BW Ultra', 'type' => 'Gas Equipment', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW Ultra 1.jpg'],
                ['model' => 'BW Rigrat', 'type' => 'Gas Equipment', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW RigRat 1.jpg'],
                ['model' => 'IntelliDoX', 'type' => 'System', 'badge' => '', 'image' => 'assets/brands%20items/BW/BW IntelliDoX 1.jpg'],
                ['model' => 'Calibration Gas', 'type' => 'Accessory', 'badge' => '', 'image' => 'assets/brands%20items/BW/calibration gas 1.jpg'],
                ['model' => 'Gas Regulator', 'type' => 'Accessory', 'badge' => '', 'image' => 'assets/brands%20items/BW/reg-df-1 gas regulator.jpg']
            ],
            'features' => [
                'Superior weld quality',
                'Wide range of applications',
                'Consistent performance',
                'Internationally certified'
            ]
        ],
        'Weldcraft' => [
            'description' => 'Professional TIG welding torches and accessories.',
            'products' => ['TIG Torches', 'Torch Bodies', 'Consumables', 'Accessories'],
            'features' => [
                'Ergonomic design',
                'Durable construction',
                'Easy maintenance',
                'Compatible with major brands'
            ]
        ],
        'Soyer' => [
            'description' => 'Professional welding equipment and accessories.',
            'products' => [
                ['model' => 'BMAS BN', 'type' => 'Welding Equipment', 'badge' => '', 'image' => 'assets/brands%20items/SOYER/BMS-8N.png'],
                ['model' => 'BMK - B', 'type' => 'Welding Equipment', 'badge' => '', 'image' => 'assets/brands%20items/SOYER/BMK-8i.png'],
                ['model' => 'BMK 12W2', 'type' => 'Welding Equipment', 'badge' => '', 'image' => 'assets/brands%20items/SOYER/BMK-12W.png']
            ]
        ],
        'Alfra' => [
            'description' => 'High-performance magnetic base core drills and annular cutters.',
            'products' => [
                ['model' => 'Alfra V-Line Rotabroach V 32 Low Profile Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/S-Line/RB_V32 - 1.jpg'],
                ['model' => 'Alfra B-Line Rotabroach RB 35/XE Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/B-Line/RB_35_B.jpg'],
                ['model' => 'Alfra B-Line Rotabroach RB 130 Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/B-Line/RB_130_B.jpg'],
                ['model' => 'Alfra RL-E Line Rotabroach RB 60 RL-E Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/RL-E-Line/RB60RL-E - 1.jpg'],
                ['model' => 'Alfra RL-E Line Rotabroach RB 100 RL-E Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/RL-E-Line/RB-100RL-E.jpg'],
                ['model' => 'Alfra Xcl Line Rotabroach RB 35 SP Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/SP-Line/RB_35_SP.jpg'],
                ['model' => 'Alfra X-Line Rotabroach RB 35 Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/B-Line/RB_35_B.jpg'],
                ['model' => 'Alfra X-Line Rotabroach RB 35 X Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/X-Line/RB35_50_X Piccolo.jpg'],
                ['model' => 'Alfra X-Line Rotabroach RB 50 X Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/X-Line/RB_50_X.jpg'],
                ['model' => 'Alfra X-Line Rotabroach RB 80 X Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/X-Line/RB_80_X.jpg'],
                ['model' => 'Alfra X-Line Rotabroach RB 35/50 X Magnetic Base Core Drill', 'type' => 'Core Drill', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/X-Line/RB35_50_X Piccolo.jpg'],
                ['model' => 'Alfra HSS CO Annular', 'type' => 'Annular Cutter', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/Annular Cutter/HSS Co - 1.jpg'],
                ['model' => 'Alfra TCT Annular', 'type' => 'Annular Cutter', 'badge' => '', 'image' => 'assets/brands%20items/ALFRA/Annular Cutter/TCT - 1.jpg']
            ]
        ],
        'ACES' => [
            'description' => 'Premium welding safety equipment and protective gear.',
            'products' => [
                ['model' => 'Aces 2118-1AF Clear', 'type' => 'Safety Equipment', 'badge' => '', 'image' => 'assets/brands%20items/ACES/ACES-2118-1AF.jpg'],
                ['model' => 'Aces 2118-4AF Gray', 'type' => 'Safety Equipment', 'badge' => '', 'image' => 'assets/brands%20items/ACES/ACES-2118-4AF%20GREY.jpg'],
                ['model' => 'Aces 250B', 'type' => 'Welding Helmet', 'badge' => '', 'image' => 'assets/brands%20items/ACES/A188.jpg'],
                ['model' => 'Aces A38B Poly-carbonate Clear Visor', 'type' => 'Visor', 'badge' => '', 'image' => 'assets/brands%20items/ACES/A388.jpg'],
                ['model' => 'Aces A366 Faceshield/Hard Hat Attachment', 'type' => 'Attachment', 'badge' => '', 'image' => 'assets/brands%20items/ACES/A366.jpg'],
                ['model' => 'Aces A28B Welding Helmet', 'type' => 'Welding Helmet', 'badge' => '', 'image' => 'assets/brands%20items/ACES/A288.jpg'],
                ['model' => 'Aces A2538 Welding Helmet w/ Mounting Adaptor', 'type' => 'Welding Helmet', 'badge' => '', 'image' => 'assets/brands%20items/ACES/A238.jpg'],
                ['model' => 'Aces Headgear w/ Polycarbonate Clear Visor', 'type' => 'Safety Equipment', 'badge' => '', 'image' => 'assets/brands%20items/ACES/A300.jpg']
            ]
        ],
        'UVEX' => [
            'description' => 'Professional eye protection and safety equipment.',
            'products' => [
                ['model' => 'UVEX i VO', 'type' => 'Safety Glasses', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/I-VO_9160.265 Clear.jpg'],
                ['model' => 'UVEX Ultra Vision', 'type' => 'Safety Glasses', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/Ultra Vision.jpg'],
                ['model' => 'UVEX Ultrasonic', 'type' => 'Safety Glasses', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/Ultrasonic.jpg'],
                ['model' => 'Uvex OTG', 'type' => 'Safety Glasses', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/OTG.jpg'],
                ['model' => 'Replacement Lens', 'type' => 'Accessory', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/I-VO_9160.520 Amber.jpg'],
                ['model' => 'Uvex KHI Helmet Earmuff', 'type' => 'Safety Equipment', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/K1H Helmet Earmuff.jpg'],
                ['model' => 'Uvex Whisper', 'type' => 'Safety Equipment', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/Whisper.jpg'],
                ['model' => 'Uvex X-Fit', 'type' => 'Safety Equipment', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/X-Fit.jpg'],
                ['model' => 'Uvex X-Fit w/ Cord', 'type' => 'Safety Equipment', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/X-Fit with cord.jpg'],
                ['model' => 'Uvex Slv-Air 2200', 'type' => 'Respirator', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/Silv-Air 2200.jpg'],
                ['model' => 'Uvex Slv-Air 2210', 'type' => 'Respirator', 'badge' => '', 'image' => 'assets/brands%20items/UVEX/Silv-Air 2210.jpg']
            ]
        ],
        'ANSELL' => [
            'description' => 'Premium protective gloves for industrial applications.',
            'products' => [
                ['model' => 'Alphatec-Solvex 37-185', 'type' => 'Gloves', 'badge' => '', 'image' => 'assets/brands%20items/ANSELL/Solvex 37-185_1.jpg'],
                ['model' => 'Alphatec-Solvex 37-176', 'type' => 'Gloves', 'badge' => '', 'image' => 'assets/brands%20items/ANSELL/Solvex 37-176_1.png'],
                ['model' => 'Hyflex 11-724', 'type' => 'Gloves', 'badge' => '', 'image' => 'assets/brands%20items/ANSELL/Hyflex 11-724 - 1.jpg'],
                ['model' => 'Hyflex 11-735', 'type' => 'Gloves', 'badge' => '', 'image' => 'assets/brands%20items/ANSELL/Hyflex 11-735 - 1.jpg'],
                ['model' => 'Edge 48-126', 'type' => 'Gloves', 'badge' => '', 'image' => 'assets/brands%20items/ANSELL/Edge 48-126 - 1.png'],
                ['model' => 'Edge 48-128', 'type' => 'Gloves', 'badge' => '', 'image' => 'assets/brands%20items/ANSELL/Edge 48-128 - 1.png'],
                ['model' => 'Edge 48-706', 'type' => 'Gloves', 'badge' => '', 'image' => 'assets/brands%20items/ANSELL/Edge 48-706 - 1.jpg'],
                ['model' => 'Edge 82-133', 'type' => 'Gloves', 'badge' => '', 'image' => 'assets/brands%20items/ANSELL/Edge_82-133_1.png'],
                ['model' => 'TouchNTuff 92-670', 'type' => 'Gloves', 'badge' => '', 'image' => 'assets/brands%20items/ANSELL/Touchntuff_92-670_1.png']
            ]
        ],
        'MICROGARD' => [
            'description' => 'High-quality protective clothing and coveralls.',
            'products' => [
                ['model' => 'Alphatec 1500 Plus Model 111', 'type' => 'Protective Suit', 'badge' => '', 'image' => 'assets/brands%20items/MICROGARD/Alphatec 1500 Plus 1.png'],
                ['model' => 'Alphatec 2000 Standard Model 111', 'type' => 'Protective Suit', 'badge' => '', 'image' => 'assets/brands%20items/MICROGARD/Alphatec 2000 Standard 1.png'],
                ['model' => 'Alphatec 2300 Plus Model 132', 'type' => 'Protective Suit', 'badge' => '', 'image' => 'assets/brands%20items/MICROGARD/Alphatec 2300 Plus 1.png'],
                ['model' => 'Alphatec 3000 Model 111', 'type' => 'Protective Suit', 'badge' => '', 'image' => 'assets/brands%20items/MICROGARD/Alphatec 3000 1.png'],
                ['model' => 'Alphatec 4000 Model 111', 'type' => 'Protective Suit', 'badge' => '', 'image' => 'assets/brands%20items/MICROGARD/Alphatec 4000 1.png'],
                ['model' => 'Alphatec 1500 FR Plus Model', 'type' => 'Protective Suit', 'badge' => '', 'image' => 'assets/brands%20items/MICROGARD/Alphatec 1500 Plus FR 1.png']
            ]
        ],
        'WELDAS' => [
            'description' => 'Professional welding safety equipment and protective gear.',
            'products' => [
                ['model' => 'Weldas 10-0160', 'type' => 'Welding Safety', 'badge' => '', 'image' => 'assets/brands%20items/WELDAS/10-0160 - 1.png'],
                ['model' => 'Weldas 10-2101', 'type' => 'Welding Safety', 'badge' => '', 'image' => 'assets/brands%20items/WELDAS/10-2101 - 1.jpg'],
                ['model' => 'Weldas 10-1023', 'type' => 'Welding Safety', 'badge' => '', 'image' => 'assets/brands%20items/WELDAS/10-1003 - 1.jpg'],
                ['model' => 'Weldas 10-1009', 'type' => 'Welding Safety', 'badge' => '', 'image' => 'assets/brands%20items/WELDAS/10-1009 - 1.jpg'],
                ['model' => 'Weldas 10-1206', 'type' => 'Welding Safety', 'badge' => '', 'image' => 'assets/brands%20items/WELDAS/10-1206 - 1.jpg'],
                ['model' => 'Weldas 10-2064', 'type' => 'Welding Safety', 'badge' => '', 'image' => 'assets/brands%20items/WELDAS/10-2064 - 1.jpg'],
                ['model' => 'Weldas Lava Shield Welding PVC Screen with Grommets', 'type' => 'Welding Screen', 'badge' => '', 'image' => 'assets/brands%20items/WELDAS/55-5466_Yellow Welding Screen.png'],
                ['model' => 'Weldas PYTHON®Axx Tig Torch Cable Cover', 'type' => 'Cable Cover', 'badge' => '', 'image' => 'assets/brands%20items/WELDAS/44-4022-1.png']
            ]
        ],
        'Safety Jogger' => [
            'description' => 'Premium safety footwear for industrial applications.',
            'products' => [
                ['model' => 'Safety Jogger Ceres', 'type' => 'Safety Shoes', 'badge' => '', 'image' => ''],
                ['model' => 'Safety Jogger Best Girl', 'type' => 'Safety Shoes', 'badge' => '', 'image' => ''],
                ['model' => 'Safety Jogger Best Run 251', 'type' => 'Safety Shoes', 'badge' => '', 'image' => ''],
                ['model' => 'Safety Jogger Advance', 'type' => 'Safety Shoes', 'badge' => '', 'image' => ''],
                ['model' => 'Safety Jogger Elevate', 'type' => 'Safety Shoes', 'badge' => '', 'image' => ''],
                ['model' => 'Safety Jogger Best Boy 2', 'type' => 'Safety Shoes', 'badge' => '', 'image' => ''],
                ['model' => 'Safety Jogger Dubai Black', 'type' => 'Safety Shoes', 'badge' => '', 'image' => ''],
                ['model' => 'Safety Jogger Mars', 'type' => 'Safety Shoes', 'badge' => '', 'image' => '']
            ]
        ],
        'TANAKA' => [
            'description' => 'Professional gas regulators and cutting equipment.',
            'products' => [
                ['model' => 'Tanaka Argon Flowmeter / Regulator F22AR with adapter', 'type' => 'Regulator', 'badge' => '', 'image' => 'assets/brands%20items/TANAKA/TANAKA F22AR - 1.jpg'],
                ['model' => 'Tanaka Straight Cutting Machine KT30X', 'type' => 'Cutting Machine', 'badge' => '', 'image' => 'assets/brands%20items/TANAKA/KT-5NX-1.jpg']
            ]
        ],
        'CHIYODA' => [
            'description' => 'Gas saving regulators and welding accessories.',
            'products' => [
                ['model' => 'Chiyoda Economical Gas Saving Regulator', 'type' => 'Regulator', 'badge' => '', 'image' => 'assets/brands%20items/CHIYODA/H-AR, H-CO2 Type.jpg']
            ]
        ],
        'HARDWORKER' => [
            'description' => 'Welding tools and accessories.',
            'products' => [
                ['model' => 'Hardworker MIG Welding Plier', 'type' => 'Welding Tool', 'badge' => '', 'image' => 'assets/brands%20items/HARDWORKER/MO-ZERO.8 - 1.jpg']
            ]
        ],
        'MAGNAFLUX' => [
            'description' => 'Non-destructive testing and inspection solutions.',
            'products' => [
                ['model' => 'Magnaflux Spotcheck Cleaner / Remover SKC-S', 'type' => 'Inspection', 'badge' => '', 'image' => 'assets/brands%20items/MAGNAFLUX/SKC-S.webp'],
                ['model' => 'Magnaflux Spotcheck Developer Aerosol SKD-S2', 'type' => 'Inspection', 'badge' => '', 'image' => 'assets/brands%20items/MAGNAFLUX/SKD-S2.jpg'],
                ['model' => 'Magnaflux Spotcheck Penetrant Aerosol SKL-SP2', 'type' => 'Inspection', 'badge' => '', 'image' => 'assets/brands%20items/MAGNAFLUX/SKL-SP2.webp'],
                ['model' => 'Magnaflux Prepared Bath Black Magnetic Ink Wet Method 7HF', 'type' => 'Inspection', 'badge' => '', 'image' => 'assets/brands%20items/MAGNAFLUX/7HF.jpg'],
                ['model' => 'Magnaflux Prepared Bath Fluorescent Magnetic Ink Dry Method 14AM', 'type' => 'Inspection', 'badge' => '', 'image' => 'assets/brands%20items/MAGNAFLUX/14HF.png']
            ]
        ],
        'COPPUS' => [
            'description' => 'Industrial ventilation and air movement equipment.',
            'products' => [
                ['model' => 'Coppus® MEB 12 Blower', 'type' => 'Ventilator', 'badge' => '', 'image' => 'assets/brands%20items/COPPUS/Air-Max 12.png'],
                ['model' => 'Turbo Vaneaxial and Centrifugal Ventilators', 'type' => 'Ventilator', 'badge' => '', 'image' => 'assets/brands%20items/COPPUS/Reaction Fan-1.jpg'],
                ['model' => 'Explosion Fan', 'type' => 'Ventilator', 'badge' => '', 'image' => 'assets/brands%20items/COPPUS/Jectair.png'],
                ['model' => 'Double Duty Heat Killer', 'type' => 'Ventilator', 'badge' => '', 'image' => 'assets/brands%20items/COPPUS/Double-Duty-Heat-Killer-1.png'],
                ['model' => 'Nectar and Hornet HP', 'type' => 'Ventilator', 'badge' => '', 'image' => 'assets/brands%20items/COPPUS/Cadet.png'],
                ['model' => 'Vano 175 CV and 250 CV', 'type' => 'Ventilator', 'badge' => '', 'image' => 'assets/brands%20items/COPPUS/Vano.png']
            ]
        ],
        'BOSCH' => [
            'description' => 'Professional power tools for industrial applications.',
            'products' => [
                ['model' => 'Bosch GWS 9-100P Angle Grinder', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GWS 2200-180 Angle Grinder', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GGS 3000L Straight Grinder', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GCO 14-24J Metal Cut Off Saw', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GKS 235 Turbo Hand Held Circular Saw', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GST 80PBE Jig Saw', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GDS 250 Cordless Impact Wrench', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GSR 120-LI Cordless Drill', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GSH 5 Demolition Hammer with SDS Max', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GSR 18V-50 Cordless Drill/Driver GSR 18V-50', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GBH 4-32DFR Rotary Hammer with SDS Plus', 'type' => 'Power Tool', 'badge' => '', 'image' => ''],
                ['model' => 'Bosch GSH 16-30 Demolition Jack Hammer', 'type' => 'Power Tool', 'badge' => '', 'image' => '']
            ]
        ],
        'MOTOLITE' => [
            'description' => 'Automotive and industrial batteries.',
            'products' => [
                ['model' => 'Gold', 'type' => 'Battery', 'badge' => '', 'image' => 'assets/brands%20items/MOTOLITE/Gold.jpg'],
                ['model' => 'Silver', 'type' => 'Battery', 'badge' => '', 'image' => 'assets/brands%20items/MOTOLITE/excel.png'],
                ['model' => 'Enduro', 'type' => 'Battery', 'badge' => '', 'image' => 'assets/brands%20items/MOTOLITE/Enduro.jpg'],
                ['model' => 'TruckMaster', 'type' => 'Battery', 'badge' => '', 'image' => 'assets/brands%20items/MOTOLITE/Truckmaster.png']
            ]
        ],
        // Add more brands as needed
    ];
    
    // Get brand info or use defaults
    $brand_info = isset($brands_info[$brand_name]) ? $brands_info[$brand_name] : [
        'description' => 'High-quality industrial products and solutions.',
        'products' => ['Industrial Equipment', 'Tools', 'Accessories'],
        'features' => [
            'Quality guaranteed',
            'Professional grade',
            'Reliable performance',
            'Expert support'
        ]
    ];
    ?>

    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="logo">
                <div class="logo-box">
                    <a href="home.php"><img src="assets/HOME/image-removebg-preview.png" alt="Andison Industrial" /></a>
                </div>
            </div>
            <a href="brands.php" class="back-button">
                <i class="bi bi-arrow-left"></i> Back to Brands
            </a>
        </div>
    </header>

    <!-- Brand Container -->
    <div class="brand-container">
        <!-- Brand Header -->
        <div class="brand-header">
            <h1><?php echo $brand_name; ?></h1>
            <p><?php echo $brand_info['description']; ?></p>
        </div>

        <!-- Brand Content -->
        <div class="brand-content">
            <h2>Product Range</h2>
            <div class="product-grid">
                <?php foreach($brand_info['products'] as $product): ?>
                    <div class="product-card">
                        <div class="product-image">
                            <?php if(is_array($product) && !empty($product['image'])): ?>
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['model']; ?>" style="width: 100%; height: 100%; object-fit: contain;">
                            <?php else: ?>
                                <img src="assets/brands%20items/PANASONIC/Arc Welding Robot/robot-placeholder.jpg" alt="Product" style="width: 100%; height: 100%; object-fit: contain;" onerror="this.style.display='none'; this.parentElement.innerHTML='🤖';">
                            <?php endif; ?>
                        </div>
                        <?php if(is_array($product)): ?>
                            <?php if(!empty($product['badge'])): ?>
                                <span class="product-badge"><?php echo $product['badge']; ?></span>
                            <?php endif; ?>
                            <h4><?php echo $product['model']; ?></h4>
                            <p><?php echo $product['type']; ?></p>
                        <?php else: ?>
                            <h4><?php echo $product; ?></h4>
                            <p>Professional grade solutions for your industrial needs</p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
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
</body>
</html>
