<?php

require '.lib.inc.php';

$data = json_decode(file_get_contents('php://input'), true);

$mabd = connexionBD();

$req = $mabd->prepare('UPDATE ' . Table . ' SET name=?, valRed=?, valGreen=?, valBlue=?, valIntensity=? WHERE id=?');

$req->bindParam(1, $data['name']);
$req->bindParam(2, $data['valRed']);
$req->bindParam(3, $data['valGreen']);
$req->bindParam(4, $data['valBlue']);
$req->bindParam(5, $data['valIntensity']);
$req->bindParam(6, $data['idLampe']);

try {
    $resultat = $req->execute();
} catch (PDOException $e) {
    print "Erreur : ".$e->getMessage().'<br />';
    die();
}
    
deconnexionBD($mabd);