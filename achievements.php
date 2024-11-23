<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Achievements - Alden Jay Centino</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css'> <!-- AOS CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'> <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css'> <!-- Swiper CSS -->
    <style>
        /* Achievements Container */
        .achievements-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* Header Styling */
        header h1 {
            font-size: 2em;
            color: #333;
            text-align: center;
            margin-bottom: 10px;
        }

        /* Popup Button Styling */
        .popup-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #76c7c0;
            color: white;
            font-size: 1.2em;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            margin: 20px auto;
            display: block;
            width: fit-content;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .popup-button:hover {
            background-color: #5ba7a3;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            width: 80%;
            max-width: 600px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            position: relative;
            text-align: center;
            animation: scaleUp 0.3s ease-in-out;
        }

        @keyframes scaleUp {
            from { transform: scale(0.8); }
            to { transform: scale(1); }
        }

        /* Image Styling in Modal */
        .modal-content img {
            width: 100%;
            max-width: 300px;
            margin: 10px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Close Button */
        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 1.5em;
            color: #333;
            cursor: pointer;
        }

        .close:hover {
            color: #76c7c0;
        }

        /* Swiper Pagination and Buttons */
        .swiper-pagination {
            bottom: 10px;
        }
        .swiper-button-next, .swiper-button-prev {
            color: #333;
        }
    </style>
</head>
<body>
    <div class='achievements-container'>
        <header data-aos='fade-down'>
            <h1>My Achievements</h1>
            <p>Here are some highlights of my academic and professional accomplishments.</p>
        </header>

        <!-- Popup Button -->
        <div class='popup-button' onclick='openModal()'>View Achievements Images</div>

        <!-- Modal Structure -->
        <div id='achievementModal' class='modal'>
            <div class='modal-content'>
                <span class='close' onclick='closeModal()'>&times;</span>
                <div class='swiper-container'>
                    <div class='swiper-wrapper'>
                        <div class='swiper-slide'><img src='1.png' alt='Achievement 1'><div class='image-description'>Proficiency Award in Multimedia for SY 2022-2023</div></div>
                        <div class='swiper-slide'><img src='2.png' alt='Achievement 2'><div class='image-description'>PC Troubleshooting and Maintenance Awardee</div></div>
                        <div class='swiper-slide'><img src='3.png' alt='Achievement 3'><div class='image-description'>Proficiency Award in Robotics</div></div>
                        <div class='swiper-slide'><img src='4.png' alt='Achievement 4'><div class='image-description'>Proficiency Award in Networking</div></div>
                        <div class='swiper-slide'><img src='5.png' alt='Achievement 5'><div class='image-description'>Proficiency Award in Web Development</div></div>
                    </div>
                    <div class='swiper-pagination'></div>
                    <div class='swiper-button-next'></div>
                    <div class='swiper-button-prev'></div>
                </div>
            </div>
        </div>

        <!-- Achievements Section with Icons -->
        <section class='achievements-section'>
            <div class='achievement-card' data-aos='zoom-in' data-aos-delay='100'>
                <i class='fas fa-award achievement-icon'></i>
                <div class='achievement-details'>
                    <h3>Summa Cum Laude</h3>
                    <p>Graduated with highest honors in BS Information Technology at ACLC College of Tacloban (2024).</p>
                </div>
            </div>
            <div class='achievement-card' data-aos='zoom-in' data-aos-delay='200'>
                <i class='fas fa-medal achievement-icon'></i>
                <div class='achievement-details'>
                    <h3>Top Performer in Web Development</h3>
                    <p>Recognized as a top performer in Web Development, specializing in PHP, JAVA, HTML and CSS.</p>
                </div>
            </div>
            <div class='achievement-card' data-aos='zoom-in' data-aos-delay='300'>
                <i class='fas fa-trophy achievement-icon'></i>
                <div class='achievement-details'>
                    <h3>Best Capstone Project</h3>
                    <p>Developed a digital legacy organizer app that won the Best Capstone Project award (2024).</p>
                </div>
            </div>
            <div class='achievement-card' data-aos='zoom-in' data-aos-delay='400'>
                <i class='fas fa-certificate achievement-icon'></i>
                <div class='achievement-details'>
                    <h3>Certified Graphic Designer</h3>
                    <p>Achieved certification  and other graphic design tools, showcasing creativity in digital arts.</p>
                </div>
            </div>
        </section>

        <!-- Back to Home Link -->
        <a href='index.php' class='back-link' data-aos='fade-up'><i class='fas fa-arrow-left'></i> Back</a>
    </div>

    <!-- AOS JS -->
    <script src='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js'></script>
    <!-- Swiper JS -->
    <script src='https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js'></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        var swiper = new Swiper('.swiper-container', {
            loop: true,
            speed: 600,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        function openModal() {
            document.getElementById('achievementModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('achievementModal').style.display = 'none';
        }
    </script>
</body>
</html>";
?>
