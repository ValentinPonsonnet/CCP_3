<?php 
require_once("components/header.php");
require_once("components/nav-bar.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ajouter une annonce</h1>

            <form action="" class="form-group">
                <div class="form-group mb-3">
                    <input type="text" name="title" class="form-control" placeholder="Entrer un titre">
                </div>
                <div class="form-group mb-3">
                    <input type="text" name="image" class="form-control" placeholder="Entrer une url">
                </div>
                <div class="form-group mb-3">
                    <select name="location" class="form-control">
                        <option value="Haut de France">Haut de France</option>
                        <option value="Grand-Est">Grand-Est</option>
                        <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
                        <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                        <option value="Provence-Alpes-Côte-d'Azur">Provence-Alpes-Côte-d'Azur</option>
                        <option value="Occitanie">Occitanie</option>
                        <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                        <option value="Pays de la Loire">Pays de la Loire</option>
                        <option value="Bretagne">Bretagne</option>
                        <option value="Normandie">Normandie</option>
                        <option value="Centre-Val de Loire">Centre-Val de Loire</option>
                        <option value="Ile-de-France">Ile-de-France</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <textarea name="description" class="form-control" placeholder="Entrer votre demande"></textarea>
                </div>
                <input type="submit" value="Créer une annonce" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php 
require_once("components/footer.php");
?>