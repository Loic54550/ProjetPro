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
if (isset ($_POST['nomInscription'], $_POST['prenomInscription'], $_POST['villeInscription'])) {
    $dataUser = getUser($_POST['nomInscription'], $_POST['prenomInscription']);
    $res = $dataUser->fetch();
    if (!$res) insertUser($_POST['nomInscription'], $_POST['prenomInscription'], $_POST['villeInscription']);
}*/


/* connection
$messageErreur = "";
if (isset($_POST['nomConnexion'], $_POST['prenomConnexion'])) {
    $dataUser = getUser($_POST['nomConnexion'], $_POST['prenomConnexion']);
    $res = $dataUser->fetch(); 
    if ($res) {
        $_SESSION['id'] = $res['id'];
        $messageErreur = "YOU ARE CONNECTED";
    }
    else {
        $messageErreur = "Erreur";
    }
}*/