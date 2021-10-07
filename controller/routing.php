<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
// $var_getMenu = $_GET['menu'];

switch ($var_getMenu) {
    case "home":
        require_once('./views/home.php');
        break;
    case "inde":
        require_once('./views/independencia.php');
        break;
    case "floyfau":
        require_once('./views/florayfauna.php');
        break;
    case "acerca":
        require_once('./views/acerca.php');
        break;
    case "login":
        require_once('./views/login.php');
        break;
	case "visitas":
        include_once './model/visitas.php';
        $sqlvisitas = visitas::consultar();
        include_once './views/viewvisitas.php';
        
        include_once './model/test.php';
        
        break;	
	case "bienvenido":
        require_once('./views/bienvenido.php');
        break;

    default:
        require_once('./views/home.php');
}
?>
