<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YummyKuantan - Premium Artisan Cakes & Desserts in Kuantan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
:root {
    /* Modern Bakery Color Palette */
    --primary-color: #D4A574;
    --primary-dark: #B8936A;
    --primary-light: #E8D1B8;
    --secondary-color: #F5E6D3;
    --accent-color: #E67E22;
    --accent-light: #F39C12;

    /* Neutral Colors */
    --white: #FFFFFF;
    --cream: #FEF9F4;
    --light-gray: #F8F9FA;
    --gray: #6C757D;
    --dark-gray: #495057;
    --dark: #2C3E50;

    /* Status Colors */
    --success: #27AE60;
    --warning: #F39C12;
    --danger: #E74C3C;
    --info: #3498DB;

    /* Gradients */
    --primary-gradient: linear-gradient(135deg, #D4A574 0%, #E67E22 100%);
    --secondary-gradient: linear-gradient(135deg, #F5E6D3 0%, #FEF9F4 100%);
    --hero-gradient: linear-gradient(135deg, rgba(212, 165, 116, 0.9) 0%, rgba(230, 126, 34, 0.9) 100%);

    /* Shadows */
    --shadow-sm: 0 2px 4px rgba(0,0,0,0.1);
    --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
    --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
    --shadow-xl: 0 20px 25px rgba(0,0,0,0.15);
    --shadow-2xl: 0 25px 50px rgba(0,0,0,0.25);

    /* Border Radius */
    --radius-sm: 8px;
    --radius-md: 16px;
    --radius-lg: 24px;
    --radius-xl: 32px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: var(--dark);
    background: var(--cream);
    scroll-behavior: smooth;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: var(--light-gray);
}

::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 4px;
}

/* Typography */
.font-script {
    font-family: 'Dancing Script', cursive;
}

.font-display {
    font-family: 'Dancing Script', cursive;
    font-weight: 600;
}

.text-primary {
    color: var(--primary-color) !important;
}

.text-accent {
    color: var(--accent-color) !important;
}

.text-gradient {
    background: var(--primary-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.bg-primary {
    background: var(--primary-gradient) !important;
}

.bg-secondary {
    background: var(--secondary-color) !important;
}

.bg-cream {
    background: var(--cream) !important;
}

.bg-light {
    background: var(--light-gray) !important;
}

/* Loading Screen */
.loading-screen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--primary-gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    opacity: 1;
    visibility: visible;
    transition: all 0.5s ease;
}

.loading-screen.hide {
    opacity: 0;
    visibility: hidden;
}

.loader {
    width: 60px;
    height: 60px;
    border: 4px solid rgba(255,255,255,0.3);
    border-radius: 50%;
    border-top-color: white;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* Navigation */
.navbar-custom {
    background: rgba(254, 249, 244, 0.95) !important;
    backdrop-filter: blur(20px);
    border-bottom: 1px solid rgba(212, 165, 116, 0.2);
    transition: all 0.3s ease;
    padding: 1rem 0;
}

.navbar-custom.scrolled {
    background: rgba(254, 249, 244, 0.98) !important;
    box-shadow: var(--shadow-md);
}

.navbar-brand {
    font-family: 'Dancing Script', cursive;
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--primary-color) !important;
    transition: all 0.3s ease;
}

.nav-link {
    font-weight: 500;
    color: var(--dark) !important;
    position: relative;
    padding: 0.75rem 1.25rem !important;
    transition: all 0.3s ease;
    border-radius: var(--radius-sm);
}

.nav-link::before {
    content: '';
    position: absolute;
    bottom: 4px;
    left: 50%;
    width: 0;
    height: 3px;
    background: var(--primary-gradient);
    border-radius: 2px;
    transform: translateX(-50%);
    transition: width 0.3s ease;
}

.nav-link:hover::before,
.nav-link.active::before {
    width: 60%;
}

.nav-link:hover {
    color: var(--primary-color) !important;
    background: rgba(212, 165, 116, 0.1);
}

/* Buttons */
.btn-premium {
    background: var(--primary-gradient);
    border: none;
    color: white;
    padding: 14px 32px;
    border-radius: var(--radius-lg);
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    box-shadow: var(--shadow-md);
    position: relative;
    overflow: hidden;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn-premium::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s;
}

.btn-premium:hover::before {
    left: 100%;
}

.btn-premium:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-xl);
    color: white;
    text-decoration: none;
}

