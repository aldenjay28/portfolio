<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Experience</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css'> <!-- AOS CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'> <!-- Font Awesome -->
</head>
<body>
    <div class='experience-container'>
        <header data-aos='fade-down'>
            <h1>My Professional Experience</h1>
        </header>
        
        <section class='timeline-section' data-aos='fade-up'>
            <!-- Timeline Item 1 -->
            <div class='timeline-item' data-aos='fade-right'>
                <div class='timeline-icon'><i class='fas fa-chalkboard-teacher'></i></div>
                <div class='timeline-content'>
                    <h3>ACLC Instructor Night Shift</h3>
                    <span>August 2024 - Current</span>
                    <p>As an IT instructor, I teach computer skills and information technology courses for college students, helping them to build a strong foundation in IT.</p>
                </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class='timeline-item' data-aos='fade-right' data-aos-delay='100'>
                <div class='timeline-icon'><i class='fas fa-tools'></i></div>
                <div class='timeline-content'>
                    <h3>ACLC Technical Support</h3>
                    <span>August 2024 - Current</span>
                    <p>Providing technical support to assist the school with issues related to computers, networks, and IT infrastructure.</p>
                </div>
            </div>

            <!-- Timeline Item 3 -->
            <div class='timeline-item' data-aos='fade-right' data-aos-delay='200'>
                <div class='timeline-icon'><i class='fas fa-id-badge'></i></div>
                <div class='timeline-content'>
                    <h3>ACLC ID Processing</h3>
                    <span>September 2023 - January 2024</span>
                    <p>Managed ID processing tasks, contributing to streamlined workflows and improved service efficiency.</p>
                </div>
            </div>

            <!-- Timeline Item 4 -->
            <div class='timeline-item' data-aos='fade-right' data-aos-delay='300'>
                <div class='timeline-icon'><i class='fas fa-photo-video'></i></div>
                <div class='timeline-content'>
                    <h3>Multimedia Projects</h3>
                    <p>Collaborated on a variety of multimedia projects, showcasing skills in graphic design and video editing to deliver engaging content.</p>
                </div>
            </div>
        </section>

        <a href='index.php' class='back-link' data-aos='fade-up'><i class='fas fa-arrow-left'></i> Back</a>
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
        /* Main Container Styling */
        .experience-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* Timeline Section Styling */
        .timeline-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            position: relative;
            padding-left: 40px;
            margin-top: 30px;
            border-left: 4px solid #76c7c0;
        }

        /* Timeline Item Styling */
        .timeline-item {
            display: flex;
            gap: 15px;
            align-items: flex-start;
            position: relative;
        }
        .timeline-icon {
            background-color: #76c7c0;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3em;
        }
        .timeline-content {
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .timeline-content:hover {
            transform: translateX(5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        /* Back Link Styling */
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
            font-size: 1.1em;
            transition: color 0.3s;
        }
        .back-link:hover {
            color: #76c7c0;
        }
    </style>
</body>
</html>";
?>
