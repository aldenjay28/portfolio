<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Achievements - Alden Jay Centino</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css'> <!-- AOS CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'> <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css'> <!-- Swiper CSS -->
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

        .achievements-container {
            width: 90%;
            max-width: 1200px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        /* Popup Button */
        .popup-button {
            display: block;
            margin: 20px auto;
            padding: 12px 25px;
            background-color: #f1c40f;
            color: #333;
            font-weight: bold;
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .popup-button:hover {
            background-color: #d4ac0d;
            transform: translateY(-2px);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 10;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        .modal-content {
            background-color: grey;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            width: 90%;
            text-align: center;
            animation: scaleUp 0.3s ease-in-out;
        }

        .modal-content img {
            width: 100%;
            max-width: 300px;
            margin: 10px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 1.5em;
            color: #333;
            cursor: pointer;
        }

        .close:hover {
            color: #f1c40f;
        }

        /* Achievements Section */
        .achievements-section {
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 20px;
        }

        .achievement-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
            text-align: center;
            transition: transform 0.4s, box-shadow 0.4s ease;
        }

        .achievement-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .achievement-icon {
            font-size: 3em;
            color: #f1c40f;
            margin-bottom: 15px;
        }

        /* Back Link */
        .back-link {
            display: inline-block;
            margin: 20px 0;
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

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes scaleUp {
            from { transform: scale(0.8); }
            to { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class='achievements-container'>
        <header data-aos='fade-down'>
            <h1>My Achievements</h1>
            <p>Highlights of my academic and professional journey.</p>
        </header>

        <div class='popup-button' onclick='openModal()'>View Achievements Images</div>

        <div id='achievementModal' class='modal'>
            <div class='modal-content'>
                <span class='close' onclick='closeModal()'>&times;</span>
                <div class='swiper-container'>
                    <div class='swiper-wrapper'>
                        <div class='swiper-slide'><img src='1.png' alt='Achievement 1'><div>Proficiency Award in Multimedia</div></div>
                        <div class='swiper-slide'><img src='2.png' alt='Achievement 2'><div>PC Troubleshooting and Maintenance Awardee</div></div>
                        <div class='swiper-slide'><img src='3.png' alt='Achievement 3'><div>Proficiency Award in Robotics</div></div>
                        <div class='swiper-slide'><img src='4.png' alt='Achievement 4'><div>Proficiency Award in Networking</div></div>
                        <div class='swiper-slide'><img src='5.png' alt='Achievement 5'><div>Proficiency Award in Web Development</div></div>
                    </div>
                    <div class='swiper-pagination'></div>
                    <div class='swiper-button-next'></div>
                    <div class='swiper-button-prev'></div>
                </div>
            </div>
        </div>

        <section class='achievements-section'>
            <div class='achievement-card' data-aos='zoom-in' data-aos-delay='100'>
                <i class='fas fa-award achievement-icon'></i>
                <h3>Summa Cum Laude</h3>
                <p>Graduated with highest honors in BSIT at ACLC College of Tacloban (2024).</p>
            </div>
            <div class='achievement-card' data-aos='zoom-in' data-aos-delay='200'>
                <i class='fas fa-medal achievement-icon'></i>
                <h3>Top Performer in Web Development</h3>
                <p>Recognized for exceptional web development skills.</p>
            </div>
            <div class='achievement-card' data-aos='zoom-in' data-aos-delay='300'>
                <i class='fas fa-trophy achievement-icon'></i>
                <h3>Outstanding Awardee</h3>
                <p>TESDA Diploma Program Outstanding Awardee in Web Applications Development (2023).</p>
            </div>
            <div class='achievement-card' data-aos='zoom-in' data-aos-delay='400'>
                <i class='fas fa-certificate achievement-icon'></i>
                <h3>Certified Graphic Designer</h3>
                <p>Showcased creative expertise in digital arts through certification.</p>
            </div>
        </section>

        <a href='index.php' class='back-link'><i class='fas fa-arrow-left'></i> </a>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js'></script>
    <script>
        AOS.init({ duration: 1200, once: true });
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            speed: 600,
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        });

        function openModal() { document.getElementById('achievementModal').style.display = 'flex'; }
        function closeModal() { document.getElementById('achievementModal').style.display = 'none'; }
    </script>
</body>
</html>";
?>
