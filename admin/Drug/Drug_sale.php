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

    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\Admin\navbar2\navbar2.php';
    $pp = "";
    $ep = "";
    $submit = "";
    if (!empty($_REQUEST['submit'])) {
        $submit = $_REQUEST['submit'];
    }
    if (!empty($_REQUEST['pp'])) {
        $pp = $_REQUEST['pp'];
    }
    if (!empty($_REQUEST['ep'])) {
        $ep = $_REQUEST['ep'];
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
    if ($pp == "false") {
    ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Provided Drug Id does not
            exist..............................................................
        </p>
    </div>
    <?php
    }
    if ($ep == "false") {
    ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Provided Payment Id does not
            exist..............................................................
        </p>
    </div>
    <?php
    }
    ?>
    <div class="container my-4">
        <form id="myform2" method="post" action="actionds.php">
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Drug ID</label>
                <input type="number" name="did" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Payment ID</label>
                <input type="number" name="pid" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">No of Items</label>
                <input type="number" name="no" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br><br><br>
    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\navbar\footer.php';
    ?>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>

</body>

</html>