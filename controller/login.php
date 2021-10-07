<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 if (filter_input_array(INPUT_POST)) {
    
    $_usuario = trim(filter_input(INPUT_POST, 'usuario'));
    $_pswd    = trim(filter_input(INPUT_POST, 'pswd'));
    include_once '../model/alumnos.php';
    $loginok = alumnos::login($_usuario, $_pswd);
    echo '<br> LoginOk = ';
    print_r($loginok);
    
    if ($loginok){
        header("location: ../index.php?menu=bienvenido");
    } else{
      echo 'Usuario No Existe o password Incorrecto';
        
    }    

?>