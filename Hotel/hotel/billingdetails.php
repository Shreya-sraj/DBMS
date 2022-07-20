<!DOCTYPE html>
<html>
<head>
<title>Billing details</title>
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
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
.h2{
  font:100 5rem/1 Roboto;
  text-transform: uppercase;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<h2>Billing List</h2>

<table>
<tr>
<th>BILL NO</th>
<th>BOOK ID</th>
<th>CCODE</th>
<th>RENT</th>
<th>SERVICES</th>
<th>TOTAL</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hotel_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM billing";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["bill_no"]. "</td><td>" . $row["book_id"] . "</td><td>" . $row["ccode"] . "</td><td>" . $row["rent"] . "</td><td>". $row["services"] . "</td><td>" . $row["total"] . "</td><td>";

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html