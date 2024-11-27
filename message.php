<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Alden Jay Centino</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #2b5876, #4e4376);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .message-container {
            width: 380px;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        .message-container:hover {
            transform: scale(1.05);
        }
        .message-header {
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .message-header h2 {
            font-size: 1.5rem;
            color: #333;
            margin-right: 10px;
        }
        .message-header i {
            color: #4e73df;
            font-size: 1.8rem;
        }
        .contact-info {
            margin-top: 20px;
        }
        .contact-info a {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 12px 20px;
            color: #fff;
            background-color: #4e73df;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }
        .contact-info a i {
            font-size: 1.6rem;
        }
        .contact-info a:hover {
            background-color: #3c60c1;
            transform: translateY(-2px);
        }
        .back-link {
            display: inline-block;
            margin-top: 25px;
            color: #4e73df;
            font-size: 1rem;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease-in-out;
        }
        .back-link:hover {
            color: #2a4782;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <div class="message-header">
            <h2>Contact Me</h2>
            <i class="fas fa-comments"></i>
        </div>
        <div class="contact-info">
            <a href="https://www.facebook.com/aldenjaycentz/" target="_blank">
                <i class="fab fa-facebook"></i>
                Continue to Facebook
            </a>
        </div>
    </div>

    </div>
        <!-- Back to Home Link -->
    <a href='index.php' class='back-link' data-aos='fade-up'><i class='fas fa-arrow-left'></i> </a>
</body>
</html>
