<!DOCTYPE HTML>
<html>
<head>
<title>BOOK LIST</title>
<style>
*{
	margin:0;
	padding: 0;
	box-sizing: border-box;
}
body{
	background-image:url("DISPLAY BOOK.jpg");  
  background-repeat: no-repeat;
  height: 100%;
  background-size: cover;
  position: relative;
  color: white;
  display: flex;
  flex-direction: column;
  align-items: center;
}
h1{
	font: bold;
}
.Book{
	background-color:#000;
	width: 100%;
	float: left;
	margin:50px;
	padding: 10px;
}
.icon{
	width:15%;
	float: left;
	line-height:0px;
}
button{
	background: #1abc9c;
	border-radius: 7px;
	padding: 6px 6px;
	color: #fff;
	float: right;
	cursor: pointer;
}
header
{
    color:white;
    text-decoration: white;
    text-align:right;
    font-style: inherit;
}
.logo {
    font-size: 2em;
    color: #fff;
    user-select: none;
    top: 100px;
    width:100px;
    background-size:100%;

}
.cotainer {
    margin-right: 100px;
}
</head>
</style>
<body>
	<header>
	<div class="container">
	<center><img src="logo.png" class="logo"></center>
  <a href="#" onclick="window.open('e-library.php')">Home</a>
  <a href="#" onclick="window.open('Aboutus.php')">About</a>
  <a href="#" onclick="window.open('contact.php')">Contact</a>
    </div></header>
<h1 style="color:purple; text-align:center;">BOOK LIST</h1>
<div class="cotainer">
<div class="Book">
<div class="icon">
<img src="bookicon.png" alt=""/>
</div class="content">
<h2>OPREATING SYSTEM<h2>
<p>BE/MCA</p>
<p><center>
   Edition:8th
</p>
<span>BY :Silberschatz,galvin,gagne</span></center>
<button class="btnLogin-popup"  type ="Read It"onclick="window.open('Operating System Concepts 8th Editionpdf - PDF Room.pdf')">READ IT</button>  
</div>
</div>
<div class="cotainer">
<div class="Book">
<div class="icon">
<img src="bookicon.png" alt=""/>
</div class="content">
<h2>Introduction to The Design and Analysis of Algorthim<h2>
<p>BE/MCA</p>
<center>
<p>Edition:3rd</p>
<span>BY:Anany Levitin</span></center>
<button class="btnLogin-popup"  type ="Read It"onclick="window.open('Introduction to the Design and Analysis of Algorithms (3rd ed.) [Levitin 2011-10-09].pdf')">READ IT</button>
</div>
</div>
<div class="cotainer" >
<div class="Book">
<div class="icon">
<img src="bookicon.png" alt=""/>
</div class="content">
<h2>FUNDAMENTALS OF DATABASE SYSTEMS<h2>
<p>BE/MCA</p>
<center><p>Edition:7th</p>
<span>BY:ELMASRI NAVATHE</span></center>
<button class="btnLogin-popup"  type ="Read It"onclick="window.open('Fundamental_of_Database_Systems.pdf')">READ IT</button>
</div>
</div>
<div class="cotainer">
<div class="Book">
<div class="icon">
<img src="bookicon.png" alt=""/>
</div class="content">
<h2>RESEARCH METHDOLOGY<h2>
<p>BE/MCA</p>
<center>
<p>Edition:2nd</p>
<span>BY:CR KOTHARI</span></center>
<button  class="btnLogin-popup"  type ="Read It"onclick="window.open('RM-TEXTBOOK.pdf')">READ IT</button>
</div>
</div>
</div>
</body>
</html>
