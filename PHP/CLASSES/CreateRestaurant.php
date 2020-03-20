<!DOCTYPE html>
<html lang="de-CH">
<head>
    <?php require "_header.php" ?>
    <title>Corona Take-Away -> Create</title>
    <?php
    $restaurants = json_decode(file_get_contents("restaurants.json"), JSON_OBJECT_AS_ARRAY);
    if (!empty($_REQUEST['restaurantname'])) {

        $restaurant['restaurantname'] = $_REQUEST['restaurantname'];
        $restaurant['street'] = $_REQUEST['street'];
        $restaurant['zipcode'] = $_REQUEST['zipcode'];
        $restaurant['place'] = $_REQUEST['place'];

        $restaurants[] = $restaurant;
        $jsonData = json_encode($restaurants);
        file_put_contents("restaurants.json", "$jsonData");
    }
    ?>
</head>
<body>
<?php require "_navbar.php" ?>
<div class="container mt-4">
    <form method="post" class="needs-validation">
        <div class="form-group">
            <label for="restaurantname">Restaurant</label>
            <input type="text" id="restaurantname" name="firstname" placeholder="Beispiel: Marlon"
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
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

<footer>
    <?php include("_footer.php"); ?>
</footer>
</body>
</html>