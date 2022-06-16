<?php

require_once(dirname(__FILE__) . "/../configs/database.php");

$rocket = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND password = :password");
$rocket->bindParam(":pseudo", $_POST["pseudo"]);
$rocket->bindParam(":password", $_POST["password"]);
$rocket->execute();

$result = $rocket->fetch(PDO::FETCH_ASSOC);

if(!$result)
{
    header("Location: ../login.php?message=Identifiants incorrects");
}
else
{
    session_start();
    $_SESSION["pseudo"]= $result["pseudo"];
    header("Location: ../les_annonces.php?message=Vous êtes connecté ! Bienvenue sur World of Help");
}
?>