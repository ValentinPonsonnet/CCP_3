<?php 
session_start();

if(!isset($_SESSION["pseudo"])){
    header("Location: login.php");
}



require_once("components/header.php");
require_once("components/nav-bar.php");
var_dump($_SESSION);
?>
<body>
    <div class="container">
        <?php if(isset($_GET["message"])) :?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_GET["message"] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>

        <?php endif ?>

        <h1>Les annonces disponible</h1>
        <div class="row mt-5">
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="Image_de_l'annonce">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="Image_de_l'annonce">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="Image_de_l'annonce">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="Image_de_l'annonce">
                    <div class="card-body">
                        <a href="une_annonce.php">
                            <h5 class="card-title">Card title</h5>
                        </a>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
require_once("components/footer.php");
?>