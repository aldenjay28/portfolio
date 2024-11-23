<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Alden Jay Centino</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Base Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: linear-gradient(135deg, #9b59b6, #3498db);
            overflow-x: hidden;
        }

        nav {
            position: fixed;
            width: 100%;
            background-color: #2c3e50;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 25px;
        }

        nav ul li a {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 30px;
            transition: background-color 0.3s, transform 0.3s;
        }

        nav ul li a:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        .hero {
            padding: 100px 0;
            text-align: center;
            color: #2c3e50;
            position: relative;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #3498db, #9b59b6);
            -webkit-background-clip: text;
            color: transparent;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #ecf0f1;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-in-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cta-button {
            display: inline-block;
            background-color: #2980b9;
            color: #fff;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s, transform 0.3s;
        }

        .cta-button:hover {
            background-color: #1abc9c;
            transform: translateY(-5px);
        }

        .video-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
            background-color: #ecf0f1;
        }

        .video-section iframe {
            width: 100%;
            max-width: 800px;
            height: 450px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .video-description {
            max-width: 800px;
            text-align: center;
            color: #2c3e50;
        }

        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 50px;
            margin: 0 auto;
            background-color: #fff;
        }

        .service-card {
            text-align: center;
            padding: 25px;
            background-color: #fdfdfd;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-card i {
            font-size: 3rem;
            color: #2980b9;
            margin-bottom: 15px;
        }

        footer {
            padding: 20px;
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
        }

        .social-media-links a {
            color: #fff;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-media-links a:hover {
            color: #1abc9c;
        }

        .floating-btns {
            position: fixed;
            display: flex;
            flex-direction: column;
            gap: 20px;
            right: 20px;
            bottom: 50px;
        }

        .floating-btn {
            background-color: #2980b9;
            color: #fff;
            padding: 15px;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s, transform 0.3s;
            font-size: 1.3rem;
            cursor: pointer;
        }

        .floating-btn:hover {
            background-color: #1abc9c;
            transform: scale(1.1);
        }

    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="about.php">Profile</a></li>
            <li><a href="experience.php">Experience</a></li>
            <li><a href="education.php">Education</a></li>
            <li><a href="achievements.php">Achievements</a></li>
            <li><a href="contact.php">Social Media</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero" data-aos="fade-up">
        <img src="avatar.jpg" alt="Alden Jay Centino" class="avatar">
        <h1 id="typewriter"></h1>
        <p>Crafting digital experiences with creativity and precision.</p>
        <a href="worklist.php" class="cta-button">View My Work</a>
    </section>

    <!-- Video Section -->
    <section class="video-section" data-aos="fade-up">
        <iframe src="https://drive.google.com/file/d/1ifybN1EqzxNwzjq-fGVCgdmCsg8Atzpz/preview" allow="autoplay"></iframe>
        <div class="video-description">
            <h3>Featured Video: My Work Showcase</h3>
            <p>Explore the highlights of my recent projects, showcasing my expertise in design, video editing, and development.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" data-aos="fade-up">
        <div class="service-card">
            <i class="fas fa-paint-brush"></i>
            <h3>Graphic Design</h3>
            <p>Compelling visuals to captivate your audience.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-video"></i>
            <h3>Video Editing</h3>
            <p>High-quality, engaging video content.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-code"></i>
            <h3>Web Development</h3>
            <p>Responsive and modern web solutions.</p>
        </div>
        <div class="service-card">
        <i class="fas fa-tools"></i>
        <h3>Computer System Servicing</h3>
        <p>Hardware and Software solutions.</p>
        </div>
    </section>

    <!-- Floating Action Buttons -->
    <div class="floating-btns">
        <a href="message.php" class="floating-btn" data-aos="fade-in">
            <i class="fas fa-comments"></i>
        </a>
        <button class="floating-btn" onclick="scrollToTop()" data-aos="fade-in">
            <i class="fas fa-arrow-up"></i>
        </button>
        <button class="floating-btn" onclick="openRatingPage()" data-aos="fade-in">
            <i class="fas fa-star"></i>
        </button>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Alden Jay Centino</p>
        <div class="social-media-links">
            <a href="https://www.facebook.com/aldenjaycentz/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.tiktok.com/@aroutegaming" target="_blank"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.instagram.com/arouterides/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/@arouterides" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function openRatingPage() {
            window.location.href = 'ratings.php';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const typewriterText = 'WELCOME TO MY PORTFOLIO!';
            let index = 0;

            function typeWriterEffect() {
                if (index < typewriterText.length) {
                    document.getElementById('typewriter').innerHTML += typewriterText.charAt(index);
                    index++;
                    setTimeout(typeWriterEffect, 100);
                }
            }

            typeWriterEffect();
        });
    </script>
</body>
</html>
