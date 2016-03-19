<?php if ($mod==""){
	header('location:../../404.php');
}else{
?>
<!-- 
*******************************************************
	Include Header Template
******************************************************* 
-->
<?php include_once "content/$folder/header.php"; ?>

<!-- 
*******************************************************
	Main Content Template
******************************************************* 
-->
<div id="carousel" class="carousel slide carousel-fade big-logo" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
			</ol>
			<!-- Carousel items -->
			<div class="carousel-inner">
				<div class="active item">
					<div class="carousel-caption carousel-caption-1">
						<h1>Advertising, Promotion and Design</h1>
						<h2>Melayani Jasa Percetakan Promosi dan Design Grafis maupun Branding.</h2>
					</div>
				</div>
				<div class="item">
					<div class="carousel-caption">
						<h1>Photografi and Video Shooting</h1>
						<h2>Melayani Photo Editing dan Video Shooting baik Film pendek maupun Iklan.</h2>
					</div>
				</div>
				<div class="item">
					<div class="carousel-caption carousel-caption-3">
						<h1>Web and system development</h1>
						<h2>Melayani jasa Pembuatan Website, Pembuatan Sistem Aplikasi dan Penyewaan Hosting baik Perusahaan maupun Perorangan.</h2>
					</div>
				</div>
			</div>
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#carousel" data-slide="prev"><span class="pe-icon">&lsaquo;</span></a>
			<a class="carousel-control right" href="#carousel" data-slide="next"><span class="pe-icon">&rsaquo;</span></a>
		</div>

			<div id="kontak">
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<img src="<?=$website_url;?>/content/<?=$folder;?>/images/logo-small.png" class="logo-kontak center-block"/>
						<p class="text-center">
							Solusi Ide Kreatif Anda ! </p>
						<p class="text-center">
							Hubungi kami sekarang untuk penawaran menarik
						</p>
						<button type="button" id="trigger-overlay" class="kotak-button center-block"><a href="contact">Contact Us</a></button>
					</div>
					<div style="text-align:center; color:#333;">
						<a href="creative" class="href-home"><div class="col-md-3 kontak-img"><img src="<?=$website_url;?>/content/<?=$folder;?>/images/percetakan.png" alt="Percetakan, Promosi & Desain" title="Percetakan, Promosi & Desain"/>Percetakan, Promosi & Desain</div></a>
						<a href="multimedia" class="href-home"><div class="col-md-3 kontak-img"><img src="<?=$website_url;?>/content/<?=$folder;?>/images/foto.png" alt="Photography & Video Shooting" title="Photography & Video Shooting"/>Photography & Video Shooting</div></a>
						<a href="web-development" class="href-home"><div class="col-md-3 kontak-img"><img src="<?=$website_url;?>/content/<?=$folder;?>/images/web.png" alt="Web & System Development" title="Web & System Development"/>Web & System Development</div></a>
						<a href="event" class="href-home"><div class="col-md-3 kontak-img"><img src="<?=$website_url;?>/content/<?=$folder;?>/images/events.png" alt="Event Organizer" title="Event Organizer"/>Event Organizer</div></a>
					</div>

					</div>
				</div>
			</div>


<!-- 
*******************************************************
	Include Footer Template
******************************************************* 
-->
<?php include_once "content/$folder/footer.php"; ?>
<?php } ?>