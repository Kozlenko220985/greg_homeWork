<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.09.2017
 * Time: 14:43
 */

$dsn = 'mysql:host=localhost; dbname=products';
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password);
    var_dump($dbh); // object(PDO)#1 (0) { }
} catch (PDOException $e) {
    echo $e->getMessage();
}

