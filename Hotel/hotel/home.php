<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
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
.banner-text{
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
    color:#fff;
    text-align:center
}
.banner-text h2{
    font-family: baloo;
    margin:0;
    font-size: 55px;
    color:yellow;
}
.banner-text p{
    font-size: 22px;
    margin: 0;
    font-family: poppins;
}
.banner-text a{
    text-decoration: none;
    border:1px solid #fff;
    font-size: 17px;
    padding: 10px 35px;
    color: #fff;
    display: inline-block;
    margin-top: 5%;
    font-family: poppins;
    text-transform:uppercase;
}
.banner-text a:hover{
    boreder-color: lightgray;
    background: lightgray;
    transition:.9s;
    color: #262626;
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
        <li><a href="about.php">About us</a></li>
      </ul>
  </nav>
  <img class="fit-picture" src="1600478580_hotel-cover.jpg" alt="Hotel management"> 
   <div class="banner-text">
       <h2>Lake View</h2>
       <p>To simplify the lives of hoteliers</p>
       <a href="about.php">Contact us</a>

   </div>

  </body>
</html>
