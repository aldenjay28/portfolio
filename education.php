<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Education - Alden Jay Centino</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css'> <!-- AOS CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'> <!-- Font Awesome -->
</head>
<body>
    <div class='education-container'>
        <header>
            <h1 data-aos='fade-down'>My Educational Background</h1>
        </header>
        
        <!-- Education Section -->
        <section class='education-section'>
            <div class='education-item' data-aos='fade-up' data-aos-delay='100'>
                <i class='fas fa-university education-icon'></i>
                <div class='education-details'>
                    <p><strong>Bachelor of Science in Information Technology</strong> - ACLC College of Tacloban, SY: 2023-2024</p>
                    <p>Graduated <strong>Summa Cum Laude</strong></p>
                </div>
            </div>
            
            <div class='education-item' data-aos='fade-up' data-aos-delay='200'>
                <i class='fas fa-laptop-code education-icon'></i>
                <div class='education-details'>
                    <p><strong>Web Applications Development</strong> - Diploma Program, ACLC College of Tacloban, SY: 2022-2023</p>
                </div>
            </div>
            
            <div class='education-item' data-aos='fade-up' data-aos-delay='300'>
                <i class='fas fa-school education-icon'></i>
                <div class='education-details'>
                    <p><strong>Senior High School:</strong> ACLC College of Tacloban, Real St. Tacloban City, SY: 2019-2020</p>
                </div>
            </div>
            
            <div class='education-item' data-aos='fade-up' data-aos-delay='400'>
                <i class='fas fa-chalkboard-teacher education-icon'></i>
                <div class='education-details'>
                    <p><strong>Junior High School:</strong> Sta. Fe National High School, Sta. Fe, Leyte, SY: 2017-2018</p>
                </div>
            </div>
            
            <div class='education-item' data-aos='fade-up' data-aos-delay='500'>
                <i class='fas fa-book-open education-icon'></i>
                <div class='education-details'>
                    <p><strong>Primary School:</strong> Sta. Fe Central School, Sta. Fe, Leyte, SY: 2010-2011</p>
                </div>
            </div>
        </section>
        
        <!-- Back to Home Link -->
        <div class='back-link-container'>
            <a href='index.php' class='back-link'><i class='fas fa-arrow-left'></i> </a>
        </div>
    </div>

    <!-- AOS JS -->
    <script src='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js'></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #2b5876, #4e4376);
            color: white;
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

        .education-container {
            width: 90%;
            max-width: 1200px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        /* Education Section */
        .education-section {
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 20px;
        }

        .education-item {
            background: linear-gradient(to right, #2b5876, #4e4376);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
            text-align: center;
            transition: transform 0.4s, box-shadow 0.4s ease;
        }

        .education-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .education-icon {
            font-size: 3em;
            color: #f1c40f;
            margin-bottom: 15px;
        }

        .education-details p {
            margin: 0;
            font-size: 1.1em;
        }

        .education-details strong {
            color: white;
        }

        /* Back Link Styling */
        .back-link-container {
            text-align: center;
            margin-top: 20px;
        }

        .back-link {
            text-decoration: none;
            font-size: 1.2em;
            padding: 12px 25px;
            background-color: #f1c40f;
            color: #333;
            font-weight: bold;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .back-link:hover {
            background-color: #d4ac0d;
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes scaleUp {
            from { transform: scale(0.8); }
            to { transform: scale(1); }
        }
    </style>
</body>
</html>";
?>
