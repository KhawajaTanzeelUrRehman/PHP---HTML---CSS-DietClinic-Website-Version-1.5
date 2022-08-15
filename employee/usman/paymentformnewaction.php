<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {
        if (isset($_POST)) {
            $phone = $_POST['phone'];
            $amount = $_POST['amount'];
            $date = $_POST['date'];
            $iid = $_POST['iid'];
            $payment_method = $_POST['payment_method'];
            $paymentpurpose = $_POST['paymentpurpose'];
            $remarks = $_POST['remarks'];
        }

        $emailexist = "true";
        $submit = "true";
        $emailcheck = "SELECT * FROM login where email = '" . $phone . "'";
        $emailresult = mysqli_query($conn, $emailcheck);


        if (!empty(mysqli_fetch_assoc($emailresult))) {
            header("Location: ../../employee/usman/paymentfromnew.php?email=$emailexist");
        } else {


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
                        // Insert image content into database
                        $q = "SELECT AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'payment_approvals'";
                        $r = mysqli_fetch_array(mysqli_query($conn, $q));
                        $paymentapprovalid = $r[0];
                        $img_ex = pathinfo($_FILES['ps']['name'], PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);

                        $new_img_name = $paymentapprovalid . '.' . $img_ex_lc;
                        $img_upload_path = '../../paymentslips/' . $new_img_name;
                        move_uploaded_file($_FILES['ps']['tmp_name'], $img_upload_path);

                        if ($paymentpurpose == 'Capsules' || $paymentpurpose == 'Protein Powder') {


                            $query4 = "INSERT into client (phone,insta_id) value ('" . $phone . "','" . $iid . "')";
                            mysqli_query($conn, $query4);
                            $query5 = "SELECT AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'client'";
                            $r3 = mysqli_fetch_array(mysqli_query($conn, $query5));
                            $clientid = $r3[0] - 1;



                            $query = "INSERT into payment_approvals (client_id,amount,payment_slip,purpose,payment_method,phone,insta_id,status,clienttype,payment_date,remarks) values ('" . $clientid . "','" . $amount . "','" . $new_img_name . "','" . $paymentpurpose . "','" . $payment_method . "','" . $phone . "','" . $iid . "','pending','New','" . $date . "','" . $remarks . "')";
                            mysqli_query($conn, $query);
                        } else {
                            $q = "INSERT into login (email,password,type) values ('" . $phone . "','" . $phone . "','client')";
                            mysqli_query($conn, $q);
                            $query1 = "SELECT AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'login'";
                            $r1 = mysqli_fetch_array(mysqli_query($conn, $query1));
                            $logid = $r1[0] - 1;

                            $query4 = "INSERT into client (phone,insta_id,login_id) values ('" . $phone . "','" . $iid . "','" . $logid . "')";
                            mysqli_query($conn, $query4);
                            $query5 = "SELECT AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'client'";
                            $r3 = mysqli_fetch_array(mysqli_query($conn, $query5));
                            $clientid = $r3[0] - 1;

                            $query = "INSERT into payment_approvals (client_id,amount,payment_slip,purpose,payment_method,phone,insta_id,status,clienttype,payment_date,remarks) values ('" . $clientid . "','" . $amount . "','" . $new_img_name . "','" . $paymentpurpose . "','" . $payment_method . "','" . $phone . "','" . $iid . "','pending','New','" . $date . "','" . $remarks . "')";
                            mysqli_query($conn, $query);
                        }

                        header("Location: ../../employee/usman/paymentfromnew.php?submit=$submit");
                    } else {
                        $submit = "large";
                        header("Location: ../../employee/usman/paymentfromnew.php?submit=$submit");
                    }
                } else {
                    $submit = "type";
                    header("Location: ../../employee/usman/paymentfromnew.php?submit=$submit");
                }
            }
        }
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}