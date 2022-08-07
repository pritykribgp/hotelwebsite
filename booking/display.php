<html>


<title>booking Records</title>
<style>
    body
    {
        background: #71b7e6;
    }
    table
    {
        background-color: #fff;
    }
    
</style>




<?php 
include("conn.php");
 error_reporting(0);


    $query = "SELECT * FROM tbl_booking";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
  



    
    //echo $total;
    if($total != 0)
    {
        ?>
        <h2 align="center">Rooms booking Records</h2>
        <center>
            <table border="1" cellspacing="10" width="100%">
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Adults</th>
            <th>Children</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Room Type</th>
            <th>Other Request</th>
            

            </tr>


        <?php
        //echo "table has records";
        while(  $result = mysqli_fetch_assoc($data))
        {
            echo "<tr>
                    
                    <td>".$result[name]."</td>
                    <td>".$result[email]."</td>
                    <td>".$result[phone]."</td>
                    <td>".$result[adults]."</td>
                    <td>".$result[children]."</td>
                    <td>".$result[checkin_date]."</td>
                    <td>".$result[checkout_date]."</td>
                    <td>".$result[select_room]."</td>
                    <td>".$result[massage]."</td>
                </tr>
                ";
        }


    }
    else
    {
        echo "No records Found";
    }

    ?>

</table>
</center>

