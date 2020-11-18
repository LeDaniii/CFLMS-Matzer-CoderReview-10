<?php
require_once 'php/db.php';
$con = createdb();

if ($_GET["id"]) {
    $id = $_GET['id'];

    $sql = "delete from media where media_id = $id";

    if (mysqli_query($GLOBALS['con'], $sql)) {
        echo "deleted success <br> <a href='index.php'> Back to Homepage </a> ";
    } else {
        echo "error" . mysqli_error($GLOBALS['con']);
    }
}