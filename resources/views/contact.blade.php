<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - NetConnect Pro</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

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
        <h1>Get In Touch</h1>
        <p>Let's discuss how we can elevate your network infrastructure</p>
    </section>
    
    <div class="contact-container">
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" id="company" name="company">
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
        
        <div class="contact-info">
            <h2>Contact Information</h2>
            
            <div class="info-item">
                <h3>Office Address</h3>
                <p>NetConnect Pro Headquarters<br>
                1234 Network Boulevard, Suite 500<br>
                Tech District, Silicon Valley, CA 94025</p>
            </div>
            
            <div class="info-item">
                <h3>Phone</h3>
                <p>Main: <a href="tel:+18005551234">+1 (800) 555-1234</a><br>
                Support: <a href="tel:+18005555678">+1 (800) 555-5678</a></p>
            </div>
            
            <div class="info-item">
                <h3>Email</h3>
                <p>Sales: <a href="mailto:sales@netconnectpro.com">sales@netconnectpro.com</a><br>
                Support: <a href="mailto:support@netconnectpro.com">support@netconnectpro.com</a></p>
            </div>
            
            <div class="info-item">
                <h3>Business Hours</h3>
                <p>Monday - Friday: 8:00 AM - 6:00 PM PST<br>
                Saturday: 9:00 AM - 3:00 PM PST<br>
                Sunday: Closed<br>
                <strong>24/7 Emergency Support Available</strong></p>
            </div>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2024 NetConnect Pro. All rights reserved. | Professional Network Infrastructure Solutions</p>
    </footer>
</body>
</html>