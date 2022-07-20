<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<style>
body{
  font-family: montserrat;
}
*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  font-family:'Lobster', cursive;
  list-style: none;
  box-sizing: border-box;
}
.wrapper{
    width:100%;
    min-height: 100vh;
    overflow: hidden;
    background-color: #ddd;
}
.row{
    width: 100%;
    padding: 50px 100px;
}
.image-section{
    width: 30%;
    float: left;
}
.image-section img{
    width:100%;
    height: auto;
}
.content {
    width:60%;
    float: left;
    margin-left:50px;
}
.content h1{
    font-size: 50px;
    letter-spacing: 2px;
    margin-top: 30px;
    color:#222;
}
.content h2{
    font-size: 30px;
    font-family: sans-serif;
    color:#b60112;
    margin-top:25px;
}
.content h3{
    font-size: 20px;
    font-family: sans-serif;
    color:#b60112;
    margin-top:25px;
}

nav{
  background: gray;
  height: 80px;
  font-family: san-serif;
  width: 100%;
}
label.logo{
    font-family: san-serif;
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
    font-family: san-serif;
  float: right;
  margin-right: 20px;
}
nav ul li{
    font-family: san-serif;
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
    font-family: san-serif;
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

.fit-picture{
  width: 950px;
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
        <li><a href="about.php">About us</a></li>
      </ul>
    </nav>
    <div class="wrapper">
    <div class="row">
        <div class="image-section">
        <img class="fit-picture" src="1600478580_hotel-cover.jpg" alt="">
        <img class="fit-picture" src="1600480680_room-1.jpg" alt="">
        <img class="fit-picture" src="1600480740_3.jpg" alt="">
        </div>
        <div class="content">
        <h1>About Us</h1>
        <h2>Vision</h2>
        <p> To be the #1 technology company powering hotels across the world</p>
        <h2>Mission</h2>
        <p>To simplify the lives of hoteliers</p>
        <h3>Integrity</h3>
        <p>We believe in utmost transparency when it comes to work, clients and deliverables, and aren't afraid to make mistakes. We dare to speak the truth!</p>
        <h3>Innovation</h3>
        <p>We thrive on our creative juices evident through our designs, ideas and innovations in all our products. Continuous improvement is our motto!</p>
       <h3>Ownership</h3>
       <p>We take accountability, learn from our mistakes & improve our processes during challenging times. Our commitment is golden -when the going gets tough, we get going</p>
       <h3>Customer First</h3>
       <p>We empathize with our customers and bind them not with contracts but with commitment and quality. Every step of our customer journey is focused on enhanced product and service delivery.</p>
    </div>
    </div>
</body>
</html

     
      
      
      
      