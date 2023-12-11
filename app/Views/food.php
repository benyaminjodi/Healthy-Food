<h1>Foodmart</h1>
<p>Data Foodmart</p>

<?php if (!empty($food) && is_array($food)) : ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Serving</th>
            <th>Calories</th>
        </tr>

    </table>
<?php else : ?>
    <h3>No Data</h3>
    <p>Unable to find any data for you.</p>
<?php endif ?>