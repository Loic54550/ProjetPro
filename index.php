<?php

//View//
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ name }}!',
));
$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('index.twig.html');

echo $twig->render($template, array('name' => 'Fabien')); 

/* S'enregistrer
if (isset ($_POST['mailInscription'], $_POST['pseudoInscription'], $_POST['pwdInscription'])) {
    $dataUser = getUser($_POST['mailInscription'], $_POST['pseudoInscription']);
    $res = $dataUser->fetch();
    if (!$res) insertUser($_POST['mailInscription'], $_POST['pseudoInscription'], $_POST['pwdInscription']);
}*/


/* connection
$messageErreur = "";
if (isset($_POST['mailConnexion'], $_POST['pwdConnexion'])) {
    $dataUser = getUser($_POST['mailConnexion'], $_POST['pwdConnexion']);
    $res = $dataUser->fetch(); 
*/