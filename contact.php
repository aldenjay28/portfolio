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
</head>
<body>
    <header data-aos='fade-down'>
        <h1>Contact & Social Media</h1>
        <p>Feel free to reach out or connect on social media just click it now.</p>
    </header>
 

    <section class='contact-section' data-aos='fade-up'>
        <!-- Social Media Links Section -->
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
        <!-- Back to Home Link -->
    <a href='index.php' class='back-link' data-aos='fade-up'><i class='fas fa-arrow-left'></i> </a>
    </section>

   

    <!-- AOS JS -->
    <script src='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js'></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <footer>
        <p>&copy; 2024 Alden Jay Centino</p>
    </footer>

    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #2b5876, #4e4376);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            animation: fadeIn 1.5s ease;
        }

        h1 {
            font-size: 2.8em;
            margin: 20px 0;
            color: #f1c40f;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        h2 {
            font-size: 2.2em;
            color: #f1c40f;
        }

        p {
            font-size: 1.1em;
            margin-top: 10px;
            color: #ccc;
        }

        /* Contact Section Styling */
        .contact-section {
            max-width: 900px;
            margin: auto;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
            text-align: center;
        }

        .social-media-links {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 20px;
        }

        .social-media-link {
            color: #fff;
            text-decoration: none;
            font-size: 1.5em;
            transition: color 0.3s ease;
            display: inline-flex;
            align-items: center;
            flex-direction: column;
            width: 60px;
        }

        .social-media-link:hover {
            color: #f1c40f;
        }

        .social-media-icon {
            font-size: 2.5em;
            margin-bottom: 8px;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 25px;
            background-color: #f1c40f;
            color: #333;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .back-link:hover {
            background-color: #d4ac0d;
            transform: translateY(-2px);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</body>
</html>";
?>
