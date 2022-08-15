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
    $dp = "";
    $submit = "";
    if (!empty($_REQUEST['submit'])) {
        $submit = $_REQUEST['submit'];
    }
    if (!empty($_REQUEST['dp'])) {
        $dp = $_REQUEST['dp'];
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
    if ($dp == "false") {
    ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Department ID Does not
            exist..............................................................
        </p>
    </div>
    <?php
    }
    ?>



    <img src="gym.jpg" alt="" style="width: 100%;opacity: .3;z-index: -1;position: absolute; height: 100%;">
    <div class="container my-4">
        <form id="myform2" action="actionad.php" method="post" style="margin-top: 100px;">

            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Department ID</label>
                <input type="number" name="id" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Equipment Category</label>
                <select class="form-select form-select-md" name="category" aria-label=".form-select-sm example">
                    <option value="General Lab Equipment">General Lab Equipment</option>
                    <option value="GYM Equipments">GYM Equipments</option>
                    <option value="Clinical Lab Equipment">Clinical Lab Equipment</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="input-group-text" class="form-label fw-bold">Equipment Name</label>
                <input type="text" name="name" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>