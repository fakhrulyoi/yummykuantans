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

.text-primary {
    color: var(--primary-color) !important;
}

.text-accent {
    color: var(--accent-color) !important;
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
.btn-primary-custom {
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
}

.btn-primary-custom::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s;
}

.btn-primary-custom:hover::before {
    left: 100%;
}

.btn-primary-custom:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-xl);
    color: white;
}

.btn-outline-custom {
    border: 2px solid var(--primary-color);
    background: transparent;
    color: var(--primary-color);
    padding: 12px 30px;
    border-radius: var(--radius-lg);
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-outline-custom:hover {
    background: var(--primary-gradient);
    color: white;
    border-color: transparent;
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

/* Cards */
.card-custom {
    border: none;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: all 0.4s ease;
    background: var(--white);
    height: 100%;
}

.card-custom:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.feature-card {
    background: var(--white);
    border-radius: var(--radius-lg);
    padding: 2.5rem 2rem;
    text-align: center;
    transition: all 0.4s ease;
    border: 1px solid rgba(212, 165, 116, 0.2);
    height: 100%;
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
    border-color: var(--primary-color);
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: var(--secondary-gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    transition: all 0.3s ease;
}

.feature-card:hover .feature-icon {
    background: var(--primary-gradient);
    color: white;
    transform: scale(1.1);
}

/* Sections */
.section-padding {
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

/* Hero Section */
.hero-section {
    min-height: 100vh;
    background: linear-gradient(var(--hero-gradient)), url('https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=1920&h=1080&fit=crop') center/cover;
    display: flex;
    align-items: center;
    position: relative;
    color: white;
}

.hero-content h1 {
    font-family: 'Dancing Script', cursive;
    font-size: 4.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.hero-content p {
    font-size: 1.4rem;
    margin-bottom: 2.5rem;
    opacity: 0.95;
}

.hero-stats {
    display: flex;
    gap: 3rem;
    margin-top: 3rem;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    display: block;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
}

/* Cake Display */
.cake-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.cake-card {
    background: var(--white);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: all 0.4s ease;
    position: relative;
}

.cake-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.cake-image-container {
    position: relative;
    overflow: hidden;
    height: 280px;
}

.cake-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.cake-card:hover .cake-image {
    transform: scale(1.1);
}

.cake-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--primary-gradient);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: var(--radius-sm);
    font-size: 0.85rem;
    font-weight: 600;
}

.favorite-btn {
    position: absolute;
    top: 1rem;
    left: 1rem;
    width: 45px;
    height: 45px;
    background: rgba(255,255,255,0.9);
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.favorite-btn:hover {
    background: var(--danger);
    color: white;
    transform: scale(1.1);
}

.cake-content {
    padding: 2rem;
}

.cake-title {
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: var(--dark);
}

.cake-description {
    color: var(--gray);
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.cake-price {
    background: var(--primary-gradient);
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: var(--radius-lg);
    font-weight: 700;
    font-size: 1.2rem;
    display: inline-block;
    margin-bottom: 1.5rem;
}

.cake-features {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: var(--light-gray);
    border-radius: var(--radius-sm);
}

.feature-item {
    text-align: center;
    flex: 1;
}

.feature-item i {
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.feature-text {
    font-size: 0.85rem;
    color: var(--gray);
}

.cake-actions {
    display: flex;
    gap: 1rem;
}

.btn-order {
    background: var(--primary-gradient);
    border: none;
    color: white;
    padding: 12px 24px;
    border-radius: var(--radius-sm);
    font-weight: 600;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    flex: 1;
    transition: all 0.3s ease;
}

.btn-order:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
    color: white;
}

.btn-info {
    background: transparent;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    padding: 12px 24px;
    border-radius: var(--radius-sm);
    font-weight: 600;
    flex: 1;
    transition: all 0.3s ease;
}

.btn-info:hover {
    background: var(--primary-color);
    color: white;
}

/* Search and Filter */
.search-filter-section {
    background: var(--white);
    padding: 2rem;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    margin-bottom: 3rem;
}

.search-input {
    border: 2px solid var(--light-gray);
    border-radius: var(--radius-sm);
    padding: 15px 20px 15px 50px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.search-input:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(212, 165, 116, 0.1);
    outline: none;
}

.search-icon {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--gray);
}

.filter-select {
    border: 2px solid var(--light-gray);
    border-radius: var(--radius-sm);
    padding: 15px 20px;
    font-size: 1rem;
    background: white;
    transition: all 0.3s ease;
}

.filter-select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(212, 165, 116, 0.1);
    outline: none;
}

/* Gallery */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1rem;
    margin-top: 2rem;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: var(--radius-md);
    aspect-ratio: 1;
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    cursor: pointer;
}

.gallery-item:hover .gallery-image {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
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

.testimonial-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin: 0 auto 1.5rem;
    border: 4px solid var(--primary-color);
}

.testimonial-stars {
    color: var(--warning);
    margin-bottom: 1.5rem;
}

.testimonial-text {
    font-style: italic;
    color: var(--gray);
    margin-bottom: 1.5rem;
    line-height: 1.7;
}

.testimonial-author {
    font-weight: 600;
    color: var(--dark);
}

/* Contact Section */
.contact-section {
    background: var(--primary-gradient);
    color: white;
}

.contact-form {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(20px);
    padding: 3rem;
    border-radius: var(--radius-lg);
    border: 1px solid rgba(255,255,255,0.2);
}

.form-control-custom {
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.3);
    color: white;
    padding: 15px 20px;
    border-radius: var(--radius-sm);
}

.form-control-custom::placeholder {
    color: rgba(255,255,255,0.7);
}

.form-control-custom:focus {
    background: rgba(255,255,255,0.15);
    border-color: rgba(255,255,255,0.5);
    box-shadow: 0 0 0 3px rgba(255,255,255,0.1);
    color: white;
    outline: none;
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

/* Image Zoom Modal */
.image-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.9);
    backdrop-filter: blur(10px);
}

