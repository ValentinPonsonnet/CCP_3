<?php

require_once(dirname(__FILE__) . "/../configs/database.php");

if($_POST["password"] !== $_POST["confirmPassword"]){
    header("Location: ../register.php?message=Merci de retaper votre mot de passe !");
}

$rocket = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
$rocket->bindParam(":pseudo", $_POST["pseudo"]);
$rocket->execute();

$result = $rocket->fetch(PDO::FETCH_ASSOC);

if($result)
{
    $message = "Se compte existe déjà ! Connectez-vous !";
    header("Location: ../register.php?message=$message");
}

if(!$result)
{
    $passwordToHash = $_POST["password"] . $config["SECRET_KEY"];
    $hash = md5($passwordToHash);

    if(isset($_POST["role"])){
        $role = $config["ROLES"][1];
    }
    else {
        $role = $config["ROLES"][0];
    }

    $rocket = $db->prepare("INSERT INTO user(pseudo, password, role) VALUE (:pseudo, :password, :role)");
    $rocket->bindParam(":pseudo", $_POST["pseudo"]);
    $rocket->bindParam(":password", $hash);
    $rocket->bindParam(":role", $role);
    $rocket->execute();

    $message="Compte créer avec succès";
    header("Location: ../login.php?message=$message&type=success");  
}



?>