<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {
        $submit = "true";
        if (isset($_POST)) {
            $text = $_POST['text'];
            if (isset($_SESSION)) {
                $client_id = $_SESSION["id"];
                $query2 = "insert into feedbacks (description,client_id) values ('" . $text . "','" . $client_id . "') ";
                mysqli_query($conn, $query2);

                header("Location: index.../../client/feedback/index?submit=$submit");
            }
        }
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}