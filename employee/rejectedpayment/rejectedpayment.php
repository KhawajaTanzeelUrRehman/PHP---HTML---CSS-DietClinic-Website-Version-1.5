<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {

        
        if (isset($_POST)) {
        $apid = $_POST['apid'];
        $cid = $_POST['cid'];
        $amount = $_POST['amount'];
        $payment_date = $_POST['payment_date'];
        $payment_method = $_POST['payment_method'];
        $purpose = $_POST['purpose'];
        $insta_id = $_POST['insta_id'];
        $client_type = $_POST['client_type'];
        $remarks = $_POST['remarks'];
        $action = $_POST['action'];
        }
        $submit = "true";
        
        
        if ($action == 'solve') {
        
        $query1 = "SELECT status from payment_approvals where approval_id = '" . $apid . "' ";
        $r1 = mysqli_fetch_array(mysqli_query($conn, $query1));
        
        if ($r1[0] == 'reject') {
        
        if (!empty($_FILES["image"]["name"])) {
        // Get file info
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        if ($_FILES['image']['size'] > 1000) {
        $q = "UPDATE payment_approvals set status = 'pending', client_id = '" . $cid . "',amount = '" . $amount . "', payment_date = '" . $payment_date . "', payment_method = '" . $payment_method . "', purpose = '" . $purpose . "', insta_id = '" . $insta_id . "', remarks = '" . $remarks . "', payment_slip = '" . $imgContent . "' where approval_id = '" . $apid . "'";
        mysqli_query($conn, $q);
        header("Location: index.php?");
        }
        }
        } else {
        $q1 = "UPDATE payment_approvals set status = 'pending', client_id = '" . $cid . "',amount = '" . $amount . "', payment_date = '" . $payment_date . "', payment_method = '" . $payment_method . "', purpose = '" . $purpose . "', insta_id = '" . $insta_id . "', remarks = '" . $remarks . "' where approval_id = '" . $apid . "'";
        mysqli_query($conn, $q1);
        header("Location: ../../employee/rejectedpayment/index.php?");
        }
        } else {
        $submit = 'false';
        header("Location: ../../employee/rejectedpayment/index.php?submit=$submit");
        }
        } else {
        header("Location: ../../employee/rejectedpayment/index.php?submit=$submit");
        }




    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}