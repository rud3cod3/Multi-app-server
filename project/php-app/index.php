<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern PHP Website</title>
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4cc9f0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--primary-color);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 80px 0;
            text-align: center;
            border-radius: 0 0 20px 20px;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .btn {
            display: inline-block;
            background-color: white;
            color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Features Section */
        .features {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark-color);
            margin-bottom: 15px;
        }
        
        .section-title p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .card-img {
            height: 200px;
            background-color: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }
        
        .card-content {
            padding: 30px;
        }
        
        .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: var(--accent-color);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 10px;
        }
        
        .footer-column a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column a:hover {
            color: var(--accent-color);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
            color: #aaa;
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Modern<span style="color: var(--accent-color);">PHP</span></a>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="hero">
        <div class="container">
            <h1>Welcome to Our Modern PHP Website</h1>
            <p>A beautifully designed, responsive website built with PHP that delivers exceptional user experience across all devices.</p>
            <a href="#" class="btn">Get Started</a>
        </div>
    </section>
    
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Our Amazing Features</h2>
                <p>Discover what makes our platform stand out from the competition with these powerful features.</p>
            </div>
            
            <div class="cards">
                <div class="card">
                    <div class="card-img">
                        <i>⚡</i>
                    </div>
                    <div class="card-content">
                        <h3>Lightning Fast</h3>
                        <p>Optimized for performance with minimal load times and smooth animations for the best user experience.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-img">
                        <i>📱</i>
                    </div>
                    <div class="card-content">
                        <h3>Fully Responsive</h3>
                        <p>Looks great on any device, from desktop computers to mobile phones and tablets.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-img">
                        <i>🔒</i>
                    </div>
                    <div class="card-content">
                        <h3>Secure by Design</h3>
                        <p>Built with security in mind, protecting your data and privacy at every level.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>About Us</h3>
                    <p>We create beautiful, functional websites that help businesses grow in the digital world.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><a href="tel:+1234567890">+1 (234) 567-890</a></li>
                        <li>123 Street, City</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; <?php echo date("Y"); ?> ModernPHP. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
