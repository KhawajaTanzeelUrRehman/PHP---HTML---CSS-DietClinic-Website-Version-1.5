<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {

        $cid = $_POST['cid'];
        $amount = $_POST['amount'];
        $payment_date = $_POST['payment_date'];
        $payment_method = $_POST['payment_method'];
        $purpose = $_POST['purpose'];
        $insta_id = $_POST['insta_id'];
        $client_type = $_POST['client_type'];
        $remarks = $_POST['remarks'];
        $action = $_POST['action'];
        $submit = "true";


        if ($action == 'reject') {
            $q = "UPDATE payment_approvals set status = 'reject' where client_id = '" . $cid . "' and amount = '" . $amount . "' and payment_date = '" . $payment_date . "' and payment_method = '" . $payment_method . "' and purpose = '" . $purpose . "'";
            mysqli_query($conn, $q);
            header("Location: ../../employee/mahnoor/pendingpaymentsapproval.php");
        } else if ($action == 'approve') {
            $q1 = "INSERT into payment (amount,payment_date,payment_method) values ('" . $amount . "','" . $payment_date . "','" . $payment_method . "')";
            mysqli_query($conn, $q1);
            $query1 = "SELECT AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'payment'";
            $r1 = mysqli_fetch_array(mysqli_query($conn, $query1));
            $paymentid = $r1[0] - 1;

            if ($purpose == "Capsules" || $purpose == "Protein Powder") {
                $q2 = "INSERT into package (client_id,payment_id,package_name,package_date) values ('" . $cid . "','" . $paymentid . "','" . $purpose . "',now())";
                mysqli_query($conn, $q2);
            }


            $q3 = "UPDATE payment_approvals set status = 'approve', payment_id = '" . $paymentid . "' where client_id = '" . $cid . "' and amount = '" . $amount . "' and payment_date = '" . $payment_date . "' and payment_method = '" . $payment_method . "' and purpose = '" . $purpose . "'";
            mysqli_query($conn, $q3);
            header("Location: ../../employee/mahnoor/pendingpaymentsapproval.php?");
        } else {
            header("Location: ../../employee/mahnoor/pendingpaymentsapproval.php?submit=$submit");
        }
?>

<?php
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}
?>