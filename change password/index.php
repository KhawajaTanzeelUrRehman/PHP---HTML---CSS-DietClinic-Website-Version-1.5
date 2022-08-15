<?php
include '../connection.php';
session_start();
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" href="css/about.css" />
    <title>Diet Clinic</title>
</head>

<body>
    <br><br>
    <div class="container my-07" style="margin-top: 40px; margin-bottom: 120px">
        <form id="myform2" method="post" action="../change password/changepassword.php" enctype="multipart/form-data">
            <div class="row">
                <h1 style="color: blue; margin-bottom: 30px; margin: auto; width: fit-content;">Kindly change your
                    password</h1>
            </div>
            <br><br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Login Password</label>
                <input name="password" type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="New password" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

    <div class="container-fluid" style="background-color: #cfeccc93"></div>
    <br><br><br><br>

</body>

</html>

<?php
    } else {
        header("Location: ../../home/login/index.php");
    }
} else {
    header("Location: ../../home/login/index.php");
}
?>