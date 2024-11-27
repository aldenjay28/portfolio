<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the rating and comment
    $rating = isset($_POST['rating']) ? $_POST['rating'] : 0;
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';
    
    // Handle image upload
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
        
        // Validate the file type (optional)
        $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array(strtolower($image_ext), $allowed_exts)) {
            $image_new_name = 'uploads/' . uniqid() . '.' . $image_ext;
            $image_path = $image_new_name;
            move_uploaded_file($image_tmp_name, $image_path);
        }
    }

    // Prepare the data
    $rating_data = [
        'rating' => $rating,
        'comment' => $comment,
        'image_path' => $image_path,
        'created_at' => date('Y-m-d H:i:s')
    ];

    // Store the data in the JSON file
    $json_file = 'ratings.json';
    $ratings = [];
    if (file_exists($json_file)) {
        $ratings = json_decode(file_get_contents($json_file), true);
    }
    $ratings[] = $rating_data;
    file_put_contents($json_file, json_encode($ratings, JSON_PRETTY_PRINT));

    // Redirect back to the ratings page
    header("Location: view_ratings.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Your Rating</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #2b5876, #4e4376);
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background-color: x;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            color: #0078ff;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .rating-stars {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .rating-stars i {
            font-size: 40px;
            margin: 0 5px;
            color: #ddd;
            transition: color 0.3s;
        }

        .rating-stars i.selected {
            color: #FFD700;
        }

        textarea {
            width: 80%;
            height: 120px;
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1rem;
            resize: none;
        }

        input[type="file"] {
            padding: 12px;
            margin: 15px 0;
            font-size: 1rem;
            border-radius: 8px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        button {
            width: 20%;
            padding: 15px;
            background-color: #0078ff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #005bb5;
        }

        .back-button {
            display: inline-block;
            padding: 12px 20px;
            background-color: #3498db;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            font-size: 1rem;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #2980b9;
        }

        /* Animations */
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .star {
            transition: color 0.3s ease;
        }
    </style>
    <script>
        let selectedRating = 0;

        function handleStarClick(index) {
            selectedRating = index;
            updateStarDisplay();
            document.getElementById('rating').value = selectedRating;
        }

        function updateStarDisplay() {
            const stars = document.querySelectorAll('.star');
            stars.forEach((star, i) => {
                if (i < selectedRating) {
                    star.classList.add('selected');
                } else {
                    star.classList.remove('selected');
                }
            });
        }

        function validateForm() {
            if (selectedRating === 0) {
                alert('Please select a star rating.');
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

    <div class="container fade-in">
        <h1>Submit Your Rating</h1>

        <div class="rating-stars">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <i class="star fa fa-star" onclick="handleStarClick(<?php echo $i; ?>)"></i>
            <?php endfor; ?>
        </div>

        <form action="submit_rating.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            <input type="hidden" name="rating" id="rating" value="">
            <textarea name="comment" placeholder="Leave a comment..." required></textarea>
            <input type="file" name="image" accept="image/*">
            <button type="submit">Submit Rating</button>
        </form>

        <a href="ratings.php" class="back-button"><i class="fas fa-arrow-left"></i> </a>
    </div>

</body>
</html>
