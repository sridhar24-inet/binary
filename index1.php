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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e7e8a56c4e.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="main">
        <div class="container-fluid">
            <div class="row ">
                <dic class="col-lg-3">
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
                </dic>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <dic class="card-header">
                                    <h3>Add New Record</h3>
                                </dic>
                                <div class="card-body">
                                    <form id="register_data" method="POST" action="test.php">
                                        <div class="row">
                                        <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="sponser_id">Sponser ID</label>                                                   

                                                    <input type="text" class="form-control" name="sponser_id" id="sponser_id">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                <label for="sponser_name">Sponser Name</label>
                                               
                                                    <input type="text" class="form-control" name="sponser_name" id="sponser_name">
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="first_name">First Name</label>
                                                    <input type="text" class="form-control" name="first_name" id="first_name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" class="form-control" name="last_name" id="last_name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="date" class="form-control" name="dob" id="dob">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="mobile_number">Mobile Number</label>
                                                    <input type="number" class="form-control" name="mobile_number" id="mobile_number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="father_name">Father Name</label>
                                                    <input type="text" class="form-control" name="father_name" id="father_name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="mother_name">Mother Name</label>
                                                    <input type="text" class="form-control" name="mother_name" id="mother_name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea name="address" class="form-control" id="address" cols="10" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-2">
                                                <div class="form-group float-end">
                                                    <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit Record</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>

</html>