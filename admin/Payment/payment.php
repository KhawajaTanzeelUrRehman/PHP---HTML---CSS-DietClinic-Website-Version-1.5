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
    ?>


    <img src="payment.jpg" style="position: absolute;z-index: -1;opacity: .2;width: 100%;" alt="">
    <div class="container my-4">
        <form id="myform2" method="post" action="paymentaction.php">
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Amount(In Rupees)</label>
                <input type="number" name="amount" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Payment Method</label>
                <select name="paymentmethod" class="form-select form-select-md" aria-label=".form-select-sm example">
                    <option value="ProteinSupplements">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Direct Bank Payment">Direct Bank Payment</option>
                    <option value="JazzCash">JazzCash</option>
                    <option value="EasyPaisa">EasyPaisa</option>
                    <option value="Cash">Cash</option>
                </select>
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>

</body>

</html>