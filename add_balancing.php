<?php
include('connect.php');
sleep(3);
if (isset($_POST['save'])){
	$today=$_POST['today'];
	$one_k = $_POST['k'];
	$five = $_POST['five'];
	$two = $_POST['two'];
	$one = $_POST['one'];
	$fifty = $_POST['fifty'];
	$forty = $_POST['forty'];
	$twenty = $_POST['twenty'];
	$ten = $_POST['ten'];
	$kobole = $_POST['kobole'];
	$total=$_POST['cash_hapa'];
	$purchases = $_POST['purchase_hapa'];
	$money_out = $_POST['money_out'];
	$begbal = $_POST['beg'];
	$sales=$_POST['total_sales'];
$sql="SELECT today FROM `balancing` WHERE `today`='$today'";   // CHECK IF TODAY'S DATE EXISTS
$qr = $conn->prepare($sql);
$qr->execute();
$res=$qr->fetch();
if($res["today"]!==NULL && $res["today"]!==""){
	echo "Transactions on this date, ".$today." already recorded!";
	return;
	?>
<!--<script> alert("Transactions on this date // echo $today; already recorded")</script>-->
	<?php

}else{


	$add = $conn->prepare("INSERT INTO balancing (Today, one_k, five, two, one, fifty, forty, twenty, ten, kobole,total,purchases,money_out,begbal,grand_sales)
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
	if($add->execute(array($today,$one_k,$five,$two,$one,$fifty,$forty,$twenty,$ten,$kobole,$total,$purchases,$money_out,$begbal,$sales)))
	{
	echo 1;
	return;//"Operation Successfull";
	?>
<!--<script> alert("Operation Successfull")</script>-->

	<?php

	}else{
		echo 0;
		return;//"Operation Failed";
?>
<!--<script> alert("Operation Failed")</script>-->
<?php	}
}
}

?>