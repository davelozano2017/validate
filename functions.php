<?php 
include 'config.php';

if($_POST['action'] == 'validate') {
    $username = $_POST['username'];

    $query = $db->query("SELECT * FROM account_tbl WHERE username = '$username'");
    $check = $query->num_rows;
    if($check > 0) {
        echo json_encode(array('success' => false,'message' => 'username is already exist.'));
    } else {
        echo json_encode(array('success' => true,'message' => 'username is available.'));
    }
}