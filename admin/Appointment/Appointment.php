<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="appointment.css">
    <title>Diet Clinic</title>
</head>

<body>
    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\Admin\navbar2\navbar2.php';
    $submit = "";
    if (!empty($_REQUEST['submit'])) {
        $submit = $_REQUEST['submit'];
    }
    if ($submit == "true") {
    ?>
    <div class="alert alert-success" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Form Submitted
            Successfully..............................................................
        </p>
    </div>
    <?php
    }
    $cp = "";
    if (!empty($_REQUEST['cp'])) {
        $cp = $_REQUEST['cp'];
    }
    if ($cp == "true") {
    ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Client Not
            Found..............................................................
        </p>
    </div>
    <?php
    }
    $psp = "";
    if (!empty($_REQUEST['psp'])) {
        $psp = $_REQUEST['psp'];
    }
    if ($psp == "true") {
    ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................No Record Found For Professional
            Staff..............................................................
        </p>
    </div>
    <?php
    }
    $pp = "";
    if (!empty($_REQUEST['pp'])) {
        $pp = $_REQUEST['pp'];
    }
    if ($pp == "true") {
    ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Payment Id Not Found
            ..............................................................
        </p>
    </div>
    <?php
    }
    ?>


    <img src="appointment.jpg" style="position: absolute;z-index: -1;opacity: .2;width: 100%;" alt="">
    <div class="container my-4">
        <form id="myform2" action="appointmentaction.php" method="post">
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Client ID</label>
                <input type="number" name="cid" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Professional Staff ID</label>
                <input type="text" name="pid" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Package Type</label>
                <input type="text" name="ptype" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Payment ID</label>
                <input type="number" name="paymentid" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>

</body>

</html>