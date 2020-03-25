<!DOCTYPE html>
<html lang="de-ch">
<?php include("_header.php") ?>
<body style=" background-color:#848484;">
<?php $restaurantCollection = RestaurantCollection::createFromJson(); ?>
<?php include("_navbar.php") ?>

<a href="./CreateRestaurant.php"><button class="btn btn-success">Erstellen</button></a>
<?php include("_footer.php") ?>
</body>
</html>
