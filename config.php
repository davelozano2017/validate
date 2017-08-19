<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$dbase = 'demo';

$db = new mysqli($host,$user,$pass,$dbase);
if($db->connect_error) {
    echo 'Error!';
}