<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");


include('connection.inc.php');
include('function.inc1.php');

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;


$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		//echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.

		$oid=$_POST['ORDERID'];
		$oArr=explode('_',$oid);
		$oid=$oArr[0];
		//$getUserDetailsBy=getUserDetailsByid();
		//$email=$getUserDetailsBy['email'];
		//$emailHTML=orderEmail($oid);
		$_SESSION['ORDER_ID']=$oid;
		$TXNID=$_POST['TXNID'];
		mysqli_query($con1,"update `order` set payment_status='Success', paytm_status='Success', txnid='$TXNID' where id='$oid'");
		//send_email($email,$emailHTML,'Order Placed');

		$name1=$_SESSION['name'];
    	$res1=mysqli_query($con1,"select * from users where name='$name1'");
    	$row1=mysqli_fetch_assoc($res1);
    	$id=$row1['id'];

		if(!isset($_SESSION['USER_LOGIN'])){
			$row=mysqli_fetch_assoc(mysqli_query($con1,"select * from users where id='$id'"));
			$_SESSION['USER_LOGIN']='yes';
			$_SESSION['USER_ID']=$row['id'];
			$_SESSION['name']=$row['name'];
		}

		?>
		<script>
			alert("Order Placed");
			window.location.href='home.php';
		</script>
		<?php



	}
	else {
		//echo "<b>Transaction status is failure</b>" . "<br/>";
		$oid=$_POST['ORDERID'];
		$oArr=explode('_',$oid);
		$oid=$oArr[0];
		$TXNID=$_POST['TXNID'];
		mysqli_query($con1,"update `order` set payment_status='Failed', paytm_status='Failed', payment_id='$TXNID' where id='$oid'");
		?>
		<script>
			alert("Error!!");
			window.location.href='home.php';
		</script>
		<?php
	}
}else{
	$oid=$_POST['ORDERID'];
	$oArr=explode('_',$oid);
	$oid=$oArr[0];
	$TXNID=$_POST['TXNID'];
	mysqli_query($con1,"update `order` payment_status='Failed', paytm_status='Failed', payment_id='$TXNID' where id='$oid'");
	?>
		<script>
			alert("Error!!");
			window.location.href='home.php';
		</script>
		<?php
}


?>