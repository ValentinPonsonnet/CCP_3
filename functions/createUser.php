<?php
    var_dump($_POST);

    if($_POST["password"] === $_POST["confirmPassword"])
    {
        var_dump("Okey c'est good");
    }
?>