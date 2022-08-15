<?php
include '../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {

        if (isset($_SESSION["login_id"])) {
            $password = $_POST['password'];
            $login_id = $_SESSION["login_id"];
            $query = "UPDATE login set password = '" . $password . "' where login_id = '" . $login_id . "'";
            $result = mysqli_query($conn, $query);

            if ($_SESSION["type"] == 'client') {
                header("Location: ../client/basicinfo/index.php");
            } elseif ($_SESSION["type"] == 'staff') {
                header("Location: ../home/mainpage/index.php");
            } else {
                header("Location: ../home/login/index.php");
            }
        } else {
            header("Location: ../home/login/index.php");
        }
    } else {
        header("Location: ../home/login/index.php");
    }
} else {
    header("Location: ../home/login/index.php");
}