<?php
session_start();

require '.env.php';

$lampeId = $_GET['lampe'];
// if ($lampeId === null) {
//     header("Location: index.php");
//     die();
// }


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
    $mabd = null;
}
