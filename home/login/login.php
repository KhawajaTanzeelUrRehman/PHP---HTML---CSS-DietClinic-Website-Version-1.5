<?php
include '../../connection.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$designation = $_POST['designation'];
$dg = "dg";
$invalid = "invalid";
if ($designation == "designation") {

    header("Location: ../../home/login/index.php?dg=$dg");
} else if ($designation == "admin") {
    $q = "SELECT * FROM login where email = '" . $email . "' and password = '" . $password . "' and type = 'admin'";
    $r = mysqli_query($conn, $q);
    if (!empty(mysqli_fetch_assoc($r))) {
        $q1 = "SELECT admin_id , name FROM login join admin using (login_id) where email = '" . $email . "' and password = '" . $password . "' and type = 'admin'";
        $r1 = mysqli_query($conn, $q1);
        $row1 = mysqli_fetch_array($r1);


        $_SESSION["type"] = "admin";
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row1[0];
        $_SESSION["name"] = $row1[1];
        header("Location: ../../home/mainpage/index.php");
    } else {
        header("Location: ../../home/login/index.php?in=$invalid");
    }
} else if ($designation == "client") {
    $q2 = "SELECT * FROM login where email = '" . $email . "' and password = '" . $password . "' and type = 'client'";
    $r2 = mysqli_query($conn, $q2);
    $row2 = mysqli_fetch_array($r2);
    $q3 = "SELECT client_id , first_name,phone,insta_id FROM login join client using (login_id) where email = '" . $email . "' and password = '" . $password . "' and type = 'client'";
    $r3 = mysqli_query($conn, $q3);
    $row3 = mysqli_fetch_array($r3);

    if (!empty($row2[0])) {

        if ($email == $row3[2] & $password == $row3[2]) {
            $_SESSION["type"] = "client";
            $_SESSION["login"] = true;
            $_SESSION["login_id"] = $row2[0];
            $_SESSION["id"] = $row3[0];
            $_SESSION["name"] = $row3[1];
            $_SESSION["phone"] = $row3[2];
            $_SESSION["iid"] = $row3[3];
            header("Location: ../../change password/index.php");
        } else {
            $_SESSION["type"] = "client";
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row3[0];
            $_SESSION["name"] = $row3[1];
            $_SESSION["phone"] = $row3[2];
            $_SESSION["iid"] = $row3[3];
            $_SESSION["login_id"] = $row2[0];
            header("Location: ../../home/mainpage/index.php");
        }
    } else {
        header("Location: ../../home/login/index.php?in=$invalid");
    }
} else if ($designation == "staff") {
    $q4 = "SELECT * FROM login where email = '" . $email . "' and password = '" . $password . "' and type = 'staff'";
    $r4 = mysqli_query($conn, $q4);
    $row4 = mysqli_fetch_array($r4);
    $q5 = "SELECT employee_id , name,phone FROM login join employee using (login_id) where email = '" . $email . "' and password = '" . $password . "' and type = 'staff'";
    $r5 = mysqli_query($conn, $q5);
    $row5 = mysqli_fetch_array($r5);

    if (!empty($row4[0])) {

        if ($email == $password) {
            $_SESSION["type"] = "staff";
            $_SESSION["login"] = true;
            $_SESSION["login_id"] = $row4[0];
            $_SESSION["id"] = $row5[0];
            $_SESSION["name"] = $row5[1];
            header("Location: ../../change password/index.php");
        } else {
            $_SESSION["type"] = "staff";
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row5[0];
            $_SESSION["name"] = $row5[1];
            $_SESSION["login_id"] = $row4[0];
            header("Location: ../../home/mainpage/index.php");
        }
    } else {
        header("Location: ../../home/login/index.php?in=$invalid");
    }
}