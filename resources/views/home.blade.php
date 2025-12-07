<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetConnect Pro - Enterprise Network Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>
<body>
<header>
    <nav>
        <a href="{{ url('/') }}" class="logo">NetConnect Pro</a>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>
    
<section class="hero">
        <h1>Enterprise Network Solutions</h1>
        <p>Empowering businesses with cutting-edge routers, switches, and network infrastructure for seamless connectivity and optimal performance.</p>
    <a href="{{ url('/contact') }}" class="cta-button">Get Started Today</a>    
</section>
    
    <section class="features">
        <div class="feature-card">
            <h3>High-Performance Routers</h3>
            <p>Enterprise-grade routers designed for maximum throughput, reliability, and security. Built to handle demanding network environments with ease.</p>
        </div>
        <div class="feature-card">
            <h3>Advanced Switching</h3>
            <p>Intelligent managed switches with VLAN support, QoS capabilities, and redundancy features to keep your network running smoothly.</p>
        </div>
        <div class="feature-card">
            <h3>24/7 Support</h3>
            <p>Our expert technical team is available around the clock to ensure your network infrastructure operates at peak performance.</p>
        </div>
    </section>
    
    <section class="products-section">
        <h2>Our Product Range</h2>
        <div class="products-grid">
            <div class="product-card">
                <h4>Core Routers</h4>
                <p>High-capacity routing solutions for backbone networks</p>
            </div>
            <div class="product-card">
                <h4>Managed Switches</h4>
                <p>Layer 2/3 switches with advanced management features</p>
            </div>
            <div class="product-card">
                <h4>Wireless Solutions</h4>
                <p>Enterprise WiFi systems for reliable wireless coverage</p>
            </div>
            <div class="product-card">
                <h4>Security Appliances</h4>
                <p>Firewall and intrusion prevention systems</p>
            </div>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2024 NetConnect Pro. All rights reserved. | Professional Network Infrastructure Solutions</p>
    </footer>
</body>
</html>