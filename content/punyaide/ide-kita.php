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

			<div id="kontak">
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<img src="<?=$website_url;?>/content/<?=$folder;?>/images/logo-small.png" class="logo-kontak center-block"/>
						<p class="text-center">
							Solusi Ide Kreatif Anda ! </p>
										<p class="text-center">
							Apa Idemu ? Pilih Dibawah ini !
						</p>
					</div>
					<div style="text-align:center; color:#fff;">
						<a href="creative" class="href-home"><div class="col-md-3 kontak-img"><img src="<?=$website_url;?>/content/<?=$folder;?>/images/percetakan.png" alt="Percetakan, Promosi & Desain" title="Percetakan, Promosi & Desain"/>Percetakan, Promosi & Desain</div></a>
						<a href="multimedia" class="href-home"><div class="col-md-3 kontak-img"><img src="<?=$website_url;?>/content/<?=$folder;?>/images/foto.png" alt="Photography & Video Shooting" title="Photography & Video Shooting"/>Photography & Video Shooting</div></a>
						<a href="web-development" class="href-home"><div class="col-md-3 kontak-img"><img src="<?=$website_url;?>/content/<?=$folder;?>/images/web.png" alt="Web & System Development" title="Web & System Development"/>Web & System Development</div></a>
						<a href="event" class="href-home"><div class="col-md-3 kontak-img"><img src="<?=$website_url;?>/content/<?=$folder;?>/images/events.png" alt="Event Organizer" title="Event Organizer"/>Event Organizer</div></a>
					</div>
					</div>
					<button type="button" id="trigger-overlay" class="kotak-button center-block"><a href="contact">Contact Us</a></button>
				</div>
			</div>


<!-- 
*******************************************************
	Include Footer Template
******************************************************* 
-->
<?php include_once "content/$folder/footer.php"; ?>
<?php } ?>