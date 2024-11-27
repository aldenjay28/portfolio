<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Alden Jay Centino</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"> <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
    <header data-aos="fade-down">
        <h1>Welcome to My Profile</h1>
    </header>

    <div class="container">
        <!-- Profile Card -->
        <div class="option-card" data-aos="fade-up" data-aos-delay="100">
            <img src="jay.jpg" alt="Alden Jay A. Centino">
            <h3>Alden Jay A. Centino</h3>
            <p><i class="fa-solid fa-birthday-candle"></i> <strong>Birthday:</strong> October 27, 1999</p>
            <p><i class="fa-solid fa-hourglass-half"></i> <strong>Age:</strong> 25</p>
            <p><i class="fa-solid fa-location-dot"></i> <strong>Location:</strong> Brgy Hinapolon, Alangalang, Leyte</p>
            <p><i class="fa-solid fa-heart-circle-check"></i> <strong>Status:</strong> Single</p>
            <p><i class="fa-solid fa-person"></i> <strong>Gender:</strong> Male</p>
        </div>

        <!-- Summary Section -->
        <div class="option-card" data-aos="fade-up" data-aos-delay="200">
            <h3>Summary</h3>
            <p>"I am a versatile and highly skilled IT professional with a strong passion for integrating creativity and technology. With a rich background in graphic design, video editing, and web development, I specialize in creating visually captivating content and cutting-edge digital experiences. My expertise lies in delivering high-quality multimedia projects that not only meet but exceed client expectations. Whether it's designing stunning graphics, editing videos with precision, or developing innovative web solutions, I am dedicated to providing exceptional results that drive engagement and bring ideas to life. I thrive on challenges and constantly seek opportunities to push the boundaries of what's possible, ensuring that every project I take on reflects the latest trends, technology, and industry standards."</p>
        </div>

        <!-- Contact Section -->
        <div class="option-card" data-aos="fade-up" data-aos-delay="300">
            <h3>Contact Information</h3>
            <p><i class="fa-solid fa-envelope"></i> <strong>Email:</strong> aldenjaycentz28@gmail.com</p>
            <p><i class="fa-solid fa-phone"></i> <strong>Phone:</strong> +63 975 016 5677</p>
            <p><i class="fa-brands fa-linkedin"></i> <strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/alden-jay-centino-3425a5318/" target="_blank">LinkedIn Profile</a></p>
            <p><i class="fa-brands fa-upwork"></i> <strong>Upwork:</strong> <a href="https://www.upwork.com/freelancers/~01fa2297fcb8c62190" target="_blank">Upwork Profile</a></p>
            <p><i class="fa-brands fa-jobstreet"></i> <strong>JobStreet:</strong> <a href="https://ph.jobstreet.com/profile/aldenjay-centino-tFKryKyRwB" target="_blank">JobStreet Profile</a></p>
        </div>

        <!-- Skills Section -->
        <div class="option-card" data-aos="fade-up" data-aos-delay="400">
            <h3>Skills</h3>
            <div class="skill-bar">
                <span>Web Development</span>
                <div class="progress-bar" style="width: 90%;">90%</div>
            <div class="skill-bar">
                <span>Graphic Design</span>
                <div class="progress-bar" style="width: 90%;">90%</div>
            </div>
            <div class="skill-bar">
                <span>Video Editing</span>
                <div class="progress-bar" style="width: 85%;">85%</div>
            </div>
            <div class="skill-bar">
                <span>Computer Solutions</span>
                <div class="progress-bar" style="width: 95%;">95%</div>
            </div>
            <div class="skill-bar">
                <span>Network Management</span>
                <div class="progress-bar" style="width: 85%;">85%</div>
            </div>
            </div>
        </div>

        <!-- Hobbies Section -->
        <div class="option-card" data-aos="fade-up" data-aos-delay="500">
            <h3>Hobbies</h3>
            <p><i class="fa-solid fa-code"></i> Coding</p>
            <p><i class="fa-solid fa-motorcycle"></i> Riding</p>
            <p><i class="fa-solid fa-camera-retro"></i> Photography</p>
            <p><i class="fa-solid fa-headphones"></i> Music</p>
        </div>

        <!-- Download Resume -->
        <div class="option-card" data-aos="zoom-in" data-aos-delay="600">
            <a href="Centino, Alden Jay Original CV.pdf" download class="button"><i class="fa-solid fa-download"></i> Download Resume</a>
        </div>
    </div>

    <div class="back-btn-container" data-aos="fade-up" data-aos-delay="700">
        <a href="index.php" class="back-btn"><i class="fa-solid fa-arrow-left"></i></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true,
            delay: 100,
        });
    </script>

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

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 25px;
            width: 90%;
            max-width: 1200px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        .option-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
            text-align: center;
            transition: transform 0.4s, box-shadow 0.4s ease;
            overflow: hidden;
        }

        .option-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .option-card img {
            width: 80%;
            max-width: 200px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            animation: zoomIn 0.5s ease;
        }

        .option-card h3 {
            font-size: 1.8em;
            color: #f1c40f;
            margin-bottom: 10px;
        }

        .skill-bar {
            margin-bottom: 10px;
            text-align: left;
        }

        .skill-bar span {
            display: block;
            font-size: 1em;
            margin-bottom: 5px;
        }

        .progress-bar {
            background: #f1c40f;
            color: #333;
            font-weight: bold;
            text-align: center;
            padding: 5px;
            border-radius: 5px;
            transition: width 0.5s ease-in-out;
        }

        .button, .back-btn {
            padding: 12px 25px;
            background-color: #f1c40f;
            color: #333;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .button:hover, .back-btn:hover {
            background-color: #d4ac0d;
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
            }
            to {
                transform: scale(1);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }

            .option-card img {
                width: 70%;
            }
        }
    </style>
</body>
</html>
