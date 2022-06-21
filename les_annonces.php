<?php 
session_start();

if(!isset($_SESSION["id"])){
    header("Location: login.php");
}

require_once("components/header.php");
require_once("components/nav-bar.php");
require_once("configs/database.php");

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
        <div class="row">
            <?php 

                $rocket = $db->prepare("SELECT id, title, description, image, location, statut, DATE_FORMAT (created_at, '%d/%m/%Y à %H:%i') AS created_at_format FROM Annonce WHERE statut = :statut ORDER BY created_at DESC");
                $rocket->bindParam(':statut', $config["STATUTS"][0]);
                $rocket->execute();
                while($result = $rocket->fetch(PDO::FETCH_ASSOC)) : ?>

                    <div class="col-4">
                        <div class="card mb-3 " style="width: 100hv;">
                            <h5 class="card-title"><?= $result["title"]?> <span class="badge bg-secondary"><?= $result['statut']?></span></h5>
                            <img src="<?= $result["image"]?>" class="card-img-top" alt="Image_de_l'annonce" height="300px">
                            <div class="card-body">
                                <p class="cart-text">
                                    <small class="text-muted">La demande vient du <?= $result["location"]?></small>
                                </p>
                                <p>
                                    <small class="textt-muted"><?= $result["created_at_format"] ?></small>
                                </p>
                                <p class="card-text"><?= substr($result["description"],0, 75)?>...</p>
                                <a href="une_annonce.php?id=<?= $result['id']?>"  class="btn btn-primary">Voir la demande en entier</a>
                            </div>
                        </div>
                    </div>

             <?php endwhile ?>
    </div>
<?php
require_once("components/footer.php");
?>