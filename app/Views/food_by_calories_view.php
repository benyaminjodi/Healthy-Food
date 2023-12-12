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
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .food-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 800px;
            margin: 20px;
        }

        .food-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            margin: 10px;
        }

        .food-info {
            padding: 15px;
        }

        .food-info h3 {
            margin: 0;
            color: #333;
        }

        .food-info p {
            margin: 5px 0 0;
            color: #777;
        }

        .calories {
            background-color: #f8f8f8;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <!-- <style>
            .logo-container {
                margin-bottom: -50px;
                margin-right: 50px;
            }
        </style>

        <div class="logo-container">
            <img src="<?= base_url('logo/logo_hf.jpg') ?>" width="50px">
        </div> -->

        <div class="container d-flex align-items-center">

            <h2 class="logo me-auto"><a href="index.html">Healthy Food</a></h2>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="trainers.html">Food</a></li>
                    <li><a href="events.html">Order</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="contact.html">Order History</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="courses.html" class="get-started-btn">Get Started</a>

        </div>
    </header><!-- End Header -->


    <div class="food-container" id="foodList">
        <!-- Food items will be dynamically added here -->
    </div>

    <!-- ... Previous HTML code ... -->

    <script>
        // Get the food data from PHP (Laravel Blade syntax)
        const foodData = <?php echo json_encode($food); ?>;

        // Function to create a food item element
        function createFoodItem(food) {
            const foodItem = document.createElement('div');
            foodItem.className = 'food-item';

            const foodInfo = document.createElement('div');
            foodInfo.className = 'food-info';
            foodInfo.innerHTML = `
            <h3>${food.Food}</h3>
            <p>Serving: ${food.Serving}</p>
        `;

            const calories = document.createElement('div');
            calories.className = 'calories';
            calories.textContent = `Calories: ${food.Calories}`;

            foodItem.appendChild(foodInfo);
            foodItem.appendChild(calories);

            return foodItem;
        }

        // Get the food container
        const foodContainer = document.getElementById('foodList');

        // Log the entire foodData array to the console
        console.log(foodData);

        // Loop through the food data and append each item to the container
        foodData.forEach(food => {
            // Log each food item to the console
            console.log(food);

            const foodItem = createFoodItem(food);
            foodContainer.appendChild(foodItem);
        });
    </script>

    <!-- ... Remaining HTML code ... -->

</body>

</html>