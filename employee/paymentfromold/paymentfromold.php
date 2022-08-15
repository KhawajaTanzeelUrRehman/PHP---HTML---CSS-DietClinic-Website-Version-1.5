<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {
        if (isset($_POST)) {
            $cid = $_POST['cid'];
            $amount = $_POST['amount'];
            $date = $_POST['date'];
            $payment_method = $_POST['payment_method'];
            $paymentpurpose = $_POST['paymentpurpose'];
            $remarks = $_POST['remarks'];
        }
        $submit = "true";



        if (!empty($_FILES["ps"]["name"])) {
            // Get file info
            $fileName = basename($_FILES["ps"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // Allow certain file formats
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {
                $image = $_FILES['ps']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));


                if ($_FILES['ps']['size'] > 1000) {
                    $query = "INSERT into payment_approvals (client_id,amount,payment_slip,purpose,payment_method,status,clienttype,payment_date,remarks) values ('" . $cid . "','" . $amount . "','" . $imgContent . "','" . $paymentpurpose . "','" . $payment_method . "','pending','Old','" . $date . "','" . $remarks . "')";
                    mysqli_query($conn, $query);

                    header("Location: ../../employee/paymentfromold/index.php?submit=$submit");
                } else {
                    $submit = "large";
                    header("Location: ../../employee/paymentfromold/index.php?submit=$submit");
                }
            }
        }
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}