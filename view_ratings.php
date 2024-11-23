<?php
// Read the JSON file
$json_file = 'ratings.json';
$ratings = [];
if (file_exists($json_file)) {
    $ratings = json_decode(file_get_contents($json_file), true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Ratings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #FF6347;
            text-transform: uppercase;
        }

        .rating-item {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .rating-stars {
            margin-bottom: 10px;
        }

        .rating-stars i {
            font-size: 20px;
            color: #FFD700;
        }

        .comment {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }

        .image {
            margin: 10px 0;
        }

        .back-button {
            display: inline-block;
            padding: 12px 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
            font-size: 18px;
            margin-top: 30px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>View All Ratings</h1>
    </div>

    <?php if (empty($ratings)): ?>
        <p>No ratings available.</p>
    <?php else: ?>
        <?php foreach ($ratings as $rating): ?>
            <div class="rating-item">
                <div class="rating-stars">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <i class="fa fa-star<?php echo $i <= $rating['rating'] ? ' selected' : ''; ?>"></i>
                    <?php endfor; ?>
                </div>
                <div class="comment"><?php echo htmlspecialchars($rating['comment']); ?></div>

                <?php if (!empty($rating['image_path'])): ?>
                    <div class="image">
                        <img src="<?php echo $rating['image_path']; ?>" alt="Rating Image" width="150">
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <a href="ratings.php" class="back-button"><i class="fas fa-arrow-left"></i> Back</a>
</div>

</body>
</html>
