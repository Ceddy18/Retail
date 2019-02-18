
<html>
<head>
<link rel="icon" href="images/signpost.jpg" >
<title>Bavaria Retail</title>
<style>
body {
max-width: 1200px; margin: 0 auto }

div.left {
width: 22%; 
height:auto ;
padding: 0 0 0 5%;
float: left;
border: 1px solid blue;

}

div.content {
width: 38%;
height:85%;
padding: 0 5%;
float: left;
border: 1px solid blue;
}

div.right {
width: 18%;
height:85%; 
padding: 0 5% 0 0;
float: left;
border: 1px solid blue;

}

img.avatar {
	width: 10%;
	border-radius: 5%;
    float: left;
}
ul {
    list-style-type: none ;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}
header, footer {
    padding: 3px;
    color: blue;
    background-color:orangered;
    clear: left;
    text-align: center;
}
h4{
    color: red;
}
.tarehe{
	color:green;
	font-family:Tahoma;
	font-size:16px;
	font-weight: bold;
}
label{
	color:blue;
	font-size:16px;
	font-family: Tahoma;
	font-weight: normal;
	padding-top:25px;
}
.cash{
	color:red;
	font-size:20px;
	font-weight:bold;
	font-family: Tahoma;
}
.leocash{
	height:35px;
	width: 100px;
	border: solid green 1px;
}
input.leocash{
	color:green;
	font-family:Tahoma;
	font-size:16px;
	font-weight: bold;
}
input.penny{
	color:green;
	background-color:orange;
	font-family:Tahoma;
	font-size:16px;
	font-weight: normal;
	border: 2px solid pink;
}
label.pach{
	color:black;
	font-size:20px;
	font-family: Tahoma;
	font-weight: bold;
	padding-top:25px;
}
label.begbal{
	color:orange;
	font-size:20px;
	font-family: Tahoma;
	font-weight: bold;
	padding-top:25px;
}
div.accountings{
	border:1px solid green;
	height: 500px;
}
label.saless{
	color:green;
	font-size:20px;
	font-family: Tahoma;
	font-weight: bold;
}
.cash1{
	color:blue;
	font-size:20px;
	font-weight:bold;
	font-family: Tahoma;
	height:10px;
}
.sale{
	border: 1px solid blue;
	color:blue;
	font-size:20px;
	font-weight:bolder;
	font-family:Tahoma;
	float: right;
	width:40%;
	height:22px;
}
.purchases{
	border: 1px solid black;
	color:black;
	font-size:20px;
	font-weight:bolder;
	font-family:Tahoma;
	float: right;
	width:40%;
	height: 22px;
}
.money{
	border: 1px solid red;
	color:red;
	font-size:20px;
	font-weight:bolder;
	font-family:Tahoma;
	float: right;
	width:40%;
	height:22px;
}
.balance{
	border: 1px solid orange;
	color:orange;
	font-size:20px;
	font-weight:bolder;
	font-family:Tahoma;
	float: right;
	width:40%;
	height: 22px;
}
.totals{
	border: 1px solid green;
	color:green;
	font-size:20px;
	font-weight:bolder;
	font-family:Tahoma;
	float: right;
	width:40%;
	height:22px;
}
span{
	;
}
#v1Error, #v2Error ,#v3Error, #v4Error ,#v5Error ,#v6Error ,#v7Error, #v8Error ,#v9Error{
	color:red;
}
</style>

</head>
<body class="bg">

<div class="container">

<header>
  <img src ="images/signpost.jpg" alt="Avatar" class="avatar">
   <h2>BAVARIA RETAIL SHOP</h2>
