<?php 
require_once("components/header.php");
require_once("components/nav-bar.php");
require_once("configs/database.php");

?>

    <?php 
        $rocket = $db->prepare("SELECT id, title, description, image, statut, DATE_FORMAT (created_at, '%d/%m/%Y à %H:%i') AS created_at_format FROM Annonce WHERE id = :id");   
        $rocket->execute(["id" => $_GET["id"]]);

        $result = $rocket->fetch(PDO::FETCH_ASSOC);
    ?>

<div class="container" id="une_annonce">
    <div class="row">
        <div class="col-md-6">
            <img src=" <?= $result['image']?>" alt="image_de_l'annonce">
        </div>
        <div class="col-md-6">
            <h1><?= $result['title'] ?> <span class="badge bg-secondary"><?= $result['statut']?></h1>
            <p>
                <?= $result["created_at_format"]?>
            </p>
            <p>
                <?= $result['description']?>
            </p>
        </div>
    </div>
</div>

<?php 
require_once("components/footer.php");
?>