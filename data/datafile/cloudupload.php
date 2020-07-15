<?php
ob_start();

include("header3.php");
?>
<html>
<head>
    <title>upload image to firebase</title>
	<style>
form{
margin-right:100px;
}
#submit{
height: 30px;
width: 220px;
font-size: 14px;
}
</style>
</head>
<body style="background-image:url(images/bg.jpg); height:500px; width:100%">
<form id="form1" method="post" action="" enctype="multipart/form-data" name="">
<center>
<img src="images/upload.jpg" width="250px" height="200px">
<div id="container_big">
<center>
    <form enctype="multipart/form-data">
        <label>select file : </label>
        <input type="file" id="image" name="image"><br><br>
        <button type="button" onclick="upload()">Upload</button>
    </form>
</center>
</div>





<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDDSrRduj0NgTQ9O9QCfUkNJ0KSSQt0leE",
    authDomain: "data-sharing-8f32d.firebaseapp.com",
    databaseURL: "https://data-sharing-8f32d.firebaseio.com",
    projectId: "data-sharing-8f32d",
    storageBucket: "data-sharing-8f32d.appspot.com",
    messagingSenderId: "1088251263448",
    appId: "1:1088251263448:web:b30293bd55525c06a81aad"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script type="text/javascript" src="js/uploadimage.js"></script>
</body>
</html>