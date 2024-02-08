<?php

require_once('../config/database.php');
if(isset($_POST["id"]))  
{  
     $query = "SELECT * FROM people WHERE profile_id = '".$_POST["id"]."'";  
    // $query = "SELECT * FROM people INNER JOIN leg_allocation ON people.profile_id = leg_allocation.profile_id";  
     $result = mysqli_query($con, $query);  
     $row = mysqli_fetch_assoc($result);  
     echo json_encode($row);
     

} 
?>
 
