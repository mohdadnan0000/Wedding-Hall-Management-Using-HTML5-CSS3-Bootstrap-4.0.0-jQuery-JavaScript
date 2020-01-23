<!DOCTYPE html>
<html>
    <head>
        <title>Catering</title>
		<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet">

        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <form role="form" method="post" action="payment.php">
                <center><h1>Catering Details</h1></center>
                <fieldset class="form-group">
                    <label for="bookdate">Booking Date</label>
                    <input type="date" class="form-control" id="bookdate" name="bookdate" required>
                </fieldset>
                <span id="usererr"></span>
                <fieldset class="form-group">
                    <label for="fooditem" id="fooditem">Item Name</label>
                    <select class="form-control" name="fooditem" id="fooditem">
                            <option value="select">--Select--</option>
                            <option value="mughlai">Mughlai [200/Plate]</option>
                            <option value="chinese">Chinese [350/Plate]</option>
                            <option value="italian">Italian [300/Plate]</option>
                            <option value="fishthali">Fish Thali [250/Plate]</option>
                    </select> 
                </fieldset>
                <fieldset class="form-group">
                    <label for="bcquantity">Booked Quantity</label>
                    <span class="form-control" id="show">Booked Quantity To This Date.</span>
                </fieldset>
                <br>     
            </form>
        </div>
        <script src="js/misc.js" type="text/javascript"></script>
        <script src="js/checkfood.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/checkdate.js"></script>

    </body>
</html>