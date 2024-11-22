<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>Admi Login Page </title>  
<style>   
body{
  font-family: Calibri, Helvetica, sans-serif;  
  background-image:url("Admin.jpg");  
  background-repeat: no-repeat;
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
}  
button {   
       background-color:orange;   
       width: 100%;  
        color: solid blue;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid blue;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
 .container {   
        padding: 25px;   
        background-color:"yellow";
    } 
    .logo {
    font-size: 2em;
    color: #fff;
    user-select: none;
     top: 100px;
    width:100px;
    background-size:100%;
}
   header
{
    color:orange;
    text-align:right;
    font-style: inherit;
}  
</head>
</style>       
<body>  
<header>
 <div class="container">
  <img src="logo.png" class="logo"></div>
  <a href="#" onclick="window.open('e-library.php')">Home</a>
  <a href="#" onclick="window.open('aboutus.php')">About</a>
            <a href="#" onclick="window.open('contact.php')">Contact</a>
    </header>  
    <center> <h1>ADMIN LOGIN </h1> </center>   
    <form action="backend/admin_reg.php" method="post";>  
        <div class="container">   
            <label>Admin : </label> 
            <b>  
            <input type="text" placeholder="Admin" name="Admin" required>  </b>
            <label>Password : </label>
            <b>   
            <input type="password" placeholder="Enter Password" name="password" required>  </b>
           <button class="btnLogin-popup" type ="submit">Login</button> 
            <input type="checkbox" checked="checked" name="Remember"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
           <a href="#">   Forgot password? </a>   
        </div>   
    </form>     
</body>     
</html>  


