<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 18/12/18
 * Time: 08:38
 */
include "modele/modele.php";
include "modele/fonctions.php";
$user = infosUser($bdd, $_SESSION['id']);


$listeOffres = listeDesoffresParCandidat($bdd, $_SESSION['id']);
//print_r($lesCandidats);

include 'vues/vueTopMenu2.php';
echo "<div style='padding-top: 10vh;padding-bottom: 10vh'>";
include "vues/vueListeDesOffresParCandidat.php";
echo "</div>";
include 'vues/vueBottomMenu.php';
include 'vues/vueLateralMenu.php';

