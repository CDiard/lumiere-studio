<?php
// session_start();

require '.env.php';

function connexionBD()
{
    $mabd = null;
    try {
        $mabd = new PDO('mysql:host=' . Host . ';port=' . Port . ';dbname=' . Database . ';charset=UTF8;', Login, Password);
        $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
        print "Erreur :" . $e->getMessage() . '<br />';
        die();
    }
    return $mabd;
}

function deconnexionBD($mabd)
{
    return $mabd = null;
}

function getAllLampes($mabd)
{
    $req = "SELECT * FROM " . Table; // créer la requête
    try {
        $resultat = $mabd->query($req); // exécuter la requête
    } catch (PDOException $e) {
        print "Erreur : " . $e->getMessage() . '<br />';
        die();
    }
    $lignes_resultat = $resultat->rowCount();
    $resultats = [];
    if ($lignes_resultat > 0) { // y a-t-il des résultats ?
        // oui : pour chaque résultat : afficher
        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $resultats[] = $ligne;
        }
    }
    return $resultats;
}

function getLampById($mabd, int $id)
{
    $req = "SELECT * FROM " . Table . " WHERE id = " . $id; // créer la requête
    try {
        $resultat = $mabd->query($req); // exécuter la requête
    } catch (PDOException $e) {
        print "Erreur : " . $e->getMessage() . '<br />';
        die();
    }
    $lignes_resultat = $resultat->rowCount();
    $resultats = [];
    if ($lignes_resultat > 0) { // y a-t-il des résultats ?
        // oui : pour chaque résultat : afficher
        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $resultats[] = $ligne;
        }
    }
    return $resultats;
}
