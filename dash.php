<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/loadPage.js"></script>
	</head>
	<body>

		<div id="left" class="bg-dark">
			<button id="menu">Menu<i class="glyphicon glyphicon-menu-hamburger" style="float: right;"></i></button>

			<button id='create'>Create Customer<i class="fas fa-plus-square" style="float: right;"></i></button>

			<button id='payment'>Payment<i class="fas fa-money-bill" style="float: right;"></i></button>

			<button id='billgen'>Bill Generation<i class="fas fa-file-invoice" style="float: right;"></i></button>

			<button id='update'>Update Customer<i class="fas fa-pen" style="float: right;"></i></button>

			<button id='reserved'>Check Booking<i class="far fa-check-square" style="float: right;"></i></button>
			<button onClick="javascript:location.href='Logout.php'">Logout<i class="fas fa-sign-out-alt" style="float: right;"></i></button>
		</div>

		<div id ="right">
			<img src="img/dash.jpg">
		</div>
	</body>
</html>