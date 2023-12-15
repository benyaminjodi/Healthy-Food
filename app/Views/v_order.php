<!-- app/Views/view_order.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
</head>

<body>
    <h1>Create Order</h1>
    <form action="<?= base_url('order') ?>" method='POST' enctype="multipart/form-data">
        <label for="num_inputs">Number of Inputs:</label>
        <input type="number" name="total_item" required min="1">
        <input type="submit" value="Submit">
    </form>


    < </body>

</html>