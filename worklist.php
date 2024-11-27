<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Works</title>
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

        .buttons {
            text-align: center;
            margin: 20px 0;
        }

        .buttons button, .back-btn {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f1c40f;
            color: #333;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
            text-decoration: none;
        }

        .buttons button:hover, .back-btn:hover {
            background-color: #d4ac0d;
            transform: translateY(-2px);
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            width: 90%;
            max-width: 1000px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .image-card {
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            display: none; /* Initially hidden */
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .image-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        }

        .image-card img {
            width: 100%;
            max-width: 250px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .image-card h3 {
            margin: 10px 0;
            color: #f1c40f;
        }

        .image-card p {
            font-size: 0.9em;
            color: #ddd;
        }

        .back-btn-container {
            text-align: center;
            margin: 20px 0;
        }
    </style>
    <script>
        function filterImages(category) {
            const images = document.querySelectorAll('.image-card');
            images.forEach(image => {
                if (category === 'all' || image.classList.contains(category)) {
                    image.style.display = 'block'; // Show matching images
                } else {
                    image.style.display = 'none'; // Hide others
                }
            });
        }
    </script>
</head>
<body>
    <h1>My Works</h1>
    <div class="buttons">
        <button onclick="filterImages('all')">All</button>
        <button onclick="filterImages('design')">Design</button>
        <button onclick="filterImages('advertising')">Advertising</button>
        <button onclick="filterImages('event')">Event</button>
        <button onclick="filterImages('foods')">Foods</button>
    </div>
    <div class="container">
        <?php
        // Define categories, images, and descriptions
        $images = [
            'design' => [
                ['file' => '02.jpg', 'desc' => 'Creative Poster Design'],
                ['file' => '03.jpg', 'desc' => 'Modern Graphic Design']
            ],
            'advertising' => [
                ['file' => '04.jpg', 'desc' => 'Advertising Banner'],
                ['file' => '05.jpg', 'desc' => 'Digital Marketing Poster']
            ],
            'event' => [
                ['file' => '06.jpg', 'desc' => 'Event Promotion Design'],
                ['file' => '07.jpg', 'desc' => 'Conference Poster']
            ],
            'foods' => array_map(
                fn($n) => ['file' => str_pad($n, 2, '0', STR_PAD_LEFT) . '.png', 'desc' => 'Delicious Food Item'],
                range(10, 21)
            )
        ];

        // Generate image cards
        foreach ($images as $category => $files) {
            foreach ($files as $file) {
                echo "<div class='image-card $category'>
                        <a href='works.php?image={$file['file']}'><img src='{$file['file']}' alt='$category'></a>
                        <h3>" . ucfirst($category) . "</h3>
                        <p>{$file['desc']}</p>
                      </div>";
            }
        }
        ?>
    </div>
    <div class="back-btn-container">
        <a href="options.php" class="back-btn">Back</a>
    </div>
</body>
</html>
