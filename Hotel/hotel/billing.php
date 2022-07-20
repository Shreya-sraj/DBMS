<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="hotel_1";
$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(isset($_POST['submit']))
{
   
    $bill_no = $_POST['bill_no'];
    $book_id= $_POST['book_id'];
    $ccode=$_POST['ccode'];
    $rent=$_POST['rent'];
    $services=$_POST['services'];
    $total=$_POST['total'];
    $sql_query="INSERT INTO billing (bill_no,book_id,ccode,rent,services,total) VALUES ('$bill_no','$book_id','$ccode','$rent','$services','$total')";
    if(mysqli_query($conn, $sql_query))
    {
    echo "<script type='text/javascript'>alert('submitted successfull');</script>";
    }
    else
    {
    echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Billing</title>
  <style>
 *{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
nav{
  background: gray;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: lightgray;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
  body {
  margin: 0;
  padding: 0;
  font-family: montserrat;
  background: linear-gradient(120deg,#2980b9,#8e44ad)
  height: 100vh;
  overflow: hidden;
}

.center{
  position:absolute;
  top: 58%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  background: white;
  border-radius: 10px;
}

.center h1{
  text-align: center;
  padding: 0 0 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor:pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}
.fit-picture{
  width: 1350px;
}

</style>

</head>
<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">LV</label>
      <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="index.php">Admin</a></li>
        <li><a href="customer.php">Customer</a></li>
        <li><a href="rooms.php">Room</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="billing.php">Billing</a></li>
        
      </ul>
    </nav>
  <img class="fit-picture" src="1600480680_room-1.jpg" alt="">
  
  <div class="center">
    <h1>Billing</h1>
    <form class="box" action="billing.php" method="post">
      <div  class="txt_field">
      <input type="text" name="bill_no" placeholder="BILL NO." required>
      </div>
      <div class="txt_field">
        <input type="text" name="book_id" placeholder="BOOK ID" required>
      </div>
      
      <div class="txt_field">
        <input type="text" name="ccode" placeholder="CCODE"required>
      </div>
      <div class="txt_field">
       <input type="text" name="rent" placeholder="RENT" required>
      </div>
      <div class="txt_field">
        <input type="text" name="services" placeholder="SERVICES" required>
      </div>
      <div class="txt_field">
        <input type="text" name="total" placeholder="TOTAL" required>
      </div>
      <input type="submit" name="submit" value="Submit">
    </form>
  </div>
</body>

</html>
