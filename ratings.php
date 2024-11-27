<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"> <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background:  linear-gradient(to right, #2b5876, #4e4376);
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color:rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #FF6347; /* Tomato color */
            text-transform: uppercase;
        }

        .button-section {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .button {
            flex: 1;
            padding: 15px;
            background-color: #0078ff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .button:hover {
            background-color: #005bb5;
        }

        .info-box {
            margin-top: 20px;
            padding: 15px;
            background-color: #eaf4fc;
            border-left: 5px solid #0078ff;
            border-radius: 5px;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 15px;
            background-color: #333;
            color: #fff;
        }
        .back-button {
            display: inline-block;
            padding: 12px 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
            font-size: 18px;
            margin-bottom: 30px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container" data-aos="fade-up">
        <div class="header">
            <h1>Rate My Work</h1>
            <p>Select an option below to proceed:</p>
        </div>
        
        <div class="button-section" data-aos="fade-in" data-aos-delay="100">
            <a href="submit_rating.php" class="button">
                <i class="fas fa-star"></i> Submit a Rating
            </a>
            <a href="view_ratings.php" class="button">
                <i class="fas fa-list"></i> View All Ratings
            </a>
        </div>

        <div class="info-box" data-aos="fade-right" data-aos-delay="200">
            <p><strong>Tip:</strong> Your feedback helps me improve my portfolio and better serve your creative needs!</p>
           
        </div>
        <a href="index.php" class="back-button"><i class="fas fa-arrow-left"></i> </a>
    </div>

    <footer data-aos="fade-up">
        <p>&copy; 2024 Alden Jay Centino | All Rights Reserved</p>
    </footer>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
