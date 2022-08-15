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
    <?php
  include 'C:\xampp\htdocs\Database Semester Project\website\Client\client_navbar\navbar.php';
  ?>
    <div class="container my-07" style="margin-top: 40px; margin-bottom: 120px">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    <div class="container-fluid" style="background-color: #cfeccc93"></div>

    <?php
  include 'C:\xampp\htdocs\Database Semester Project\website\navbar\footer.php';
  ?>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>