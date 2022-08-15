<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$salary = $_POST['salary'];
$fee = $_POST['fee'];
$qualification = $_POST['qualification'];
$did = $_POST['did'];
$submit = "true";
$nodept = "true";


$q1 = "SELECT * from Departments where dept_id = '" . $did . "' ";
$result1 = mysqli_query($conn, $q1);

if (empty(mysqli_fetch_assoc($result1))) {
    header("Location: ProfessionalStaff.php?nodept=$nodept");
} else {
    $q2 = "INSERT into professional_staff(first_name,last_name,gender,charges_per_visit,qualification,phone,address,salary,dept_id) values ('" . $firstname . "','" . $lastname . "','" . $gender . "','" . $fee . "','" . $qualification . "','" . $phone . "','" . $address . "','" . $salary . "','" . $did . "')";
    mysqli_query($conn, $q2);
    header("Location: ProfessionalStaff.php?submit=$submit");
}