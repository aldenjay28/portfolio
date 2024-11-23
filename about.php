<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Alden Jay Centino</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"> <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
    <div class="profile-container">
        <header data-aos="fade-down">
            <h1>Welcome to My Profile</h1>
        </header>
        
        <!-- Profile Card -->
        <div class="profile-card" data-aos="fade-up">
            <div class="profile-image">
                <img src="jay.jpg" alt="Alden Jay A. Centino" />
            </div>
            <div class="profile-info">
                <h2>Alden Jay A. Centino</h2>
                <p><i class="fa-solid fa-birthday-candle"></i> <strong>Birthday:</strong> October 27, 1999</p>
                <p><i class="fa-solid fa-hourglass-half"></i> <strong>Age:</strong> 25</p>
                <p><i class="fa-solid fa-location-dot"></i> <strong>Location:</strong> Brgy Hinapolon, Alangalang, Leyte</p>
                <p><i class="fa-solid fa-heart-circle-check"></i> <strong>Status:</strong> Single</p>
                <p><i class="fa-solid fa-person"></i> <strong>Gender:</strong> Male</p>
            </div>
        </div>

        <!-- Summary Section -->
        <section class="summary-section" data-aos="fade-up">
            <h2>Summary</h2>
            <p>I am a highly skilled IT professional with expertise in graphic design, video editing, and web development. I am dedicated to delivering high-quality multimedia content and innovative web solutions.</p>
        </section>

        <!-- Contact Information -->
        <section class="contact-section" data-aos="fade-up">
            <h2>Contact Information</h2>
            <p><i class="fa-solid fa-envelope"></i> <strong>Email:</strong> aldenjaycentz28@gmail.com</p>
            <p><i class="fa-solid fa-phone"></i> <strong>Phone:</strong> +63 975 016 5677</p>
            <p><i class="fa-brands fa-linkedin"></i> <strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/alden-jay-centino-3425a5318/" target="_blank">LinkedIn Profile</a></p>
            <p><i class="fa-brands fa-upwork"></i> <strong>Upwork:</strong> <a href="https://www.upwork.com/freelancers/~01fa2297fcb8c62190" target="_blank">Upwork Profile</a></p>
            <p><i class="fa-brands fa-jobstreet"></i> <strong>JobStreet:</strong> <a href="https://ph.jobstreet.com/profile/aldenjay-centino-tFKryKyRwB" target="_blank">JobStreet Profile</a></p>
        </section>

        <!-- Skills Section -->
        <section class="skills-section" data-aos="fade-up">
            <h2>Skills</h2>
            <ul class="skills">
                <li>
                    <span>Graphic Design</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 90%;" data-aos="progress"></div>
                    </div>
                </li>
                <li>
                    <span>Video Editing</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 85%;" data-aos="progress"></div>
                    </div>
                </li>
                <li>
                    <span>Web Development (HTML/CSS/PHP)</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%;" data-aos="progress"></div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Hobbies Section -->
        <section class="hobbies-section" data-aos="fade-up">
            <h2>Hobbies</h2>
            <ul class="hobbies">
                <li class="hobby" data-aos="zoom-in">
                    <i class="fa-solid fa-motorcycle"></i>
                    <span>Riding</span>
                </li>
                <li class="hobby" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fa-solid fa-camera-retro"></i>
                    <span>Photography</span>
                </li>
                <li class="hobby" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fa-solid fa-headphones"></i>
                    <span>Music</span>
                </li>
            </ul>
        </section>

        <!-- Download Resume Button -->
        <section class="download-section" data-aos="fade-up">
            <a href="Centino, Alden Jay Original CV.pdf" download class="download-button"><i class="fa-solid fa-download"></i> Download Resume</a>
        </section>

        <!-- Back Link -->
        <div class="back-link-container" data-aos="fade-up">
            <a href="index.php" class="back-link"><i class="fa-solid fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>



    <style>
        /* General Profile Container Styling */
        .profile-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Profile Card Styling */
        .profile-card {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .profile-image img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        
        /* Skills Section */
        .skills-section {
            margin-top: 30px;
        }
        .progress {
            background-color: #e0e0e0;
            border-radius: 20px;
            overflow: hidden;
        }
        .progress-bar {
            height: 10px;
            background-color: #76c7c0;
            border-radius: 20px;
        }
        
        /* Hobbies Section */
        .hobbies {
            display: flex;
            gap: 15px;
            list-style: none;
            padding: 0;
            justify-content: center;
        }
        .hobby {
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        .hobby:hover {
            transform: scale(1.1);
        }
        .hobby-icon {
            font-size: 2.5em;
            color: #76c7c0;
            margin-bottom: 8px;
        }
        
        /* Download Resume Button */
        .download-button {
            display: inline-block;
            padding: 12px 20px;
            font-size: 1.1em;
            background-color: #76c7c0;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .download-button:hover {
            background-color: #5ca6a1;
        }

        /* Back Link */
        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }
        .back-link:hover {
            color: #76c7c0;
        }
    </style>
</body>
</html>
