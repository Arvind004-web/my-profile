<?php
ob_start();

include("header1.php");
?>
<html>
<head>
<title>
</title>
<style>
#submit{
height: 50px;
width: 120px;
font-size: 14px;
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:green;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
form{
height: 500px;
width: 1300px;
font-size: 14px;
}
body{
          margin:0;
          padding:0;
          background:url("log.jpg");
          background-size: cover;
          font-family: sans-serif;
           }
      .log{  width:1366px;
          height:696px;
          
          }
      .loginbox{  width: 320px;
          height: 450px;
          background: #000;
          color: #fff;
          top:20%;
          left:36%;
          position:absolute;
          transform: translate{-50%,-50%}
          box-sizing: border-box;
          padding: 70px 30px;
          opacity:.7;
               }
      .avatar{  width: 100px;
          height: 100px;
          border-radius:50%;
          position:absolute;
          top:-14%;
          left:calc(50% - 50px);
             }
      h1{    margin:0;
          padding: 0 0 20px;
          text-align: center;
          font-size: 30px;
          font-family:AR JULIAN;
          color:red;
        }    
      .loginbox p{  margin:0;
          padding: 0;
          font-weight:bold;
                 }
      .loginbox input{width: 100%;
          margin-bottom:20px;
                     }
      .loginbox input[type="text"], input[type="password"]{
          border: none;
          border-bottom: 1px solid #fff;
          background: transparent;
          outline:none;
          height:40px;
          color:#fff;
          font-size:16px;
              }
      .loginbox input[type="submit"]{
          border: none;
          outline:none;
          height:40px;
          background:#fb2525;
          color: #fff;
          font-size:18px;
          border-radius:20px;
              }
      .loginbox input[type="submit"]:hover
      {    cursor:pointer;
          background:#ffc107;
          color:#000;
      }
      .loginbox a{   
          text-decoration:none;
          font-size:12px;
          line-height:20px;
          color: darkgrey;
      }
      .loginbox a:hover
      {  
        color:#ffc107;
      }
      .active{
        color:#fff;
        background:#e02626;
        border-radius:4px;
      }

</style>
</head>
<body style="background-image:url(images/bg.jpg); height:500px; width:100%">
<form action="cloudadmin.php">
<img class="log">
    <div class="loginbox">
    <img src="assets/images/username.png" class="avatar">
    <h1>Login Here</h1>
    
    <form>
    <p> Email</p>
    <input type="text" name="email" placeholder="Enter Username">
    <p> Password</p>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="login" value="Login">
    <a href="#">Lost your password?</a><br>
    <a href="#">Don't have an acoount?</a>
    </form>
    </div>
    <script src="js/jquery-2.1.4.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/ajax-utils.js"></script>
      <script src="js/script.js"></script>
</form>

<?php
if(isset($_REQUEST['login']))
{
	$name = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
	if(empty($name)||empty($pass))
	{
		echo "<script>alert('Username or Password Incorrect')</script>";
	}
	else
	{
	$con = mysqli_connect("localhost","root","","datashare");
	if($con)
{
	$q = "select * from admin where username='$name' and password='$pass'";
	$r = mysqli_query($con,$q);
	$i = 0;
	while($d = mysqli_fetch_assoc($r))
	{
		$n = $d['email'];
		$m = $d['password'];
		$i=1;
		
	}
	if($i==1)
	{
		header("location:cloudadmin.php");
	}
	else
	{
		echo "<script>alert('Username or Password Incorrect')</script>";
	}
}
}
}
?>

</body>
</html>