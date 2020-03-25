<!DOCTYPE html>
<html lang="de-CH">
<head>
    <?php require "_header.php" ?>
    <title>Corona Take-Away -> Create</title>
    <?php

    if (!empty($_REQUEST['restaurantName'])) {

        $restaurant['restaurantName'] = $_REQUEST['restaurantName'];
        $restaurant['address'] = $_REQUEST['address'];
        $restaurant['zip'] = $_REQUEST['zip'];
        $restaurant['place'] = $_REQUEST['place'];
        $restaurant['phoneNumber'] = $_REQUEST['phoneNumber'];
        $restaurant['website'] = $_REQUEST['website'];
        $restaurant['imagePath'] = "../RestaurantLogos/" . $_REQUEST['restaurantName'];
        $restaurant['validated'] = false;
        $restaurant['id'] = uniqid();
        $restaurant['menu'] = [""];

        $restaurants[] = $restaurant;
        $jsonData = json_encode($restaurants);
        file_put_contents("../json/restaurants.json", "$jsonData", FILE_APPEND);
    }
    ?>
</head>
<body>
<?php require "_navbar.php" ?>
<div class="container mt-4">
    <form method="post" class="needs-validation">
        <div class="form-group">
            <label for="restaurantName">Restaurantname</label>
            <input type="text" id="restaurantName" name="restaurantName" placeholder="Beispiel: Hirschen"
                   class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Street / Nr.</label>
            <input type="text" id="address" name="address" class="form-control"
                   placeholder="Beispiel: Musterstrasse 32" required>
        </div>
        <div class="form-group">
            <label for="zip">Zipcode</label>
            <input type="text" id="zip" name="zip" class="form-control"
                   placeholder="Beispiel: 8000" required>
        </div>
        <div class="form-group">
            <label for="place">Place</label>
            <input type="text" id="place" name="place" class="form-control"
                   placeholder="Beispiel: Zürich" required>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Telefonnummer</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control"
                   placeholder="Beispiel: 079 111 11 11" required>
        </div>
        <div class="form-group">
            <label for="website">Webseite</label>
            <input type="text" id="website" name="website" class="form-control"
                   placeholder="Beispiel: www.google.ch" required>
        </div>
        <button type="submit" class="btn btn-success">Absenden</button>
    </form>
</div>

<footer>
    <?php include("_footer.php"); ?>
</footer>
</body>
</html>