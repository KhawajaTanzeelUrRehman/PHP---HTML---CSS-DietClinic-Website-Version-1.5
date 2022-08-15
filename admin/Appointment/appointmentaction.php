<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
$cid = $_POST['cid'];
$pid = $_POST['pid'];
$ptype = $_POST['ptype'];
$paymentid = $_POST['paymentid'];
$cp = "true";
$psp = "true";
$pp = "true";
$submit = "true";


$q1 = "SELECT * from client where client_id = '" . $cid . "' ";
$result1 = mysqli_query($conn, $q1);


$q2 = "SELECT * from professional_staff where professional_id = '" . $pid . "' ";
$result2 = mysqli_query($conn, $q2);


$q3 = "SELECT * from payment where payment_id = '" . $paymentid . "' ";
$result3 = mysqli_query($conn, $q3);





if (empty(mysqli_fetch_assoc($result1))) {
    header("Location: appointment.php?cp=$cp");
} else if (empty(mysqli_fetch_assoc($result2))) {
    header("Location: appointment.php?psp=$psp");
} else if (empty(mysqli_fetch_assoc($result3))) {
    header("Location: appointment.php?pp=$pp");
} else {
    $q = "INSERT into appointments(package_type, client_id, payment_id,professional_id) values ('" . $ptype . "','" . $cid . "','" . $paymentid . "','" . $pid . "')";
    mysqli_query($conn, $q);
    header("Location: appointment.php?submit=$submit");
}