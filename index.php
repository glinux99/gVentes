<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <?php include('menu/menu.php');?>
    <div class="container mt-3">
        <div class="card-header text-center text-uppercase bg-success text-white">
            Souliers/Babouches
        </div>
        <div class="row">
            <?php while ($x<3){?>
                <div class="col-lg-4 card shadow-sm">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/port03.jpg" width="100%" height="225" class="imgO">
                            <div class="carousel-caption">
                                <h6>Sandale</h6>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/parallax.webp" width="100%" height="225" class="imgO">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Ce soulier est unique a ete fabrique au Benin, vous n'avez pas de soucis a vous faire. Nous avons tout</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Details/Models</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
            <?php    $x++;
            }?>
        </div>
        <div class="container mt-2 d-flex justify-content-center">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success">Back</button>
                <button type="button" class="btn btn-danger">Next</button>
            </div>
        </div>
    </div>
    <div class="border mt-3"></div>
    <div class="container my-3">
        <div class="card-header text-center text-uppercase bg-success text-white">
            Chemises/Pantalons
        </div>
        <div class="row">
            <?php while ($y<3){?>
                <div class="col-lg-4 card shadow-sm">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/intelli.jpg" width="100%" height="225" class="imgO">
                            <div class="carousel-caption">
                                <h6>Sandale</h6>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/parallax.webp" width="100%" height="225" class="imgO">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Ce soulier est unique a ete fabrique au Benin, vous n'avez pas de soucis a vous faire. Nous avons tout</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Details/Models</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                        </div>
                        <small class="text-muted">Prix: 12$-15$</small>
                    </div>
                </div>
            </div>
            <?php    $y++;
            }?>
        </div>
    </div>
<?php include('menu/footer.php');?>
</body>
<style>
    .imgO:hover {
        transform: scale(1.02);
        transition: 0.1;
    }
</style>
<script src="vendor/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/gr/parallax.js"></script>
<script src="vendor/bootstrap/js/carousel.js"></script>

</html>