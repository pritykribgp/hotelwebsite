<?php include("conn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>booking Room</title>
    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
<div class="container">
    <h1 text-align="center">Maa International Hotel</h1>
        <div class="title"> Room Booking Request </div>
        <form action="" method="post">
            <div class="elem-group">
              <label for="name">Your Name</label>
              <input type="text" id="name" name="visitor_name" placeholder="Enter Name" pattern=[A-Z\sa-z]{3,20} required>
            </div>
            <div class="elem-group">
              <label for="email">Your E-mail</label>
              <input type="email" id="email" name="visitor_email" placeholder="abc@email.com" required>
            </div>
            <div class="elem-group">
              <label for="phone">Your Phone</label>
              <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
            </div>
            <hr>
            <div class="elem-group inlined">
              <label for="adult">Adults</label>
              <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
            </div>
            <div class="elem-group inlined">
              <label for="child">Children</label>
              <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
            </div>
            <div class="elem-group inlined">
              <label for="checkin-date">Check-in Date</label>
              <input type="date" id="checkin-date" name="checkin" required>
            </div>
            <div class="elem-group inlined">
              <label for="checkout-date">Check-out Date</label>
              <input type="date" id="checkout-date" name="checkout" required>
            </div>
            <div class="elem-group">
              <label for="room-selection">Select Room</label>
              <select id="room-selection" name="room_preference" required>
                <option value="">Please Select Room</option>
                <option value="junior Suite">junior Suite Rs. 1250/- Per Night</option>
                <option value="Standard Suite">Standard Suite Rs. 2500/- Per Nigh</option>
                <option value="Superior Suite">Superior Suite Rs. 5000/- Per Night</option>
              </select>
            </div>
            <hr>
            <div class="elem-group">
              <label for="message">Anything Else?</label>
              <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." ></textarea>
            </div>
            <input type="submit" value="submit" name="submit">
          </form>
    </div>
    <!-- Bootstrap 5 JS CDN Links -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
 
     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <!-- Custom Js Link -->
      <script src="js/script.js"></script> 
</body>
</html>
<?php
error_reporting(0);
if($_POST['submit'])

{
        $name      = $_POST['visitor_name'];
        $email     = $_POST['visitor_email'];
        $phone     = $_POST['visitor_phone'];
        $adults      = $_POST['total_adults'];
        $children      = $_POST['total_children'];
        $checkin_date      = $_POST['checkin'];
        $checkout_date    = $_POST['checkout'];
        $select_room = $_POST['room_preference'];
        $visitor_message = $_POST['visitor_message'];
         
       
        $query = "INSERT INTO tbl_booking  VALUES('$name ','$email','$phone','$adults','$children','$checkin_date','$checkout_date','$select_room','$visitor_message')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted into Database";
        }
        else
        {
            echo "failed";
        }
        }
        else
        {
            // echo "<script>alert('fill the form first');</script>";
  
  
            }       
  

?>