</header>
<form method="POST" action="add_balancing.php">
  <div class="left">
  <div class="tarehe">
  <input type="text" class="tarehe" name="today" readonly value=" <?php
  $todayy=date(" D M d, Y G:i"); 
  echo  date(' l,F j,Y', strtotime($todayy)) . "";
  ?>"/>
  
  <br>
  </div>
    <label>Ksh.1000:</label><br><input type="text" class="penny" name="k" placeholder="Thousands" id="v1" class="form-control" autocomplete="off" onkeyup="sum()" onblur="validateOnek('v1')"><br/>
	<div id="v1Error" style="display:none;">Positive numbers only</div>
	<label>Ksh.500:</label><br><input type="text" class="penny" name="five" id="v2" placeholder="Five Hundred" autocomplete="off" onkeyup="sum()" onblur="validateFive('v2')"><br>
	<div id="v2Error" style="display:none;">Positive numbers only</div>
	<label>Ksh.200:</label><br><input type="text" class="penny" name="two" id="v3" placeholder="Two Hundred" autocomplete="off" onkeyup="sum()" onblur="validateTwo('v3')"><br>
	<div id="v3Error" style="display:none;">Positive numbers only</div>
    <label>Ksh.100:</label><br><input type="text" class="penny" name="one" id="v4" placeholder="One Hundred" autocomplete="off" onkeyup="sum()" onblur="validateHundred('v4')"><br>
	<div id="v4Error" style="display:none;">Positive numbers only</div>
	<label>Ksh.50:</label><br><input type="text" class="penny" name="fifty" id="v5" placeholder="Fifty" autocomplete="off" onkeyup="sum()" onblur="validateFifty('v5')"><br>
	<div id="v5Error" style="display:none;">Positive numbers only</div>
	<label>Ksh.40:</label><br><input type="text" class="penny" name="forty" id="v6" placeholder="Fourty" autocomplete="off" onkeyup="sum()" onblur="validateForty('v6')"><br>
	<div id="v6Error" style="display:none;">Positive numbers only</div>
	<label>Ksh.20:</label><br><input type="text" class="penny" name="twenty" id="v7" placeholder="Twenty" autocomplete="off" onkeyup="sum()" onblur="validateTwenty('v7')"><br>
	<div id="v7Error" style="display:none;">Positive numbers only</div>
	<label>Ksh.10:</label><br><input type="text" class="penny" name="ten" id="v8" placeholder="Ten Bob" autocomplete="off" onkeyup="sum()" onblur="validateTen('v8')"><br>
	<div id="v8Error" style="display:none;">Positive numbers only</div>
	<label>Ksh.5:</label><br><input type="text" class="penny" name="kobole" id="v9" placeholder="Five Bob" autocomplete="off" onkeyup="sum()" onblur="validateKobole('v9')"><br/>
	<div id="v9Error" style="display:none;">Positive numbers only</div>
	<hr>
	<label class="cash">CASH:</label>
	<span>Kshs: </span><input type ="text" class="leocash" name="cash_hapa" id="result" onkeyup="sum()" readonly>
  </div>

<div class ="content">
  <div class="accountings">
  <h1>Fill in Appropriately:</h1>
  <label class="cash1">CASH         :</label>
  <span>Kshs: </span><input type ="text" class="sale" name="sales" id="w1" onkeyup="sum()" readonly><br/><br/>
  <label class="pach">PURCHASES:</label>
  <span>Kshs: </span><input type ="text" class="purchases" name="purchase_hapa" id="w2" autocomplete="off" onkeyup="accounting()"><br/><br/>
  
  <label class="cash">MONEY OUT:</label>
  <span>Kshs: </span><input type ="text" class="money" name="money_out" id="w3" autocomplete="off" onkeyup="accounting()"><br/><br/>
  
  <label class="begbal">BEGINNING BAL:</label>
  <span>Kshs: </span><input type ="text" class="balance" name="beg" id="w4" autocomplete="off" onkeyup="accounting()"><br/><br/>
  <hr>
    <label class="saless">TOTAL SALES:</label>
	
  <span>Kshs: </span><input type ="text" class="totals" name="total_sales" id="sales" onkeyup="accounting()" readonly><br/>
  <hr>
  <hr>
  <br/>
  <br/>
  
  <button type="submit" name= "save" class="btn btn-primary" onClick="validateForm()">SAVE</button>
  <div id="ourError"></div>
  </div>
</div>

<div class ="right">
  <h4>News</h4>
  <p>Mama is sick... put her in your prayers!.</p>
</div>
<footer>Copyright &copy; 2018 <script type="text/javascript"> new Date().getFullYear()
2018 && document.write("-"+new Date().getFullYear());
</script>, Bavaria Shop.</footer>
</form>

</body>
<script type="text/javascript">

