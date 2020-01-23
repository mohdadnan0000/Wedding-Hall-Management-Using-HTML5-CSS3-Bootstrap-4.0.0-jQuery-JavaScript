<!DOCTYPE html>
<html>
    <head>
        <title>Customer Details</title>
       	<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <form role="form" method="post" action="decoration.php">
                <center><h1>Customer Details</h1></center>

                <fieldset class="form-group">
                    <label for="name">Customer Name</label>
                    <input type="text" class="form-control" id="name" name="name" maxlenght="50" required>
                </fieldset>
                  
                <fieldset class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" maxlenght="10" required>
                </fieldset>
                
                <fieldset class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </fieldset>
                  
                <fieldset class="form-group">
                    <label for="address">Address</label>
                    <input type="textarea" class="form-control" id="address" name="address" maxlenght="200" required>
                </fieldset>
                 
                <fieldset class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input class="form-control" type="date" id="dob" name="dob" required>
                </fieldset>
                
                <br>      
                <input type="submit" class="btn btn-primary" style="width: 100%;" value="Next">
            </form>
        </div>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/misc.js" type="text/javascript"></script>
    </body>
</html>