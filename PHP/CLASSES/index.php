<!DOCTYPE html>
<html lang="de-ch">
<?php include("_header.php") ?>
<body>
<?php $restaurantCollection = RestaurantCollection::createFromJson(); ?>
<div class='container'>
    <?php foreach ($restaurantCollection as $restaurant) {
        print "<div class='card mb-5 border border-success'>" .
            "<div class='row'>" .
            "<div class='col-lg-4'>" .
            "<img class='card-img-top rounded' width='100%' height='50%' src='' alt='Logo'>" .
            "<iframe src='https://maps.google.com/maps?q=Elgg&t=&z=13&ie=UTF8&iwloc=&output=embed' frameborder='0' allowfullscreen width='100%' height='50%'>" .
            "</iframe>" .
            "</div>" .
            "<div class='col-lg-8'>" .
            "<div class='card-body'>" .
            "<h4 class='card-title'>" . $restaurant->getRestaurantName() . "</h4>" .
            "</div>" .
            "<ul class='list-group list-group-flush'>" .
            "<li class='list-group-item'><strong>Street:</strong><br>" .
            "<p>" . $restaurant->getAddress() . "</p></li>" .
            "<li class='list-group-item'><strong>Ort:</strong><br" .
            "<p>" . $restaurant->getPlace() . "</p></li>" .
            "<li class='list-group-item'><strong>PLZ:</strong><br>" .
            "<p>". $restaurant->getZip() ."</p></li>" .
            "<li class='list-group-item'><strong>Telefon:</strong><br>" .
            "<p><a href='tel:'>Telefonnummer</a></p></li>" .
            "<li class='list-group-item'><strong>Menu</strong><br>" .
            "<p>Text</p></li>" .
            "</ul>" .
            "</div>" .
            "</div>" .
            "</div>" .
            "</div>";
    } ?>
</body>
</html>