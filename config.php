<?php
		
try {   
    
    $link_connexion = new PDO("mysql:host=127.0.0.1;dbname=fanmilk;charset=utf8","root","");

    if ($link_connexion) {
       //echo(" Connexion reussie...");
    }
    
} catch (Exception $e) {
    var_dump("Error ". $e->getMessage());
}