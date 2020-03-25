<!DOCTYPE html>
<html lang="de-ch">
<?php include("_header.php") ?>
<body style=" background-color:#848484;">
<?php $restaurantCollection = RestaurantCollection::createFromJson(); ?>
<?php include("_navbar.php") ?>
<div class="container">
    <div class='card mb-5 border border-success'>
        <div class='row'>
            <div class='col-lg-4'>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block mx-auto" src="../img/Corona-img/1.webp" alt="Corona Bild">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block mx-auto" src="../img/Corona-img/2.webp" alt="Corona Bild">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block mx-auto" src="../img/Corona-img/3.webp" alt="Corona Bild">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block mx-auto" src="../img/Corona-img/4.webp" alt="Corona Bild">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block mx-auto" src="../img/Corona-img/5.webp" alt="Corona Bild">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block mx-auto" src="../img/Corona-img/6.webp" alt="Corona Bild">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class='col-lg-8'>
                <div class='card-body'>
                    <h4 class='card-title'>Take Away</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("_footer.php") ?>
</body>
</html>