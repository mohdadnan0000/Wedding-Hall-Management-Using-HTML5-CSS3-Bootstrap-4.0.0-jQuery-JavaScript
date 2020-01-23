<!DOCTYPE html>
<html>
    <head>
        <title>Create Customer</title>
       	<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <form role="form" method="post" action="" id="allinfo">
                <!--Booking Details-->
                <center><h1>Booking Details</h1></center>
                <fieldset class="form-group">
                    <label for="bookdate">Booking Date</label>
                    <input type="date" class="form-control" id="bookdate" name="bookdate" required>
                </fieldset>
                <fieldset class="form-group">
                    <label for="bookshift" >Booking Shift</label>
                    <select class="form-control" name="bookshift" id="bookshift">
                        <option value="select">--Select--</option>
                        <option  value="afternoon">Afternoon</option>
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
                </fieldset><br>
                <center><span id="usererr"></span></center>
                <br> 

                <!--Customer Details-->
                <center><h1>Customer Details</h1></center>
                <fieldset class="form-group">
                    <label for="name">Customer Name</label>
                    <input type="text" class="form-control" id="name" name="name" maxlenght="50" required>
                </fieldset>
                  
                <fieldset class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" maxlength="10" required>
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

                <!--Decoration Details-->
                <center><h1>Decoration Details</h1>
                    <fieldset class="form-group">
                        <label for="decoitem">Item Name
                        <input type="text" class="form-control" id="sofa" name="sofa" value="Sofa" required readonly></label>
                    
                        <label for="decoid">Price/Unit
                        <input type="text" class="form-control" value="200" id="psofa" readonly required></label>

                        <label for="bdquantity">Booking Quantity
                        <input type="text" class="form-control" id="bsofa" name="bsofa" required></label>

                        <label for="tprice">Total 
                        <span class="form-control" id="tsp" name="tsp">Sub-Total</span></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="decoitem">
                        <input type="text" class="form-control" id="chair" name="chair" value="Chair" required readonly=""></label>
                    
                        <label for="decoid">
                        <input type="text" class="form-control" value="50" id="pchair" readonly required></label>

                        <label for="bdquantity">
                        <input type="text" class="form-control" id="bchair" name="bchair" required></label>

                        <label for="tprice">
                        <span class="form-control" id="tcp" name="tcp">Sub-Total</span></label>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="decoitem">
                        <input type="text" class="form-control" id="table" name="table" value="Table" required readonly></label>
                                        
                        <label for="decoid">
                        <input type="text" class="form-control" value="100" id="ptable" readonly required></label>

                        <label for="bdquantity">
                        <input type="text" class="form-control" id="btable" name="btable" required></label>

                        <label for="tprice">
                        <span class="form-control" id="ttp" name="ttp">Sub-Total</span></label>
                    </fieldset>
                    <center><span class="form-control" id="totaldeco">Total Amount For Decoration</span></center>
				</center>
                <br>

                    <!--Catering Details-->
                    <center><h1>Catering Details</h1></center>
                    <fieldset class="form-group">
                        <label for="fooditem">Dishes Type</label>
                        <select class="form-control" name="fooditem" id="fooditem">
                            <option value="select">--Select--</option>
                            <option value="mughlai">Mughlai [200/Plate]</option>
                            <option value="chinese">Chinese [350/Plate]</option>
                            <option value="italian">Italian [300/Plate]</option>
                            <option value="fishthali">Fish Thali [250/Plate]</option>
                        </select> 
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="bfood">Booked Quantity</label>
                        <input type="text" class="form-control" id="bfood" name="bfood" required><br>
                        <span class="form-control" id="tfp" name="tfp">Sub-Total</span>
                    </fieldset>
                    <br>
                <input type="submit" class="btn btn-primary" style="width: 100%;" value="Confirm Booking">
                <br><br>
                <center><span id="info"></span></center>
            </form>
        </div>
        <script src="js/misc.js" type="text/javascript"></script>
        <script src="js/totaldeco.js" type="text/javascript"></script>
        <script src="js/totalfood.js" type="text/javascript"></script>
        <script src="js/totalamount.js" type="text/javascript"></script>
        <script src="js/checkdate.js" type="text/javascript"></script>
        <script src="js/storeinfo.js" type="text/javascript"></script>
    </body>
</html>