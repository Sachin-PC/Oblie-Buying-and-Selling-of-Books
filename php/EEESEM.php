<?php
session_start();
include_once 'sample.php';
include "nav.html";

if(isset($_SESSION["a"])=="")
{
 header("Location: home.php");
}
$res=mysqli_query($conn,"SELECT * FROM `seller` WHERE Branch='Electrical Science'");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Electrical Science</title>
<link rel="stylesheet" href="homestyle.css" type="text/css" />

<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #323e41;
}

.dropdown {
	margin-top=0px;
	float:left;
    position:fixed;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width:120px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: brown;
    padding: 12px 16px;
    text-decoration: None;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
#sellh{
	padding:0px ;
	margin:20px 20px -250px -250px;
	width:90%;
	text-align:center;
	font-size:17pt;
    color: #4A338F;
}
.sel{
	margin:-60px;
	padding:250px;
	text-align:left;
	width:50%;
}
#Reqbook{
	margin-top:-542px;
	width:145%;
    padding:0px ;
	text-align:center;
	font-size:17pt;
    color: #4A338F;
}
.req{
	margin:36px;
text-align:center;
width:140%;	
}
</style>
</head>
<body>
  <div style="padding:106px;margin:-10px 0px -115px -115px;">
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">SEMESTER</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="EEE1.php">FIRST</a>
    <a href="EEE2.php">SECOND</a>
    <a href="EEE3.php">THIRD</a>
	<a href="EEE4.php">FOURTH</a>
	<a href="EEE5.php">FIFTH</a>
	<a href="EEE6.php">SIXTH</a>
	<a href="EEE7.php">SEVENTH</a>
	<a href="EEE8.php">EIGHTH</a>
  </div>
</div>
<div id="sellh">
<h3>Books for Sale</h3>
</div>
<div class="sel">
<?php
$res=mysqli_query($conn,"SELECT * FROM `seller` WHERE Branch='Electrical Science'");

print"<hr>";
while($arr=mysqli_fetch_array($res))
{
	print"<strong>BookName:</strong>{$arr['Bookname']}<br>";
	print"<strong>Author:</strong>{$arr['Author']}<br>";
	print"<strong>Branch:</strong>{$arr['Branch']}<br>";
	print"<strong>Sem:</strong>{$arr['Sem']}<br>";
	print"<strong>Edition:</strong>{$arr['Edition']}<br>";
	print"<strong>Publishdate:</strong>{$arr['Publishdate']}<br>";
	print"<strong>Mobno:</strong>{$arr['Mobno']}<br>";
	print"<strong>Mrp:</strong>{$arr['Mrp']}<br>";
	print"<strong>Sellingprice:</strong>{$arr['Sellingprice']}<br>";
	print"<hr>";
}
?>
</div>

<div id="Reqbook">
  <h3>Needed Book</h3>
  </div>
 <div class="req">
 <?php
$res=mysqli_query($conn,"SELECT * FROM `buyer`WHERE Branch='Electrical Science'");
print"<hr>";
while($arr=mysqli_fetch_array($res))
{
	print"<strong>BookName:</strong>{$arr['Bookname']}<br>";
	print"<strong>Author:</strong>{$arr['Author']}<br>";
	print"<strong>Branch:</strong>{$arr['Branch']}<br>";
	print"<strong>Sem:</strong>{$arr['Sem']}<br>";
	print"<strong>Edition:</strong>{$arr['Edition']}<br>";
	print"<strong>Publishdate:</strong>{$arr['Publishdate']}<br>";
	print"<strong>Mobno:</strong>{$arr['Mobno']}<br>";
	print"<strong>Mrp:</strong>{$arr['marketp']}<br>";
	print"<strong>Expected price:</strong>{$arr['Expectedprice']}<br>";
	print"<hr>";
}
?>
</div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
