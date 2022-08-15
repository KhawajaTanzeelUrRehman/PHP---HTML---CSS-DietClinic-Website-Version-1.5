<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {

        if (isset($_POST)) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $iid = $_POST['iid'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $profession = $_POST['profession'];
            $comment = $_POST['comment'];
        }


        $q = "UPDATE client set first_name = '" . $fname . "',
        last_name = '" . $lname . "',
        gender = '" . $gender . "',
        address = '" . $address . "',
        city = '" . $city . "',
        profession = '" . $profession . "',
        comment = '" . $comment . "'
        where client_id = '" . $_SESSION["id"] . "'
        ";
        $r = mysqli_query($conn, $q);
        header("Location: ../../client/info2/index.php");
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}