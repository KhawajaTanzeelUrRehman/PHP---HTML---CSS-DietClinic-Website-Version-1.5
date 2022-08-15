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
            <img src='../../images/logo.png' alt="" style="max-width: 100%; max-height: 100%;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../home/mainpage/index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProgramDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Plans
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ProgramDropdown">
                            <li><a class="dropdown-item" href="../../employee/mahnoor/pendingplans.php">Pending
                                    Plans</a></li>
                            <li><a class="dropdown-item" href="../../employee/mahnoor/sharedplans.php">List
                                    of Shared Plans</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="ProgramDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Payments
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="ProgramDropdown">
                            <li><a class="dropdown-item" href="">Pending
                                    Payments Approval</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../home/logout/index.php">Log Out</a>
                    </li>
                </ul>

                <h4><strong style=" color: white; margin-right: 20px;"><?php
                                                                        if (isset($_SESSION["name"])) {
                                                                            echo $_SESSION["name"];
                                                                        }
                                                                        ?></strong></h4>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    </div>

</body>

</html>