<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'php_blog';

$conn = new mysqli($host, $user, $password, $db_name);

if($conn -> connect_error){
    die('Database connection error'.$conn->connect_error);
}