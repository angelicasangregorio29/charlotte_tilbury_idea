<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Charlotte Tilbury - Luxury Beauty & Cosmetics</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:400,500,600,700|inter:300,400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        :root {
            --ct-cream: #FAF9F7;
            --ct-rose: #E8C4B8;
            --ct-gold: #B8926A;
            --ct-black: #000000;
            --ct-burgundy: #95223C;
            --ct-text-gray: #2C2C2C;
            --ct-hover: #C9A86A;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-image: url('/hero-banner.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            overflow-x: hidden;
        }
        
        .font-display { font-family: 'Playfair Display', serif; }
        
        /* Top Bar */
        .top-bar {
            background: var(--ct-black);
            color: white;
            padding: 12px 0;
            text-align: center;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
            overflow: hidden;
        }
        
        .promo-slider {
            position: relative;
            height: 20px;
        }
        
        .promo-message {
            position: absolute;
            width: 100%;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        
        .promo-message.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Navigation */
        nav {
            background: linear-gradient(135deg, #E8948C 0%, #D4A574 100%);
            padding: 18px 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo { 
            font-size: 24px; 
            font-weight: 700; 
            letter-spacing: 3px; 
            color: #FFFFFF;
            transition: all 0.3s ease;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .logo:hover {
            transform: scale(1.05);
            color: #FFF8E7;
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }
        
        .nav-link {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1.2px;
            transition: all 0.3s ease;
            position: relative;
            padding: 10px 0;
            display: inline-block;
            cursor: pointer;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #FFFFFF;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover {
            color: #FFF8E7;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Mega Menu */
        .nav-item {
            position: relative;
        }
        
        .mega-menu {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(10px);
            background: #FFFFFF;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            padding: 40px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            margin-top: 12px;
            min-width: 800px;
            border-radius: 0;
        }
        
        .nav-item:hover .mega-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }
        
        .mega-menu-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 35px;
        }
        
        .mega-menu h3 {
            margin-bottom: 18px;
            color: var(--ct-black);
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
        
        .mega-menu a {
            display: block;
            padding: 10px 0;
            color: #4A4A4A;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            font-weight: 400;
        }
        
        .mega-menu a:hover {
            color: var(--ct-gold);
            padding-left: 8px;
        }
        

        
        /* Icons */
        .nav-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        
        .icon-btn {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #FFFFFF;
            transition: all 0.3s ease;
            position: relative;
            padding: 8px;
        }
        
        .icon-btn:hover {
            color: #FFF8E7;
            transform: scale(1.15);
        }
        
        .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #FFFFFF;
            color: #E8948C;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.25);
        }
        
        /* Video Hero */
        .video-hero {
            position: relative;
            height: 80vh;
            overflow: hidden;
        }
        
        .video-hero video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to right, rgba(0,0,0,0.5) 0%, transparent 100%);
            display: flex;
            align-items: center;
        }
        
        .video-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            color: white;
        }
        
        .video-content h1 {
            font-size: 64px;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
        }
        
        .video-content p {
            font-size: 20px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.3s both;
        }
        
        .video-content .btn-group {
            animation: fadeInUp 1s ease 0.6s both;
        }
        
        /* Carousel/Slider */
        .carousel-section {
            padding: 80px 20px;
            background: white;
        }
        
        .carousel-container {
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
        }
        
        .carousel {
            overflow: hidden;
            position: relative;
        }
        
        .carousel-track {
            display: flex;
            transition: transform 0.5s ease;
        }
        
        .carousel-item {
            min-width: calc(25% - 20px);
            margin: 0 10px;
        }
        
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            cursor: pointer;
            font-size: 20px;
            z-index: 10;
            transition: all 0.3s;
        }
        
        .carousel-btn:hover {
            background: var(--ct-burgundy);
            color: white;
        }
        
        .carousel-btn.prev { left: -25px; }
        .carousel-btn.next { right: -25px; }
        
        /* Product Filters */
        .filters-section {
            background: var(--ct-cream);
            padding: 40px 20px;
        }
        
        .filters-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .filter-group {
            flex: 1;
            min-width: 200px;
        }
        
        .filter-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
        }
        
        .filter-group select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }
        
        .price-range {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .price-range input {
            width: 100%;
        }
        
        /* Product Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            padding: 40px 20px;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            position: relative;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .product-image {
            position: relative;
            overflow: hidden;
            height: 320px;
        }
        
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .product-card:hover .product-image img {
            transform: scale(1.1);
        }
        
        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--ct-gold);
            color: white;
            padding: 6px 16px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            z-index: 6;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        
        .product-badge.sale {
            background: var(--ct-burgundy);
        }
        
        .product-badge.new {
            background: #2C2C2C;
        }
        
        .wishlist-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            background: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            z-index: 5;
        }
        
        .wishlist-btn:hover, .wishlist-btn.active {
            background: var(--ct-burgundy);
            color: white;
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-info h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .product-price {
            color: var(--ct-gold);
            font-weight: 700;
            font-size: 20px;
            margin-bottom: 10px;
        }
        
        .product-rating {
            color: var(--ct-gold);
            margin-bottom: 15px;
        }
        
        .add-to-cart-btn {
            width: 100%;
            padding: 12px;
            background: var(--ct-black);
            color: white;
            border: none;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .add-to-cart-btn:hover {
            background: var(--ct-burgundy);
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.8);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s;
        }
        
        .modal.active {
            display: flex;
        }
        
        .modal-content {
            background: white;
            border-radius: 12px;
            max-width: 1000px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            animation: slideUp 0.3s;
        }
        
        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            z-index: 10;
        }
        
        .modal-body {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 40px;
        }
        
        .modal-image img {
            width: 100%;
            border-radius: 8px;
        }
        
        .modal-details h2 {
            font-size: 32px;
            margin-bottom: 15px;
        }
        
        .modal-details .price {
            font-size: 28px;
            color: var(--ct-gold);
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .modal-details .description {
            margin-bottom: 25px;
            line-height: 1.6;
            color: #666;
        }
        
        /* Cart Sidebar */
        .cart-sidebar {
            position: fixed;
            right: -400px;
            top: 0;
            bottom: 0;
            width: 400px;
            background: white;
            box-shadow: -2px 0 10px rgba(0,0,0,0.2);
            transition: right 0.3s;
            z-index: 10000;
            display: flex;
            flex-direction: column;
        }
        
        .cart-sidebar.active {
            right: 0;
        }
        
        .cart-header {
            padding: 20px;
            border-bottom: 2px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .cart-items {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }
        
        .cart-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .cart-item-info {
            flex: 1;
        }
        
        .cart-footer {
            padding: 20px;
            border-top: 2px solid #f0f0f0;
        }
        
        .cart-total {
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .checkout-btn {
            width: 100%;
            padding: 15px;
            background: var(--ct-burgundy);
            color: white;
            border: none;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            border-radius: 4px;
        }
        
        /* Reviews Section */
        .reviews-section {
            padding: 80px 20px;
            background: white;
        }
        
        .reviews-container {
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .review-card {
            background: var(--ct-cream);
            padding: 30px;
            border-radius: 12px;
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        
        .review-author {
            font-weight: 600;
        }
        
        .review-stars {
            color: var(--ct-gold);
        }
        
        .review-text {
            line-height: 1.6;
            color: #666;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        /* Scroll Animation */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }
        
        .scroll-reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Utilities */
        .container { max-width: 1400px; margin: 0 auto; padding: 0 20px; }
        .text-center { text-align: center; }
        .gold-line { width: 60px; height: 2px; background: var(--ct-gold); margin: 20px auto; }
        
        .btn-primary {
            background: var(--ct-black);
            color: white;
            padding: 14px 40px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
        }
        
        .btn-primary:hover {
            background: var(--ct-burgundy);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--ct-black);
            padding: 14px 40px;
            border: 2px solid var(--ct-black);
            cursor: pointer;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 500;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
        }
        
        .btn-secondary:hover {
            background: var(--ct-black);
            color: white;
        }
        
        h2 { font-size: 42px; margin-bottom: 10px; font-weight: 600; }
        
        @media (max-width: 768px) {
            .nav-links { display: none; }
            .mega-menu-content { grid-template-columns: 1fr; }
            .carousel-item { min-width: calc(100% - 20px); }
            .modal-body { grid-template-columns: 1fr; }
            .cart-sidebar { width: 100%; right: -100%; }
            .video-content h1 { font-size: 36px; }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="promo-slider">
            <div class="promo-message active">🎁 Free Delivery on orders over €59</div>
            <div class="promo-message">✨ 15% OFF your first order with code DARLING15</div>
            <div class="promo-message">💝 Discover rewards with Charlotte's Loyalty Program</div>
        </div>
    </div>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="/" class="logo font-display" style="text-decoration: none;">CHARLOTTE TILBURY</a>
            
            <div class="nav-links">
                <div class="nav-item">
                    <span class="nav-link">MAKEUP</span>
                    <div class="mega-menu">
                        <div class="mega-menu-content">
                            <div>
                                <h3>Face</h3>
                                <a href="#">Foundation</a>
                                <a href="#">Concealer</a>
                                <a href="#">Primer</a>
                                <a href="#">Powder</a>
                                <a href="#">Highlighter</a>
                            </div>
                            <div>
                                <h3>Lips</h3>
                                <a href="#">Lipsticks</a>
                                <a href="#">Lip Gloss</a>
                                <a href="#">Lip Liners</a>
                                <a href="#">Balms</a>
                            </div>
                            <div>
                                <h3>Eyes</h3>
                                <a href="#">Mascara</a>
                                <a href="#">Eyeliner</a>
                                <a href="#">Eyeshadow</a>
                                <a href="#">Brows</a>
                            </div>
                            <div>
                                <h3>Brushes</h3>
                                <a href="#">Brush Sets</a>
                                <a href="#">Face Brushes</a>
                                <a href="#">Eye Brushes</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="nav-item">
                    <span class="nav-link">SKINCARE</span>
                    <div class="mega-menu">
                        <div class="mega-menu-content">
                            <div>
                                <h3>Cleansing</h3>
                                <a href="#">Cleansers</a>
                                <a href="#">Toners</a>
                                <a href="#">Exfoliators</a>
                            </div>
                            <div>
                                <h3>Treatments</h3>
                                <a href="#">Serums</a>
                                <a href="#">Face Creams</a>
                                <a href="#">Masks</a>
                            </div>
                            <div>
                                <h3>Eyes & Lips</h3>
                                <a href="#">Eye Creams</a>
                                <a href="#">Lip Treatments</a>
                            </div>
                            <div>
                                <h3>Protection</h3>
                                <a href="#">SPF</a>
                                <a href="#">Anti-Aging</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="nav-link">FRAGRANCE</a>
                <a href="#bestsellers" class="nav-link">BESTSELLERS</a>
                <a href="#" class="nav-link">GIFTS</a>
            </div>
            
            <div class="nav-icons">
                @if (Route::has('login'))
                    @auth
                        <button class="icon-btn"><i class="fas fa-user"></i></button>
                    @else
                        <button class="icon-btn" onclick="window.location.href='{{ route('login') }}'"><i class="fas fa-user"></i></button>
                    @endauth
                @endif
                
                <button class="icon-btn" onclick="toggleWishlist()">
                    <i class="fas fa-heart"></i>
                    <span class="badge" id="wishlist-count">0</span>
                </button>
                
                <button class="icon-btn" onclick="toggleCart()">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="badge" id="cart-count">0</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Video Hero -->
    <div class="video-hero">
        <video autoplay muted loop playsinline>
            <source src="https://cdn.coverr.co/videos/coverr-woman-applying-makeup-6408/1080p.mp4" type="video/mp4">
        </video>
        <div class="video-overlay">
            <div class="video-content">
                <h1 class="font-display">The Magic of Beauty</h1>
                <p>Discover Charlotte's beauty secrets: iconic makeup, revolutionary skincare</p>
                <div class="btn-group">
                    <a href="#bestsellers" class="btn-primary">Shop Bestsellers</a>
                    <a href="#carousel" class="btn-secondary" style="margin-left: 15px;">New Arrivals</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Trust Badges -->
    <section style="background: rgba(248, 245, 242, 0.95); padding: 40px 0; border-top: 1px solid #E8E8E8; border-bottom: 1px solid #E8E8E8; backdrop-filter: blur(10px);">
        <div class="container" style="background: transparent;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; text-align: center;">
                <div class="trust-item reveal">
                    <i class="fas fa-shipping-fast" style="font-size: 36px; color: var(--ct-gold); margin-bottom: 15px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.5px;">Free Delivery</h4>
                    <p style="font-size: 13px; color: #666; margin: 0; line-height: 1.6;">On orders over €59</p>
                </div>
                <div class="trust-item reveal">
                    <i class="fas fa-award" style="font-size: 36px; color: var(--ct-gold); margin-bottom: 15px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.5px;">Rewards Program</h4>
                    <p style="font-size: 13px; color: #666; margin: 0; line-height: 1.6;">Earn points with every purchase</p>
                </div>
                <div class="trust-item reveal">
                    <i class="fas fa-heart" style="font-size: 36px; color: var(--ct-gold); margin-bottom: 15px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.5px;">Cruelty Free</h4>
                    <p style="font-size: 13px; color: #666; margin: 0; line-height: 1.6;">Approved by Leaping Bunny</p>
                </div>
                <div class="trust-item reveal">
                    <i class="fas fa-headset" style="font-size: 36px; color: var(--ct-gold); margin-bottom: 15px;"></i>
                    <h4 style="font-size: 14px; font-weight: 700; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.5px;">Expert Support</h4>
                    <p style="font-size: 13px; color: #666; margin: 0; line-height: 1.6;">Virtual consultations available</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section id="carousel" class="carousel-section scroll-reveal">
        <div class="carousel-container">
            <div class="text-center">
                <h2 class="font-display">Featured Products</h2>
                <div class="gold-line"></div>
                <p style="max-width: 600px; margin: 20px auto 50px; color: #666;">Our most iconic products loved by celebrities</p>
            </div>
            
            <div class="carousel">
                <button class="carousel-btn prev" onclick="moveCarousel(-1)"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-btn next" onclick="moveCarousel(1)"><i class="fas fa-chevron-right"></i></button>
                
                <div class="carousel-track" id="carousel-track">
                    <!-- Carousel items will be dynamically added -->
                </div>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class="filters-section scroll-reveal">
        <div class="filters-container">
            <div class="filter-group">
                <label>Category</label>
                <select id="category-filter" onchange="filterProducts()">
                    <option value="all">All Categories</option>
                    <option value="makeup">Makeup</option>
                    <option value="skincare">Skincare</option>
                    <option value="fragrance">Fragrance</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label>Price</label>
                <select id="price-filter" onchange="filterProducts()">
                    <option value="all">All Prices</option>
                    <option value="0-30">€0 - €30</option>
                    <option value="30-60">€30 - €60</option>
                    <option value="60-100">€60 - €100</option>
                    <option value="100+">€100+</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label>Sort By</label>
                <select id="sort-filter" onchange="filterProducts()">
                    <option value="featured">Featured</option>
                    <option value="price-low">Price: Low → High</option>
                    <option value="price-high">Price: High → Low</option>
                    <option value="rating">Best Rating</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section id="bestsellers" class="scroll-reveal">
        <div class="products-grid" id="products-grid">
            <!-- Products will be dynamically added -->
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews-section scroll-reveal">
        <div class="reviews-container">
            <div class="text-center">
                <h2 class="font-display">What Our Customers Say</h2>
                <div class="gold-line"></div>
            </div>
            
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">Sophie R.</div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        "The Pillow Talk Lipstick is simply perfect! The color is universal and lasts all day. Absolutely my favorite!"
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">Julia M.</div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        "The Magic Cream has transformed my skin! My complexion is brighter and more hydrated. Worth every penny!"
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">Emma B.</div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        "Incredible quality products. The Flawless Filter foundation covers perfectly and gives a natural finish."
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Modal -->
    <div class="modal" id="product-modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">✕</button>
            <div class="modal-body" id="modal-body">
                <!-- Content will be dynamically added -->
            </div>
        </div>
    </div>

    <!-- Cart Sidebar -->
    <div class="cart-sidebar" id="cart-sidebar">
        <div class="cart-header">
            <h3>Your Cart</h3>
            <button class="icon-btn" onclick="toggleCart()">✕</button>
        </div>
        <div class="cart-items" id="cart-items">
            <p style="text-align: center; color: #999; padding: 40px 0;">Your cart is empty</p>
        </div>
        <div class="cart-footer">
            <div class="cart-total">
                <span>Total:</span>
                <span id="cart-total">€0.00</span>
            </div>
            <button class="checkout-btn">Proceed to Checkout</button>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background: var(--ct-black); color: white; padding: 60px 20px 30px;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; margin-bottom: 40px;">
                <div>
                    <h3 style="margin-bottom: 20px;">Customer Service</h3>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Contact Us</a>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Shipping</a>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Returns</a>
                </div>
                <div>
                    <h3 style="margin-bottom: 20px;">Information</h3>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">About Us</a>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Careers</a>
                </div>
                <div>
                    <h3 style="margin-bottom: 20px;">Follow Us</h3>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Instagram</a>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Facebook</a>
                </div>
            </div>
            <div style="text-align: center; padding-top: 30px; border-top: 1px solid #333; color: #999;">
                <p>&copy; 2026 Charlotte Tilbury Beauty. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Products Data
        const products = [
            { id: 1, name: 'Pillow Talk Lipstick', price: 35, category: 'makeup', rating: 5, image: '/trucco.jpg', description: 'The iconic most-loved lipstick with matte finish', badge: 'BESTSELLER' },
            { id: 2, name: 'Magic Cream', price: 95, originalPrice: 132, category: 'skincare', rating: 5, image: '/body-tilbury.jpg', description: 'Hydrating face cream with velvety texture', badge: 'SALE', badgeClass: 'sale' },
            { id: 3, name: 'Flawless Filter', price: 38, category: 'makeup', rating: 5, image: '/fondotinta.jpg', description: 'Illuminating foundation for perfect skin', badge: 'NEW', badgeClass: 'new' },
            { id: 4, name: 'Setting Spray', price: 38, category: 'makeup', rating: 4, image: '/trucco.jpg', description: 'Sets makeup for 16 hours', badge: 'BESTSELLER' },
            { id: 5, name: 'Magic Serum', price: 75, category: 'skincare', rating: 5, image: '/body-tilbury.jpg', description: 'Anti-aging serum with vitamin C' },
            { id: 6, name: 'Matte Revolution', price: 32, category: 'makeup', rating: 5, image: '/trucco.jpg', description: 'Long-lasting matte lipstick' },
            { id: 7, name: 'Scent of a Dream', price: 125, originalPrice: 150, category: 'fragrance', rating: 5, image: '/body-tilbury.jpg', description: 'Sensual floral fragrance', badge: 'SALE', badgeClass: 'sale' },
            { id: 8, name: 'Eye Cream', price: 55, category: 'skincare', rating: 4, image: '/fondotinta.jpg', description: 'Anti-wrinkle eye contour cream', badge: 'NEW', badgeClass: 'new' },
        ];

        let cart = [];
        let wishlist = [];
        let currentCarouselIndex = 0;

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            renderProducts(products);
            renderCarousel();
            initScrollAnimations();
        });

        // Render Products
        function renderProducts(productsToRender) {
            const grid = document.getElementById('products-grid');
            grid.innerHTML = productsToRender.map(product => `
                <div class="product-card" onclick="openModal(${product.id})">
                    ${product.badge ? `<div class="product-badge ${product.badgeClass || ''}">${product.badge}</div>` : ''}
                    <div class="product-image">
                        <img src="${product.image}" alt="${product.name}">
                        <button class="wishlist-btn" onclick="event.stopPropagation(); toggleWishlistItem(${product.id})" id="wishlist-${product.id}">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3>${product.name}</h3>
                        <div class="product-rating">${'★'.repeat(product.rating)}${'☆'.repeat(5-product.rating)}</div>
                        <div class="product-price">
                            ${product.originalPrice ? `<span style="text-decoration: line-through; color: #999; font-size: 14px; margin-right: 8px;">€${product.originalPrice.toFixed(2)}</span>` : ''}
                            €${product.price.toFixed(2)}
                        </div>
                        <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCart(${product.id})">
                            Add to Cart
                        </button>
                    </div>
                </div>
            `).join('');
        }

        // Render Carousel
        function renderCarousel() {
            const track = document.getElementById('carousel-track');
            track.innerHTML = products.slice(0, 6).map(product => `
                <div class="carousel-item">
                    <div class="product-card" onclick="openModal(${product.id})">
                        <div class="product-image">
                            <img src="${product.image}" alt="${product.name}">
                        </div>
                        <div class="product-info">
                            <h3>${product.name}</h3>
                            <div class="product-price">€${product.price.toFixed(2)}</div>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Carousel Navigation
        function moveCarousel(direction) {
            const track = document.getElementById('carousel-track');
            const itemWidth = track.querySelector('.carousel-item').offsetWidth + 20;
            currentCarouselIndex += direction;
            
            if (currentCarouselIndex < 0) currentCarouselIndex = 0;
            if (currentCarouselIndex > products.length - 4) currentCarouselIndex = products.length - 4;
            
            track.style.transform = `translateX(-${currentCarouselIndex * itemWidth}px)`;
        }

        // Filter Products
        function filterProducts() {
            const category = document.getElementById('category-filter').value;
            const priceRange = document.getElementById('price-filter').value;
            const sort = document.getElementById('sort-filter').value;
            
            let filtered = [...products];
            
            if (category !== 'all') {
                filtered = filtered.filter(p => p.category === category);
            }
            
            if (priceRange !== 'all') {
                const [min, max] = priceRange.split('-').map(v => v === '+' ? Infinity : parseInt(v));
                filtered = filtered.filter(p => p.price >= min && (max ? p.price <= max : true));
            }
            
            if (sort === 'price-low') filtered.sort((a, b) => a.price - b.price);
            if (sort === 'price-high') filtered.sort((a, b) => b.price - a.price);
            if (sort === 'rating') filtered.sort((a, b) => b.rating - a.rating);
            
            renderProducts(filtered);
        }

        // Modal
        function openModal(productId) {
            const product = products.find(p => p.id === productId);
            const modal = document.getElementById('product-modal');
            const modalBody = document.getElementById('modal-body');
            
            modalBody.innerHTML = `
                <div class="modal-image">
                    <img src="${product.image}" alt="${product.name}">
                </div>
                <div class="modal-details">
                    <h2 class="font-display">${product.name}</h2>
                    <div class="product-rating">${'★'.repeat(product.rating)}${'☆'.repeat(5-product.rating)}</div>
                    <div class="price">€${product.price.toFixed(2)}</div>
                    <p class="description">${product.description}</p>
                    <button class="btn-primary" style="width: 100%; margin-bottom: 15px;" onclick="addToCart(${product.id}); closeModal();">
                        Add to Cart
                    </button>
                    <button class="btn-secondary" style="width: 100%;" onclick="toggleWishlistItem(${product.id})">
                        <i class="far fa-heart"></i> Add to Wishlist
                    </button>
                </div>
            `;
            
            modal.classList.add('active');
        }

        function closeModal() {
            document.getElementById('product-modal').classList.remove('active');
        }

        // Cart
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push({ ...product, quantity: 1 });
            }
            
            updateCart();
            showNotification('Product added to cart!');
        }

        function updateCart() {
            const cartItems = document.getElementById('cart-items');
            const cartCount = document.getElementById('cart-count');
            const cartTotal = document.getElementById('cart-total');
            
            cartCount.textContent = cart.reduce((sum, item) => sum + item.quantity, 0);
            
            if (cart.length === 0) {
                cartItems.innerHTML = '<p style="text-align: center; color: #999; padding: 40px 0;">Your cart is empty</p>';
                cartTotal.textContent = '€0.00';
                return;
            }
            
            cartItems.innerHTML = cart.map(item => `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="cart-item-info">
                        <h4>${item.name}</h4>
                        <p>€${item.price.toFixed(2)}</p>
                        <p>Quantity: ${item.quantity}</p>
                    </div>
                    <button onclick="removeFromCart(${item.id})" style="border: none; background: none; cursor: pointer; color: #999;">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `).join('');
            
            const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            cartTotal.textContent = `€${total.toFixed(2)}`;
        }

        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCart();
        }

        function toggleCart() {
            document.getElementById('cart-sidebar').classList.toggle('active');
        }

        // Wishlist
        function toggleWishlistItem(productId) {
            const index = wishlist.indexOf(productId);
            const btn = document.getElementById(`wishlist-${productId}`);
            
            if (index > -1) {
                wishlist.splice(index, 1);
                if (btn) btn.classList.remove('active');
                showNotification('Removed from wishlist');
            } else {
                wishlist.push(productId);
                if (btn) btn.classList.add('active');
                showNotification('Added to wishlist!');
            }
            
            document.getElementById('wishlist-count').textContent = wishlist.length;
        }

        function toggleWishlist() {
            showNotification('Wishlist Feature - Coming Soon');
        }

        // Scroll Animations
        function initScrollAnimations() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.scroll-reveal').forEach(el => {
                observer.observe(el);
            });
        }

        // Promo Slider Animation
        let currentPromo = 0;
        const promoMessages = document.querySelectorAll('.promo-message');
        
        function rotatePromo() {
            promoMessages[currentPromo].classList.remove('active');
            currentPromo = (currentPromo + 1) % promoMessages.length;
            promoMessages[currentPromo].classList.add('active');
        }
        
        if (promoMessages.length > 0) {
            setInterval(rotatePromo, 4000);
        }

        // Notifications
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.textContent = message;
            notification.style.cssText = `
                position: fixed;
                bottom: 30px;
                right: 30px;
                background: var(--ct-burgundy);
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.2);
                z-index: 10001;
                animation: slideUp 0.3s ease;
            `;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'fadeOut 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }

        // Close modal on outside click
        document.getElementById('product-modal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });
        
        // Close cart on outside click
        document.addEventListener('click', function(e) {
            const cartSidebar = document.getElementById('cart-sidebar');
            const cartBtn = e.target.closest('.icon-btn');
            
            if (!cartSidebar.contains(e.target) && !cartBtn && cartSidebar.classList.contains('active')) {
                toggleCart();
            }
        });
    </script>
</body>
</html>
