<?php
include '../../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {

        $dg = "a";

        if (isset($_POST)) {
            $fc = $_POST['fc'];
            $cm = $_POST['cm'];
            $fa = $_POST['fa'];
            $disease = $_POST['disease'];
            $gtime = $_POST['gtime'];
            $stime = $_POST['stime'];
            $pactivity = $_POST['pactivity'];
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






            $q2 = "select * from body_measurements where client_id = '" . $_SESSION["id"] . "'";
            $r2 = mysqli_query($conn, $q2);

            if (!empty(mysqli_fetch_assoc($r2))) {
                $q01 = "select max(days) as 'days' from body_measurements where client_id = '" . $_SESSION["id"] . "'";
                $r01 = mysqli_query($conn, $q01);
                $result2 =  mysqli_fetch_assoc($r01);




                $days = $result2['days'] + 1;
                $q = "insert into body_measurements (height,current_weight,target_weight,age,right_thigh,left_thigh,waist_above,belly_button,chest,calves,hips,days,client_id) values('" . $height . "','" . $cweight . "','" . $tweight . "','" . $age . "','" . $rthigh . "','" . $lthigh . "','" . $waistabove . "','" . $bb . "','" . $chest . "','" . $calves . "','" . $hips . "','" . $days . "'," . $_SESSION["id"] . ")";
                $r = mysqli_query($conn, $q);
                $q1 = "update medical_diagnosis set food_choices = '" . $fc . "',current_medication = '" . $cm . "',food_allergies = '" . $fa . "',diseases = '" . $disease . "',get_up_time = '" . $gtime . "',sleep_time = '" . $stime . "',physical_activity = '" . $pactivity . "' where client_id = '" . $_SESSION["id"] . "'";
                $r1 = mysqli_query($conn, $q1);
                $q2 = "update payment_approvals set status = 'codegenerated' where status = 'share' and clienttype = 'Old' and client_id = '" . $_SESSION["id"] . "'";
                $r2 = mysqli_query($conn, $q2);
            } else {
                $q = "insert into body_measurements (height,current_weight,target_weight,age,right_thigh,left_thigh,waist_above,belly_button,chest,calves,hips,days,client_id) values('" . $height . "','" . $cweight . "','" . $tweight . "','" . $age . "','" . $rthigh . "','" . $lthigh . "','" . $waistabove . "','" . $bb . "','" . $chest . "','" . $calves . "','" . $hips . "',0," . $_SESSION["id"] . ")";
                $r = mysqli_query($conn, $q);
                $q1 = "insert into medical_diagnosis (food_choices,current_medication,food_allergies,diseases,get_up_time,sleep_time,physical_activity,client_id) values('" . $fc . "','" . $cm . "','" . $fa . "','" . $disease . "','" . $gtime . "','" . $stime . "','" . $pactivity . "'," . $_SESSION["id"] . ")";
                $r1 = mysqli_query($conn, $q1);
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