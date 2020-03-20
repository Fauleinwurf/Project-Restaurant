<!DOCTYPE html>
<html lang="de-CH">
<head>
    <?php require "_header.php" ?>
    <title>Corona Take-Away -> Create</title>
    <?php

    if (!empty($_REQUEST['restaurantName'])) {

        $restaurant['restaurantName'] = $_REQUEST['restaurantName'];
        $restaurant['street'] = $_REQUEST['street'];
        $restaurant['zipcode'] = $_REQUEST['zipcode'];
        $restaurant['place'] = $_REQUEST['place'];
        $restaurant['phoneNumber'] = $_REQUEST['phoneNumber'];
        $restaurant['website'] = $_REQUEST['website'];
        $restaurant['imagePath'] = "../RestaurantLogos/" . $_REQUEST['restaurantName'];

        $restaurants[] = $restaurant;
        $jsonData = json_encode($restaurants);
        file_put_contents("../json/restaurants.json", "$jsonData");
    }
    ?>
</head>
<body>
<?php require "_navbar.php" ?>
<div class="container mt-4">
    <form method="post" class="needs-validation">
        <div class="form-group">
            <label for="restaurantName">restaurantName</label>
            <input type="text" id="restaurantName" name="restaurantName" placeholder="Beispiel: Kebab Treff"
                   class="form-control" required>
        </div>
        <div class="form-group">
            <label for="street">Street / Nr.</label>
            <input type="text" id="street" name="street" class="form-control"
                   placeholder="Beispiel: Musterstrasse 32" required>
        </div>
        <div class="form-group">
            <label for="zipcode">Zipcode</label>
            <input type="text" id="zipcode" name="zipcode" class="form-control"
                   placeholder="Beispiel: 8000" required>
        </div>
        <div class="form-group">
            <label for="place">Place</label>
            <input type="text" id="place" name="place" class="form-control"
                   placeholder="Beispiel: Zürich" required>
        </div>
        <div class="form-group">
            <label for="phoneNumber">phoneNumber</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control"
                   placeholder="Beispiel: 079 404 42 88" required>
        </div>
        <div class="form-group">
            <label for="website">website</label>
            <input type="text" id="website" name="website" class="form-control"
                   placeholder="Beispiel: Zürich" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

<footer>
    <?php include("_footer.php"); ?>
</footer>
</body>
</html>