<?php
$link = 'mysql:host=localhost;dbname=pasantias';
$users = 'root';
$pass = '';

try {
    $pdo=new PDO($link,$users,$pass);
   // echo 'conectado';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}