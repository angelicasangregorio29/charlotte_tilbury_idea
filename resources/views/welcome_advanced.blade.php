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
            --ct-cream: #F8F5F0;
            --ct-rose: #E8C4B8;
            --ct-gold: #C9A86A;
            --ct-black: #1A1A1A;
            --ct-burgundy: #8B2332;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--ct-cream);
            overflow-x: hidden;
        }
        
        .font-display { font-family: 'Playfair Display', serif; }
        
        /* Top Bar */
        .top-bar {
            background: var(--ct-burgundy);
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 13px;
        }
        
        /* Navigation */
        nav {
            background: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
        
        .logo { font-size: 24px; font-weight: 700; letter-spacing: 2px; }
        
        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }
        
        .nav-link {
            color: var(--ct-black);
            text-decoration: none;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: color 0.3s;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--ct-burgundy);
        }
        
        /* Mega Menu */
        .mega-menu {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            padding: 40px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s;
        }
        
        .nav-link:hover .mega-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .mega-menu-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }
        
        .mega-menu h3 {
            margin-bottom: 15px;
            color: var(--ct-burgundy);
            font-size: 16px;
        }
        
        .mega-menu a {
            display: block;
            padding: 8px 0;
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }
        
        .mega-menu a:hover {
            color: var(--ct-burgundy);
        }
        
        /* Search Bar */
        .search-bar {
            position: relative;
        }
        
        .search-input {
            padding: 10px 40px 10px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 25px;
            width: 250px;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        .search-input:focus {
            outline: none;
            border-color: var(--ct-burgundy);
            width: 350px;
        }
        
        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
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
            color: var(--ct-black);
            transition: color 0.3s;
            position: relative;
        }
        
        .icon-btn:hover {
            color: var(--ct-burgundy);
        }
        
        .badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--ct-burgundy);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
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
        🎁 Consegna Gratuita per ordini superiori a €59 | Scopri il Programma Fedeltà
    </div>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo font-display">CHARLOTTE TILBURY</div>
            
            <div class="nav-links">
                <div class="nav-link" style="position: relative;">
                    TRUCCO
                    <div class="mega-menu">
                        <div class="mega-menu-content">
                            <div>
                                <h3>Viso</h3>
                                <a href="#">Fondotinta</a>
                                <a href="#">Correttore</a>
                                <a href="#">Primer</a>
                                <a href="#">Cipria</a>
                                <a href="#">Illuminante</a>
                            </div>
                            <div>
                                <h3>Labbra</h3>
                                <a href="#">Rossetti</a>
                                <a href="#">Lip Gloss</a>
                                <a href="#">Matite Labbra</a>
                                <a href="#">Balsami</a>
                            </div>
                            <div>
                                <h3>Occhi</h3>
                                <a href="#">Mascara</a>
                                <a href="#">Eyeliner</a>
                                <a href="#">Ombretti</a>
                                <a href="#">Sopracciglia</a>
                            </div>
                            <div>
                                <h3>Pennelli</h3>
                                <a href="#">Set Pennelli</a>
                                <a href="#">Pennelli Viso</a>
                                <a href="#">Pennelli Occhi</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="nav-link" style="position: relative;">
                    SKINCARE
                    <div class="mega-menu">
                        <div class="mega-menu-content">
                            <div>
                                <h3>Pulizia</h3>
                                <a href="#">Detergenti</a>
                                <a href="#">Tonici</a>
                                <a href="#">Esfolianti</a>
                            </div>
                            <div>
                                <h3>Trattamenti</h3>
                                <a href="#">Sieri</a>
                                <a href="#">Creme Viso</a>
                                <a href="#">Maschere</a>
                            </div>
                            <div>
                                <h3>Occhi & Labbra</h3>
                                <a href="#">Creme Contorno Occhi</a>
                                <a href="#">Trattamenti Labbra</a>
                            </div>
                            <div>
                                <h3>Protezione</h3>
                                <a href="#">SPF</a>
                                <a href="#">Anti-età</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="nav-link">PROFUMI</a>
                <a href="#bestsellers" class="nav-link">BEST SELLER</a>
                <a href="#" class="nav-link">REGALI</a>
            </div>
            
            <div class="nav-icons">
                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="Cerca prodotti...">
                    <i class="fas fa-search search-icon"></i>
                </div>
                
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
                <h1 class="font-display">La Magia della Bellezza</h1>
                <p>Scopri i segreti di bellezza di Charlotte: makeup iconico, skincare rivoluzionaria</p>
                <div class="btn-group">
                    <a href="#bestsellers" class="btn-primary">Scopri i Best Seller</a>
                    <a href="#carousel" class="btn-secondary" style="margin-left: 15px;">Nuovi Arrivi</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Section -->
    <section id="carousel" class="carousel-section scroll-reveal">
        <div class="carousel-container">
            <div class="text-center">
                <h2 class="font-display">Prodotti in Evidenza</h2>
                <div class="gold-line"></div>
                <p style="max-width: 600px; margin: 20px auto 50px; color: #666;">I nostri prodotti più iconici e amati dalle star</p>
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
                <label>Categoria</label>
                <select id="category-filter" onchange="filterProducts()">
                    <option value="all">Tutte le Categorie</option>
                    <option value="makeup">Trucco</option>
                    <option value="skincare">Skincare</option>
                    <option value="fragrance">Profumi</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label>Prezzo</label>
                <select id="price-filter" onchange="filterProducts()">
                    <option value="all">Tutti i Prezzi</option>
                    <option value="0-30">€0 - €30</option>
                    <option value="30-60">€30 - €60</option>
                    <option value="60-100">€60 - €100</option>
                    <option value="100+">€100+</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label>Ordina per</label>
                <select id="sort-filter" onchange="filterProducts()">
                    <option value="featured">In Evidenza</option>
                    <option value="price-low">Prezzo: Basso → Alto</option>
                    <option value="price-high">Prezzo: Alto → Basso</option>
                    <option value="rating">Migliore Recensione</option>
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
                <h2 class="font-display">Cosa Dicono Le Nostre Clienti</h2>
                <div class="gold-line"></div>
            </div>
            
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">Sofia R.</div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        "Il Pillow Talk Lipstick è semplicemente perfetto! Il colore è universale e dura tutto il giorno. Assolutamente il mio preferito!"
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">Giulia M.</div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        "La Magic Cream ha trasformato la mia pelle! La mia carnagione è più luminosa e idratata. Vale ogni centesimo!"
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">Elena B.</div>
                        <div class="review-stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                        "Prodotti di qualità incredibile. Il fondotinta Flawless Filter copre perfettamente e dona un finish naturale."
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
            <h3>Il Tuo Carrello</h3>
            <button class="icon-btn" onclick="toggleCart()">✕</button>
        </div>
        <div class="cart-items" id="cart-items">
            <p style="text-align: center; color: #999; padding: 40px 0;">Il tuo carrello è vuoto</p>
        </div>
        <div class="cart-footer">
            <div class="cart-total">
                <span>Totale:</span>
                <span id="cart-total">€0.00</span>
            </div>
            <button class="checkout-btn">Procedi al Checkout</button>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background: var(--ct-black); color: white; padding: 60px 20px 30px;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; margin-bottom: 40px;">
                <div>
                    <h3 style="margin-bottom: 20px;">Assistenza Clienti</h3>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Contattaci</a>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Spedizione</a>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Resi</a>
                </div>
                <div>
                    <h3 style="margin-bottom: 20px;">Informazioni</h3>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Chi Siamo</a>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Lavora con Noi</a>
                </div>
                <div>
                    <h3 style="margin-bottom: 20px;">Seguici</h3>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Instagram</a>
                    <a href="#" style="color: #ccc; text-decoration: none; display: block; margin-bottom: 10px;">Facebook</a>
                </div>
            </div>
            <div style="text-align: center; padding-top: 30px; border-top: 1px solid #333; color: #999;">
                <p>&copy; 2026 Charlotte Tilbury Beauty. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

    <script>
        // Products Data
        const products = [
            { id: 1, name: 'Pillow Talk Lipstick', price: 35, category: 'makeup', rating: 5, image: 'https://images.unsplash.com/photo-1586495777744-4413f21062fa?w=400&h=400&fit=crop', description: 'Il rossetto iconico più amato con finish matte' },
            { id: 2, name: 'Magic Cream', price: 95, category: 'skincare', rating: 5, image: 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=400&h=400&fit=crop', description: 'Crema viso idratante con texture vellutata' },
            { id: 3, name: 'Flawless Filter', price: 38, category: 'makeup', rating: 5, image: 'https://images.unsplash.com/photo-1596755389378-c31d21fd1273?w=400&h=400&fit=crop', description: 'Fondotinta illuminante per una pelle perfetta' },
            { id: 4, name: 'Setting Spray', price: 38, category: 'makeup', rating: 4, image: 'https://images.unsplash.com/photo-1598452963314-b09f397a5c48?w=400&h=400&fit=crop', description: 'Fissa il trucco per 16 ore' },
            { id: 5, name: 'Magic Serum', price: 75, category: 'skincare', rating: 5, image: 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=400&h=400&fit=crop', description: 'Siero anti-età con vitamina C' },
            { id: 6, name: 'Matte Revolution', price: 32, category: 'makeup', rating: 5, image: 'https://images.unsplash.com/photo-1631214540240-54e2c98e7af1?w=400&h=400&fit=crop', description: 'Rossetto matte a lunga durata' },
            { id: 7, name: 'Scent of a Dream', price: 125, category: 'fragrance', rating: 5, image: 'https://images.unsplash.com/photo-1541643600914-78b084683601?w=400&h=400&fit=crop', description: 'Fragranza floreale sensuale' },
            { id: 8, name: 'Eye Cream', price: 55, category: 'skincare', rating: 4, image: 'https://images.unsplash.com/photo-1612817288484-6f916006741a?w=400&h=400&fit=crop', description: 'Crema contorno occhi anti-rughe' },
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
                    <div class="product-image">
                        <img src="${product.image}" alt="${product.name}">
                        <button class="wishlist-btn" onclick="event.stopPropagation(); toggleWishlistItem(${product.id})" id="wishlist-${product.id}">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h3>${product.name}</h3>
                        <div class="product-rating">${'★'.repeat(product.rating)}${'☆'.repeat(5-product.rating)}</div>
                        <div class="product-price">€${product.price.toFixed(2)}</div>
                        <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCart(${product.id})">
                            Aggiungi al Carrello
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
                        Aggiungi al Carrello
                    </button>
                    <button class="btn-secondary" style="width: 100%;" onclick="toggleWishlistItem(${product.id})">
                        <i class="far fa-heart"></i> Aggiungi ai Preferiti
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
            showNotification('Prodotto aggiunto al carrello!');
        }

        function updateCart() {
            const cartItems = document.getElementById('cart-items');
            const cartCount = document.getElementById('cart-count');
            const cartTotal = document.getElementById('cart-total');
            
            cartCount.textContent = cart.reduce((sum, item) => sum + item.quantity, 0);
            
            if (cart.length === 0) {
                cartItems.innerHTML = '<p style="text-align: center; color: #999; padding: 40px 0;">Il tuo carrello è vuoto</p>';
                cartTotal.textContent = '€0.00';
                return;
            }
            
            cartItems.innerHTML = cart.map(item => `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}">
                    <div class="cart-item-info">
                        <h4>${item.name}</h4>
                        <p>€${item.price.toFixed(2)}</p>
                        <p>Quantità: ${item.quantity}</p>
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
                showNotification('Rimosso dai preferiti');
            } else {
                wishlist.push(productId);
                if (btn) btn.classList.add('active');
                showNotification('Aggiunto ai preferiti!');
            }
            
            document.getElementById('wishlist-count').textContent = wishlist.length;
        }

        function toggleWishlist() {
            showNotification('Funzione Wishlist - In sviluppo');
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
