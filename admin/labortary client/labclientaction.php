<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
$cid = $_POST['cid'];
$pid = $_POST['pid'];
$cp = "true";
$psp = "true";
$pp = "true";
$submit = "true";




$q2 = "SELECT * from client where client_id = '" . $cid . "' ";
$result2 = mysqli_query($conn, $q2);


$q3 = "SELECT * from professional_staff where professional_id = '" . $pid . "' ";
$result3 = mysqli_query($conn, $q3);





if (empty(mysqli_fetch_assoc($result2))) {
    header("Location: LabortaryClient.php?psp=$psp");
} else if (empty(mysqli_fetch_assoc($result3))) {
    header("Location: LabortaryClient.php?pp=$pp");
} else {
    $q = "INSERT into laboratary_client(client_id,professional_id) values ('" . $cid . "','" . $pid . "')";
    mysqli_query($conn, $q);
    header("Location: LabortaryClient.php?submit=$submit");
}