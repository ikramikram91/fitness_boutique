<?php
try{
    // connection a ma base de donner 
 
    $bdd = new PDO('mysql:host=localhost;dbname=fitness;charset=utf8', 'root', ''); 
    
    
}
// catch si il y'a une erreur 
catch(Exception $e)
{
    die('Erreur'.$e->getMessage());
}

