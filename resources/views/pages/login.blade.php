<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootsnipp.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<style type="text/css">
		.form{
			/*text-align: center;*/
			/*background-color: #0B2471;*/
    text-align: center;
    background-image:  radial-gradient(#0B2471,#7088D1,#07206F);
    width: 30%;
    height: 45%;
    border-bottom-right-radius: 30%;
    border-bottom-left-radius: 30%;
    border-top-left-radius: 0%;
    margin-top: 10%;
    margin-left: 34%;
    cursor:pointer;
		      }
		#log{    
	text-align: center;
    height: 24px;
    margin-bottom: 5%;
    border-radius: 46%;
            }
        #log:hover{
   	background-color: #15b000;
                  }
		h3{
	text-transform: uppercase;
	color:#fff;
		  }

		#input{
	height:25px;
	border-radius: 7%;
			  }

		#glyphicon{
	color:#fff;
	margin-right: 7px;
			      }
			
		body{
	background-color: #dbd5d5;
	background-image: url("img/comp.jpg");
	/*background-size: 100%;*/
	background-attachment: fixed;
		}
	</style>
</head>
<body>
<div>
	<?php 
if (isset($_POST['submit'])){
	echo "Form successfully submitted.";
}
	 ?>
</div>

	<div class="container">
		<div class="row">
			<form class="form" method="post">
				<img src="img/user.jpg" style="border-radius: 50%;width:40%;height: 40%;">
				<hr>
				<h3>User Credentials</h3>
				<hr>
				<i class="glyphicon glyphicon-user" id="glyphicon"></i><input type="text" name="" placeholder="Username" id="input" required>
				<br><br><br>
				<i class="glyphicon glyphicon-user" id="glyphicon"></i><input type="password" name="" placeholder="Password" id="input" required="">
				<br><br><br>
				<input id="log" type="submit" name="submit" value="Login" >

			</form>
		</div>
	</div>

</body>
</html>