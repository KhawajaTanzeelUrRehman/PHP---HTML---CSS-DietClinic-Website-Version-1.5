<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Cards.css">
    <title>Diet Clinic</title>
</head>

<body>

    <?php
  include 'C:\xampp\htdocs\Database Semester Project\website\Client\client_navbar\navbar.php';
  ?>
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="cardimg2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="cardimg1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="cardimg3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center mycard1">
                    <img src="cardimg4.jpg" alt="" class="card-img-top">
                    <h1 class="fw-bold my-title">Weight Management</h1>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit, deserunt iusto fuga
                        neque
                        voluptatem amet error vero unde, </p>
                    <div class="card-body card-footer">
                        <button type="button" class="card-title btn btn-outline-primary">See Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center mycard-2">
                    <img src="cardimg5.jpg" alt="" class="card-img-top">
                    <h1 class="fw-bold my-title">Post Partum Program</h1>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit, deserunt iusto fuga
                        neque
                        voluptatem amet error vero unde, </p>
                    <div class="card-body card-footer">
                        <button type="button" class="card-title btn btn-outline-primary">See Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="container">
        <div class="card mycard-3 text-center">
            <img src="cardimg7.jpg" alt="" class="card-img-top">
            <h1 class="fw-bold my-title">Disease Related Problems</h1>
            <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi fugit, deserunt iusto fuga neque
                voluptatem amet error vero unde, </p>
            <div class="card-body card-footer">
                <button type="button" class="card-title btn btn-outline-primary">See Details</button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php
  include 'C:\xampp\htdocs\Database Semester Project\website\navbar\footer.php';
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>