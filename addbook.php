<!DOCTYPE HTML>
<html>
<head>
<title>ADD BOOKS</title>
<style>
body{
    background-image:url("addbook.jpg");
}
td{
    color:#fff;

}
header
{
    color: red;
    text-shadow: 2px 2px brown;
    text-align: center;
    font-style: inherit;
    font-size: 2em;
}
.logo {
    font-size: 2em;
    color: #fff;
    user-select: none;
}
.logo-2 {
  width: 125px;
  align-items: ;
  display: block;
}
.left {
  display: flex;
  font-size: 22px;
  padding-right: 41px;
}
</style>
</head>
<body>
    <header>
        <div class="container">
  <img src="logo.png" class="logo-2"></div>
  <div class="left">
  <a href="#" onclick="window.open('e-library.php')">Home</a>
  <a href="#" onclick="window.open('Aboutus.php')">About</a>
  <a href="#" onclick="window.open('contact.php')">Contact</a>
</div>
    </header>
    <b>
    <center><h2 style="background-color: #fff;position: absolute;display: ;top: 31px;text-align: ;padding: ;left: 25pc;">ADD BOOKS</h2></center>
    <br>
    <form action="backend/addbk.php" method="post" style="background-color:#000 ;position:absolute;top:100px;left:200px; width: 580px;">
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td> Enter Title</td>
            <td> <input type="text" name="title" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Author</td>
            <td> <input type="text" name="author" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Edition</td>
            <td> <input type="text" name="edition" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Publication</td>
            <td> <input type="text" name="publication" size="48"> </td>
            </tr>
            <tr>
                <td>Course
                 <label for="course">Choose a course</label>
                 <select id="Course" name="Course">
                  <option value="BE">BE</option>
                   <option value="MCA">MCA</option>
                    </select>
                </td>
                     <td>
                <p>SELECT FILES</p>
                    <!--label for="myfile">Select files:</label-->
                    <input type="file" id="myfile" name="myfile" multiple><br>
            </td>
            <tr>
            <td style="text-align: center">
            <button class="btnLogin-popup" type ="submit" >Submit</button-->
 <!--    <script>
function Submit(){
    alert("SUCCESSFULLY SUBMITTED...!");
}
</script><br>  -->
 <button class="btnLogin-popup" type ="Reset">Reset</button>
            </td>
        </tr>
            </tr></b>
            <tr>
              <td>id</td>
              <td><input type="text" name="Book No" size="48"></td>
              <p><td style="text-align: center"></p>
               <center><button class="btnLogin-popup" type ="Delete" >Delete</button></center></td>
        </table>
        
    </form>
</body>
</html>
