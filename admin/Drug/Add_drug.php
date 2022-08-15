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

    <img src="add_drug.jpg" alt="" style="position: absolute;z-index: -1; width: 100%;opacity: .3;height: 100%;">

    <div class="container my-4">
        <form id="myform2" action="actionad.php" method="post">
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Category</label>
                <select name="category" class="form-select form-select-md" aria-label=".form-select-sm example">
                    <option value="ProteinSupplements">Protein Supplements</option>
                    <option value="WGsupplements">Weight Gain Supplements</option>
                    <option value="WLsupplements">Weight Loss Supplements</option>
                    <option value="PharmaceuticalDrug">Diabetic Drugs</option>
                    <option value="PharmaceuticalDrug">Other Medicines</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Drug Name</label>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Price(In Rupees)</label>
                <input type="number" name="price" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <br>
    <br>
    <br>

    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\navbar\footer.php';
    ?>
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>


</body>

</html>