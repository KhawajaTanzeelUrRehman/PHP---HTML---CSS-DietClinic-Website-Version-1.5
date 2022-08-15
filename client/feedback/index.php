<?php
session_start();
include '../../connection.php';
if (isset($_SESSION["login"])) {
    if ($_SESSION["login"] == true) {
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/about.css">
    <title>Diet Clinic</title>
</head>

<body>
    <?php
            include '../../home/navbar/navbarclient.php';
            $submit = "";
            if (!empty($_REQUEST['submit'])) {
                $submit = $_REQUEST['submit'];
            }
            if ($submit == "true") {
            ?>
    <div class="alert alert-success" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Feedback Submitted
            Successfully..............................................................
        </p>
    </div>
    <?php
            }
            ?>

    <form action="../../client/feedback//feedback.php" method="post">
        <div class="container my-07" style="margin-top: 40px;margin-bottom: 120px;">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
                <textarea name="text" class="form-control" style="min-height: 250px;" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>






    <div class="container-fluid" style="background-color: #cfeccc93;">




    </div>
    <?php
            include '../../home/navbar/footer.php';
            ?>


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