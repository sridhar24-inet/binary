<?php

require_once('./config/database.php');

if (isset($_POST['submit'])) {
    $profile_id = strtoupper(substr($_POST['father_name'], 0, 3) . substr($_POST['mother_name'], 0, 3)) . date("d", strtotime($_POST['dob'])) . rand(0, 100);
    $sponser_id = $_POST['sponser_id'];
    $sponser_name = $_POST['sponser_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $mobile_number = $_POST['mobile_number'];
    $address = $_POST['address'];
    $values_array = array();

    $sql = "SELECT * FROM people WHERE placement_id = '$sponser_id'";
    $result = mysqli_query($con, $sql);
    if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {

            $values_array[] = $row['left_leg'];
        }

        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($con);
    }


$count_array = count($values_array);
// print_r($count_array);
if ($count_array < 3) {
    // echo "below 2";
    $placement_id = $sponser_id;
    $insert_query = "INSERT INTO people(profile_id, sponser_id, sponser_name, placement_id, first_name, last_name, dob, father_name, mother_name, mobile_number, address, status) VALUES ('$profile_id', '$sponser_id', '$sponser_name', '$placement_id', '$first_name', '$last_name', '$dob', '$father_name', '$mother_name', '$mobile_number', '$address', '0')";
    $result = mysqli_query($con, $insert_query);
    if ($result) {
        $select1 = "SELECT * FROM people WHERE profile_id='$sponser_id' AND left_leg='' OR right_leg=''";
        $result11 = mysqli_query($con, $select1);
        $row_s11 = mysqli_fetch_array($result11);
        if($row_s11['left_leg']=='')
        {
            $update1 = "UPDATE people SET left_leg='$profile_id' WHERE left_leg='' AND sponser_id='$sponser_id' AND profile_id='$placement_id'";
            $result1 = mysqli_query($con, $update1);
        }
        elseif($row_s11['right_leg']=='')
        {
            $update = "UPDATE people SET right_leg='$profile_id' WHERE right_leg='' AND sponser_id='$sponser_id' AND profile_id='$placement_id'";
            $result = mysqli_query($con, $update);
        }
        else
        {

        }
      
    }
} else {
    $select = "SELECT * FROM people WHERE sponser_id='$sponser_id' AND left_leg='' OR right_leg='' ";
    $result = mysqli_query($con, $select);
    $row_s = mysqli_fetch_array($result);
    $placement_id = $row_s['profile_id'];
    $insert_query = "INSERT INTO people(profile_id, sponser_id, sponser_name, placement_id, first_name, last_name, dob, father_name, mother_name, mobile_number, address, status) VALUES ('$profile_id', '$sponser_id', '$sponser_name', '$placement_id', '$first_name', '$last_name', '$dob', '$father_name', '$mother_name', '$mobile_number', '$address', '0')";
    $result = mysqli_query($con, $insert_query);
    if ($result) {
        $select1 = "SELECT * FROM people WHERE left_leg='' OR right_leg=''";
        $result11 = mysqli_query($con, $select1);
        $row_s1 = mysqli_fetch_array($result11);
        if($row_s1['left_leg']=='')
        {
            $update = "UPDATE people SET left_leg='$profile_id' WHERE left_leg='' AND sponser_id='$sponser_id' AND profile_id='$placement_id'";
            $result1 = mysqli_query($con, $update);
        }
        elseif($row_s1['right_leg']=='')
        {
            $update = "UPDATE people SET right_leg='$profile_id' WHERE right_leg='' AND sponser_id='$sponser_id' AND profile_id='$placement_id'";
            $result = mysqli_query($con, $update);
        }
        else
        {

        }
    }
}
}