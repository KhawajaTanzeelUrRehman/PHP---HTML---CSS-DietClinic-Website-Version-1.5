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


                if ($_FILES['ps']['size'] <= 1250000) {
                    $q1 = "SELECT * from client where client_id = '" . $cid . "' and login_id != '" . null . "' ";
                    $r1 = mysqli_query($conn, $q1);
                    if (!empty(mysqli_fetch_assoc($r1))) {

                        $q = "SELECT AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'payment_approvals'";
                        $r = mysqli_fetch_array(mysqli_query($conn, $q));
                        $paymentapprovalid = $r[0];

                        $img_ex = pathinfo($_FILES['ps']['name'], PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);

                        $new_img_name = $paymentapprovalid . '.' . $img_ex_lc;
                        $img_upload_path = '../../paymentslips/' . $new_img_name;
                        move_uploaded_file($_FILES['ps']['tmp_name'], $img_upload_path);


                        $query = "INSERT into payment_approvals (client_id,amount,payment_slip,purpose,payment_method,status,clienttype,payment_date,remarks) values ('" . $cid . "','" . $amount . "','" . $new_img_name . "','" . $paymentpurpose . "','" . $payment_method . "','pending','Old','" . $date . "','" . $remarks . "')";
                        mysqli_query($conn, $query);
                    } else {
                        $submit = "false";
                        header("Location: ../../employee/ishaam/paymentfromold.php?submit=$submit");
                    }

                    header("Location: ../../employee/ishaam/paymentfromold.php?submit=$submit");
                } else {
                    $submit = "large";
                    header("Location: ../../employee/ishaam/paymentfromold.php?submit=$submit");
                }
            } else {
                $submit = "type";
                header("Location: ../../employee/usman/paymentfromnew.php?submit=$submit");
            }
        }
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}