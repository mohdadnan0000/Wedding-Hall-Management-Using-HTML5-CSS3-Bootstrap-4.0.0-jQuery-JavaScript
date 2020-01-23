
<!DOCTYPE html>
<html>
    <head>
        <title>Decoration</title>
		<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <form role="form" method="post" action="">
                <center><h1>Decoration Details</h1>
                    <fieldset class="form-group">
                        <label for="bookdate">Booking Date</label>
                        <input type="date" class="form-control" id="bookdate" name="bookdate" required>
                    </fieldset>
                    
                    <fieldset class="form-group">
                        <label for="decoitem">Item Name
                        <input type="text" class="form-control" id="sofa" name="sofa" value="Sofa" required readonly></label>
                    
                        <label for="decoid">Price/Unit
                        <input type="text" class="form-control" value="200 Rs/-" readonly required></label>

                        <label for="bdquantity">Total Booked Quantity
                        <input type="text" class="form-control" id="bsofa" name="bsofa" required></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="decoitem">
                        <input type="text" class="form-control" id="chair" name="chair" value="Chair" required readonly=""></label>
                    
                        <label for="decoid">
                        <input type="text" class="form-control" value="50 Rs/-" readonly required></label>

                        <label for="bdquantity">
                        <input type="text" class="form-control" id="bchair" name="bchair" required></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="decoitem">
                        <input type="text" class="form-control" id="table" name="table" value="Table" required readonly></label>
                                        
                        <label for="decoid">
                        <input type="text" class="form-control" value="100 Rs/-" readonly required></label>

                        <label for="bdquantity">
                        <input type="text" class="form-control" id="btable" name="btable" required></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="decoitem">
                        <input type="text" class="form-control" id="other" name="other" value="Other" required readonly></label>

                        <label for="decoid">
                        <input type="text" class="form-control" id="oprice" name="oprice" value="50 Rs/-" required></label>

                        <label for="bdquantity">
                        <input type="text" class="form-control" id="bother" name="bother" required></label>
                    </fieldset>
                </center>    
            </form>
        </div>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/misc.js" type="text/javascript"></script>
    </body>
</html>