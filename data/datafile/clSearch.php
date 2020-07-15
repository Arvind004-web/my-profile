<?php
ob_start();

include("header.php");
?>
<html>
<head>
<style>
form{
margin-right:100px;
}
#submit{
height: 30px;
width: 220px;
font-size: 14px;
}
body {
	width:100%;
	border:red 1px solid;
	border-style:dashed;
	margin:auto;
	padding:10px;
}
td {
	text-align:center;
	padding:10px;
}
table {
	margin:auto;
	border:blue 1px solid;
}
label {
	font-size:18px;
	color:blue;
    font-weight: bold;
    font-family: cursive;
}
h2 {
	color:red;
	text-align:center;
}
th {
	color:red;
	font-size:20px;
    font-family: cursive;
}
</style>
</head>
<body style="background-image:url(images/bg.jpg); height:500px; width:100%">
<form id="form1" method="post" action="" enctype="multipart/form-data" name="">
<center>
<img src="images/csearch.jpg" width="350px" height="300px">
<h2>Enter Cluster Id to Search</h2>
<br/><input type="text" name="photo" id="photo">
<input type="submit" name="sub" value="search">
</form>
<?php
if(isset($_REQUEST['sub']))
{
	$name = $_REQUEST['photo'];
	$con = mysqli_connect("localhost","root","","datashare");
if($con)
{
	$q1 = "select * from files where Clusterid='$name'";
	$re = mysqli_query($con,$q1);
	echo "<table border='2' cellspacing='10' cellpadding='10'>
	<tr><th>File Name</th><th>Owned By</th><th>Uploaded On</th>
	</tr>";

	while($r = mysqli_fetch_assoc($re))
	{
		$fname = $r['filename'];
		echo "<tr>";
		echo "<td>".$r['filename']."</td>";
		echo "<td>".$r['uploadedby']."</td>";
		echo "<td>".$r['uploadedon']."</td>";
		echo "</tr>";
	}
}
}
?>
</body>
</html>
	