.btn-outline-premium {
    border: 2px solid var(--primary-color);
    background: transparent;
    color: var(--primary-color);
    padding: 12px 30px;
    border-radius: var(--radius-lg);
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn-outline-premium:hover {
    background: var(--primary-gradient);
    color: white;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
    text-decoration: none;
}

/* Glass Cards */
.glass-card {
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: var(--radius-lg);
    padding: 2rem;
    box-shadow: var(--shadow-md);
    transition: all 0.4s ease;
}

.glass-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-xl);
}

/* Card Premium */
.card-premium {
    background: var(--white);
    border: none;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: all 0.4s ease;
    height: 100%;
}

.card-premium:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.card-premium .card-img-top {
    height: 250px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.card-premium:hover .card-img-top {
    transform: scale(1.05);
}

.price-premium {
    background: var(--primary-gradient);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: var(--radius-sm);
    font-weight: 700;
    font-size: 1.1rem;
    display: inline-block;
}

/* Sections */
.section-premium {
    padding: 100px 0;
}

.section-title {
    font-family: 'Dancing Script', cursive;
    font-size: 3.5rem;
    font-weight: 600;
    text-align: center;
    margin-bottom: 1rem;
    color: var(--primary-color);
    position: relative;
}

.section-subtitle {
    text-align: center;
    color: var(--gray);
    font-size: 1.2rem;
    margin-bottom: 4rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

/* Hero Premium */
.hero-premium {
    min-height: 100vh;
    background: linear-gradient(var(--hero-gradient)), url('https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=1920&h=1080&fit=crop') center/cover;
    display: flex;
    align-items: center;
    position: relative;
    color: white;
    overflow: hidden;
}

.floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}

.floating-element {
    position: absolute;
    width: 100px;
    height: 100px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

.floating-element:nth-child(1) {
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.floating-element:nth-child(2) {
    top: 60%;
    right: 15%;
    animation-delay: 2s;
}

.floating-element:nth-child(3) {
    bottom: 30%;
    left: 20%;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.7;
    }
    50% {
        transform: translateY(-20px) rotate(180deg);
        opacity: 1;
    }
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-title {
    font-family: 'Dancing Script', cursive;
    font-size: 4.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.4rem;
    margin-bottom: 2.5rem;
    opacity: 0.95;
    line-height: 1.6;
}

/* Gallery */
.gallery-item {
    cursor: pointer;
    transition: all 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
}

.gallery-overlay {
    transition: opacity 0.3s ease;
}

/* Testimonials */
.testimonial-card {
    background: var(--white);
    padding: 2.5rem;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    text-align: center;
    transition: all 0.4s ease;
    height: 100%;
}

.testimonial-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

/* Footer */
.footer {
    background: var(--dark);
    color: white;
    padding: 4rem 0 2rem;
}

.footer-logo {
    font-family: 'Dancing Script', cursive;
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.social-links {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.social-link {
    width: 45px;
    height: 45px;
    background: var(--primary-gradient);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-link:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-md);
    color: white;
}

/* Floating Action Button */
.floating-whatsapp {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    width: 60px;
    height: 60px;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    font-size: 1.5rem;
    box-shadow: var(--shadow-lg);
    transition: all 0.3s ease;
    z-index: 1000;
    animation: bounce 2s infinite;
}

.floating-whatsapp:hover {
    transform: scale(1.1);
    color: white;
    text-decoration: none;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title {
        font-size: 3rem;
    }

    .section-title {
        font-size: 2.5rem;
    }

    .section-premium {
        padding: 60px 0;
    }

    .hero-premium {
        min-height: 80vh;
    }
}

/* Animations */
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

.fade-in-up {
    animation: fadeInUp 0.8s ease-out;
}
</style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loader"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <i class="fas fa-birthday-cake me-2"></i>YummyKuantan
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars text-primary"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cakes">Our Cakes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <a href="tel:+60123456789" class="btn btn-outline-premium">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                    <a href="https://wa.me/60123456789?text=Hi! I'd like to order a cake" class="btn btn-premium">
                        <i class="fab fa-whatsapp me-2"></i>Order Now
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-premium" id="home">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>

        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6 hero-content" data-aos="fade-right">
                    <h1 class="hero-title">Artisan Cakes, <span class="text-warning">Crafted</span> to Perfection</h1>
                    <p class="hero-subtitle">Experience the finest handcrafted cakes and desserts in Kuantan. Made with premium ingredients and delivered with love to your doorstep.</p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#cakes" class="btn btn-premium btn-lg">
                            <i class="fas fa-birthday-cake me-2"></i>Explore Collection
                        </a>
                        <a href="https://wa.me/60123456789?text=Hi! I'd like to place a custom order" class="btn btn-outline-premium btn-lg">
                            <i class="fab fa-whatsapp me-2"></i>Custom Orders
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-4 text-white">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-truck me-2"></i>
                            <small>Free Delivery in Kuantan</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-clock me-2"></i>
                            <small>Same Day Delivery</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=600&h=600&fit=crop"
                             alt="Premium Cake"
                             class="img-fluid rounded-circle shadow-2xl"
                             style="border: 8px solid rgba(255,255,255,0.2);">
                        <div class="position-absolute top-0 start-0 bg-white rounded-pill px-3 py-2 shadow-lg">
                            <i class="fas fa-star text-warning"></i>
                            <small class="fw-bold ms-1">4.9 Rating</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section-premium bg-light" data-aos="fade-up">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 text-center">
                    <div class="glass-card h-100">
                        <div class="mb-3">
                            <i class="fas fa-award fa-3x text-gradient"></i>
                        </div>
                        <h5 class="font-display">Premium Quality</h5>
                        <p class="text-muted">Only the finest ingredients from trusted suppliers</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="glass-card h-100">
                        <div class="mb-3">
                            <i class="fas fa-heart fa-3x text-gradient"></i>
                        </div>
                        <h5 class="font-display">Made with Love</h5>
                        <p class="text-muted">Every cake is handcrafted by our skilled bakers</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="glass-card h-100">
                        <div class="mb-3">
                            <i class="fas fa-shipping-fast fa-3x text-gradient"></i>
                        </div>
                        <h5 class="font-display">Fast Delivery</h5>
                        <p class="text-muted">Same-day delivery within Kuantan area</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="glass-card h-100">
                        <div class="mb-3">
                            <i class="fas fa-palette fa-3x text-gradient"></i>
                        </div>
                        <h5 class="font-display">Custom Design</h5>
                        <p class="text-muted">Personalized cakes for your special occasions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section-premium" id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&h=500&fit=crop"
                             alt="Our Bakery" class="img-fluid rounded-4 shadow-lg">
                        <div class="position-absolute bottom-0 start-0 bg-white p-4 rounded-4 shadow-lg m-3">
                            <h6 class="font-display text-gradient mb-1">Since 2020</h6>
                            <p class="mb-0 small text-muted">Serving Kuantan with excellence</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="font-display section-title text-start">Our <span class="text-gradient">Story</span></h2>
                    <p class="lead text-muted mb-4">Born from a passion for creating extraordinary desserts, YummyKuantan has been delighting customers in Pahang since 2020.</p>
                    <p class="text-muted mb-4">We believe that every celebration deserves a special cake. Our team of skilled bakers combines traditional techniques with modern creativity to craft cakes that not only taste amazing but also create lasting memories.</p>

                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="text-center p-3 bg-light rounded-4">
                                <h3 class="font-display text-gradient mb-0">500+</h3>
                                <small class="text-muted">Happy Customers</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center p-3 bg-light rounded-4">
                                <h3 class="font-display text-gradient mb-0">50+</h3>
                                <small class="text-muted">Cake Varieties</small>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="https://wa.me/60123456789?text=Hi! I'd like to know more about YummyKuantan" class="btn btn-premium">
                            <i class="fas fa-phone me-2"></i>Contact Us
                        </a>
                        <a href="https://instagram.com/yummykuantan" target="_blank" class="btn btn-outline-premium">
                            <i class="fab fa-instagram me-2"></i>Follow Journey
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cake Categories -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Cake Categories</h2>
            <div class="row g-4" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card text-center h-100">
                        <div class="mb-3">
                            <i class="fas fa-birthday-cake fa-3x text-gradient"></i>
                        </div>
                        <h5 class="font-display">Birthday Cakes</h5>
                        <p class="text-muted mb-3">Make every birthday special with our custom birthday cakes</p>
                        <a href="#cakes" class="btn btn-outline-premium btn-sm">View Collection</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card text-center h-100">
                        <div class="mb-3">
                            <i class="fas fa-heart fa-3x text-gradient"></i>
                        </div>
                        <h5 class="font-display">Wedding Cakes</h5>
                        <p class="text-muted mb-3">Elegant multi-tier cakes for your special day</p>
                        <a href="#cakes" class="btn btn-outline-premium btn-sm">View Collection</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card text-center h-100">
                        <div class="mb-3">
                            <i class="fas fa-cookie-bite fa-3x text-gradient"></i>
                        </div>
                        <h5 class="font-display">Cupcakes</h5>
                        <p class="text-muted mb-3">Individual delights perfect for any occasion</p>
                        <a href="#cakes" class="btn btn-outline-premium btn-sm">View Collection</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card text-center h-100">
                        <div class="mb-3">
                            <i class="fas fa-gifts fa-3x text-gradient"></i>
                        </div>
                        <h5 class="font-display">Custom Orders</h5>
                        <p class="text-muted mb-3">Unique designs tailored to your imagination</p>
                        <a href="https://wa.me/60123456789?text=Hi! I'd like a custom cake" class="btn btn-outline-premium btn-sm">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cakes Section -->
    <section id="cakes" class="section-premium">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Signature <span class="text-gradient">Cakes</span></h2>
                <p class="lead text-muted">Handpicked favorites that our customers love the most</p>
            </div>

            <!-- Search and Filter -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-8 mx-auto">
                    <div class="glass-card p-4">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <i class="fas fa-search position-absolute top-50 translate-middle-y start-0 ms-3 text-muted"></i>
                                    <input type="text" class="form-control ps-5 border-0 bg-light" placeholder="Search cakes..." id="searchInput">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select border-0 bg-light" id="categoryFilter">
                                    <option value="">All Categories</option>
                                    <option value="birthday">Birthday</option>
                                    <option value="wedding">Wedding</option>
                                    <option value="cupcake">Cupcakes</option>
                                    <option value="custom">Custom</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select border-0 bg-light" id="priceFilter">
                                    <option value="">All Prices</option>
                                    <option value="0-50">RM 0 - RM 50</option>
                                    <option value="50-100">RM 50 - RM 100</option>
                                    <option value="100+">RM 100+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sample Cakes (simulating database content) -->
            <div class="row g-4" id="cakesContainer">
                <div class="col-lg-4 col-md-6 cake-item" data-aos="zoom-in">
                    <div class="card-premium h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400&h=280&fit=crop" class="card-img-top" alt="Chocolate Dream Cake" loading="lazy">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                                    <i class="fas fa-star me-1"></i>Bestseller
                                </span>
                            </div>
                            <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle" style="width: 40px; height: 40px;" onclick="toggleFavorite(this)">
                                <i class="fas fa-heart text-muted"></i>
                            </button>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title font-display mb-0">Chocolate Dream Cake</h5>
                                <div class="price-premium">RM 85</div>
                            </div>
                            <p class="card-text text-muted mb-3">Rich, moist chocolate cake with premium Belgian chocolate ganache and fresh berries</p>

                            <div class="row g-2 mb-3 text-center small">
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-users text-muted mb-1 d-block"></i>
                                        <span class="text-muted">6-8 servings</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-clock text-muted mb-1 d-block"></i>
                                        <span class="text-muted">2 hours</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-shipping-fast text-muted mb-1 d-block"></i>
                                        <span class="text-muted">Same day</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-auto d-grid gap-2">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button class="btn btn-outline-premium btn-sm w-100" onclick="addToCart('1', 'Chocolate Dream Cake')">
                                            <i class="fas fa-shopping-bag me-1"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/60123456789?text=Hi! I want to order Chocolate Dream Cake (RM85)"
                                           class="btn btn-premium btn-sm w-100">
                                            <i class="fab fa-whatsapp me-1"></i>Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 cake-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-premium h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1558636508-e0db3814bd1d?w=400&h=280&fit=crop" class="card-img-top" alt="Vanilla Bliss Cake" loading="lazy">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-info text-white px-3 py-2 rounded-pill">
                                    <i class="fas fa-heart me-1"></i>Popular
                                </span>
                            </div>
                            <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle" style="width: 40px; height: 40px;" onclick="toggleFavorite(this)">
                                <i class="fas fa-heart text-muted"></i>
                            </button>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title font-display mb-0">Vanilla Bliss Cake</h5>
                                <div class="price-premium">RM 65</div>
                            </div>
                            <p class="card-text text-muted mb-3">Classic vanilla sponge with silky buttercream and delicate vanilla bean flavor</p>

                            <div class="row g-2 mb-3 text-center small">
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-users text-muted mb-1 d-block"></i>
                                        <span class="text-muted">6-8 servings</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-clock text-muted mb-1 d-block"></i>
                                        <span class="text-muted">1.5 hours</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-star text-muted mb-1 d-block"></i>
                                        <span class="text-muted">4.9 rating</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-auto d-grid gap-2">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button class="btn btn-outline-premium btn-sm w-100" onclick="addToCart('2', 'Vanilla Bliss Cake')">
                                            <i class="fas fa-shopping-bag me-1"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/60123456789?text=Hi! I want to order Vanilla Bliss Cake (RM65)"
                                           class="btn btn-premium btn-sm w-100">
                                            <i class="fab fa-whatsapp me-1"></i>Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 cake-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card-premium h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1586985564150-0f5b1cd8b6a0?w=400&h=280&fit=crop" class="card-img-top" alt="Red Velvet Supreme" loading="lazy">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-success text-white px-3 py-2 rounded-pill">
                                    <i class="fas fa-leaf me-1"></i>New
                                </span>
                            </div>
                            <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle" style="width: 40px; height: 40px;" onclick="toggleFavorite(this)">
                                <i class="fas fa-heart text-muted"></i>
                            </button>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title font-display mb-0">Red Velvet Supreme</h5>
                                <div class="price-premium">RM 95</div>
                            </div>
                            <p class="card-text text-muted mb-3">Luxurious red velvet cake with cream cheese frosting and white chocolate shavings</p>

                            <div class="row g-2 mb-3 text-center small">
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-users text-muted mb-1 d-block"></i>
                                        <span class="text-muted">8-10 servings</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-clock text-muted mb-1 d-block"></i>
                                        <span class="text-muted">2.5 hours</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-crown text-muted mb-1 d-block"></i>
                                        <span class="text-muted">Premium</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-auto d-grid gap-2">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button class="btn btn-outline-premium btn-sm w-100" onclick="addToCart('3', 'Red Velvet Supreme')">
                                            <i class="fas fa-shopping-bag me-1"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/60123456789?text=Hi! I want to order Red Velvet Supreme (RM95)"
                                           class="btn btn-premium btn-sm w-100">
                                            <i class="fab fa-whatsapp me-1"></i>Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 cake-item" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card-premium h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&h=280&fit=crop" class="card-img-top" alt="Lemon Sunshine Cake" loading="lazy">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-secondary text-white px-3 py-2 rounded-pill">
                                    <i class="fas fa-seedling me-1"></i>Fresh
                                </span>
                            </div>
                            <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle" style="width: 40px; height: 40px;" onclick="toggleFavorite(this)">
                                <i class="fas fa-heart text-muted"></i>
                            </button>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title font-display mb-0">Lemon Sunshine Cake</h5>
                                <div class="price-premium">RM 70</div>
                            </div>
                            <p class="card-text text-muted mb-3">Zesty lemon cake with tangy lemon curd filling and light cream cheese frosting</p>

                            <div class="row g-2 mb-3 text-center small">
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-users text-muted mb-1 d-block"></i>
                                        <span class="text-muted">6-8 servings</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-clock text-muted mb-1 d-block"></i>
                                        <span class="text-muted">2 hours</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-lemon text-muted mb-1 d-block"></i>
                                        <span class="text-muted">Fresh citrus</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-auto d-grid gap-2">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button class="btn btn-outline-premium btn-sm w-100" onclick="addToCart('4', 'Lemon Sunshine Cake')">
                                            <i class="fas fa-shopping-bag me-1"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/60123456789?text=Hi! I want to order Lemon Sunshine Cake (RM70)"
                                           class="btn btn-premium btn-sm w-100">
                                            <i class="fab fa-whatsapp me-1"></i>Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 cake-item" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card-premium h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=400&h=280&fit=crop" class="card-img-top" alt="Strawberry Delight" loading="lazy">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-danger text-white px-3 py-2 rounded-pill">
                                    <i class="fas fa-calendar me-1"></i>Seasonal
                                </span>
                            </div>
                            <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle" style="width: 40px; height: 40px;" onclick="toggleFavorite(this)">
                                <i class="fas fa-heart text-muted"></i>
                            </button>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title font-display mb-0">Strawberry Delight</h5>
                                <div class="price-premium">RM 80</div>
                            </div>
                            <p class="card-text text-muted mb-3">Light sponge cake layered with fresh strawberries and whipped cream</p>

                            <div class="row g-2 mb-3 text-center small">
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-users text-muted mb-1 d-block"></i>
                                        <span class="text-muted">6-8 servings</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-clock text-muted mb-1 d-block"></i>
                                        <span class="text-muted">1.5 hours</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-seedling text-muted mb-1 d-block"></i>
                                        <span class="text-muted">Fresh fruit</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-auto d-grid gap-2">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button class="btn btn-outline-premium btn-sm w-100" onclick="addToCart('5', 'Strawberry Delight')">
                                            <i class="fas fa-shopping-bag me-1"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/60123456789?text=Hi! I want to order Strawberry Delight (RM80)"
                                           class="btn btn-premium btn-sm w-100">
                                            <i class="fab fa-whatsapp me-1"></i>Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 cake-item" data-aos="zoom-in" data-aos-delay="500">
                    <div class="card-premium h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?w=400&h=280&fit=crop" class="card-img-top" alt="Tiramisu Cake" loading="lazy">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-dark text-white px-3 py-2 rounded-pill">
                                    <i class="fas fa-signature me-1"></i>Signature
                                </span>
                            </div>
                            <button class="btn btn-light position-absolute top-0 start-0 m-3 rounded-circle" style="width: 40px; height: 40px;" onclick="toggleFavorite(this)">
                                <i class="fas fa-heart text-muted"></i>
                            </button>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title font-display mb-0">Tiramisu Cake</h5>
                                <div class="price-premium">RM 105</div>
                            </div>
                            <p class="card-text text-muted mb-3">Italian-inspired coffee-soaked layers with mascarpone cream and cocoa dust</p>

                            <div class="row g-2 mb-3 text-center small">
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-users text-muted mb-1 d-block"></i>
                                        <span class="text-muted">8-10 servings</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-clock text-muted mb-1 d-block"></i>
                                        <span class="text-muted">3 hours</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-light p-2 rounded">
                                        <i class="fas fa-coffee text-muted mb-1 d-block"></i>
                                        <span class="text-muted">Coffee flavor</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-auto d-grid gap-2">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button class="btn btn-outline-premium btn-sm w-100" onclick="addToCart('6', 'Tiramisu Cake')">
                                            <i class="fas fa-shopping-bag me-1"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/60123456789?text=Hi! I want to order Tiramisu Cake (RM105)"
                                           class="btn btn-premium btn-sm w-100">
                                            <i class="fab fa-whatsapp me-1"></i>Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-5" data-aos="fade-up">
                <button class="btn btn-outline-premium btn-lg" id="loadMoreBtn">
                    <i class="fas fa-plus me-2"></i>Load More Cakes
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section-premium bg-light" id="testimonials">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">What Our Customers <span class="text-gradient">Say</span></h2>
            <div class="row g-4" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4">
                    <div class="glass-card text-center h-100">
                        <div class="mb-3">
                            <div class="d-flex justify-content-center mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <img src="https://images.unsplash.com/photo-1494790108755-2616c669e128?w=80&h=80&fit=crop&crop=face"
                                 alt="Customer" class="rounded-circle mb-3" width="80" height="80">
                        </div>
                        <h6 class="font-display">Sarah Ahmad</h6>
                        <p class="text-muted small mb-2">Kuantan</p>
                        <p class="text-muted">"The chocolate cake was absolutely divine! Perfect for my daughter's birthday. Will definitely order again!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="glass-card text-center h-100">
                        <div class="mb-3">
                            <div class="d-flex justify-content-center mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face"
                                 alt="Customer" class="rounded-circle mb-3" width="80" height="80">
                        </div>
                        <h6 class="font-display">Ahmad Rahman</h6>
                        <p class="text-muted small mb-2">Kuantan</p>
                        <p class="text-muted">"Amazing wedding cake! Beautiful design and tasted even better. Thank you YummyKuantan!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="glass-card text-center h-100">
                        <div class="mb-3">
                            <div class="d-flex justify-content-center mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&crop=face"
                                 alt="Customer" class="rounded-circle mb-3" width="80" height="80">
                        </div>
                        <h6 class="font-display">Lisa Tan</h6>
                        <p class="text-muted small mb-2">Kuantan</p>
                        <p class="text-muted">"Fast delivery and excellent customer service. The cupcakes were fresh and delicious!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="section-premium" id="gallery">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Our <span class="text-gradient">Gallery</span></h2>
            <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">A glimpse into our delicious creations</p>

            <div class="row g-3" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item position-relative overflow-hidden rounded-4">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400&h=300&fit=crop"
                             alt="Cake Gallery" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center opacity-0" style="transition: opacity 0.3s ease;">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item position-relative overflow-hidden rounded-4">
                        <img src="https://images.unsplash.com/photo-1558636508-e0db3814bd1d?w=400&h=300&fit=crop"
                             alt="Cake Gallery" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center opacity-0" style="transition: opacity 0.3s ease;">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item position-relative overflow-hidden rounded-4">
                        <img src="https://images.unsplash.com/photo-1586985564150-0f5b1cd8b6a0?w=400&h=300&fit=crop"
                             alt="Cake Gallery" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center opacity-0" style="transition: opacity 0.3s ease;">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item position-relative overflow-hidden rounded-4">
                        <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&h=300&fit=crop"
                             alt="Cake Gallery" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center opacity-0" style="transition: opacity 0.3s ease;">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item position-relative overflow-hidden rounded-4">
                        <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=400&h=300&fit=crop"
                             alt="Cake Gallery" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center opacity-0" style="transition: opacity 0.3s ease;">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item position-relative overflow-hidden rounded-4">
                        <img src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?w=400&h=300&fit=crop"
                             alt="Cake Gallery" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center opacity-0" style="transition: opacity 0.3s ease;">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-premium bg-light">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Frequently Asked <span class="text-gradient">Questions</span></h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="200">
                        <div class="accordion-item border-0 mb-3 glass-card">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent border-0 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How far in advance should I place my order?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    For regular cakes, we recommend ordering at least 24-48 hours in advance. For custom wedding or special occasion cakes, please order 1-2 weeks ahead to ensure availability.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 glass-card">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent border-0 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Do you deliver to areas outside Kuantan?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer free delivery within Kuantan city. For areas outside Kuantan, please contact us via WhatsApp for delivery availability and charges.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 glass-card">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent border-0 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Can you accommodate special dietary requirements?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! We can make sugar-free, gluten-free, and vegan cakes. Please inform us about any dietary requirements when placing your order so we can accommodate your needs.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 glass-card">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent border-0 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    What payment methods do you accept?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We accept cash on delivery, bank transfer, and online banking. A 50% deposit is required for custom cakes, with the balance payable upon delivery.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section-premium" id="contact" style="background: var(--primary-gradient);">
        <div class="container">
            <div class="row align-items-center text-white">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="font-display display-4 mb-4">Ready to Order Your Perfect Cake?</h2>
                    <p class="lead mb-4">Contact us today and let's create something sweet together. We're here to make your celebration unforgettable!</p>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-phone fa-lg me-3"></i>
                                <div>
                                    <small class="opacity-75">Call Us</small>
                                    <div class="fw-bold">+60 123 456 789</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-clock fa-lg me-3"></i>
                                <div>
                                    <small class="opacity-75">Open Hours</small>
                                    <div class="fw-bold">8AM - 10PM Daily</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://wa.me/60123456789?text=Hi! I'd like to place an order" class="btn btn-light btn-lg">
                            <i class="fab fa-whatsapp text-success me-2"></i>WhatsApp Order
                        </a>
                        <a href="https://instagram.com/yummykuantan" target="_blank" class="btn btn-outline-light btn-lg">
                            <i class="fab fa-instagram me-2"></i>Follow Us
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="glass-card">
                        <h4 class="font-display mb-4 text-dark">Quick Order Form</h4>
                        <form id="quickOrderForm">
                            <div class="mb-3">
                                <label class="form-label text-dark">Your Name</label>
                                <input type="text" class="form-control border-0 bg-light" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-dark">Phone Number</label>
                                <input type="tel" class="form-control border-0 bg-light" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-dark">Cake Type</label>
                                <select class="form-select border-0 bg-light" required>
                                    <option value="">Select cake type</option>
                                    <option value="birthday">Birthday Cake</option>
                                    <option value="wedding">Wedding Cake</option>
                                    <option value="cupcakes">Cupcakes</option>
                                    <option value="custom">Custom Design</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-dark">Special Requirements</label>
                                <textarea class="form-control border-0 bg-light" rows="3" placeholder="Tell us about your requirements..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-premium btn-lg w-100">
                                <i class="fas fa-paper-plane me-2"></i>Send Order Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="footer-logo font-script">YummyKuantan</div>
                    <p class="text-light mb-4">Crafting exceptional cakes and desserts with premium ingredients and artisan techniques. Every creation is a masterpiece made with love and delivered fresh to your doorstep.</p>
                    <div class="social-links">
                        <a href="https://instagram.com/yummykuantan" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://facebook.com/yummykuantan" class="social-link">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://tiktok.com/@yummykuantan" class="social-link">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="https://wa.me/60123456789" class="social-link">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h5 class="text-primary mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-light text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#about" class="text-light text-decoration-none">About</a></li>
                        <li class="mb-2"><a href="#cakes" class="text-light text-decoration-none">Our Cakes</a></li>
                        <li class="mb-2"><a href="#gallery" class="text-light text-decoration-none">Gallery</a></li>
                        <li class="mb-2"><a href="#testimonials" class="text-light text-decoration-none">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-primary mb-4">Contact Info</h5>
                    <div class="text-light">
                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-primary"></i>Kuantan, Pahang, Malaysia</p>
                        <p class="mb-2"><i class="fas fa-phone me-2 text-primary"></i>+60 123 456 789</p>
                        <p class="mb-2"><i class="fas fa-envelope me-2 text-primary"></i>hello@yummykuantan.com</p>
                        <p class="mb-0"><i class="fas fa-clock me-2 text-primary"></i>Daily: 8AM - 10PM</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-primary mb-4">Newsletter</h5>
                    <p class="text-light mb-3">Subscribe for exclusive offers and new cake announcements!</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your email" id="newsletterEmail">
                        <button class="btn btn-premium" type="button" id="subscribeBtn">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr class="my-5 border-secondary">
            <div class="text-center text-light">
                <p>&copy; 2024 YummyKuantan. Crafted with <i class="fas fa-heart text-danger"></i> in Kuantan, Malaysia.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/60123456789?text=Hi! I'm interested in your premium cakes" class="floating-whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Loading screen
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.getElementById('loadingScreen').classList.add('hide');
            }, 1500);
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active navigation link
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Search and Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const categoryFilter = document.getElementById('categoryFilter');
            const priceFilter = document.getElementById('priceFilter');
            const cakeItems = document.querySelectorAll('.cake-item');

            function filterCakes() {
                const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';
                const selectedCategory = categoryFilter ? categoryFilter.value : '';
                const selectedPrice = priceFilter ? priceFilter.value : '';

                cakeItems.forEach(item => {
                    const cakeName = item.querySelector('.card-title').textContent.toLowerCase();
                    const cakeDescription = item.querySelector('.card-text').textContent.toLowerCase();
                    const priceElement = item.querySelector('.price-premium');
                    const price = priceElement ? parseInt(priceElement.textContent.replace(/[^\d]/g, '')) : 0;

                    let showItem = true;

                    // Search filter
                    if (searchTerm && !cakeName.includes(searchTerm) && !cakeDescription.includes(searchTerm)) {
                        showItem = false;
                    }

                    // Price filter
                    if (selectedPrice) {
                        if (selectedPrice === '0-50' && price > 50) showItem = false;
                        if (selectedPrice === '50-100' && (price <= 50 || price > 100)) showItem = false;
                        if (selectedPrice === '100+' && price <= 100) showItem = false;
                    }

                    item.style.display = showItem ? 'block' : 'none';
                });
            }

            if (searchInput) searchInput.addEventListener('input', filterCakes);
            if (categoryFilter) categoryFilter.addEventListener('change', filterCakes);
            if (priceFilter) priceFilter.addEventListener('change', filterCakes);

            // Gallery hover effects
            document.querySelectorAll('.gallery-item').forEach(item => {
                const img = item.querySelector('img');
                const overlay = item.querySelector('.gallery-overlay');

                item.addEventListener('mouseenter', function() {
                    img.style.transform = 'scale(1.1)';
                    overlay.style.opacity = '1';
                });

                item.addEventListener('mouseleave', function() {
                    img.style.transform = 'scale(1)';
                    overlay.style.opacity = '0';
                });
            });

            // Quick order form
            const quickOrderForm = document.getElementById('quickOrderForm');
            if (quickOrderForm) {
                quickOrderForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Order request sent! We\'ll contact you via WhatsApp shortly.');
                    this.reset();
                });
            }

            // Newsletter subscription
            const subscribeBtn = document.getElementById('subscribeBtn');
            if (subscribeBtn) {
                subscribeBtn.addEventListener('click', function() {
                    const email = document.getElementById('newsletterEmail').value;
                    if (email && email.includes('@')) {
                        alert('Thank you for subscribing! We\'ll keep you updated with our latest offers and new cake collections.');
                        document.getElementById('newsletterEmail').value = '';
                    } else {
                        alert('Please enter a valid email address.');
                    }
                });
            }

            // Load more functionality
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
                    setTimeout(() => {
                        this.style.display = 'none';
                    }, 1000);
                });
            }
        });

        // Toggle favorite
        function toggleFavorite(btn) {
            const heart = btn.querySelector('i');
            if (heart.classList.contains('text-muted')) {
                heart.classList.remove('text-muted');
                heart.classList.add('text-danger');
                btn.style.background = '#f8d7da';
            } else {
                heart.classList.remove('text-danger');
                heart.classList.add('text-muted');
                btn.style.background = '';
            }
        }

        // Add to cart function
        function addToCart(cakeId, cakeName) {
            // Simulate add to cart
            alert(`${cakeName} has been added to your cart!`);
            // In real implementation, you would add this to actual cart storage
        }

        // Add some interactive effects
        document.querySelectorAll('.card-premium').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>
