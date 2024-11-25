<?php
// worklist.php

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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f7f6;
        }

        .header {
            text-align: center;
            margin: 30px;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            justify-items: center;
        }

        .option-card {
            text-align: center;
            margin: 10px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .option-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        .option-card img {
            width: 70%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .option-card img:hover {
            transform: scale(1.1);
        }

        .option-card h3 {
            font-size: 20px;
            margin-top: 15px;
            color: #333;
        }

        .option-card p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        .back-btn {
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .back-btn:hover {
            background-color: #d32f2f;
            transform: translateY(-2px);
        }

        .back-btn-container {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Work List</h1>
    </div>

    <div class="container">
        <div class="option-card">
            <img src="<?php echo $images['layouts']; ?>" alt="Sample Layouts">
            <h3>Layouts</h3>
            <p>Layouts showcase a variety of design styles, helping clients visualize how their brand could be represented in different formats.</p>
            <a href="worklist.php" class="button">View Layouts</a>
        </div>
        <div class="option-card">
            <img src="<?php echo $images['video']; ?>" alt="Video Edits">
            <h3>Video Edits</h3>
            <p>Video edits involve enhancing the visual and auditory elements of videos, such as adding transitions, effects, and improving audio clarity.</p>
            <a href="video.php" class="button">View Edits</a>
        </div>
        <div class="option-card">
            <img src="<?php echo $images['coding']; ?>" alt="Codings">
            <h3>Codings</h3>
            <p>Coding tasks cover various programming languages and frameworks, including creating scripts, solving algorithmic problems, and building applications.</p>
            <a href="coding.php" class="button">View Codes</a>
        </div>
        <div class="option-card">
            <img src="<?php echo $images['photo']; ?>" alt="Photo Edits">
            <h3>Photo Edits</h3>
            <p>Photo editing involves adjusting images for improved composition, color correction, cropping, and applying various artistic effects.</p>
            <a href="photo.php" class="button">View Edits</a>
        </div>
    </div>

    <div class="back-btn-container">
        <a href="index.php" class="back-btn">Back to Home</a>
    </div>

</body>
</html>
