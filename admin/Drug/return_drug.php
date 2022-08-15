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
    $ar = "";
    if (!empty($_REQUEST['ar'])) {
        $ar = $_REQUEST['ar'];
    }
    if ($ar == "true") {
    ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Drug Already
            Returned..............................................................
        </p>
    </div>
    <?php
    }
    $submit = "";
    if (!empty($_REQUEST['submit'])) {
        $submit = $_REQUEST['submit'];
    }
    if ($submit == "true") {
    ?>
    <div class="alert alert-success" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Payment Returned
            Successfully..............................................................
        </p>
    </div>
    <?php
    }
    $nosale = "";
    if (!empty($_REQUEST['nosale'])) {
        $nosale = $_REQUEST['nosale'];
    }
    if ($nosale == "true") {
    ?>
    <div class="alert alert-danger" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................No Record Found For This
            ID..............................................................
        </p>
    </div>
    <?php
    }
    ?>



    </div>
    <div class="container my-4">
        <form id="myform2" name="f1" action="actionr.php" method="post">
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Purchased Drug ID</label>
                <input type="number" name="pid" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Payment Method</label>
                <select name="paymentmethod" class="form-select form-select-md" aria-label=".form-select-sm example">
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Direct Bank Payment">Direct Bank Payment</option>
                    <option value="JazzCash">JazzCash</option>
                    <option value="EasyPaisa">EasyPaisa</option>
                    <option value="Cash">Cash</option>
                </select>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary" name="name" style="position: absolute;">
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