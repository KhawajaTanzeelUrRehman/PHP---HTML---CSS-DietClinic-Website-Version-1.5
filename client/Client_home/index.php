<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/css.css" />
    <title>Diet Clinic</title>
</head>

<body>
    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\Client\client_navbar\navbar.php';
    ?>


    <div id="carouselExampleCaptions" class="carousel slide my-1" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1800">
                <img src="myimg1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fitness and Life</h5>
                    <p>A combination that can never be ignored</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="1800">
                <img src="myimg3.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Weight and Fitness</h5>
                    <p>Try to stay healthy and fit!</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="1800">
                <img src="myimg2.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Weight Management</h5>
                    <p>Weight Management, an utmost priority</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid">
        <br />
        <div class="row container1">
            <div class="col-md">
                <img id="imabout" src="about_me.jpg" style="width: 670px; height: 430px; margin-left: 20px" alt="..." />
            </div>
            <div class="col-md">
                <h1>About Me</h1>
                <p style="font-size: 18px;">
                    A healthy diet helps people maintain and improve their general health. It is important to intake the
                    right nutrients daily to obtain a healthy diet. Nutrients can be obtained in many foods and
                    thousands of diet plans. It is important that people watch
                    their intake of diet plans. It is important that people watch their intake of food to maintain a
                    healthy diet. Having an unhealthy diet can be a major risk factor for a number of chronic diseases
                    including high blood pressure,
                    obesity, and diabetes. It’s very important to know how to lower high blood pressure because it’s a
                    condition that increases the risk for heart attack, stroke, kidney failure, and other health
                    problems. The choices we make in our
                    lifestyle can go a long way towards preventing high blood pressure. People, who don’t already have
                    high blood pressure, should become familiar with healthy habits to reduce their risk of ever getting
                    it. People, who already have
                    high blood pressure, should immediately start healthy habits to lower their blood pressure and
                    decrease their risk of developing major complications. Managing stress is important because stress
                    can take a major toll anyone and
                    it can play a key role in high blood pressure.
                </p>
            </div>
        </div>
        <br />

        <div class="row container2">
            <div class="col-md">
                <h1 style="margin-left: 20px">Consultation</h1>
                <p style="margin-left: 20px; margin-top: 15px;font-size: 18px;">
                    The initial consultation may run for around 45 minutes to an hour. The dietitian will ask detailed
                    questions about your current diet, exercise habits, general health and lifestyle. These questions
                    allow the dietitian to tailor an individual eating plan
                    to your needs.If you have a medical condition and have been referred to a dietitian by your doctor,
                    the dietitian will work closely with your doctor. They may review blood and other test results to
                    put together a suitable eating
                    plan for you. You may be given written information to take home to help you achieve your healthy
                    eating goals. Follow-up appointments allow the dietitian to keep track of your progress, support you
                    and fine-tune your eating plan.
                    Your dietitian’s main goal is to give you the knowledge and skills to be able to make the best food
                    choices and take care of your health.Dietitians are qualified professionals with the skills to
                    provide expert nutrition and dietary
                    advice. They translate the latest scientific information into practical advice about what to
                    eat.Dietitians have university qualifications gained from courses accredited by the Dietitians
                    Association of Australia (DAA). They keep
                    up to date with new training and education, and meet the DAA’s guidelines for evidence-based
                    practice.
                </p>
            </div>
            <div class="col-md">
                <img src="meeting.jpg" style="
              margin-top: 17px;
              width: 670px;
              height: 430px;
              margin-left: 20px;
            " alt="" />
            </div>
        </div>
        <br /><br /><br /><br />
        <div class="row">
            <h1 class="heading1" style="text-align: center;font-size: 50px;">Recent Blogs</h1>
        </div>

        <div class="container" style="margin-left: 170px;margin-top: 5px;">
            <div class="card" style="width: 20rem; display: inline-block;margin-right: 100px;">
                <img src="4.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Weight Management</h5>
                    <p class="card-text">
                        There's always a need to keep your weight at a good figure to reduce some problems in your life.
                    </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <div class="card" style="width: 20rem; display: inline-block;margin-right: 100px;">
                <img src="5.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Good Health and Life</h5>
                    <p class="card-text">
                        Keeping a good care of your self is very important to make your life flexible. Take a good care
                        of yourself.
                    </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <div class="card" style="width: 20rem; display: inline-block">
                <img src="6.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Disease Prevention</h5>
                    <p class="card-text">
                        Preventing diseases is much more important than curing them. A good thing to start your day.
                    </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        <br /><br /><br /><br />
        <div class="row">
            <br /><br /><br />
            <h1 class="heading1">Why Choose Us?</h1>
        </div>
        <br />
        <div class="row feedback">
            <div class="col-md con">
                <img id="imabout" src="im9.jpg " alt="..." style="margin-left: 50px;border-radius: 30px;" />
            </div>
            <div class="col-md" style="padding: 50px;font-size: 18px;">
                <p>
                    We are Trying to Build a Healthier Future for people. My experience & knowledge have helped many
                    patients adopt healthy life styles. We provide totally Healthy and Balanced Diet Plans Including All
                    Food groups.
                </p>
                <ul>
                    <li>Easy-to-Follow and Affordable Diets.</li>
                    <li>
                        We help clients evolve a healthy lifestyle for Long-Term Results.
                    </li>
                    <li>We provide Supportive and professional Nutrition Services</li>
                </ul>
                <a href="../client_programs/Cards.php"><button type="button" class="btn btn-warning">View
                        Programs</button></a>
            </div>
        </div>
        <br />

        <div class="row">
            <br /><br /><br />
            <h1 class="heading1" style="text-decoration: underline;">Clients Feedbacks</h1>
        </div>
        <br />
        <div class="row con1">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1800">
                        <img src="clientt1.jpeg" style="width: 730px; height: 650px; margin-left: 410px" class="d-block"
                            alt="..." />
                    </div>
                    <div class="carousel-item" data-bs-interval="1800">
                        <img src="clientt2.jpeg" style="width: 730px; height: 650px; margin-left: 410px" class="d-block"
                            alt="..." />
                    </div>
                    <div class="carousel-item" data-bs-interval="1800">
                        <img src="tanzeel.jpeg" class="d-block" style="width: 700px; height: 650px; margin-left: 450px"
                            alt="..." />
                    </div>
                    <div class="carousel-item" data-bs-interval="1800">
                        <img src="husnain.jpg" style="width: 730px; height: 650px; margin-left: 410px" class="d-block"
                            alt="..." />
                    </div>
                    <div class="carousel-item" data-bs-interval="1800">
                        <img src="clientt3.jpeg" style="width: 730px; height: 650px; margin-left: 410px" class="d-block"
                            alt="..." />
                    </div>
                    <div class="carousel-item" data-bs-interval="1800">
                        <img src="clientt4.jpeg" style="width: 730px; height: 650px; margin-left: 410px" class="d-block"
                            alt="..." />
                    </div>
                    <div class="carousel-item" data-bs-interval="1800">
                        <img src="clientt5.jpeg" style="width: 730px; height: 650px; margin-left: 410px" class="d-block"
                            alt="..." />
                    </div>
                </div> <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <br />
        <br />
    </div>
    <!-- Footer -->
    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\Client\client_navbar\footer.php';
    ?>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>