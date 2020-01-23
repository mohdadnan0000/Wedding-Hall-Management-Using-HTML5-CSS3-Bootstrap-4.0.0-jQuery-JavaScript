<!DOCTYPE html>
<?php session_start();?>
<html>
	<head>
		<title>Log In</title>
		<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
		<link href="css/style.css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/misc.js"></script>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/homestyle.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<style type="text/css">
		.container
		{
			border-radius: 50px;
			max-width: 300pt;
			height: 350pt;
			margin-top:15%;
			padding:40px;
			background-color: #FFFFFF;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 1), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		} 
		img
		{
			margin-left: 27%;
			margin-bottom: 30px;
			width: 150px;
			height: 150px;
		}
		#error
		{
			
			display: none;
		}
		</style>
	</head>
	<body background="img/bg1.jpg"> 
	<?php
		require_once 'php/connect.php'; 
		if ($_POST)
		{
			$username=$_POST['uname'];
			$pass=$_POST['pass'];
			$query="select * from user where name='$username'";
			$result=queryMysql($query);
			while($row = mysqli_fetch_array($result)) 
			{		 
				if($username==$row['name'])
				{
					if($pass==$row['pass'])
					{
						$_SESSION['user']=$username;
						header("Refresh:0,url=dash.php");
					}
					else
					{
						echo'<script type="text/javascript">
							$(function () {
							$("#error").html("<div>Incorrect Username OR Password</div>").fadeIn().delay(5000).fadeOut();
							});
						</script>';
					}
				}
				else
				{
					echo'<script type="text/javascript">
							$(function () {
							$("#error").html("<div>Incorrect Username </div>").fadeIn().delay(1000).fadeOut();
							});
						</script>';
				}
			}	
		}
	?>	
	<div class="container">	
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form method="POST" action="login.php">
                	<span><img src="img/login.jpg"></span><br>
                	
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control " id="uname" name="uname" placeholder="Username" required="required">
                    </div>

                    <br>
                    <div class="form-group">
                    	<div class="input-group">
                    		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                        	<input type="password" class="form-control " name="pass" id="password-field" placeholder="Password"  required="required">

                       		<span class="input-group-addon" ><i class="glyphicon glyphicon-eye-open"></i></span>

                    	</div>
 					</div>

                    <input type="submit" class="btn btn-primary btn-lg btn-block" style="width: 100%;" value="Log in"><br>
                    <div id="error" class="alert alert-danger">Incorrect Username OR Password</div>
                    <br>
              
                 </form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
                $(".glyphicon-eye-open").on("click", function() {
                  $(this).toggleClass("glyphicon-eye-close");
                  var type = $("#password-field").attr("type");
                  if (type == "text"){ 
                    $("#password-field").prop('type','password');}
                  else{ 
                    $("#password-field").prop('type','text'); }
                  });
	</script>
	
</body>
</html>