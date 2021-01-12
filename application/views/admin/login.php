<!DOCTYPE html>
<html lang="en">
<head>
	<title>Election Panel Login</title>
	<?php include("header-css.php");?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/ico" href="<?php echo base_url();?>assetsAdmin/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsAdmin/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsAdmin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsAdmin/login/vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsAdmin/login/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsAdmin/login/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsAdmin/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetsAdmin/login/css/main.css">

</head>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url();?>assetsAdmin/login/images/img-03.png" alt="IMG">

				</div>
				<form class="login100-form validate-form" id="loginForm" method="POST">
					<span class="login100-form-title">
						Election Panel Login
					</span>
					<table>
					<tr>
					<td colspan="2">
					<div class="wrap-input100 validate-input" data-validate = "User ID is required">
						<input class="input100" id="uId" type="text" name="uId" placeholder="User ID">
						<span class="focus-input100"></span>
						<span class="symbol-input100"><i class="fas fa-user-shield"></i></span>
					</div>
					</td>
					</tr>
					<tr>
					<td colspan="2">
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					</td>
					</tr>
					<tr>
					
					<td colspan="2">
					<div class="container-login100-form-btn">
						<button type="button" class="login100-form-btn" id="btnLogin">
							Login
						</button>
					</div>
					</td>
					</tr>
					</table>
					
					<!-- <div class="text-center p-t-12"> -->
						<!-- <span class="txt1"> -->
							<!-- Forgot -->
						<!-- </span> -->
						<!-- <a class="txt2" href="#"> -->
							<!-- Username / Password? -->
						<!-- </a> -->
					<!-- </div> -->

					<!-- <div class="text-center"> -->
						<!-- <a class="txt2" href="#"> -->
							<!-- Create your Account -->
							<!-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> -->
						<!-- </a> -->
					<!-- </div> -->
					<?php require_once('common-hid-fields.php');?>
				</form>
			</div>
		</div>
	</div>
	
 <?php 
		$ci = get_instance(); // CI_Loader instance
         $ci->load->config('config');
         $adminController = $ci->config->item('admin_controller');

 ?>

	 
 <!-- Bootstrap modal FOR ADDING AND EDITING -->
	<div class="card">
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><strong>Forgot Password</strong></h3>
				<small>* indicates required field.</small>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id" class="optional"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label for="UserId" class="control-label col-md-3">User Id*</label>
                            <div class="col-md-9">
                                <input name="UserId" id="UserId" placeholder="User Id" class="form-control" required type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="control-label col-md-3">Email*</label>
                            <div class="col-md-9">
                                <input name="Email" id="Email" placeholder="Email address" class="form-control" required type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                        
                        
                        <!------ file upload BLOCK ends --->
             
					<?php require_once('common-hid-fields.php');?>
					</div>
                
                </form>
				
            </div>
            <div class="modal-footer">
                
                <button type="button" id="btnResetPass"  class="btn btn-primary">Send Reset Mail</button>
                <button type="button" class="btn btn-danger"  style="margin-top:0px !important;" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</div>
 
<!--===============================================================================================-->	
	<script src="<?php echo base_url();?>assetsAdmin/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assetsAdmin/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>assetsAdmin/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assetsAdmin/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assetsAdmin/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assetsAdmin/login/js/main.js"></script>


<input type="hidden" id="hidID" name="hidID" value="0" class="optional" />
<input type="hidden" id="hidBASE_URL" name="hidBASE_URL" value="<?php echo base_url();?>" class="optional" />
<input type="hidden" id="hidAdminController" name="hidAdminController" value="<?php echo $adminController;?>" class="optional" />


  <!-- Bootstrap and necessary plugins -->
  <?php include "bottom-js.php";?>
  

  
  <script type="text/javascript" src="<?php echo base_url();?>assetsAdmin/js/admin/adminlogin.js"></script>
  
</body>
</html>