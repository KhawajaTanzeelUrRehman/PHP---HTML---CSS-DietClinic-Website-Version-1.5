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


        if ($action == 'generated') {
            $q = "UPDATE payment_approvals set status = 'codegenerated' , clienttype = 'Old' where client_id = '" . $cid . "' and amount = '" . $amount . "' and payment_date = '" . $payment_date . "' and payment_method = '" . $payment_method . "' and purpose = '" . $purpose . "'";
            mysqli_query($conn, $q);
            header("Location: ../../employee/warda/approvedpayment.php?");
        } else {
            header("Location: ../../employee/warda/approvedpayment.php?submit=$submit");
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