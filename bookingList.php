<html>
    <head>
    <link rel="stylesheet" href="css/admin.css">
    </head>
    <body class="background">
<?php 
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );
    require 'phpsrc/connectDB.php';
    date_default_timezone_set('Australia/Melbourne');
    $startOfTheWeek = date('Y-m-d');

    if($_SESSION['admin']=='admin'){
        $sql = "select fname, lname, phoneNumber, street, suburb, postcode, car_type, 
        service_option, service_desc, service_time from user right join booking 
		on user.email = booking.email
        where service_time >= $startOfTheWeek
		order by service_time asc";
        $result = mysqli_query($conn, $sql);
        ?>
       <div class="booking" >
       <marquee behavior="" direction="">Booking list for this week</marquee>
       
       
        <table border="1" class="booking_table" >
            <tr>
                <th> Name </th>
                <th> Phone </th>
                <th> Address </th>
                <th> Car Type </th>
                <th> Service Option </th>
                <th> Service Description</th>
				<th> Service Time </th>
            </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td align='center'>".$row['fname']." ".$row['lname']."</td>";
            echo "<td align='center'>".$row['phoneNumber']."</td>";
            echo "<td align='center'>".$row['street'].", ".$row['suburb'].", ".$row['postcode']."</td>";
            echo "<td align='center'>".$row['car_type']."</td>";
            echo "<td align='center'>".$row['service_option']."</td>";
            echo "<td align='center'>".$row['service_desc']."</td>";
			echo "<td align='center'>".$row['service_time']."</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    }
?>
        <div>
        <p ><b>List of all cars.</b></p>
    <?php
    $sql= "select * from `new car`";
    $fetchfile= mysqli_query($conn, $sql);

    if(mysqli_num_rows($fetchfile)>0){
    
    ?>

            <table border="1" class="booking_table" style="margin-top:15px;">
                <tr>
                    <th>
                        Car Type
                    </th>
                    <th>
                    Operations 
                    </th>
                </tr>

                <?php
                while($row= mysqli_fetch_assoc($fetchfile)){
                        $carType = $row['car_type'];
                        ?>

                        <tr>
                        <td><?php echo $carType; ?></td>
                        <td><a href="deleteCartype.php?id=<?php echo $row['id'];?>"><button type="submit">Delete</button></a></td>
                    </tr>
                    <?php
                }
                
              

               

                

            }
        
        ?>      
            </table>
           
       </div>
       <div>
       <p ><b>List of all Services.</b></p>
       <table border="1" class="booking_table" style="margin-top:10px;">
         <tr>
            <th>
            Service Type
            </th>
        
        </tr>
        <tr>
            <td>
            Wash Outside Only
            </td>
        </tr>
        <tr>
            <td>
            Wash inside and outside
            </td>
        </tr>
        <tr>
            <td>
            Deluxe wash
            </td>
        </tr>
        <tr>
            <td>
            Express mini tunnels
            </td>
        </tr>
        </table>

        <p ><b>List of all Booking.</b></p>
        <table border="1" class="booking_table" >
            <tr>
                <th> Email </th>
                <th> Car Type </th>
                <th> Service Option </th>
                <th> Service Description</th>
                <th> Service Time </th>
                <th>Operations</th>
            </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM `booking`");
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td align='center'>".$row['email']."</td>";
            echo "<td align='center'>".$row['car_type']."</td>";
            echo "<td align='center'>".$row['service_option']."</td>";
            echo "<td align='center'>".$row['service_desc']."</td>";
			echo "<td align='center'>".$row['service_time']."</td>";
            echo "<td> <a href='delete.php?bt=$row[service_time]'>Delete</td>";
            echo "</tr>"; 
          
        }
        
        echo "</table>";
        
        ?>
       </table>
       <p ><b>List of all Users.</b></p>
        <table border="1" class="booking_table" >
            <tr>
                <th> Email </th>
                <th>First Name  </th>
                <th> Last Name </th>
                <th> Street </th>
                <th>Operations</th>
               
            </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM `user`");
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td align='center'>".$row['email']."</td>";
            echo "<td align='center'>".$row['fname']."</td>";
            echo "<td align='center'>".$row['lname']."</td>";
            echo "<td align='center'>".$row['street']."</td>";
            echo "<td> <a href='delete.php?bt=$row[email]'>Delete</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
        ?>
        </table>

       </div>
     <h3 text-color="blue" ><a href="phpsrc/adminLogout.php" style="text-decoration:none">Click here to Log Out</a></h2>   
</div>
</body>