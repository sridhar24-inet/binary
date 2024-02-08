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
        // Fetch rows and store values in the array
        while ($row = mysqli_fetch_assoc($result)) {
            // Add each value to the array
            $values_array[] = $row['placement_id'];
        }

        // Free result set
        mysqli_free_result($result);
    } else {
        // If query fails, display an error message
        echo "Error: " . mysqli_error($con);
    }
}

$count_array = count($values_array);
// print_r($values_array);
if ($count_array < 2) {
    // echo "below 2";
    $placement_id = $sponser_id;
    $insert_query = "INSERT INTO people(profile_id, sponser_id, sponser_name, placement_id, first_name, last_name, dob, father_name, mother_name, mobile_number, address, status) VALUES ('$profile_id', '$sponser_id', '$sponser_name', '$placement_id', '$first_name', '$last_name', '$dob', '$father_name', '$mother_name', '$mobile_number', '$address', '0')";
    $result = mysqli_query($con, $insert_query);
} else {
    // echo "above 2";
    foreach ($values_array as $value) {

        // echo $value .'<br>';
        $values_array1 = array();
        $sql = "SELECT * FROM people WHERE placement_id = '$value'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            //     // Fetch rows and store values in the array
            while ($row = mysqli_fetch_assoc($result)) {
                //         // Add each value to the array
                $values_array1[] = $row['profile_id'];
            }

            //     // Free result set
            mysqli_free_result($result);
        } else {
            //     // If query fails, display an error message
            echo "Error: " . mysqli_error($con);
        }
        $count_array1 = count($values_array1);

        foreach ($values_array1 as $value1) {
            $values_array2 = array();
            $sql = "SELECT * FROM people WHERE placement_id = '$value1'";
            $result = mysqli_query($con, $sql);
            if ($result) {
                // Fetch rows and store values in the array
                while ($row = mysqli_fetch_assoc($result)) {
                    // Add each value to the array
                    $values_array2[] = $row['placement_id'];
                }

                // Free result set
                mysqli_free_result($result);
            } else {
                // If query fails, display an error message
                echo "Error: " . mysqli_error($con);
            }
            
        }
       
    }
    $count_array2 = count($values_array2);
    // print_r($values_array);
    if ($count_array2 < 2) {
        // echo "below 2";
        $placement_id = $value1;
        $insert_query = "INSERT INTO people(profile_id, sponser_id, sponser_name, placement_id, first_name, last_name, dob, father_name, mother_name, mobile_number, address, status) VALUES ('$profile_id', '$sponser_id', '$sponser_name', '$placement_id', '$first_name', '$last_name', '$dob', '$father_name', '$mother_name', '$mobile_number', '$address', '0')";
        $result = mysqli_query($con, $insert_query);
    } else {
    }
}
