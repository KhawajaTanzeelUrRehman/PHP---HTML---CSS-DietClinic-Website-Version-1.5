<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Diet Clinic</title>
    <link rel="stylesheet" href="blood_test.css">
</head>

<body>
    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\Admin\navbar2\navbar2.php';
    $le = "";
    $submit = "";
    if (!empty($_REQUEST['submit'])) {
        $submit = $_REQUEST['submit'];
    }
    if (!empty($_REQUEST['le'])) {
        $le = $_REQUEST['le'];
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
    if ($le == "false") {
    ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................lab id does not
            exist..............................................................
        </p>
    </div>
    <?php
    }
    ?>

    <img src="Blood.jpg" style="position: absolute;z-index: -1;opacity: .2;width: 100%;height: 100%;" alt="">
    <div class="container my-3 form_mid">
        <form id="myform2" class="form_top" style="margin-left: 180px;" method="post" action="bloodaction.php">
            <div class="mb-3 inline_class">
                <label for="input-group-text" class="form-label">Blood Group</label>
                <input type="text" name="bgroup" class="form-control " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3 inline_class mydiv1">
                <label for="input-group-text" class="form-label">Glucose</label>
                <input type="text" name="glucose" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3 inline_class mydiv2">
                <label for="input-group-text" class="form-label">Hormones</label>
                <input type="text" name="hormone" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3 inline_class">
                <label for="input-group-text" class="form-label">RBC's</label>
                <input type="text" name="rbc" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3 inline_class mydiv2">
                <label for="input-group-text" class="form-label">WBC's</label>
                <input type="text" name="wbc" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3 inline_class">
                <label for="input-group-text" class="form-label">Platelets</label>
                <input type="text" name="plate" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3 inline_class mydiv2">
                <label for="input-group-text" class="form-label">Proteins</label>
                <input type="text" name="protein" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3 inline_class">
                <label for="input-group-text" class="form-label">Vitamins</label>
                <input type="text" name="vitamin" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3 inlie inline_class mydiv2">
                <label for="input-group-text" class="form-label">Fats</label>
                <input type="text" name="fat" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="mb-3 inline_class">
                <label for="input-group-text" class="form-label">Lab ID</label>
                <input type="number" name="lid" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" style="display: flex;" class="mybtnn btn btn-primary">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>

</body>

</html>