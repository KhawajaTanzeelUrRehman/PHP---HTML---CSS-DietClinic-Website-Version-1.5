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
        $height = $_POST['height'];
        $cweight = $_POST['cweight'];
        $tweight = $_POST['tweight'];
        $age = $_POST['age'];
        $rthigh = $_POST['rthigh'];
        $lthigh = $_POST['lthigh'];
        $waist = $_POST['waist'];
        $bb = $_POST['bb'];
        $chest = $_POST['chest'];
        $calves = $_POST['calves'];
        $hips = $_POST['hips'];
        $food = $_POST['food'];
        $cmedication = $_POST['cmedication'];
        $fooda = $_POST['fooda'];
        $diseases = $_POST['diseases'];
        $get_up_time = $_POST['get_up_time'];
        $sleep_time = $_POST['sleep_time'];
        $physical_activity = $_POST['physical_activity'];

        $submit = "true";


        if ($action == 'generated') {
            $q = "UPDATE payment_approvals set status = 'formverified'  where client_id = '" . $cid . "' and amount = '" . $amount . "' and payment_date = '" . $payment_date . "' and payment_method = '" . $payment_method . "' and purpose = '" . $purpose . "'";
            mysqli_query($conn, $q);
            header("Location: ../../admin/formverification/formverification.php");
        } else if ($action == 'edit') {
            $q1 = "UPDATE body_measurements set height = '" . $height . "', current_weight = '" . $cweight . "', target_weight = '" . $tweight . "', age = '" . $age . "', right_thigh = '" . $rthigh . "', left_thigh = '" . $lthigh . "', waist_above = '" . $waist . "', belly_button = '" . $bb . "', chest = '" . $chest . "', calves = '" . $calves . "', hips = '" . $hips . "'  where client_id = '" . $cid . "' and days = (select max(days) from body_measurements where client_id = '" . $cid . "')";
            mysqli_query($conn, $q1);
            $q2 = "UPDATE medical_diagnosis set food_choices = '" . $food . "', current_medication = '" . $cmedication . "', food_allergies = '" . $fooda . "', diseases = '" . $diseases . "', get_up_time = '" . $get_up_time . "', sleep_time = '" . $sleep_time . "', physical_activity = '" . $physical_activity . "' where client_id = '" . $cid . "'";
            mysqli_query($conn, $q2);
            header("Location: ../../admin/formverification/formverification.php?");
        } else {
            header("Location: Location: ../../admin/formverification/formverification.php?submit=$submit");
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