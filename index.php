<?php
include('connect.php')
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="production/stylesheet.css">
	<!-- icon -->
	<link rel="icon" href="images/signpost.jpg" >
	<title>Bavaria Retail</title>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		} 
		body{
			/*background-color: green;*/
		}
		/*#ourMessagebox{
			font-size:9px;
			font-style:italic;
		}*/
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px;">Login </button>
				<div>
				<strong><center><h1 style="color:blue">BAVARIA SHOP DAILY SALES MONITOR</h1></center></strong>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="modal-dept">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<!-- modal header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<center><h2 style="color:green">BAVARIA RETAIL</h2></center>
								<h3>Log in...</h3>
							</div>
							<!-- modal body -->
							<div class="modal-body">
                              <div id="ourMessagebox"></div>
								<div class="tab-content">
									<!-- Admin -->
									
										<h3>Admin</h3>
										<form method="post">
											<div class="form-group">
												<input type="text" class="form-control" name="admin_username" placeholder="Username" autocomplete="off">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="adminPass" placeholder="Password" autocomplete="off">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-admin">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
											</div>
										</form>
									
									<!-- student -->
								</div>
							</div>
						</div>
					</div>
				</div> <!-- ENNNNNNNNNND MODAL-->				

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<!-- carousel -->
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding:20px 20px 20px 20px;">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/signpost.jpg" alt="Cedric" width="460" height="200">
					</div>
					<div class="item">
						<img src="images/signpost.jpg" alt="Cedric" width="460" height="200">
					</div>

					<div class="item">
						<img src="images/shop.jpg" alt="Cedric" width="460" height="200">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="icon-prev" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="icon-next" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<br />
		<div class="row"> 
			<div class="col-md-5 mv">
				<center><h3 style="color:red">Welcome To Bavaria </h3></center>
				<b><p>The Customer keeps us Going...</p></b>
			</div>
			<div class="col-md-5 mv">
				<center><h3 style="color:red">This Is Bavaria</h3></center>
				<b><p>We Value All Our Customers.</p></b>
				</div>
			</div>
		</div>
		<script src="js/jquery-1.12.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>
<script>
	jQuery(function(){
		$('.signin-button-admin').click(function(e){
			e.preventDefault();

			var uname = $.trim($('input[name="admin_username"]').val());
			var pass = $.trim($('input[name="adminPass"]').val());
			//validating admin login
	if(uname===""){
	$('input[name="admin_username"]').css("border-color","red");
 	return;
 }
if(pass===""){
	$('input[name="adminPass"]').css("border-color","red");
 	return;
 }

			$.ajax({
				type: 'POST',
				url: 'loginAdmin.php',
				data: {admin_username: uname, adminPass: pass}
			})
			.done(function(res){
				console.log(res);
				if (res == 1 ){
					document.getElementById('ourMessagebox').innerHTML="<div class=\"alert alert-success\">Login Success...Please Wait!</div>";
					setTimeout(function(){
						document.getElementById('ourMessagebox').innerHTML="";
						window.location.href = "balancing.php";
					},3000);
				}else{
					//alert('Login failed!');
					document.getElementById('ourMessagebox').innerHTML="<div class=\"alert alert-danger\">Wrong Username/Password Combination!</div>";
					$('input[name="admin_username"]').focus();
					$('input').val('');
					setTimeout(function(){
						document.getElementById('ourMessagebox').innerHTML="";
					},3000);
				}
			});
			}); //End Admin
	});
</script>
</body>
</html>