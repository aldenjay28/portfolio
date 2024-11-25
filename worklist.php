<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work List - Alden Jay Centino</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"> <!-- AOS CSS -->
    <style>
        /* Styling for the gallery */
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        .work-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .work-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .work-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease-in-out;
        }

        .work-item:hover img {
            transform: scale(1.1);
        }

        .work-item:hover {
            transform: translateY(-10px);
        }

        .work-item .description {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 10px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .work-item:hover .description {
            opacity: 1;
        }

        .filter-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .filter-button {
            padding: 8px 16px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #0078ff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .filter-button:hover {
            background-color: #005bb5;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            position: relative;
            max-width: 80%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .modal img {
            width: 100%;
            height: auto;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 1.5rem;
            color: #333;
            cursor: pointer;
        }

        .back-link {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            width: fit-content;
            text-align: center;
            background-color: #0078ff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-link:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>
    <!-- Filter Section -->
    <div class="filter-container" data-aos="fade-down">
        <button class="filter-button" onclick="filterItems('all')">All</button>
        <button class="filter-button" onclick="filterItems('design')">Design</button>
        <button class="filter-button" onclick="filterItems('advertising')">Advertising</button>
        <button class="filter-button" onclick="filterItems('event')">Event</button>
        <button class="filter-button" onclick="filterItems('food')">Food</button>
    </div>

    <!-- Work Gallery -->
    <section class="work-gallery" data-aos="fade-up">
        <div class="work-item" data-category="design" onclick="openModal('07.jpg', 'This is my first project. It showcases my graphic design skills.')">
            <img src="07.jpg" alt="Work 1">
            <div class="description">Graphic Design Project</div>
        </div>
        <div class="work-item" data-category="advertising" onclick="openModal('02.jpg', 'A dynamic design made for a marketing campaign.')">
            <img src="02.jpg" alt="Work 2">
            <div class="description">Marketing Campaign Design</div>
        </div>
        <div class="work-item" data-category="advertising" onclick="openModal('04.jpg', 'A modern advertising piece showcasing advanced techniques.')">
            <img src="04.jpg" alt="Work 4">
            <div class="description">Advertising Project</div>
        </div>
        <div class="work-item" data-category="event" onclick="openModal('05.jpg', 'An elegant visual design created for an event.')">
            <img src="05.jpg" alt="Work 5">
            <div class="description">Event Design</div>
        </div>
        <div class="work-item" data-category="event" onclick="openModal('06.jpg', 'Best flier for an event.')">
            <img src="06.jpg" alt="Work 6">
            <div class="description">Event Flier</div>
        </div>
        <div class="work-item" data-category="design" onclick="openModal('03.jpg', 'Creative flier design for an event.')">
            <img src="03.jpg" alt="Work 3">
            <div class="description">Event Flier Design</div>
        </div>
        <!-- New Food Menus -->
        <div class="work-item" data-category="food" onclick="openModal('10.png', 'Food menu design showcasing vibrant colors and a sleek layout.')">
            <img src="10.png" alt="Food Menu 1">
            <div class="description">Food Menu Design 1</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('11.png', 'A modern menu for a fine dining restaurant.')">
            <img src="11.png" alt="Food Menu 2">
            <div class="description">Food Menu Design 2</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('12.png', 'A casual and fun menu designed for a café.')">
            <img src="12.png" alt="Food Menu 3">
            <div class="description">Food Menu Design 3</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('13.png', 'Bold typography and vibrant imagery for a fast-food chain.')">
            <img src="13.png" alt="Food Menu 4">
            <div class="description">Food Menu Design 4</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('14.png', 'Minimalist design for an organic restaurant menu.')">
            <img src="14.png" alt="Food Menu 5">
            <div class="description">Food Menu Design 5</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('15.png', 'A colorful and dynamic layout for a pizza house menu.')">
            <img src="15.png" alt="Food Menu 6">
            <div class="description">Food Menu Design 6</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('16.png', 'Elegant menu design for a luxury dining experience.')">
            <img src="16.png" alt="Food Menu 7">
            <div class="description">Food Menu Design 7</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('17.png', 'Youthful and vibrant menu for a burger joint.')">
            <img src="17.png" alt="Food Menu 8">
            <div class="description">Food Menu Design 8</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('18.png', 'A rustic and warm design for a coffee shop menu.')">
            <img src="18.png" alt="Food Menu 9">
            <div class="description">Food Menu Design 9</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('19.png', 'Illustrated menu for a family-friendly restaurant.')">
            <img src="19.png" alt="Food Menu 10">
            <div class="description">Food Menu Design 10</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('20.png', 'Playful and creative menu for a dessert café.')">
            <img src="20.png" alt="Food Menu 11">
            <div class="description">Food Menu Design 11</div>
        </div>
        <div class="work-item" data-category="food" onclick="openModal('21.png', 'Sleek and professional menu for a bar and grill.')">
            <img src="21.png" alt="Food Menu 12">
            <div class="description">Food Menu Design 12</div>
        </div>
    </section>

    <!-- Modal Section -->
    <div id="modal" class="modal" onclick="closeModal()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <span class="close-button" onclick="closeModal()">×</span>
            <img id="modal-image" src="" alt="Work Image">
            <p id="modal-description"></p>
        </div>
    </div>

    <a href="options.php" class="back-link">Back</a>

    <script>
        function openModal(image, description) {
            document.getElementById('modal-image').src = image;
            document.getElementById('modal-description').textContent = description;
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function filterItems(category) {
            const items = document.querySelectorAll('.work-item');
            items.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
