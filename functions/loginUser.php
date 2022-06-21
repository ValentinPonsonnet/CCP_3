<?php
require_once(dirname(__FILE__) . "/../configs/database.php");


$passwordToHash = $_POST["password"] . $config["SECRET_KEY"];
$hash = md5($passwordToHash);


$rocket = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND password = :password");
$rocket->bindParam(":pseudo", $_POST["pseudo"]);
$rocket->bindParam(":password", $hash);
$rocket->execute();

$result = $rocket->fetch(PDO::FETCH_ASSOC);

if($result === false)
{
    header("Location: ../login.php?message=Identifiants incorrects");
}
else
{
    session_start();
    $_SESSION["id"]= $result["id"];
    header("Location: ../les_annonces.php");
}
?>