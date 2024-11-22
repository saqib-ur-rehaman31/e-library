<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    header
{
    color: red;
    text-align: center;
    font-style: inherit;
}
section
{
  border: 1px solid black;
  margin-top: 3px;
  margin-bottom: 10px;
  margin-right: 5px;
  margin-left: 10px;
  padding: 10px;
  color: black;
  font-size: 20px;
  font-family: sans-serif;
}

body
    {
        background-image: url("contactus.jpg");
        /*background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;*/
}
.logo {
    font-size: 2em;
    color: #fff;
    user-select: none;
    top: 100px;
    width:100px;
    background-size:100%;
}
</head>
</head>
</style>
<body>

    <header class="main">
    <div class="container">
  <img src="logo.png" class="logo"></div>
  <a href="#" onclick="window.open('e-library.php')">Home</a>
  <a href="#" onclick="window.open('Aboutus.php')">About</a>
  <a href="#" onclick="window.open('contact.php')">Contact</a>
  <h1 class="text-center">elibrary</h1>
        <hr>
    </header>

   
    <section class="contact_us">
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center"><b>CONTACT US</b></h5>
            </div>
        </div>

    <!-- Page Content -->
    <div class="container">
    <section class="details">
        <div class="row">
            <div class="col-md-6">
                <div class="well">
                <p>elibrary</p>
                
                <p>Phone:+91 9876543210</p>
                <p>Email:elibrary@gmail.com</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="well">
                    <form action="Welcome.html"  method="post">
                        <div class="form-group">
                            <label>Enter your Name:</label>
                            <input type="text" name="fullname" placeholder="Enter your name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Enter your Email:</label>
                            <input type="Email" name="Email id" placeholder="Enter your Email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message:</label>
                            <input type="textarea" name="Message" rows="5" placeholder="Your Message" required class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="SendMessage" onclick="SendMessage()" name="Register" value="Send Message" required class="btn btn-primary"><br>
                            <script>
function SendMessage(){
    alert("THANK YOU...! YOUR RESPONSE HAS BEEN RECORDED");
}
</script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>