function sum(){
var result = document.getElementById('result');
var resul = document.getElementById('w1');
var  el,i=1,total = 0; 
while( el=document.getElementById('v'+(i++))){
	el.value=el.value.replace(/\\D/,"");
	total=Number(v1.value*1000)+Number(v2.value*500)+Number(v3.value*200)+Number(v4.value*100)+Number(v5.value*50)+Number(v6.value*40)+Number(v7.value*20)+Number(v8.value*10)+Number(v9.value*5);
}
result.value = total;
w1.value=total;
if(document.getElementById('v1').value =="" && document.getElementById('v2').value =="" && document.getElementById('v3').value =="" && document.getElementById('v4').value =="" && document.getElementById('v5').value =="" && document.getElementById('v6').value =="" && document.getElementById('v7').value =="" && document.getElementById('v8').value =="" && document.getElementById('v9').value =="" ){
 result.value ="";
}
}
//function for accountings
function accounting(){
	var sales=document.getElementById('sales');
	var ac,j=1,tot=0;
	while(ac=document.getElementById('w'+(j++))){
		ac.value=ac.value.replace(/\\D/,"");
		tot=(Number(w1.value)+Number(w2.value)+Number(w3.value))-Number(w4.value)
	}
	sales.value=tot;
	if(document.getElementById('w1').value =="" && document.getElementById('w2').value =="" && document.getElementById('w3').value =="" && document.getElementById('w4').value =="" ){
		sales.value="";
	}
}
//input validations
//validating 1000 field
function validateOnek(x){
var nem=/\d{1,2}$/;
//check input
//alert(document.getElementById(x).value);
if(nem.test(document.getElementById(x).value)){
	//color white
	document.getElementById(x).style.background='white';
	// hide error prompt
	document.getElementById(x+'Error').style.display="none";
	return true;
}else{
	//color red
	document.getElementById(x).style.background='red';
	//show error prompt
	document.getElementById(x+'Error').style.display="block";
	return false;
}

}
//validating 500 field
function validateFive(x){
var nem=/\d{1,2}$/;
//check input
//alert(document.getElementById(x).value);
if(nem.test(document.getElementById(x).value)){
	//color white
	document.getElementById(x).style.background='white';
	// hide error prompt
	document.getElementById(x+'Error').style.display="none";
	return true;
}else{
	//color red
	document.getElementById(x).style.background='red';
	//show error prompt
	document.getElementById(x+'Error').style.display="block";
	return false;
}

}
//validating 200 field
function validateTwo(x){
var nem=/\d{1,2}$/;
//check input
//alert(document.getElementById(x).value);
if(nem.test(document.getElementById(x).value)){
	//color white
	document.getElementById(x).style.background='white';
	// hide error prompt
	document.getElementById(x+'Error').style.display="none";
	return true;
}else{
	//color red
	document.getElementById(x).style.background='red';
	//show error prompt
	document.getElementById(x+'Error').style.display="block";
	return false;
}

}
//validating 100 field
function validateHundred(x){
var nem=/\d{1,2}$/;
//check input
//alert(document.getElementById(x).value);
if(nem.test(document.getElementById(x).value)){
	//color white
	document.getElementById(x).style.background='white';
	// hide error prompt
	document.getElementById(x+'Error').style.display="none";
	return true;
}else{
	//color red
	document.getElementById(x).style.background='red';
	//show error prompt
	document.getElementById(x+'Error').style.display="block";
	return false;
}

}
//validating 50 field 
function validateFifty(x){
var nem=/\d{1,2}$/;
//check input
//alert(document.getElementById(x).value);
if(nem.test(document.getElementById(x).value)){
	//color white
	document.getElementById(x).style.background='white';
	// hide error prompt
	document.getElementById(x+'Error').style.display="none";
	return true;
}else{
	//color red
	document.getElementById(x).style.background='red';
	//show error prompt
	document.getElementById(x+'Error').style.display="block";
	return false;
}

}
//validating 40 field 
function validateForty(x){
var nem=/\d{1,2}$/;
//check input
//alert(document.getElementById(x).value);
if(nem.test(document.getElementById(x).value)){
	//color white
	document.getElementById(x).style.background='white';
	// hide error prompt
	document.getElementById(x+'Error').style.display="none";
	return true;
}else{
	//color red
	document.getElementById(x).style.background='red';
	//show error prompt
	document.getElementById(x+'Error').style.display="block";
	return false;
}

}
//validating 20 field 
function validateTwenty(x){
var nem=/\d{1,2}$/;
//check input
//alert(document.getElementById(x).value);
if(nem.test(document.getElementById(x).value)){
	//color white
	document.getElementById(x).style.background='white';
	// hide error prompt
	document.getElementById(x+'Error').style.display="none";
	return true;
}else{
	//color red
	document.getElementById(x).style.background='red';
	//show error prompt
	document.getElementById(x+'Error').style.display="block";
	return false;
}

}
// validating 10 field 
function validateTen(x){
var nem=/\d{1,2}$/;
if(nem.test(document.getElementById(x).value)){
	//color white
	document.getElementById(x).style.background='white';
	// hide error prompt
	document.getElementById(x+'Error').style.display="none";
	return true;
}else{
	//color red
	document.getElementById(x).style.background='red';
	//show error prompt
	document.getElementById(x+'Error').style.display="block";
	return false;
}

}
//validating 5 bob field
function validateKobole(x){
	var nem=/\d{1,2}$/;
	if(nem.test(document.getElementById(x).value)){
		document.getElementById(x).style.background='white';
		document.getElementById(x+'Error').style.display="none";
		return true;
	}else{
		document.getElementById(x).style.background='red';
		document.getElementById(x+'Error').style.display="block";
	}
}
//Validating the ENTIRE form now
function validateForm(){
	var error=0;
	if(!validateOnek('k')){
		document.getElementById('v1Error').style.display="block";
        error++;
		return;
	}
	if(!validateFive('five')){
       document.getElementById('v2Error').style.display="block";
	    error++;
		return;
}
if(!validateTwo('two')){
       document.getElementById('v3Error').style.display="block";
	    error++;
		return;
}
if(!validateHundred('one')){
       document.getElementById('v4Error').style.display="block";
	    error++;
		return;
}
if(!validateFifty('fifty')){
       document.getElementById('v5Error').style.display="block";
	    error++;
		return;
}
if(!validateForty('forty')){
       document.getElementById('v6Error').style.display="block";
	    error++;
		return;
}
if(!validateTwenty('twenty')){
       document.getElementById('v7Error').style.display="block";
	    error++;
		return;
}
if(!validateTen('ten')){
       document.getElementById('v8Error').style.display="block";
	    error++;
		return;
}
if(!validateKobole('kobole')){
       document.getElementById('v9Error').style.display="block";
	    error++;
		return;
}
	//send to db
//$("#pg").css("display","block");//display progress
var save="save";
//var today=$.trim($('input[name="today"]').val()); 
var today=$.trim($("#today option:selected").text());
var k=$.trim($('input[name="k"]').val());
var five=$.trim($('input[name="five"]').val());
var two=$.trim($('input[name="two"]').val());
var one=$.trim($('input[name="one"]').val());
var fifty=$.trim($('input[name="fifty"]').val());
var forty=$.trim($('input[name="forty"]').val());
var twenty=$.trim($('input[name="twenty"]').val());
var ten=$.trim($('input[name="ten"]').val());
var kobole=$.trim($('input[name="kobole"]').val());
var total=$.trim($("#cash_hapa option:selected").text());
var purchases=$.trim($('input[name="purchase_hapa"]').val());
var money_out=$.trim($('input[name="money_out"]').val());
var begbal=$.trim($('input[name="beg"]').val());
var sales=$.trim($("#total_sales option:selected").text());
            $.ajax({     
				type: 'POST',
				url: 'add_balancing.php',
				data: {save: save, today:today,k: k,five:five,two:two,one:one,fifty:fifty,forty:forty,twenty:twenty,ten:ten,kobole:kobole,total:total,purchases:purchase_hapa,money_out:money_out,begbal:beg,sales:total_sales}
			})
			.done(function(res){
				//alert(res);
				console.log(res);
				//$("#pg").css("display","none");//end display progress
				if (res == 1 ){
					document.getElementById('ourError').innerHTML="<div class=\"alert alert-success\">Record Saved Successfully!</div>";
					setTimeout(function(){
						document.getElementById('ourError').innerHTML="";
					},3000);

				}else if(res==0){
					document.getElementById('ourError').innerHTML="<div class=\"alert alert-danger\">Operation Failed!</div>";
					
					setTimeout(function(){
						document.getElementById('ourError').innerHTML="";
					},3000);
				}else{
					document.getElementById('ourError').innerHTML="<div class=\"alert alert-warning\">"+res+"</div>";
					
					setTimeout(function(){
						document.getElementById('ourError').innerHTML="";
					},3000);
				}
			}); 
}
</script>
</html>
    