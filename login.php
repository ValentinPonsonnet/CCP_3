<?php 

require_once("components/header.php");

?>
<body>
    <div id="form" class="container-fluid">
        <div class="row pt-5">
            <form action="functions/loginUser.php" class="col-md-6" method="POST">
                <h1>Je me connecte</h1>
                    <?php
                     if(isset($_GET["type"]) && $_GET["type"] === "success")
                     {
                        $classMessage = "alert alert-success alert-dissmissible fade show";
                     }
                     else
                     {
                        $classMessage = "alert alert-danger alert-dissmissible fade show";
                     }
                    ?>
                <?php if(isset($_GET["message"])) :?>
                    <div class="<?= $classMessage ?>" role="alert">
                        <?= $_GET["message"] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                <?php endif ?>


                    <div class="form-group mb-3">
                        <input type="text" name="pseudo" class="form-control" placeholder="Entrez votre pseudo">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class="form-group">
                        <a href="register.php" class="btn btn-warning">Créer un compte !</a>
                        <input type="submit" value="Connectez-vous" class="btn btn-primary">
                    </div>
            </form>
            <div class="col-md-6 text-center">
                <img src="dist/images/logo_site.webp" alt="">
            </div>
        </div>
    </div>

<?php 

require_once("components/footer.php");

?>
