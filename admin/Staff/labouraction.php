<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$salary = $_POST['salary'];
$hqualification = $_POST['hqualification'];
$designation = $_POST['designation'];
$did = $_POST['did'];
$submit = "true";
$nodept = "true";


$q1 = "SELECT * from Departments where dept_id = '" . $did . "' ";
$result1 = mysqli_query($conn, $q1);

if (empty(mysqli_fetch_assoc($result1))) {
    header("Location: ProfessionalStaff.php?nodept=$nodept");
} else {
    $q = "INSERT into labour_staff(dept_id, first_name, last_name,gender,phone,salary,address,designation, highest_qualification) values ('" . $did . "','" . $firstname . "','" . $lastname . "','" . $gender . "','" . $phone . "','" . $salary . "','" . $address . "','" . $designation . "','" . $hqualification . "')";
    mysqli_query($conn, $q);
    header("Location: LabourStaff.php?submit=$submit");
}