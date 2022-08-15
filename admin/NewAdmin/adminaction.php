<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordhash = hash('md5', $password);
$emailexist = "true";
$submit = "true";
$emailcheck = "SELECT * FROM login where email = '" . $email . "'";
$emailresult = mysqli_query($conn, $emailcheck);


if (!empty(mysqli_fetch_assoc($emailresult))) {
    header("Location: newadmin.php?email=$emailexist");
} else {
    $q1 = "insert into  login (email,password,type) values( '" . $email . "','" . $passwordhash . "','admin' )";
    $result1 = mysqli_query($conn, $q1);

    $query5 = "SELECT	AUTO_INCREMENT from information_schema.tables WHERE table_schema = 'dietclinic' and TABLE_NAME = 'login'";
    $r3 = mysqli_fetch_array(mysqli_query($conn, $query5));
    $loginid = $r3[0] - 1;


    $q2 = "insert into admin (name,gender,phone,login_id) values ('" . $name . "' ,'" . $gender . "','" . $phone . "','" . $loginid . "'   )";
    $result2 = mysqli_query($conn, $q2);
    header("Location: newadmin.php?submit=$submit");
}