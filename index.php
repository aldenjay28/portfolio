<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Alden Jay Centino</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
         @media screen and (max-width: 768px) {
            /* Adjustments for mobile screens */
            .your-element {
                display: block;
                width: 100%;
            }
        }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(white, skyblue, #c3cfe2);
            color: #333;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        header {
            margin-top: 20px;
            padding: 20px 0;
        }
        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 10px;
            background: url('avatar.jpg') center/cover no-repeat, #ccc;
            animation: pulse 2s infinite;
        }

        .description {
            font-size: 30px;
                font-weight: bold;
                color: #095379;
                margin-top: 20px;
                white-space: nowrap;
                overflow: hidden;
                border-right: 3px solid #fff;
                animation: typing 3s steps(30, end), blink 0.5s step-end infinite alternate;
                display: inline-block;
                text-align: center;
        }

        @keyframes typing {
                from { width: 0; }
                to { width: 100%; }
            }

            @keyframes blink {
                from, to { border-color: transparent; }
                50% { border-color: transparent; }
            }

        .grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px 0;
            gap: 20px;
        }

        .grid-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            background: #007BFF;
            color: #fff;
            border-radius: 10px;
            padding: 10px;
            width: 150px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .grid-button img {
            width: 100%;
            height: 100px;
            border-radius: 10px;
            object-fit: cover;
        }

        .grid-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .grid-button span {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        .video-section {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 20px;
            margin: 30px 0;
        }

        .video-section iframe {
            width: 100%;
            max-width: 600px;
            height: 300px;
            border-radius: 10px;
        }

        .video-description {
            flex: 1;
            text-align: left;
        }

        .video-description h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }


        .video-description p {
            font-size: 16px;
            color: #555;
        }


        .floating-btn {
            background: #007BFF;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .floating-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #333;
            padding: 10px 0;
            gap: 20px;
        }

        footer a {
            color: white;
            font-size: 20px;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #007BFF;
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
            background-color: rgba(0, 0, 0, 0.3);
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
        .floating-btns {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        @media (max-width: 768px) {
            .video-section {
                flex-direction: column;
                align-items: center;
            }

            .video-section iframe {
                width: 100%;
            }

            .video-description {
                text-align: center;
            }

            .floating-btns {
                flex-direction: row;
                bottom: 10px;
                right: 10px;
            }
        }
    </style>
</head>
<script src="//code.tidio.co/fkjqiuqyb2b4glt3dnpqwqneyej8vgi9.js" async></script>
<body>
    <div class="container">
        <header>
            <div class="description">Web Developer|Graphic Designer|Video & Photo Editor|Computer Solutions</div>
        </header>
        <section class="grid">
            <a href="about.php" class="grid-button">
                <img src="1.jpg" alt="Profile">
                <span>Profile</span>
            </a>
            <a href="education.php" class="grid-button">
                <img src="2.jpg" alt="Education">
                <span>Education</span>
            </a>
            <a href="options.php" class="grid-button">
                <img src="6.jpg" alt="Worklist">
                <span>Worklist</span>
            </a>
            <a href="experience.php" class="grid-button">
                <img src="3.jpg" alt="Experience">
                <span>Experience</span>
            </a>
            <a href="achievements.php" class="grid-button">
                <img src="4.jpg" alt="Achievements">
                <span>Achievements</span>
            </a>
            <a href="contact.php" class="grid-button">
                <img src="5.jpg" alt="Social Media">
                <span>Social Media</span>
            </a>
        </section>

        <section class="video-section" data-aos="fade-up">
            <iframe src="https://drive.google.com/file/d/1Er_8EXszf37HIQNVzwy6N46bpkUCyPR4/preview"></iframe>
            <div class="video-description">
            <h3>Featured Video: Introduction</h3>
                <p>I specialize in a range of creative and technical services, combining expertise in web development, graphic design, and video & photo editing. I also provide computer solutions, ensuring devices run seamlessly through Cybernitics home and remote services.</p>
            </div>
         
        </section>

        <div class="floating-btns">
            <a href="message.php" class="floating-btn"><i class="fas fa-comments"></i></a>
            <button class="floating-btn" onclick="scrollToTop()"><i class="fas fa-arrow-up"></i></button>
            <button class="floating-btn" onclick="openRatingPage()"><i class="fas fa-star"></i></button>
        </div>

           <!-- Services Section -->
    <section class="services" data-aos="fade-up">
    <div class="service-card">
            <i class="fas fa-code"></i>
            <h3>Web Development</h3>
            <p>Responsive and modern Web Develpment.</p>
        </div>
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
            <i class="fas fa-image"></i>
            <h3>Photo Editing</h3>
            <p>Eye-catching and High value produced Images.</p>
        </div>
        <div class="service-card">
        <i class="fas fa-tools"></i>
        <h3>Computer System Servicing</h3>
        <p>Hardware and Software solutions.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-check-square"></i>
            <h3>Oganizational Skills</h3>
            <p>Helps you manage your time, resources, and responsibilities to achieve your goals.</p>
        </div>
    </section>

    <p>&copy; 2024 Alden Jay Centino</p>
        <footer>
       
            <a href="https://www.facebook.com/aldenjaycentz/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.tiktok.com/@aroutegaming"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.instagram.com/arouterides/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/@arouterides"><i class="fab fa-youtube"></i></a>
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function openRatingPage() {
            window.location.href = 'ratings.php';
        }
    </script>
</body>
</html>
