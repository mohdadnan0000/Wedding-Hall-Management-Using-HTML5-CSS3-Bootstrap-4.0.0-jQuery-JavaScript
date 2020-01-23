<!DOCTYPE html>
<html>
	<head>
		<title>Bill</title>
		<link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
	    <link href="css/style.css" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
		<script type="text/javascript">
	    	function printData()
			{
			   var divToPrint=document.getElementById("bills");
			   newWin= window.open("");
			   newWin.document.write(divToPrint.outerHTML);
			   newWin.print();
			   newWin.close();
			}
			$('#print').on('click',function()
			{
				printData();
			})
    	</script>
	</head>
	<body>
		<?php
		require_once 'php/connect.php';
		$query="SELECT max(cid) from customer";
		$result=queryMysql($query);
		while ($row=mysqli_fetch_array($result)) 
		{
			$dbcid=$row['max(cid)'];
		}
		echo $dbcid;
		$query0="SELECT name,bookdate,bookshift from customer WHERE cid='$dbcid'";	
		$result0=queryMysql($query0);
		while ($row=mysqli_fetch_array($result0)) 
		{
				$dbname=$row['name'];
				$dbbookdate=$row['bookdate'];
				$dbbookshift=$row['bookshift'];
		}
		$query1="SELECT tamount,paid,balance,duedate from payment WHERE cid='$dbcid'";	
		$result1=queryMysql($query1);
		while ($row=mysqli_fetch_array($result1)) 
		{
			$dbtamount=$row['tamount'];
			$dbpaid=$row['paid'];
			$dbbalance=$row['balance'];
			$dbduedate=$row['duedate'];
		}
		?>
		<div class="container">
            <form role="form" method="post" action="" id="output">
				<div id="bills">
					<center><h1>Bill Details</h1></center>
			        <table class="table table-responsive-sm table-hover table-bordered table-striped">
			        	<tr>
			        		<td>Customer ID</td>
			        		<td id="id"><?php echo $dbcid ?></td>
			        	</tr>
			        	<tr>
			        		<td>Customer Name</td>
			        		<td id="name"><?php echo $dbname ?></td>
			        	</tr>
			     		
			     		<tr>
			     			<td>Booked Date</td>
			     			<td id="bd"><?php echo $dbbookdate ?></td>
			     		</tr>

			     		<tr>
			     			<td>Booked Shift</td>
			     			<td id="bs"><?php echo $dbbookshift ?></td>
			     		</tr>

			     		<tr>
			     			<td>Total Amount</td>
			     			<td id="ta"><?php echo $dbtamount ?></td>
			     		</tr>

			     		<tr>
			     			<td>Paid Amount</td>
			     			<td id="pa"><?php echo $dbpaid ?></td>
			     		</tr>

			     		<tr>
			     			<td>Balance Amount</td>
			     			<td id="ba"><?php echo $dbbalance ?></td>
			     		</tr>
			     		
			     		<tr>
			     			<td>Due Date</td>
			     			<td id="dd"><?php echo $dbduedate ?></td>
			     		</tr>

			     		<tr>
			     			<td>Bill Printed</td>
			     			<td><?php echo(date("Y-m-d"));?></td>
			     		</tr>
			        </table>
		    	</div>
		        <input type="button" class="btn btn-primary" id="print" name="print" value="Print" style="width: 100%;">
	    	</form>
	    </div>
	    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    	<script src="js/misc.js" type="text/javascript"></script>
    	<script src="js/bill.js" type="text/javascript"></script>
	</body>
</html>
