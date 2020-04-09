<?php

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='home') {
        include_once('view/home_view.php');
    }elseif ($action=='activite') {
        include_once('view/activite_view.php');
    }elseif ($action=='actualite') {
        include_once('view/actualite_view.php');
    }elseif ($action=='produit1') {
        include_once('view/produit1_view.php');
    }elseif ($action=='produit2') {
        include_once('view/produit2_view.php');
    }elseif ($action=='produit3') {
        include_once('view/produit3_view.php');
    }elseif ($action=='produit4') {
        include_once('view/produit4_view.php');
    }elseif ($action=='produit5') {
        include_once('view/produit5_view.php');
    }elseif ($action=='produit6') {
        include_once('view/produit6_view.php');
    }elseif ($action=='legumes') {
        include_once('view/legumes_view.php');
    }elseif ($action=='fruit') {
        include_once('view/fruit_view.php');
    }elseif ($action=='pluviales') {
        include_once('view/pluviales_view.php');
    }elseif ($action=='presentation') {
        include_once('view/presentation_view.php');
    }elseif ($action=='contact') {
        include_once('view/plantes10_view.php');
    }elseif ($action=='partenaires') {
        include_once('view/partenaires_view.php');
    }elseif ($action=='contact') {
        include_once('view/contact_view.php');
    }
}else {
    include_once('view/home_view.php');
}