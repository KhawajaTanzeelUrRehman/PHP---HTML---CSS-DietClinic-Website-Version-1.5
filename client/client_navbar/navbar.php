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
                        <a class="nav-link" aria-current="page" href="../Client_home/index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProgramDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Programs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ProgramDropdown">
                            <li><a class="dropdown-item" href="../client_programs/Cards.php">Weight Management
                                    Program</a></li>
                            <li><a class="dropdown-item" href="">Post Partum Program</a></li>
                            <li><a class="dropdown-item" href="">Therapeutic Diseases Based Programs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProgramDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Update My Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ProgramDropdown">
                            <li><a class="dropdown-item" href="../UpdateBodyM/updatebodym.php">Update Body
                                    Measurements</a></li>
                            <li><a class="dropdown-item" href="../Updatediagnosis/updatediagnosis.php">Update Medical
                                    Issues/Food Choices</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProgramDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            My Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ProgramDropdown">
                            <li><a class="dropdown-item" href="../data/appointment.php">Show Appointment</a></li>
                            <li><a class="dropdown-item" href="../data/bodym.php">Show Body Measurements</a></li>
                            <li><a class="dropdown-item" href="../data/medicalandfood.php">Show Medical Issues/Food
                                    Choices</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../Feedback/feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ContactUS/contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout/logout.php">Log Out</a>
                    </li>
                </ul>
                <h4><strong style="color: white; margin-right: 20px;">Welcome <?php
                                                                                echo $_SESSION["name"];
                                                                                ?></strong></h4>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    </div>

</body>

</html>