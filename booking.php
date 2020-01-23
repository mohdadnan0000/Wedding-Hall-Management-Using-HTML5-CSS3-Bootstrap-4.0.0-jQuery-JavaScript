<!DOCTYPE html>
<html>
    <head>
        <title>Booking Details</title>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    	<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet">
    	<script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <form role="form" method="post" action="" id="sign">
                <center><h1>Booking Details</h1></center>
                <fieldset class="form-group">
                    <label for="bookdate">Booking Date</label>
                    <input type="date" class="form-control" id="bookdate" name="bookdate" required>
                </fieldset>

                <fieldset class="form-group">
                    <label for="bookshift" >Booking Shift</label>
                    <select class="form-control " name="bookshift" id="bookshift">
                        <option value="select">--Select--</option>
                        <option value="afternoon">Afternoon</option>
                        <option value="evening">Evening</option>
                    </select> 
                </fieldset>
                <fieldset class="form-group">
                    <label for="floor" >Floor</label>
                    <select class="form-control" name="floor" id="floor">
                        <option value="select">--select--</option>
                        <option value="ground">Ground</option>
                        <option value="first">First</option>
                        <option value="second">Second</option>
                    </select> 
                </fieldset>
                <br>    
                <input type="submit" class="btn btn-primary" style="width: 100%;" value="Check">
            </form>
            <br>
            <center><span id="usererr"></span></center>
        </div>
        <script src="js/misc.js" type="text/javascript"></script>
        <script src="js/checkbooking.js" type="text/javascript"></script>
       </body>
</html>