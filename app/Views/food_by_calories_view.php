<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Healthy Food </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('front-end') ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('front-end') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('front-end') ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <title>Food Data</title>
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }

        .form {
            max-width: 300px;
            margin: 80px auto 20px;
            /* Sesuaikan margin atas di sini */
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #caloriesTitle {
            color: #2ecc71;
            /* Hijau tua */
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }


        #foodInput {
            width: 70%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #foodInput:focus {
            border-color: #2ecc71;
            /* Hijau tua saat input fokus */
        }

        button {
            background-color: #2ecc71;
            /* Hijau tua */
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #27ae60;
            /* Hijau sedikit lebih gelap saat dihover */
        }

        #foodList {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .food-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .food-item:hover {
            transform: scale(1.05);
        }

        .food-info h3 {
            color: #2ecc71;
            /* Hijau tua */
            margin-bottom: 10px;
        }

        .food-info p {
            margin: 5px 0;
            color: #555;
        }

        .calories {
            font-weight: bold;
            color: #e74c3c;
            /* Merah tua */
            margin-top: 10px;
        }
    </style>
</head>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">

    <div class="container d-flex align-items-center">
        <h2 class="logo me-auto"><a href="<?= base_url('/') ?>">Healthy Food</a></h2>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a class="active" href="<?= base_url('/food') ?>">Food</a></li>
                <li><a href="<?= base_url('/order') ?>">Order</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="courses.html" class="get-started-btn">Get Started</a>

    </div>
</header><!-- End Header -->


<body>
    <form id="foodForm" class="form">
        <div id="caloriesTitle">Insert Calories</div>
        <input type="text" id="foodInput" />
        <button type="button" onclick="submitForm()">Submit</button>
    </form>

    <div class="food-container" id="foodList">
        <script>
            // Get the food data from PHP
            const foodData = <?php echo json_encode($food); ?>;

            // Function to create a food item element
            function createFoodItem(food) {
                const foodItem = document.createElement('div');
                foodItem.className = 'food-item';

                const foodInfo = document.createElement('div');
                foodInfo.className = 'food-info';
                foodInfo.innerHTML = `
                <h3>${food.food}</h3>
                <p>Serving: ${food.serving}</p>
                <p>Price: Rp${food.price}</p>
            `;

                const calories = document.createElement('div');
                calories.className = 'calories';
                calories.textContent = `Calories: ${food.calories}`;
                foodItem.appendChild(foodInfo);
                foodItem.appendChild(calories);

                return foodItem;
            }

            // Get the food container
            const foodContainer = document.getElementById('foodList');

            // Function to handle form submission
            function submitForm() {
                const foodInput = document.getElementById('foodInput').value;

                // Encode input for URL
                const encodedInput = encodeURIComponent(foodInput);

                // Redirect to the desired URL using base_url
                window.location.href = '<?= base_url('/food') ?>/' + encodedInput;
            }

            // Loop through the food data and append each item to the container
            foodData.forEach(food => {
                // Log each food item to the console
                console.log(food);

                const foodItem = createFoodItem(food);
                foodContainer.appendChild(foodItem);
            });
        </script>
    </div>



    <!-- ... Previous HTML code ... -->

    <!-- ... Remaining HTML code ... -->
</body>


</html>