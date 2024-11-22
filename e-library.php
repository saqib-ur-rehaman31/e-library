<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LIBRARY</title>
    <link rel="stylesheet" href="style.css">
    <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:sans-serif;
}

body
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('e-library.jpg');
    background-size: cover;
    background-position: center;
   }
header {
    position:fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding:20px 100px;
    display:flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
}
.middle {
  background-color:white;
  opacity: 0.5;
  font-size: 2em;
  position: absolute;
  top: 47%;
  left: 47%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.logo {
    font-size: 2em;
    color: #fff;
    user-select: none;
    top: 100px;
    width:100px;
    background-size:100%;
}

.navigation a {
    position: relative;
    font-size: 1.1em;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
}

.navigation a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .5s;
}
.navigation a:hover::after{
    transform-origin: left;
    transform: scaleX(1);

}
.navigation .btnLogin-popup {
    width: 130;
    height: 50px;
    background-color: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    font-weight: 500;
    margin-left: 40px;
}

.navigation .btnLogin-popup {
    width: 130px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s;
}

.navigation .btnLogin-popup:hover {
    background: #fff;
    color: #162938;
    
}
    </style>
</head>
<body>
    <header>
        <div class="container">
  <img src="logo.png" class="logo"></div>
            <a href="#">Home</a>
            <a href="#" onclick="window.open('Aboutus.php')">About</a>
            <!--a href="Aboutus.html">About</a-->
            <!--a href="#">Services</a-->
            <a href="#" onclick="window.open('contact.php')">Contact</a></div>
            <button class="btnLogin-popup"  type ="submit"onclick="window.open('admin.php')">Admin Login</button>  
            <button class="btnLogin-popup" type ="submit"onclick="window.open('login form.php')">User Login</buttons>
        </nav>
    </header>

         <div class="middle">
    <h1>WELCOME TO E-LIBRARY</h1>
  </div>
    <!--div class="empty">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span> 
            <form action="#">
            </form>
    </div-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>