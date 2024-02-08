<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INET</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e7e8a56c4e.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="main">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-3">
                    <div class="card menu-card">
                        <div class="card-body">
                            <ul>
                                <li>
                                    <a href="./index.php"><i class="fa-solid fa-plus"></i>Add New Data</a>
                                </li>
                                <li>
                                    <a href="./manage-data.php"><i class="fa-solid fa-eye"></i>Show Data</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Manage Records Record</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">#</th> -->
                                                <th scope="col">Profile ID</th>
                                                <th scope="col">Sponser ID</th>
                                                <th scope="col">Sponser Name</th>
                                                <th scope="col">Placement ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Mobile Number</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once('./config/database.php');

                                            $sqli = "SELECT * FROM people";
                                            $result = mysqli_query($con, $sqli);

                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row['profile_id']; ?></td>
                                                        <td><?php echo $row['sponser_id']; ?></td>
                                                        <td><?php echo $row['sponser_name']; ?></td>
                                                        <td><?php echo $row['placement_id']; ?></td>
                                                        <td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                                                        <td><?php echo $row['mobile_number']; ?></td>
                                                        <td>
                                                            <div class="btn-group btn-group-sm me-2" role="group" aria-label="First group">
                                                                <a type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                                                <a type="button" class="btn btn-info"><i class="fa-solid fa-pencil"></i></a>
                                                                <a type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                                            </div>
                                                        </td>


                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr class="text-center">
                                                    <td colspan="7"> <strong>No Result</strong></td>
                                                </tr>
                                            <?php
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#register_data').submit(function(e) {
                e.preventDefault(); // Prevent form submission
                var formData = $(this).serialize(); // Serialize form data
                $.ajax({
                    url: './action-file/register-insert.php', // PHP script to handle data insertion
                    type: 'POST',
                    data: formData,
                    success: function(response) {

                        alert('Record has been submitted');
                        $('#register_data')[0].reset(); // Reset form
                    }
                });
            });
        });
    </script>
</body>

</html>