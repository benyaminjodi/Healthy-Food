<!-- food_by_calories_view.php -->
<html>

<body>
    <h2>Foods by Calories</h2>
    <ul>
        <?php foreach ($food as $foods) : ?>
            <li><?= $food['Food'] ?> - <?= $food['Calories'] ?> calories</li>
        <?php endforeach; ?>
    </ul>
</body>

</html>