<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Diet Clinic</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg  navbar-dark navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <img src='logo.png' alt="" style="max-width: 100%; max-height: 100%;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../admin_home/admin_home2.php">Home</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProgramDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Client
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ProgramDropdown">
                            <li><a class="dropdown-item" href="../Register_client/register_client.php">Register
                                    Client</a></li>
                            <li><a class="dropdown-item" href="../Appointment/Appointment.php">Appointment</a></li>
                            <li><a class="dropdown-item" href="../labortary client/LabortaryClient.php">Labortary
                                    Client</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProgramDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Staff
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ProgramDropdown">
                            <li><a class="dropdown-item" href="../Staff/ProfessionalStaff.php">Add Professional
                                    Staff</a></li>
                            <li><a class="dropdown-item" href="../Staff/LabourStaff.php">Add Labour Staff</a></li>
                            <li><a class="dropdown-item" href="../NewAdmin/newadmin.php">Add New Admin</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProgramDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Drugs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ProgramDropdown">
                            <li><a class="dropdown-item" href="../Drug/Add_drug.php">Add Drugs</a></li>
                            <li><a class="dropdown-item" href="../Drug/Drug_sale.php">Drugs Sale</a></li>
                            <li><a class="dropdown-item" href="../Drug/return_drug.php">Return Drugs</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProgramDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Equipment
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ProgramDropdown">
                            <li><a class="dropdown-item" href="../Equipment/Add_equipment.php">Add Equipment</a></li>
                            <li><a class="dropdown-item" href="../Equipment/Equipment_user.php">Equipment User</a></li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="../blood_test/Blood_test_report.php">Blood Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Payment/payment.php">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Department/Add Department.php">Add Department</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../MydataTable/mydatatable.php">My Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout/adminlogout.php">Log Out</a>
                    </li>

                </ul>

                <h4><strong style=" color: white; margin-right: 20px;">Welcome <?php
                                                                                echo $_SESSION["name"];
                                                                                ?></strong></h4>

            </div>
        </div>
    </nav>



    </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>