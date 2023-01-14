<?php
require 'phpsrc/connectDB.php';

$query =  "DELETE FROM `new car` WHERE `new car`.`id`= " . $_GET['id'];

$data = mysqli_query($conn,$query);
if($data)
{
   echo '<script> alert("Record delete from database");
    location= "bookingList.php";
    </script>';

}
else{
    echo"<font color ='red'>Failed to delete Record from database"; 
}
?>