<?php
require_once("config.php");
try 
{    
    $db = new PDO("mysql:host=localhost;dbname=world_of_help", "root", "root");
} 
catch (PDOException $e) 
{
    echo $e->getMessage();
    die();
}
?>