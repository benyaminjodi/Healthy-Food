<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
</head>

<body>
    <h1>Create Order</h1>
    <form action="<?= base_url('/order_details') ?>" method="POST" enctype="multipart/form-data">
        <?php
        $numInputs = $total_item;

        // Menambahkan form tag di luar loop
        // echo form_open('OrderDetailsController/create');
        for ($i = 1; $i <= $numInputs; $i++) :
        ?>
            <label for="food_name<?= $i ?>">Food Name <?= $i ?>:</label>
            <select name="food_name<?= $i ?>" required>
                <?php foreach ($food as $foodItem) : ?>
                    <option value="<?= $foodItem['food'] ?>"><?= $foodItem['food'] ?></option>
                <?php endforeach; ?>
            </select>

            <label for="qty<?= $i ?>"> Quantity <?= $i ?>:</label>
            <input type="number" name="qty<?= $i ?>" required min="0">

            <br>
        <?php endfor; ?>
        <input type="hidden" name="totalItem" value=<?= $numInputs ?>>

        <input type="submit">

    </form>

</body>

</html>