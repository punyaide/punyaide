<?php if ($mod==""){
	header('location:../../404.php');
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">
<head>
	<!-- Your Basic Site Informations -->
	<title><?php include "title.php"; ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?php include "meta-desc.php"; ?>" />
    <meta name="keywords" content="<?php include "meta-key.php"; ?>" />
    <meta http-equiv="Copyright" content="wisasiCMS" />
    <meta name="author" content="wisasi" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="language" content="Indonesia" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />

    <!-- Social Media Meta -->
    <?php include "meta-social.php"; ?>

    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width" />

    <!-- Stylesheets -->
	<!-- Bootstrap -->
    <link rel="alternate" hreflang="id" href="http://www.punyaide.com/" />
    <link href="<?=$website_url;?>/content/<?=$folder;?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=$website_url;?>/content/<?=$folder;?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=$website_url;?>/content/<?=$folder;?>/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="<?=$website_url;?>/content/<?=$folder;?>/css/component.css" />
	
    <!-- Favicons -->
	<link rel="shortcut icon" href="<?=$website_url;?>/<?=$favicon;?>" />
		<link rel="apple-touch-icon" href="<?=$website_url;?>/content/<?=$folder;?>/apple-touch-icon.html">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=$website_url;?>/content/<?=$folder;?>/apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=$website_url;?>/content/<?=$folder;?>/apple-touch-icon-114x114.html">
		<link rel="apple-touch-icon" sizes="144x144" href="<?=$website_url;?>/content/<?=$folder;?>/apple-touch-icon-144x144.html">
	<script src="https://www.google.com/recaptcha/api.js"></script>
    
    <!-- PRICE LIST JQUERY -->
    <!-- <script type="text/javascript" src="<?=$website_url;?>/content/<?=$folder;?>/js/pricelist/jquery-latest.pack.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?=$website_url;?>/content/<?=$folder;?>/js/pricelist/jquery.selectboxes.pack.js"></script>
    <script type="text/javascript" src="<?=$website_url;?>/content/<?=$folder;?>/js/pricelist/data.pricelist.punyaide.js"></script>
</head>
<body>
<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="small-logo-container">
            <a class="small-logo" href="<?=$website_url;?>" hreflang="id"><img src="<?=$website_url;?>/content/<?=$folder;?>/images/logo-text.png"></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
              <nav>
                <?php 
                    $instance = new WisasiController;
                    $menu = $instance->wisasi_menu(1, 'class="nav navbar-nav navbar-right"', 'class="hovicon effect-1 sub-a"');
                ?>
                <?php echo $menu; ?>
            </nav>
            </div><!--/.nav-collapse -->
      </div>
    </div>

<?php } ?>