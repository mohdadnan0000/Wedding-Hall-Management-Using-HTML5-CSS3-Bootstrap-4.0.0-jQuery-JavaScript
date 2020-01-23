<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
		<link href="css/bootstrap.css" rel="stylesheet" >
        <link href="css/style.css" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <form role="form" method="post" id="payinfo">
                <center><h1>Payment Details</h1></center>
                <fieldset class="form-group">
                        <label for="cid">Customer ID</label>
                        <input type="text" class="form-control" id="cid" name="cid" required>
                 </fieldset>

                <fieldset class="form-group">
                    <label for="tamount">Total Amount</label>
                    <span class="form-control" id="u1">Total Amount Displayed Here.</span>
                </fieldset>

                <fieldset class="form-group">
                    <label for="pamount">Paid Amount</label>
                    <input type="number" class="form-control" id="pamount" name="pamount" placeholder="Enter Paid Amount"required>
                </fieldset>
                <fieldset class="form-group">
                    <label for="tamount">Balance Amount</label>
                    <span class="form-control" id="u2">Balanced Amount Displayed Here.</span>
                </fieldset>

                <fieldset class="form-group">
                    <label for="duedate">Due Date</label>
                    <input type="date" class="form-control" id="duedate" name="duedate" required>
                </fieldset>
                <br>     
                <input type="submit" class="btn btn-primary" style="width: 100%;" value="Bill Generation">
                <br><br><center><span id="info"></span></center>
            </form>
        </div>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/misc.js" type="text/javascript"></script>
        <script src="js/checkamount.js" type="text/javascript"></script>
        <script src="js/storepayment.js" type="text/javascript"></script>
    </body>
</html>