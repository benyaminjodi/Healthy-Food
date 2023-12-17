<!-- v_user.php -->

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
    <!-- Add Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Your custom styles go here -->

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
                <li><a href="<?= base_url('/food') ?>">Food</a></li>
                <li><a href="<?= base_url('/order') ?>">Order</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="<?= base_url('/profil') ?>" class="get-started-btn">Profil</a>

    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #e6ffe6;
            /* Light green background */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            /* Reduce padding for smaller card */
            margin: 20px 0;
            width: 100%;
            /* Make card width 100% */
            max-width: 300px;
            /* Set max width for smaller card */
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        h1,
        h2 {
            color: #008000;
            /* Dark green text */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            /* Reduce padding for smaller table cells */
            text-align: left;
        }

        th {
            background-color: #e6ffe6;
            /* Light green header background */
        }

        canvas {
            width: 100%;
            /* Make chart responsive */
            max-width: 300px;
            /* Set max width for smaller chart */
            margin-top: 10px;
            /* Reduce top margin for smaller space */
        }
    </style>
</header><!-- End Header -->

<body>

    <!-- User Details Section -->
    <div class="card">
        <h1>User Details</h1>

        <!-- Display User Information as a Table -->
        <h2>User Information</h2>
        <table>
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $user['name']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $user['email']; ?></td>
            </tr>
            <tr>
                <td>Points</td>
                <td><?php echo $user['poin']; ?></td>
            </tr>
            <!-- Add more user information fields as needed -->
        </table>
    </div>

    <!-- Display Points Visualization -->
    <div class="card">
        <h2>Points Visualization</h2>
        <canvas id="pointsChart"></canvas>
    </div>

    <!-- Your JavaScript code for Chart.js goes here -->
    <script>
        // Assume $user['poin'] contains the user's points
        var userPoints = <?php echo $user['poin']; ?>;
        var maxPoints = 1000000;
        var category = 'Regular';

        if (userPoints >= maxPoints) {
            category = 'Anak Emas';
        }

        var ctx = document.getElementById('pointsChart').getContext('2d');
        var pointsChart = new Chart(ctx, {
            type: 'doughnut', // Use doughnut chart for better visualization
            data: {
                labels: ['poin', 'Remaining'],
                datasets: [{
                    data: [userPoints, maxPoints - userPoints],
                    backgroundColor: ['#008000', '#e6ffe6'], // Dark green for points, Light green for remaining
                }]
            },
            options: {
                cutout: '70%', // Adjust the cutout percentage for doughnut chart
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Points - ' + category,
                        position: 'bottom'
                    }
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
                            return percentage + '%';
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>