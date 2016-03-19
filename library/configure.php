<?php

$site['structure']  	= 'WisasiCMS';
$site['ver']        	= '1.0';
$site['build']      	= '0';
$site['release']    	= '01 November 2015';

$site['title']      	= "Punya Ide";
$site['url']     	 	= "http://www.punyaide.com/";
$site['adm']  		 	= "{$site['url']}admin/";
$site['con']     	 	= "{$site['url']}content/";
$site['lib']  		 	= "{$site['url']}library/";

$dir['root']        	= "/home/u659134294/public_html/"; 
$dir['adm']         	= "{$dir['root']}admin/";
$dir['con']         	= "{$dir['root']}content/";
$dir['lib']         	= "{$dir['root']}library/";

define('W_DIRECTORY_PATH_ADM', $dir['adm']);
define('W_DIRECTORY_PATH_CON', $dir['con']);
define('W_DIRECTORY_PATH_LIB', $dir['lib']);

$db['host']          	= "mysql.idhostinger.com";
$db['sock']          	= "";
$db['port']          	= "";
$db['user']          	= "u659134294_ide";
$db['passwd']			= "punyaide";
$db['db']				= "u659134294_punya";

define('DATABASE_HOST', $db['host']);
define('DATABASE_SOCK', $db['sock']);
define('DATABASE_PORT', $db['port']);
define('DATABASE_USER', $db['user']);
define('DATABASE_PASS', $db['passwd']);
define('DATABASE_NAME', $db['db']);

if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
	error_reporting(E_ALL & ~E_NOTICE);
  
if (file_exists( $dir['root'] . 'install' )){
$ret = <<<EOJ
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>WisasiCMS Installation</title>
			<link href="{$site['url']}install/css/bootstrap.min.css" rel="stylesheet" />
			<link href="{$site['url']}install/css/docs.css" rel="stylesheet" />
			<link href='{$site['url']}install/favicon.png' rel='icon' />
			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			  <script src="{$site['url']}install/js/html5shiv.js"></script>
			  <script src="{$site['url']}install/js/respond.min.js"></script>
			<![endif]-->
		</head>
		<body class="bs-docs-home">
			<a class="sr-only" href="#content">Skip navigation</a>
			<div id="main">
			<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="./" class="navbar-brand">WisasiCMS</a>
					</div>
					<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
						<ul class="nav navbar-nav">
							<li><a>Congratulations</a></li>
						</ul>
					</nav>
				</div>
			</header>
			<main class="bs-masthead" id="content" role="main">
				<div class="container">
					<h1>{$site['structure']} {$site['ver']}.{$site['build']}</h1>
					<h2>Release {$site['release']}</h2>
					<p>&nbsp</p>
					<h4>Anda telah berhasil menginstall WisasiCMS silahkan remove 'install' directory</h4>
				</div>
			</main>
			<footer class="container" role="contentinfo">
				<ul class="bs-masthead-links">
					<li class="current-version">{$site['structure']} {$site['ver']}.{$site['build']}</li>
					<li>&copy; 2013-2015. All Right Reserved</li>
					<li><a href="http://www.wisasi.com" target="_blank">WisasiCMS Official Website</a></li>
				</ul>
			</footer>
			<script src="{$site['url']}install/js/jquery.js"></script>
			<script src="{$site['url']}install/js/bootstrap.min.js"></script>
		</body>
	</html>
EOJ;
echo $ret;
exit();
}

?>