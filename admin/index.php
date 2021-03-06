<?php
session_start();
error_reporting(0);
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']) AND $_SESSION['login']==0){
	include_once '../library/database.php';
	$tableset = new WisasiTable('setting');
	$currentSet = $tableset->findBy(id_setting, '1');
	$currentSet = $currentSet->current();
	$member_register = $currentSet->member_register;
	if(!empty($_GET['errormsg'])){
		if($_GET['errormsg'] == 1){
			$errormsg = "<div class='alert alert-warning'>Please complete all form!<a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a></div>";
		}elseif($_GET['errormsg'] == 2){
			$errormsg = "<div class='alert alert-warning'>Username or password not correct!<a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a></div>";
		}else{
			header('location:./');
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="Copyright" content="Wisasicms" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Login Panel WisasiCMS" />
    <meta name="keywords" content="login panel wisasicms, wisasicms" />
    <meta name="generator" content="WisasiCMS v.1.0.0" />
    <meta name="author" content="Wisasi" />
    <meta name="language" content="Indonesia" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    <title>Login Panel</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png" />

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/plugins.css" />
	<link type="text/css" rel="stylesheet" href="css/main.css" />
	<link type="text/css" rel="stylesheet" href="css/themes.css" />

	<script type="text/javascript" src="js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
</head>
<body>
    <div class="top"><div class="colors"></div></div>
	<div id="login-container" class="animation-fadeIn">
		<div class="login-title text-center">
			<h1><strong>Login Panel</strong></h1>
		</div>
		<div class="block remove-margin">
			<div class="col-md-12">
				<?=$errormsg;?>
			</div>
			<form action="login.php" autocomplete="off" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
				<input type="hidden" name="mod" value="login" />
                <input type="hidden" name="act" value="proclogin" />
                <div class="form">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group form-item">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                <input type="text" id="login-email" name="username" class="form-control input-lg" placeholder="Username" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group box-password" style="display:none;">
                        <div class="col-xs-12">
                            <div class="input-group form-item">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <div class="box-con-password"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group box-password-lock" style="display:none;">
                        <div id="patternHolder" style="margin:0 auto;"></div>
                        <div class="box-con-password-lock"></div>
                    </div>
                    <div class="form-group form-actions box-action" style="display:none;">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Login to Dashboard</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <?php if($member_register == "Y"){ ?>
                            <p class="text-center remove-margin">
                                <small>Don't have an account ?</small> <a href="register.php" id="link-reg"><small>Create one for free !</small></a>
                            </p>
                            <?php } ?>
                            <p class="text-center remove-margin">
                                <small>Lost your password ?</small> <a href="javascript:void(0)" id="link-login"><small>Click here !</small></a>
                            </p>
                        </div>
                    </div>
                </div>
			</form>
			<form action="lostpassword.php" autocomplete="off" method="post" id="form-register" class="form-horizontal form-bordered form-control-borderless display-none">>
				<div class="form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="gi gi-envelope"></i></span>
							<input type="text" id="register-email" name="email" class="form-control input-lg" placeholder="Email" />
						</div>
					</div>
				</div>
				<div class="form-group form-actions">
					<div class="col-xs-6"></div>
					<div class="col-xs-6 text-right">
						<button type="submit" class="btn btn-sm btn-success">Send Email Activation</button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<p class="text-center remove-margin">
							<small>Back to</small> <a href="javascript:void(0)" id="link-register"><small>Login page !</small></a>
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/vendor/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript">
        gradient();
    </script>
    <script type="text/javascript">
        $("#login-email").on('keyup', function() {
            var username = $('#login-email').val();
            var mod = 'login';
            var act =  'searchlocktype';
            var dataString = 'username='+ username + '&mod='+ mod + '&act='+ act;
            $.ajax({
                type: "POST",
                url: "login.php",
                data: dataString,
                cache: false,
                success: function(data){
                    if (data == "0") {
                        $('.box-password').show();
                        $('.box-action').show();
                        $('.box-password-lock').hide();
                        $('.box-con-password').html('<input type="password" id="login-password" name="password" class="form-control input-lg" placeholder="Password" />');
                        $('.box-con-password-lock').html('');
                    } else if (data == "1") {
                        $('.box-password').hide();
                        $('.box-action').hide();
                        $('.box-password-lock').show();
                        $('.box-con-password').html('');
                        $('.box-con-password-lock').html('<input type="hidden" id="login-password-lock" name="password" />');
                    } else {
                        $('.box-password').hide();
                        $('.box-action').hide();
                        $('.box-password-lock').hide();
                        $('.box-con-password').html('');
                        $('.box-con-password-lock').html('');
                    }
                }
            });
            return false;
        });
        var lock = new PatternLock('#patternHolder',{
            margin:10,
            onDraw:function(pattern){
                var patternval = lock.getPattern();
                $("#login-password-lock").val(patternval);
                $("#form-login").submit();
            }
        });
    </script>
</body>
</html>
<?php
}else{
	header('location:admin.php?mod=home');
}
?>