<?php
echo "first button";
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
$pid = $_POST['pid'];
$paymentmethod = $_POST['paymentmethod'];
$ar = "true";
$submit = "true";
$nosale = "true";


$q = "select * from returned_drug where purchased_drug_id = '" . $pid . "'";
$result = mysqli_query($conn, $q);
if (!empty(mysqli_fetch_assoc($result))) {
    header("Location: return_drug.php?ar=$ar");
} else {

    $q1 = "select * from purchased_drug where purchased_drug_id = '" . $pid . "'";
    $result1 = mysqli_query($conn, $q1);

    if (!empty($row1 = mysqli_fetch_array($result1))) {
        $did = $row1[1];
        $no = $row1[3];
        $ppaymentid = $row1[4];

        $q2 = "select amount from payment where payment_id = '" . $ppaymentid . "'";
        $result2 = mysqli_query($conn, $q2);
        $row2 = mysqli_fetch_array($result2);
        $pamount  =  $row2[0];
        $pnamount =  $pamount * (-1);
        $q3 = "SELECT AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'payment'";
        $resutl3 = mysqli_fetch_array(mysqli_query($conn, $q3));
        $paymentid = $resutl3[0];

        $q5 = "INSERT into payment (amount,payment_method) values ('" . $pnamount . "','" . $paymentmethod . "')";
        mysqli_query($conn, $q5);
        header("Location: return_drug.php?submit=$submit");

        $q4 = "INSERT into returned_drug (drug_id,no_of_items,returned_price,payment_id,purchased_drug_id) values ('" . $did . "','" . $no . "','" . $pamount . "','" . $paymentid . "','" . $pid . "')";
        mysqli_query($conn, $q4);
    } else {
        header("Location: return_drug.php?nosale=$nosale");
    }
}