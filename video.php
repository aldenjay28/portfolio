<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Video Edits</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin: 20px 0;
            color: #f1c40f;
        }

        .video-container {
            display: flex;
            flex-direction: column;
            gap: 30px;
            width: 90%;
            max-width: 1000px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .video-item {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: flex-start;
        }

        video {
            width: 500px; /* Smaller width */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .video-details {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 10px;
        }

        .video-title {
            font-size: 1.5em;
            color: #f1c40f;
            margin: 0;
        }

        .video-description {
            font-size: 1em;
            color: #ddd;
            line-height: 1.5;
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
            .video-item {
                flex-direction: column;
                align-items: center;
            }

            video {
                width: 100%;
                max-width: 400px;
            }
        }
    </style>
</head>
<body>
    <h1>My Video Edits</h1>
    <div class="video-container">
        <!-- First Video -->
        <div class="video-item">
            <video controls>
                <source src="ads.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-details">
                <h2 class="video-title">Advertisement Video</h2>
                <p class="video-description">
                    This is an engaging advertisement designed to showcase the key features and benefits of a product. 
                    With smooth transitions and captivating visuals, it grabs the audience's attention and conveys the message effectively.
                </p>
            </div>
        </div>
        
        <!-- Second Video -->
        <div class="video-item">
            <video controls>
                <source src="intro.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-details">
                <h2 class="video-title">Video Introduction</h2>
                <p class="video-description">
                    A dynamic intro video created for branding purposes. Featuring eye-catching animations and music, this edit sets the tone 
                    for professional and exciting content.
                </p>
            </div>
        </div>
    </div>
    <div class="back-btn-container">
        <a href="options.php" class="back-btn">Back</a>
    </div>
</body>
</html>
        