.image-modal.active {
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-image {
    max-width: 90%;
    max-height: 90%;
    object-fit: contain;
    border-radius: var(--radius-md);
}

.close-modal {
    position: absolute;
    top: 2rem;
    right: 2rem;
    background: var(--white);
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 3rem;
    }

    .section-title {
        font-size: 2.5rem;
    }

    .cake-grid {
        grid-template-columns: 1fr;
    }

    .hero-stats {
        gap: 1.5rem;
    }

    .section-padding {
        padding: 60px 0;
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
                    <a href="tel:+60123456789" class="btn btn-outline-custom">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                    <a href="https://wa.me/60123456789?text=Hi! I'd like to order a cake" class="btn btn-primary-custom">
                        <i class="fab fa-whatsapp me-2"></i>Order Now
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1>Handcrafted Cakes Made with Love</h1>
                        <p>Experience the finest artisan cakes and desserts in Kuantan. Every creation is a masterpiece made with premium ingredients and delivered fresh to your doorstep.</p>
                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <a href="#cakes" class="btn btn-primary-custom btn-lg">
                                <i class="fas fa-birthday-cake me-2"></i>View Our Cakes
                            </a>
                            <a href="https://wa.me/60123456789?text=Hi! I'd like a custom cake" class="btn btn-outline-custom btn-lg text-white">
                                <i class="fas fa-palette me-2"></i>Custom Design
                            </a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Happy Customers</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Cake Varieties</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">4.9</span>
                                <span class="stat-label">Star Rating</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative text-center">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=600&h=600&fit=crop"
                             alt="Premium Cake"
                             class="img-fluid rounded-circle"
                             style="border: 8px solid rgba(255,255,255,0.3); width: 500px; height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section-padding bg-cream" data-aos="fade-up">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-award fa-2x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Premium Quality</h5>
                        <p class="text-muted">Only the finest ingredients sourced from trusted suppliers worldwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-heart fa-2x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Handcrafted</h5>
                        <p class="text-muted">Every cake is lovingly made by our skilled artisan bakers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-truck fa-2x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Fast Delivery</h5>
                        <p class="text-muted">Same-day delivery within Kuantan area, always fresh</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-palette fa-2x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Custom Design</h5>
                        <p class="text-muted">Personalized cakes designed for your special moments</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cakes Section -->
    <section id="cakes" class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Signature Cakes</h2>
                <p class="section-subtitle">Discover our handpicked collection of artisan cakes, each one crafted with love and premium ingredients</p>
            </div>

            <!-- Search and Filter -->
            <div class="search-filter-section" data-aos="fade-up">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" class="form-control search-input" placeholder="Search for your perfect cake..." id="searchInput">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-select filter-select" id="categoryFilter">
                            <option value="">All Categories</option>
                            <option value="birthday">Birthday Cakes</option>
                            <option value="wedding">Wedding Cakes</option>
                            <option value="cupcake">Cupcakes</option>
                            <option value="custom">Custom Designs</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-select filter-select" id="priceFilter">
                            <option value="">All Prices</option>
                            <option value="0-50">RM 0 - RM 50</option>
                            <option value="50-100">RM 50 - RM 100</option>
                            <option value="100+">RM 100+</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Cake Grid -->
            <div class="cake-grid" id="cakeGrid">
                <!-- Sample Cakes -->
                <div class="cake-card" data-aos="zoom-in">
                    <div class="cake-image-container">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400&h=280&fit=crop" alt="Chocolate Dream Cake" class="cake-image">
                        <div class="cake-badge">Bestseller</div>
                        <button class="favorite-btn" onclick="toggleFavorite(this)">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="cake-content">
                        <h3 class="cake-title">Chocolate Dream Cake</h3>
                        <p class="cake-description">Rich, moist chocolate cake with premium Belgian chocolate ganache and fresh berries</p>
                        <div class="cake-price">RM 85</div>
                        <div class="cake-features">
                            <div class="feature-item">
                                <i class="fas fa-users d-block mb-1"></i>
                                <div class="feature-text">6-8 servings</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock d-block mb-1"></i>
                                <div class="feature-text">2 hours</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-leaf d-block mb-1"></i>
                                <div class="feature-text">Fresh daily</div>
                            </div>
                        </div>
                        <div class="cake-actions">
                            <a href="https://wa.me/60123456789?text=Hi! I want to order Chocolate Dream Cake (RM85)" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Order Now
                            </a>
                            <button class="btn-info" onclick="showCakeInfo('Chocolate Dream Cake')">
                                <i class="fas fa-info-circle"></i>Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="cake-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="cake-image-container">
                        <img src="https://images.unsplash.com/photo-1558636508-e0db3814bd1d?w=400&h=280&fit=crop" alt="Vanilla Bliss Cake" class="cake-image">
                        <div class="cake-badge">Popular</div>
                        <button class="favorite-btn" onclick="toggleFavorite(this)">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="cake-content">
                        <h3 class="cake-title">Vanilla Bliss Cake</h3>
                        <p class="cake-description">Classic vanilla sponge with silky buttercream and delicate vanilla bean flavor</p>
                        <div class="cake-price">RM 65</div>
                        <div class="cake-features">
                            <div class="feature-item">
                                <i class="fas fa-users d-block mb-1"></i>
                                <div class="feature-text">6-8 servings</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock d-block mb-1"></i>
                                <div class="feature-text">1.5 hours</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-star d-block mb-1"></i>
                                <div class="feature-text">4.9 rating</div>
                            </div>
                        </div>
                        <div class="cake-actions">
                            <a href="https://wa.me/60123456789?text=Hi! I want to order Vanilla Bliss Cake (RM65)" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Order Now
                            </a>
                            <button class="btn-info" onclick="showCakeInfo('Vanilla Bliss Cake')">
                                <i class="fas fa-info-circle"></i>Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="cake-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="cake-image-container">
                        <img src="https://images.unsplash.com/photo-1586985564150-0f5b1cd8b6a0?w=400&h=280&fit=crop" alt="Red Velvet Supreme" class="cake-image">
                        <div class="cake-badge">New</div>
                        <button class="favorite-btn" onclick="toggleFavorite(this)">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="cake-content">
                        <h3 class="cake-title">Red Velvet Supreme</h3>
                        <p class="cake-description">Luxurious red velvet cake with cream cheese frosting and white chocolate shavings</p>
                        <div class="cake-price">RM 95</div>
                        <div class="cake-features">
                            <div class="feature-item">
                                <i class="fas fa-users d-block mb-1"></i>
                                <div class="feature-text">8-10 servings</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock d-block mb-1"></i>
                                <div class="feature-text">2.5 hours</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-crown d-block mb-1"></i>
                                <div class="feature-text">Premium</div>
                            </div>
                        </div>
                        <div class="cake-actions">
                            <a href="https://wa.me/60123456789?text=Hi! I want to order Red Velvet Supreme (RM95)" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Order Now
                            </a>
                            <button class="btn-info" onclick="showCakeInfo('Red Velvet Supreme')">
                                <i class="fas fa-info-circle"></i>Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="cake-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="cake-image-container">
                        <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&h=280&fit=crop" alt="Lemon Sunshine Cake" class="cake-image">
                        <div class="cake-badge">Fresh</div>
                        <button class="favorite-btn" onclick="toggleFavorite(this)">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="cake-content">
                        <h3 class="cake-title">Lemon Sunshine Cake</h3>
                        <p class="cake-description">Zesty lemon cake with tangy lemon curd filling and light cream cheese frosting</p>
                        <div class="cake-price">RM 70</div>
                        <div class="cake-features">
                            <div class="feature-item">
                                <i class="fas fa-users d-block mb-1"></i>
                                <div class="feature-text">6-8 servings</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock d-block mb-1"></i>
                                <div class="feature-text">2 hours</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-lemon d-block mb-1"></i>
                                <div class="feature-text">Fresh citrus</div>
                            </div>
                        </div>
                        <div class="cake-actions">
                            <a href="https://wa.me/60123456789?text=Hi! I want to order Lemon Sunshine Cake (RM70)" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Order Now
                            </a>
                            <button class="btn-info" onclick="showCakeInfo('Lemon Sunshine Cake')">
                                <i class="fas fa-info-circle"></i>Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="cake-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="cake-image-container">
                        <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=400&h=280&fit=crop" alt="Strawberry Delight" class="cake-image">
                        <div class="cake-badge">Seasonal</div>
                        <button class="favorite-btn" onclick="toggleFavorite(this)">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="cake-content">
                        <h3 class="cake-title">Strawberry Delight</h3>
                        <p class="cake-description">Light sponge cake layered with fresh strawberries and whipped cream</p>
                        <div class="cake-price">RM 80</div>
                        <div class="cake-features">
                            <div class="feature-item">
                                <i class="fas fa-users d-block mb-1"></i>
                                <div class="feature-text">6-8 servings</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock d-block mb-1"></i>
                                <div class="feature-text">1.5 hours</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-seedling d-block mb-1"></i>
                                <div class="feature-text">Fresh fruit</div>
                            </div>
                        </div>
                        <div class="cake-actions">
                            <a href="https://wa.me/60123456789?text=Hi! I want to order Strawberry Delight (RM80)" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Order Now
                            </a>
                            <button class="btn-info" onclick="showCakeInfo('Strawberry Delight')">
                                <i class="fas fa-info-circle"></i>Details
                            </button>
                        </div>
                    </div>
                </div>

                <div class="cake-card" data-aos="zoom-in" data-aos-delay="500">
                    <div class="cake-image-container">
                        <img src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?w=400&h=280&fit=crop" alt="Tiramisu Cake" class="cake-image">
                        <div class="cake-badge">Signature</div>
                        <button class="favorite-btn" onclick="toggleFavorite(this)">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="cake-content">
                        <h3 class="cake-title">Tiramisu Cake</h3>
                        <p class="cake-description">Italian-inspired coffee-soaked layers with mascarpone cream and cocoa dust</p>
                        <div class="cake-price">RM 105</div>
                        <div class="cake-features">
                            <div class="feature-item">
                                <i class="fas fa-users d-block mb-1"></i>
                                <div class="feature-text">8-10 servings</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock d-block mb-1"></i>
                                <div class="feature-text">3 hours</div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-coffee d-block mb-1"></i>
                                <div class="feature-text">Coffee flavor</div>
                            </div>
                        </div>
                        <div class="cake-actions">
                            <a href="https://wa.me/60123456789?text=Hi! I want to order Tiramisu Cake (RM105)" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Order Now
                            </a>
                            <button class="btn-info" onclick="showCakeInfo('Tiramisu Cake')">
                                <i class="fas fa-info-circle"></i>Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-primary-custom btn-lg" id="loadMoreBtn">
                    <i class="fas fa-plus-circle me-2"></i>Load More Delicious Cakes
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section-padding bg-cream">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Sweet Moments Gallery</h2>
                <p class="section-subtitle">Take a peek into our kitchen and see the artistry behind every creation</p>
            </div>

            <div class="gallery-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-item" onclick="openImageModal('https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=800&h=800&fit=crop')">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400&h=400&fit=crop" alt="Gallery Image" class="gallery-image">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus fa-2x text-white"></i>
                    </div>
                </div>
                <div class="gallery-item" onclick="openImageModal('https://images.unsplash.com/photo-1558636508-e0db3814bd1d?w=800&h=800&fit=crop')">
                    <img src="https://images.unsplash.com/photo-1558636508-e0db3814bd1d?w=400&h=400&fit=crop" alt="Gallery Image" class="gallery-image">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus fa-2x text-white"></i>
                    </div>
                </div>
                <div class="gallery-item" onclick="openImageModal('https://images.unsplash.com/photo-1586985564150-0f5b1cd8b6a0?w=800&h=800&fit=crop')">
                    <img src="https://images.unsplash.com/photo-1586985564150-0f5b1cd8b6a0?w=400&h=400&fit=crop" alt="Gallery Image" class="gallery-image">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus fa-2x text-white"></i>
                    </div>
                </div>
                <div class="gallery-item" onclick="openImageModal('https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=800&h=800&fit=crop')">
                    <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&h=400&fit=crop" alt="Gallery Image" class="gallery-image">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus fa-2x text-white"></i>
                    </div>
                </div>
                <div class="gallery-item" onclick="openImageModal('https://images.unsplash.com/photo-1551024506-0bccd828d307?w=800&h=800&fit=crop')">
                    <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=400&h=400&fit=crop" alt="Gallery Image" class="gallery-image">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus fa-2x text-white"></i>
                    </div>
                </div>
                <div class="gallery-item" onclick="openImageModal('https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?w=800&h=800&fit=crop')">
                    <img src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?w=400&h=400&fit=crop" alt="Gallery Image" class="gallery-image">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Happy Customers</h2>
                <p class="section-subtitle">Read what our satisfied customers say about their sweet experiences with us</p>
            </div>

            <div class="row g-4" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616c669e128?w=80&h=80&fit=crop&crop=face" alt="Sarah Ahmad" class="testimonial-avatar">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The chocolate cake was absolutely divine! Perfect for my daughter's birthday. The attention to detail and taste exceeded all expectations. Will definitely order again!"</p>
                        <div class="testimonial-author">Sarah Ahmad</div>
                        <div class="text-muted small">Kuantan</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face" alt="Ahmad Rahman" class="testimonial-avatar">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Amazing wedding cake! Beautiful design and tasted even better than it looked. The team was professional and delivered exactly what we dreamed of. Thank you YummyKuantan!"</p>
                        <div class="testimonial-author">Ahmad Rahman</div>
                        <div class="text-muted small">Kuantan</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&crop=face" alt="Lisa Tan" class="testimonial-avatar">
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Fast delivery and excellent customer service. The cupcakes were fresh and delicious! Each bite was a piece of heaven. Highly recommend to everyone!"</p>
                        <div class="testimonial-author">Lisa Tan</div>
                        <div class="text-muted small">Kuantan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding contact-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="text-white">
                        <h2 class="font-script display-4 mb-4">Ready to Order Your Perfect Cake?</h2>
                        <p class="lead mb-4">Contact us today and let's create something sweet together. We're here to make your celebration unforgettable!</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="feature-icon me-3" style="width: 60px; height: 60px;">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold">Call Us</div>
                                        <div class="opacity-75">+60 123 456 789</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="feature-icon me-3" style="width: 60px; height: 60px;">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold">Open Hours</div>
                                        <div class="opacity-75">8AM - 10PM Daily</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <a href="https://wa.me/60123456789?text=Hi! I'd like to place an order" class="btn btn-primary-custom btn-lg">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp Order
                            </a>
                            <a href="tel:+60123456789" class="btn btn-outline-custom btn-lg text-white">
                                <i class="fas fa-phone me-2"></i>Call Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-form">
                        <h4 class="font-script mb-4 text-white" style="font-size: 2rem;">Quick Order Form</h4>
                        <form id="quickOrderForm">
                            <div class="mb-3">
                                <label class="form-label text-white">Your Name</label>
                                <input type="text" class="form-control form-control-custom" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Phone Number</label>
                                <input type="tel" class="form-control form-control-custom" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Cake Type</label>
                                <select class="form-select form-control-custom" required>
                                    <option value="">Select cake type</option>
                                    <option value="birthday">Birthday Cake</option>
                                    <option value="wedding">Wedding Cake</option>
                                    <option value="cupcakes">Cupcakes</option>
                                    <option value="custom">Custom Design</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Special Requirements</label>
                                <textarea class="form-control form-control-custom" rows="3" placeholder="Tell us about your requirements..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary-custom btn-lg w-100">
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
                        <button class="btn btn-primary-custom" type="button" id="subscribeBtn">
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

    <!-- Image Modal -->
    <div class="image-modal" id="imageModal">
        <button class="close-modal" onclick="closeImageModal()">
            <i class="fas fa-times"></i>
        </button>
        <img id="modalImage" class="modal-image" src="" alt="Gallery Image">
    </div>

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
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const priceFilter = document.getElementById('priceFilter');
        const cakeCards = document.querySelectorAll('.cake-card');

        function filterCakes() {
            const searchTerm = searchInput.value.toLowerCase();
            const selectedCategory = categoryFilter.value;
            const selectedPrice = priceFilter.value;

            cakeCards.forEach(card => {
                const title = card.querySelector('.cake-title').textContent.toLowerCase();
                const description = card.querySelector('.cake-description').textContent.toLowerCase();
                const price = parseInt(card.querySelector('.cake-price').textContent.replace(/[^\d]/g, ''));

                let showCard = true;

                // Search filter
                if (searchTerm && !title.includes(searchTerm) && !description.includes(searchTerm)) {
                    showCard = false;
                }

                // Price filter
                if (selectedPrice) {
                    if (selectedPrice === '0-50' && price > 50) showCard = false;
                    if (selectedPrice === '50-100' && (price <= 50 || price > 100)) showCard = false;
                    if (selectedPrice === '100+' && price <= 100) showCard = false;
                }

                card.style.display = showCard ? 'block' : 'none';
            });
        }

        searchInput.addEventListener('input', filterCakes);
        categoryFilter.addEventListener('change', filterCakes);
        priceFilter.addEventListener('change', filterCakes);

        // Toggle favorite
        function toggleFavorite(btn) {
            const heart = btn.querySelector('i');
            if (heart.classList.contains('fas')) {
                heart.classList.remove('fas');
                heart.classList.add('far');
                btn.style.background = 'rgba(255,255,255,0.9)';
                btn.style.color = '#6C757D';
            } else {
                heart.classList.remove('far');
                heart.classList.add('fas');
                btn.style.background = '#E74C3C';
                btn.style.color = 'white';
            }
        }

        // Show cake info
        function showCakeInfo(cakeName) {
            alert(`Detailed information about ${cakeName}:\n\n• Premium quality ingredients\n• Freshly baked daily\n• Can be customized\n• Available for same-day delivery\n• Allergen information available\n\nContact us for more details!`);
        }

        // Image Modal
        function openImageModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = imageSrc;
            modal.classList.add('active');
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
        }

        // Close modal on background click
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });

        // Newsletter subscription
        document.getElementById('subscribeBtn').addEventListener('click', function() {
            const email = document.getElementById('newsletterEmail').value;
            if (email && email.includes('@')) {
                alert('Thank you for subscribing! We\'ll keep you updated with our latest offers and new cake collections.');
                document.getElementById('newsletterEmail').value = '';
            } else {
                alert('Please enter a valid email address.');
            }
        });

        // Quick order form
        document.getElementById('quickOrderForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            alert('Order request sent successfully! We\'ll contact you via WhatsApp shortly to confirm your order details.');
            this.reset();
        });

        // Load more cakes
        document.getElementById('loadMoreBtn').addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading more delicious cakes...';

            setTimeout(() => {
                this.style.display = 'none';
                // In a real application, you would load more cakes from the server
                const message = document.createElement('div');
                message.className = 'text-center mt-4';
                message.innerHTML = '<p class="text-muted">More delicious cakes coming soon! Follow us on social media for updates.</p>';
                document.querySelector('.cake-grid').parentNode.appendChild(message);
            }, 2000);
        });

        // Add some interactive effects
        document.querySelectorAll('.cake-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>
