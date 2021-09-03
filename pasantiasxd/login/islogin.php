<?php

session_start();
$usuario = $_SESSION ['usuarioRegister'];

$estadoo = false;

if(isset($usuario)){
    $estadoo = true;
}