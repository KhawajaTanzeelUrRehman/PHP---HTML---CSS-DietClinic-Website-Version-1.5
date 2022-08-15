<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {

        $dg = "a";

        if (isset($_POST)) {
            $height = $_POST['height'];
            $cweight = $_POST['cweight'];
            $tweight = $_POST['tweight'];
            $age = $_POST['age'];
            $rthigh = $_POST['rthigh'];
            $lthigh = $_POST['lthigh'];
            $waistabove = $_POST['waistabove'];
            $bb = $_POST['bb'];
            $calves = $_POST['calves'];
            $hips = $_POST['hips'];
            $chest = $_POST['chest'];






            $q1 = "select max(days) as 'days' from body_measurements where client_id = '" . $_SESSION["id"] . "'";
            $r1 = mysqli_query($conn, $q1);
            $result1 =  mysqli_fetch_assoc($r1);

            $q2 = "select followup from package where client_id = '" . $_SESSION["id"] . "' and package_id = (select max(package_id) from package where client_id = '" . $_SESSION["id"] . "')";
            $r2 = mysqli_query($conn, $q2);
            $result2 =  mysqli_fetch_assoc($r2);


            $days = $result1['days'] + 15;
            $q3 = "insert into body_measurements (height,current_weight,target_weight,age,right_thigh,left_thigh,waist_above,belly_button,chest,calves,hips,days,client_id) values('" . $height . "','" . $cweight . "','" . $tweight . "','" . $age . "','" . $rthigh . "','" . $lthigh . "','" . $waistabove . "','" . $bb . "','" . $chest . "','" . $calves . "','" . $hips . "','" . $days . "'," . $_SESSION["id"] . ")";
            $r3 = mysqli_query($conn, $q3);

            if ($days >= $result2["followup"]) {
                $q4 = "update client set followup = 0 where client_id = '" . $_SESSION["id"] . "'";
                $r4 = mysqli_query($conn, $q4);
            }

            session_unset();
            session_destroy();
            header("Location: ../../home/login?dg=$dg");
        } else {
            header("Location: ../../home/mainpage");
        }
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}