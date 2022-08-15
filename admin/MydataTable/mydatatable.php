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
    ?>
    <div class="container my-4">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Serial No</th>
                    <th scope="col">Table Data</th>
                    <th scope="col">Data Description</th>
                    <th scope="col">Data Display</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Admin Details</td>
                    <td>The Admins which are added</td>
                    <td><a href="../Tables/admindetails.php"><button class="btn btn-sm btn-primary">View
                                Data</button></a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Client Record</td>
                    <td>All the necessary credentials of All Registered Clients</td>
                    <td><a href="../Tables/client_record.php"><button class="btn btn-sm btn-primary">View
                                Data</button></a></td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Available Departments</td>
                    <td>All The Departments present in the Diet Clinic</td>
                    <td><a href="../Tables/available_departments.php"><button class="btn btn-sm btn-primary">View
                                Data</button></a></td>

                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Available Equipments</td>
                    <td>All the Equipments bought for the Clinic</td>
                    <td><a href="../Tables/available_equipments.php"><button class="btn btn-sm btn-primary">View
                                Data</button></a></td>

                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Available Professional Staff</td>
                    <td>All Professional Staff working in the Clinic</td>
                    <td><a href="../Tables/available_professionalstaff.php"><button class="btn btn-sm btn-primary">View
                                Data</button></a></td>

                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Available Labour Staff</td>
                    <td>All Labour Staff working in the Clinic</td>
                    <td><a href="../Tables/available_labour_staff.php"><button class="btn btn-sm btn-primary">View
                                Data</button></a></td>

                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Client Feedback</td>
                    <td>All Feedbacks provided by every Client</td>
                    <td><a href="../Tables/client_feedback.php"><button class="btn btn-sm btn-primary">View
                                Data</button></a></td>

                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Equipment used by Department</td>
                    <td>All Equipments in use by a particular Department</td>
                    <td><a href="../Tables/equipment_used_by_department.php"><button class="btn btn-sm btn-primary">View
                                Data</button></a></td>

                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>