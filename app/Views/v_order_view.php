<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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

    <!-- Custom Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 80px 20px 20px;
            /* Updated margin to provide space for the header */
            padding: 20px;
            background-color: #e6ffe6;
            /* Light green background */
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
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
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #e6ffe6;
            /* Light green header background */
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h2 class="logo me-auto"><a href="<?= base_url('/') ?>">Healthy Food</a></h2>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li><a href="<?= base_url('/food') ?>">Food</a></li>
                    <li><a class="active" href="<?= base_url('/order') ?>">Order</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <<a href="<?= base_url('/profil') ?>" class="get-started-btn">Profil</a>
        </div>
    </header>

    <!-- Order Details Section -->
    <div class="card">
        <h1>Order Details</h1>

        <!-- Display Order Information as a Table -->
        <h2>Order Information</h2>
        <table>
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Order ID</td>
                <td><?php echo $order['id_order']; ?></td>
            </tr>
            <tr>
                <td>User Email</td>
                <td><?php echo $order['email_user']; ?></td>
            </tr>
            <tr>
                <td>Total Price</td>
                <td><?php echo $order['total_harga']; ?></td>
            </tr>
            <tr>
                <td>Points</td>
                <td><?php echo $order['point']; ?></td>
            </tr>
            <tr>
                <td>Order Date</td>
                <td><?php echo $order['created_at']; ?></td>
            </tr>
            <!-- Add more order information fields as needed -->
        </table>
    </div>
    <!-- Display Order Details -->
    <div class="card">
        <h2>Order Details</h2>
        <table>
            <thead>
                <tr>
                    <th>Food Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <!-- Add more columns if needed -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order_details as $detail) : ?>
                    <tr>
                        <td><?php echo $detail['food_name']; ?></td>
                        <td><?php echo $detail['qty']; ?></td>
                        <td><?php echo $detail['harga']; ?></td>
                        <!-- Add more columns if needed -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>