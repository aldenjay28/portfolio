<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Contact - Alden Jay Centino</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css'> <!-- AOS CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'> <!-- Font Awesome -->
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header Styling */
        header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 30px 0;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        /* Contact Section */
        .contact-section {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .contact-item {
            font-size: 1.1em;
            margin: 15px 0;
        }

        /* Social Media Links Styling */
        .social-media-section {
            text-align: center;
            margin-top: 30px;
        }

        .social-media-links {
            display: flex;
            justify-content: center;
            gap: 40px; /* Increased spacing */
            margin-top: 20px;
        }

        .social-media-link {
            color: #333;
            text-decoration: none;
            font-size: 1.5em;
            transition: color 0.3s ease;
            display: inline-flex;
            align-items: center;
            flex-direction: column;
            width: 60px;
        }

        .social-media-link:hover {
            color: #007bff;
        }

        .social-media-icon {
            font-size: 2.5em;
            margin-bottom: 8px; /* Increased spacing below icon */
        }

        /* Back to Home Link */
        .back-link {
            display: inline-block;
            margin-top: 20px;
            font-size: 1.1em;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: #333;
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header data-aos='fade-down'>
        <h1>Contact & Social Media</h1>
        <p>Feel free to reach out or connect on social media.</p>
    </header>

   
    <!-- Social Media Links Section -->
    <section class='social-media-section'>
        <h2 data-aos='fade-down'>Follow Me</h2>
        <div class='social-media-links'>
            <a href='https://www.facebook.com/aldenjaycentz/' target='_blank' class='social-media-link' data-aos='fade-left'>
                <i class='fab fa-facebook-f social-media-icon'></i> Facebook
            </a>
            <a href='https://www.tiktok.com/@aroutegaming' target='_blank' class='social-media-link' data-aos='fade-left' data-aos-delay='100'>
                <i class='fab fa-tiktok social-media-icon'></i> TikTok
            </a>
            <a href='https://www.instagram.com/arouterides/' target='_blank' class='social-media-link' data-aos='fade-left' data-aos-delay='200'>
                <i class='fab fa-instagram social-media-icon'></i> Instagram
            </a>
            <a href='https://www.youtube.com/@arouterides' target='_blank' class='social-media-link' data-aos='fade-left' data-aos-delay='300'>
                <i class='fab fa-youtube social-media-icon'></i> YouTube
            </a>
        </div>
    </section>

    <!-- Back to Home Link -->
    <a href='index.php' class='back-link' data-aos='fade-up'><i class='fas fa-arrow-left'></i> Back</a>

    <!-- AOS JS -->
    <script src='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js'></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Alden Jay Centino</p>
    </footer>
</body>
</html>";
?>
