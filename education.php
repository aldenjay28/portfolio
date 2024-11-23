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
        <header data-aos='fade-down'>
            <h1>My Educational Background</h1>
        </header>
        
        <!-- Education Section -->
        <section class='education-section' data-aos='fade-up'>
            <div class='education-item' data-aos='fade-right'>
                <i class='fas fa-university education-icon'></i>
                <div class='education-details'>
                    <p><strong>Bachelor of Science in Information Technology</strong> - ACLC College of Tacloban, SY: 2023-2024</p>
                    <p>Graduated <strong>Summa Cum Laude</strong></p>
                </div>
            </div>
            
            <div class='education-item' data-aos='fade-right' data-aos-delay='100'>
                <i class='fas fa-laptop-code education-icon'></i>
                <div class='education-details'>
                    <p><strong>Web Applications Development</strong> - Diploma Program, ACLC College of Tacloban, SY: 2022-2023</p>
                </div>
            </div>
            
            <div class='education-item' data-aos='fade-right' data-aos-delay='200'>
                <i class='fas fa-school education-icon'></i>
                <div class='education-details'>
                    <p><strong>Senior High School:</strong> ACLC College of Tacloban, Real St. Tacloban City, SY: 2019-2020</p>
                </div>
            </div>
            
            <div class='education-item' data-aos='fade-right' data-aos-delay='300'>
                <i class='fas fa-chalkboard-teacher education-icon'></i>
                <div class='education-details'>
                    <p><strong>Junior High School:</strong> Sta. Fe National High School, Sta. Fe, Leyte, SY: 2017-2018</p>
                </div>
            </div>
            
            <div class='education-item' data-aos='fade-right' data-aos-delay='400'>
                <i class='fas fa-book-open education-icon'></i>
                <div class='education-details'>
                    <p><strong>Primary School:</strong> Sta. Fe Central School, Sta. Fe, Leyte, SY: 2010-2011</p>
                </div>
            </div>
        </section>
        
        <!-- Back to Home Link -->
        <div class='back-link-container' data-aos='fade-up'>
            <a href='index.php' class='back-link'><i class='fas fa-arrow-left'></i> Back</a>
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
        /* Education Container Styling */
        .education-container {
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
            margin-bottom: 30px;
        }
        
        /* Education Section Styling */
        .education-section {
            margin-top: 20px;
        }
        
        .education-item {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        
        .education-icon {
            font-size: 2em;
            color: #76c7c0;
            margin-right: 20px;
        }
        
        .education-details p {
            margin: 0;
            font-size: 1.1em;
        }
        
        .education-details strong {
            color: #333;
        }
        
        /* Back Link Styling */
        .back-link-container {
            text-align: center;
            margin-top: 20px;
        }
        
        .back-link {
            text-decoration: none;
            font-size: 1.1em;
            color: #333;
            display: inline-flex;
            align-items: center;
            transition: color 0.3s ease;
        }
        
        .back-link i {
            margin-right: 5px;
            color: #76c7c0;
        }
        
        .back-link:hover {
            color: #76c7c0;
        }
    </style>
</body>
</html>";
?>
