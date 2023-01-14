<?php
require 'phpsrc/connectDB.php';

$query =  "DELETE FROM `booking` WHERE `booking`.`service_time` = '" . $_GET['bt'] ."'";

$data =mysqli_query($conn,$query);
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