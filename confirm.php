<!DOCTYPE html>
<html>
	<head>
		<title>Booking Details</title>
	    <link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
	    <link href="css/style.css" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<?php 
			if($_POST)
			{
				//Booking Details
				$bookdate=$_POST['bookdate'];
				$bookshift=$_POST['bookshift'];
				$floor=$_POST['floor'];
				
				//Customer Details
				$cid=$_POST['cid'];
				$name=$_POST['name'];
				$mobile=$_POST['mobile'];
				$email=$_POST['email'];
				$address=$_POST['address'];
				$dob=$_POST['dob'];
				
				//Decoration Details
				$decoitem=$_POST['decoitem'];
				$tdquantity=$_POST['tdquantity'];
				$adquantity=$_POST['adquantity'];
				$bdquantity=$_POST['bdquantity'];

				//Catering Details
				$fooditem=$_POST['fooditem'];
				$tcquantity=$_POST['tcquantity'];
				$acquantity=$_POST['acquantity'];
				$bcquantity=$_POST['bcquantity'];

				//Payment Details
				$tamount=$_POST['tamount'];
				$pamount=$_POST['pamount'];
				$bamount=$_POST['bamount'];
				$duedate=$_POST['duedate'];
		?>
		<div class="container">
            <form role="form" method="post" action="confirm.php">
                <!--Booking Details-->
                <center><h1>Booking Details</h1></center>
                <fieldset class="form-group">
                        <label for="cid">Customer ID</label>
                        <input readonly value=<?php echo $cid;?> type="text" class="form-control" id="cid" name="cid" required>
                 </fieldset>

                <fieldset class="form-group">
                    <label for="bookdate">Booking Date</label>
                    <input readonly value=<?php echo $bookdate;?> type="date" class="form-control" id="bookdate" name="bookdate" required>
                </fieldset>
                  
                <fieldset class="form-group">
                    <label for="bookshift" id="bookshift">Booking Shift</label>
                    <select readonly class="form-control" name="bookshift" id=bookshift">
                        <option readonly value="select"><?php echo $bookshift;?></option>
                    </select> 

                    <label for="floor" id="floor">Floor</label>
                    <select readonly class="form-control" name="floor" id="floor">
                        <option readonly value="select"><?php echo $floor;?></option>
                    </select> 
                </fieldset>
                <br> 

                <!--Customer Details-->
                <center><h1>Customer Details</h1></center>
                <fieldset class="form-group">
                    <label for="name">Customer Name</label>
                    <input readonly value=<?php echo $name;?> type="text" class="form-control" id="name" name="name" maxlenght="50" readonly value="Adnan" required>
                </fieldset>
                  
                <fieldset class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input readonly value=<?php echo $mobile;?> type="number" class="form-control" id="mobile" name="mobile" maxlenght="10" required>
                </fieldset>
                
                <fieldset class="form-group">
                    <label for="email">Email</label>
                    <input readonly value=<?php echo $email;?> type="email" class="form-control" id="email" name="email" required>
                </fieldset>
                  
                <fieldset class="form-group">
                    <label for="address">Address</label>
                    <input readonly value=<?php echo $address;?> type="textarea" class="form-control" id="address" name="address" maxlenght="200" required>
                </fieldset>
                 
                <fieldset class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input readonly value=<?php echo $dob;?> class="form-control" type="date" id="dob" name="dob" required>
                </fieldset>
                <br>

                <!--Decoration Details-->
                <center><h1>Decoration Details</h1></center>
                    <fieldset class="form-group">
                        <label for="decoitem" id="decoitem">Item Name</label>
                        <select readonly class="form-control" name="decoitem" id=decoitem>
                            <option readonly value=<?php echo $decoitem;?>><?php echo $decoitem;?></option>
                        </select> 
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="tdquantity">Total Quantity</label>
                        <input readonly value=<?php echo $tdquantity;?> type="number" class="form-control" id="tdquantity" name="tdquantity" required>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="adquantity">Available Quantity</label>
                        <input readonly value=<?php echo $adquantity;?> type="number" class="form-control" id="adquantity" name="adquantity" required>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="bdquantity">Booked Quantity</label>
                        <input readonly value=<?php echo $bdquantity;?> type="number" class="form-control" id="bdquantity" name="bdquantity" required>
                    </fieldset>
                    <br>

                <!--Catering Details-->
                <center><h1>Catering Details</h1></center>
                    <fieldset class="form-group">
                        <label for="fooditem" id="fooditem">Item Name</label>
                        <select readonly class="form-control" name="fooditem" id=fooditem>
                            <option readonly value=<?php echo $fooditem;?>><?php echo $fooditem;?></option>
                        </select> 
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="tcquantity">Total Quantity</label>
                        <input readonly value=<?php echo $tcquantity;?> type="number" class="form-control" id="tcquantity" name="tquantity" required>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="acquantity">Available Quantity</label>
                        <input readonly value=<?php echo $acquantity;?> type="number" class="form-control" id="aquantity" name="aquantity" required>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="bcquantity">Booked Quantity</label>
                        <input readonly value=<?php echo $bcquantity;?> type="number" class="form-control" id="bcquantity" name="bcquantity" required>
                    </fieldset>
                    <br> 

                <!--Payment Details-->
                    <center><h1>Payment Details</h1></center>
                    <fieldset class="form-group">
                        <label for="tamount">Total Amount</label>
                        <input readonly value=<?php echo $tamount;?> type="number" class="form-control" id="tamount" name="tamount" required>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="pamount">Paid Amount</label>
                        <input readonly value=<?php echo $pamount;?> type="number" class="form-control" id="pamount" name="pamount" required>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="bamount">Balance Amount</label>
                        <input readonly value=<?php echo $bamount;?> type="number" class="form-control" id="bamount" name="bamount" required>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="duedate">Due Date</label>
                        <input readonly value=<?php echo $duedate;?> type="date" class="form-control" id="duedate" name="duedate" required>
                    </fieldset>
                    <br>  
                    <div class="form-group">
                        <input type="button" class="btn btn-primary" style="width: 50%;" readonly value="Edit Details">
                        <input type="submit" class="btn btn-primary" style="width: 50%;" readonly value="Confirm Details">
                    </div>
            </form>
        </div>
        <?php 
		  }
        ?>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/misc.js" type="text/javascript"></script>
	</body>
</html>