<?php if ($mod==""){
	header('location:../../404.php');
}else{
?>
		<section id="footer" data-speed="5" data-type="background" style="background-position:80% 50%!important;">
		<footer>
			<div class="container footer">
				<div class="row">
					<div class="col-xs-12 col-md-8">
						<div class="row">
							<div class="col-xs-4">
								<ul class="list-unstyled">
									<li><h4>Punya Ide</h4></li>
									<li><a href="<?=$website_url?>/pages/tentang-kami">Tentang Kami</a></li>
									<li><a href="<?=$website_url?>/pages/visi-misi">Visi Misi</a></li>
									<li><a href="<?=$website_url?>/ide-kita">Produk Kita</a></li>
									<li><a href="#">Tulisan Kami</a></li>
								</ul>
							</div>
							<div class="col-xs-4">
								<ul class="list-unstyled">
									<li><h4>Help</h4></li>
									<li><a href="<?=$website_url?>/price_lists">Dafta Harga Custom</a></li>
									<li><a href="<?=$website_url?>/faq">FAQ</a></li>
									<li><a href="#">Syarat dan Ketentuan</a></li>
								</ul>
							</div>
							<div class="col-xs-4">
								<ul class="list-unstyled">
									<li><h4>Connect</h4></li>
									<li><a href="http://instagram.com/punyaide" target="_blank">Instagram</a></li>
									<li><a href="http://twitter.com/PunyaIdeDotCom" target="_blank">Twitter</a></li>
									<li><a href="https://www.facebook.com/punyaidedotcom" target="_blank">Facebook</a></li>
									<li><a href="https://plus.google.com/104633956142496114374" target="_blank">Google+</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-sm-12 col-md-4">
							<a class="logo-footer" href="<?=$website_url;?>"></a>
					</div>
				</div>
			</div>
		</footer>
	</section>

	<!--BUTTON OVERLAY-->
		<div class="overlay overlay-scale">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li>TEXT/WHATSAPP: +62 8569939100</li>
					<li>BBM: 589EB36A</li>
					<li>EMAIL: info@punyaide.com</li>
					<li>INSTAGRAM: punyaide</li>
					<li>FACEBOOK: punyaidedotcom</li>
					<li>TWITTER: punyaidedotcom</li>

				</ul>
			</nav>
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="<?=$website_url;?>/content/<?=$folder;?>/js/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=$website_url;?>/content/<?=$folder;?>/js/bootstrap.min.js"></script>
    <script src="<?=$website_url;?>/content/<?=$folder;?>/js/jquery.mobile.custom.min.js"></script>
    <script src="<?=$website_url;?>/content/<?=$folder;?>/js/modernizr.custom.js"></script>
    <script src="<?=$website_url;?>/content/<?=$folder;?>/js/defer.js"></script>
	<!--<script src="<?=$website_url;?>/content/<?=$folder;?>/js/demo1.js"></script>-->
	<script src="<?=$website_url;?>/content/<?=$folder;?>/js/jquery.nicescroll.min.js"></script>
	<script src="<?=$website_url;?>/content/<?=$folder;?>/js/grid.js"></script>
	<script src="<?=$website_url;?>/content/<?=$folder;?>/js/navbar.js"></script>
	<script src="<?=$website_url;?>/content/<?=$folder;?>/js/init.js"></script>
	<script type="text/javascript" src="<?=$website_url;?>/content/<?=$folder;?>/js/jquery.onepage-scroll.min.js"></script>
	<script src="<?=$website_url;?>/content/<?=$folder;?>/js/jquery.nicescroll.min.js"></script>
		<script>
			$(document).ready(function() {
					 $("#carousel").swiperight(function() {
							$(this).carousel('prev');
							});
					 $("#carousel").swipeleft(function() {
							$(this).carousel('next');
				 });
			});
		</script>
		<script type="text/javascript">
			function downloadJSAtOnload() {
			var element = document.createElement("script");
			element.src = "<?=$website_url;?>/content/<?=$folder;?>/js/defer.js";
			document.body.appendChild(element);
			}
			if (window.addEventListener)
			window.addEventListener("load", downloadJSAtOnload, false);
			else if (window.attachEvent)
			window.attachEvent("onload", downloadJSAtOnload);
			else window.onload = downloadJSAtOnload;
		</script>
		<script>
			$(document).ready(
				function() {
					$("html").niceScroll();
				}
			);
		</script>
		<script>
			$('#trigger-overlay').on('click', function() {
				// ga('send', 'event', 'button', 'click', 'nav-buttons');
				window.location = "<?php echo $website_url;?>/#";
			});
		</script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
		<script>
			$(document).ready(
				function() { 
					$("html").niceScroll();
				}
			);
		</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
		<script>
			$(document).ready(
				function() { 
					$("html").niceScroll();
				}
			);
		</script>
		
    <!-- JavaScript -->
	
</body>
</html>
<?php } ?>