<?php

include 'database/db_connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `crud` WHERE `crud`.`id` = $id";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        // echo 'Deleted';
        header('location:index.php');
    }
}

?>