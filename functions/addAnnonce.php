<?php
session_start();

require_once("../configs/database.php");
require_once("../configs/config.php");

    $title = $_POST["title"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $location = $_POST["location"];
    $id_user = $_SESSION["id"];
    $statut = $config["STATUTS"][0];

    $rocket = $db->prepare("INSERT INTO Annonce(`title`, `description`, `image`, `author_id`, `location`, `statut`) VALUES (:title,:description,:image,:author_id,:location,:statut)");
    $rocket->execute(array( ':title' => $title,':description' => $description,':image' => $image,':author_id' => $id_user,':location' => $location,':statut' => $statut));
    
header("Location: ../les_annonces.php");
?>