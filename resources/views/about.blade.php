<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - NetConnect Pro</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

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
    
    <section class="page-header">
        <h1>About NetConnect Pro</h1>
        <p>Leading the industry in enterprise network solutions since 2010</p>
    </section>
    
    <div class="content-section">
        <div class="about-content">
            <h2>Our Story</h2>
            <p>NetConnect Pro was founded with a singular vision: to provide businesses with robust, scalable network infrastructure that drives growth and innovation. Over the past decade, we've grown from a small startup to a trusted partner for enterprises worldwide.</p>
            
            <p>We specialize in delivering high-performance routers, intelligent switches, and comprehensive networking solutions that meet the demanding requirements of modern businesses. Our team of network engineers and industry experts work tirelessly to ensure our clients receive not just products, but complete solutions tailored to their unique needs.</p>
            
            <p>Today, we serve over 2,000 companies across various industries, from healthcare and finance to manufacturing and technology. Our commitment to quality, reliability, and customer satisfaction has made us a leader in the network infrastructure space.</p>
        </div>
        
        <div class="about-content">
            <h2>Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <h3>Innovation</h3>
                    <p>We continuously invest in research and development to bring cutting-edge technology to our customers.</p>
                </div>
                <div class="value-card">
                    <h3>Reliability</h3>
                    <p>Our products are built to last, with enterprise-grade components and rigorous testing standards.</p>
                </div>
                <div class="value-card">
                    <h3>Customer Focus</h3>
                    <p>Your success is our success. We provide dedicated support and personalized solutions for every client.</p>
                </div>
            </div>
        </div>
        
        <div class="stats-section">
            <div class="stat-item">
                <h3>2000+</h3>
                <p>Clients Worldwide</p>
            </div>
            <div class="stat-item">
                <h3>99.9%</h3>
                <p>Uptime Guarantee</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Technical Support</p>
            </div>
            <div class="stat-item">
                <h3>14 Years</h3>
                <p>Industry Experience</p>
            </div>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 NetConnect Pro. All rights reserved. | Professional Network Infrastructure Solutions</p>
    </footer>
</body>
</html>