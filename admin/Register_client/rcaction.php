<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$height = $_POST['height'];
$cweight = $_POST['cweight'];
$tweight = $_POST['tweight'];
$lthigh = $_POST['lthigh'];
$rthigh = $_POST['rthigh'];
$waist = $_POST['waist'];
$chest = $_POST['chest'];
$hips = $_POST['hips'];
$food = $_POST['food'];
$cmed = $_POST['cmed'];
$fooda = $_POST['fooda'];
$diseases = $_POST['diseases'];

$emailexist = "true";
$submit = "true";
$emailcheck = "SELECT * FROM login where email = '" . $email . "'";
$emailresult = mysqli_query($conn, $emailcheck);


if (!empty(mysqli_fetch_assoc($emailresult))) {
    header("Location: register_client.php?email=$emailexist");
} else {

    $q = "INSERT into login (email,password,type) values ('" . $email . "','" . $password . "','client')";
    mysqli_query($conn, $q);
    $query1 = "SELECT	AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'login'";
    $r1 = mysqli_fetch_array(mysqli_query($conn, $query1));
    $logid = $r1[0] - 1;

    $query4 = "INSERT into client (first_name,last_name,address,phone,login_id) values ('" . $fname . "','" . $lname . "','" . $address . "','" . $phone . "','" . $logid . "')";
    mysqli_query($conn, $query4);
    $query5 = "SELECT	AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'client'";
    $r3 = mysqli_fetch_array(mysqli_query($conn, $query5));
    $clientid = $r3[0] - 1;


    $query = "INSERT into medical_diagnosis (food_choices,current_medication,food_allergies,diseases,client_id) values ('" . $food . "','" . $cmed . "','" . $fooda . "','" . $diseases . "','" . $clientid . "')";
    mysqli_query($conn, $query);


    $query2 = "INSERT into body_measurements (height,current_weight,right_thigh,left_thigh,hips,chest,waist,target_weight,client_id) values ('" . $height . "','" . $cweight . "','" . $rthigh . "','" . $lthigh . "','" . $hips . "','" . $chest . "','" . $waist . "','" . $tweight . "','" . $clientid . "')";
    mysqli_query($conn, $query2);






    header("Location: register_client.php?submit=$submit");
}