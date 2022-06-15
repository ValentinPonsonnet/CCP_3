<?php 

    require_once("components/header.php");

?>
<body>

    <div id="form" class="container-fluid">
        <div class="row pt-5">
            <form action="" class="col-md-6">
                <h1>Inscrivez-vous !</h1>
                    <div class="form-group mb-3">
                        <input type="text" name="pseudo" class="form-control" placeholder="Entrez votre pseudo">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="confirmpassword" class="form-control" placeholder="Retapez votre mot de passe">
                    </div>
                    <div class="form-group form-check mb-3">
                        <input type="checkbox" name="role" class="form-check-input">
                        <label for="role">Je souhaite devenir un guide !</label>
                    </div>
                    <div class="form-group">
                        <a href="login.php" class="btn btn-warning">Connectez-vous !</a>
                        <input type="submit" value="Créer mon compte !" class="btn btn-primary">
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