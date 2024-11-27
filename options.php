<?php
// options.php

// Define the image paths
$images = [
    'layouts' => 'a.png',
    'video' => 'b.jpg',
    'coding' => 'c.jpg',
    'photo' => 'd.jpg'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work List</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #2b5876, #4e4376);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin: 20px 0;
            color: #f1c40f;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            width: 90%;
            max-width: 1200px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .option-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .option-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
        }

        .option-card img {
            width: 100%;
            max-width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .option-card h3 {
            font-size: 1.5em;
            color: #f1c40f;
            margin-bottom: 10px;
        }

        .option-card p {
            font-size: 1em;
            color: #ddd;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f1c40f;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button:hover {
            background-color: #d4ac0d;
            transform: translateY(-2px);
        }

        .back-btn-container {
            margin-top: 20px;
        }

        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f1c40f;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background-color: #d4ac0d;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }

            .option-card img {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <h1>Work List</h1>
    <div class="container">
        <div class="option-card">
            <img src="<?php echo $images['layouts']; ?>" alt="Sample Layouts">
            <h3>Layouts</h3>
            <p>Explore a variety of design styles, helping clients visualize how their brand could be represented in different formats.</p>
            <a href="worklist.php" class="button">View Layouts</a>
        </div>
        <div class="option-card">
            <img src="<?php echo $images['video']; ?>" alt="Video Edits">
            <h3>Video Edits</h3>
            <p>Enhance videos with transitions, effects, and improved audio clarity for a polished result.</p>
            <a href="video.php" class="button">View Edits</a>
        </div>
        <div class="option-card">
            <img src="<?php echo $images['coding']; ?>" alt="Codings">
            <h3>Codings</h3>
            <p>Delve into programming tasks including scripts, algorithm challenges, and application development.</p>
            <a href="coding.php" class="button">View Codes</a>
        </div>
        <div class="option-card">
            <img src="<?php echo $images['photo']; ?>" alt="Photo Edits">
            <h3>Photo Edits</h3>
            <p>Adjust images with color corrections, cropping, and artistic effects for stunning results.</p>
            <a href="photo.php" class="button">View Edits</a>
        </div>
    </div>
    
    <div class="back-btn-container" data-aos="fade-up" data-aos-delay="700">
        <a href="index.php" class="back-btn"><i class="fa-solid fa-arrow-left">Back</i></a>
    </div>

</body>
</html>
