<?php
error_reporting(0);
if (@$_GET['id'] != true) {
    $_GET['id'] = 'ADMIN01';
}
require_once('./config/database.php');
$sql = "SELECT * FROM people WHERE profile_id = '".$_GET['id']."'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
{
    $row_fetch = mysqli_fetch_assoc($result);
}

?>

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

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4>Manage Records Record</h3>
                                        <div class="btn-group btn-group-sm float-end" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-primary" onclick="window.history.back()"><i class="fas fa-undo me-2"></i>Back</button>
                                            <a href="./manage-data.php" type="button" class="btn btn-success"><i class="fas fa-home me-2"></i>Home</a>
                                            <a href="./index.php" type="button" class="btn btn-info"><i class="fas fa-plus me-2"></i>Add</a>
                                        </div>

                                </div>
                                <div class="card-body text-center">

                                    <div class="card-box">

                                        <ul>
                                            <a type="button" class="wrapper" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" href="./manage-data.php?id=<?php echo $_GET['id']; ?>">
                                                <li>
                                                    <p><strong><?php echo $_GET['id']; ?></strong></p>
                                                </li>

                                            </a>
                                        </ul>
                                        <ul>
                                            <?php
                                            require_once('./config/database.php');

                                            $sqli = "SELECT * FROM people WHERE profile_id = '" . $_GET['id'] . "'";
                                            $result = mysqli_query($con, $sqli);

                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $values_array = array($row['left_leg'], $row['right_leg']);
                                            ?>
                                                    <?php if ($row['left_leg'] != '') { ?><a href="./manage-data.php?id=<?php echo $row['left_leg']; ?>">
                                                            <li class="left_leg">
                                                                <p><?php echo $row['left_leg']; ?></p>
                                                            </li>
                                                        </a><?php } else { ?><a type="button">
                                                            <li class="left_leg">
                                                                <p>Not Filled</p>
                                                            </li>
                                                            <div class="tooltip">I am a tooltip!</div>
                                                        </a><?php } ?>

                                                    <?php if ($row['right_leg'] != '') { ?><a href="./manage-data.php?id=<?php echo $row['right_leg']; ?>">
                                                            <li class="right_leg">
                                                                <p><?php echo $row['right_leg']; ?></p>
                                                            </li>
                                                        </a><?php } else { ?><a type="button">
                                                            <li class="right_leg">
                                                                <p>Not Filled</p>
                                                            </li>
                                                        </a><?php } ?>


                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <a type="button">
                                                    <li class="right_leg">
                                                        <p>Not Filled</p>
                                                    </li>
                                                </a>
                                                <a type="button">
                                                    <li class="right_leg">
                                                        <p>Not Filled</p>
                                                    </li>
                                                </a>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <ul>
                                            <?php
                                            // print_r($values_array);

                                            foreach ($values_array as $value) {
                                            ?>


                                                <?php
                                                // echo $value;
                                                require_once('./config/database.php');

                                                $sqli1 = "SELECT * FROM people WHERE profile_id = '$value'";
                                                $result1 = mysqli_query($con, $sqli1);

                                                if (mysqli_num_rows($result1) > 0) {
                                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                                        $values_array = array($row1['left_leg'], $row1['right_leg']);
                                                ?>
                                                        <?php if ($row1['left_leg'] != '') { ?><a href="./manage-data.php?id=<?php echo $row1['left_leg']; ?>">
                                                                <li class="left_leg">
                                                                    <p><?php echo $row1['left_leg']; ?></p>
                                                                </li>
                                                            </a><?php } else { ?><a type="button">
                                                                <li class="left_leg">
                                                                    <p>Not Filled</p>
                                                                </li>
                                                            </a><?php } ?>
                                                        <?php if ($row1['right_leg'] != '') { ?><a href="./manage-data.php?id=<?php echo $row1['right_leg']; ?>">
                                                                <li class="right_leg">
                                                                    <p><?php echo $row1['right_leg']; ?></p>
                                                                </li>
                                                            </a><?php } else { ?><a type="button">
                                                                <li class="right_leg">
                                                                    <p>Not Filled</p>
                                                                </li>
                                                            </a><?php } ?>



                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <a type="button">
                                                        <li class="right_leg">
                                                            <p>Not Filled</p>
                                                        </li>
                                                    </a>
                                                    <a type="button">
                                                        <li class="right_leg">
                                                            <p>Not Filled</p>
                                                        </li>
                                                    </a>
                                                <?php
                                                }
                                                ?>

                                            <?php

                                            }

                                            ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card menu-card">
                        <div class="card-body">
                            <table class="table">
                               
                                <tbody>
                                    <tr>
                                        <th width="40%"><small>Name</small></th>
                                        <td width="60%">: <?php echo $row_fetch['first_name']; ?> <?php echo $row_fetch['last_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="40%"><small>Profile ID</small></th>
                                        <td width="60%">: <?php echo $row_fetch['profile_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="40%"><small>Sponser ID</small></th>
                                        <td width="60%">: <?php echo $row_fetch['sponser_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="40%"><small>Sponser Name</small></th>
                                        <td width="60%">: <?php echo $row_fetch['sponser_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="40%"><small>Placement Id</small></th>
                                        <td width="60%">: <?php echo $row_fetch['placement_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="40%"><small>Mobile Number</small></th>
                                        <td width="60%">: <?php echo $row_fetch['mobile_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="40%"><small>Left Leg</small></th>
                                        <td width="60%">: <?php echo $row_fetch['left_leg']; ?></td>
                                    </tr>
                                    <tr>
                                        <th width="40%"><small>Right Leg</small></th>
                                        <td width="60%">: <?php echo $row_fetch['right_leg']; ?></td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl, {
                customWidth: popoverTriggerEl.dataset.bsCustomWidth // Set custom width from data attribute
            })
        })
    </script>

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