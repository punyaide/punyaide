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
		
		<section id="product-header" data-speed="6" data-type="background">
				<h1>Web & System Developmen</h1>	
				<h2>Temukan Solusi Website dan Sistem Terbaik Anda !</h2>
		</section>

		<div class="container-products">	
			
			<div class="main">
				<ul id="og-grid" class="og-grid">
				
					<li class="hover-over">
						<a href="<?=$website_url;?>/content/<?=$folder;?>/product/dus-sepatu-tali.html"  class= "effect-chico" style="background-image:url('<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/percetakan-2.png');background-size:cover;" data-largesrc="<?=$website_url;?>/content/<?=$folder;?>/images/dus-sepatu-tali.jpg" data-title="Dus Sepatu Tali" data-description="Dus sepatu dengan tambahan aksesoris tali, sehingga memudahkan untuk dibawa kemana-mana. Cocok untuk sepatu jenis apapun.">
							<img src="<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/percetakan.png" alt="percetakan"/>
							<div id="overlay"></div>
							<h2 class="product-name">Percetakan</h2>
						</a>
					</li>		
					<li class="hover-over big-logo" >
						<a href="<?=$website_url;?>/content/<?=$folder;?>/product/dus-sepatu-boots.html"  class="effect-chico" style="background-image:url('<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/desain-2.png');background-size:cover;" data-largesrc="<?=$website_url;?>/content/<?=$folder;?>/images/dus-sepatu-boots.jpg" data-title="Dus Sepatu Boots" data-description="Dus berukuran besar ini cocok untuk sepatu berjenis boots yang relatif lebih besar. Tali jerami menjadikan dus ini tidak memerlukan tas tambahan.">
							<img src="<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/desain.png" alt="desain"/>							
							<div id="overlay"></div>
							<h2 class="product-name">Desain</h2>
						</a>
					</li>
					<li class="hover-over">
						<a href="<?=$website_url;?>/content/<?=$folder;?>/product/dus-sepatu-wedges.html" class="effect-chico" style="background-image:url('<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/konveksi-2.png');background-size:cover;" data-largesrc="<?=$website_url;?>/content/<?=$folder;?>/images/dus-sepatu-wedges.jpg" data-title="Dus Sepatu Wedges" data-description="Dus dengan ukuran yang ramping dan lebih tinggi, pas untuk sepatu wanita yang lebih ramping dan tinggi. Tambahan tali menjadikan dus ini menyenangkan dan ringan untuk dibawa.">
							<img src="<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/konveksi.png" alt="Konveksi"/>
							<div id="overlay"></div>
							<h2 class="product-name">Konveksi</h2>
						</a>
					</li>
					<li class="hover-over">
						<a href="<?=$website_url;?>/content/<?=$folder;?>/product/dus-flat-shoes.html" class="effect-chico" style="background-image:url('<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/office-2.png');background-size:cover;" data-largesrc="<?=$website_url;?>/content/<?=$folder;?>/images/dus-flat-shoes.jpg" data-title="Dus Flat Shoes" data-description="Dus dengan ukuran paling kecil dibandingkan dengan dus sepatu lainnya, namun lebih dari cukup sebagai packaging flat shoes. Ukurannya yang kecil menjadikan dus ini menjadi lebih hemat biaya.">
							<img src="<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/office.png" alt="Office"/>
							<div id="overlay"></div>
							<h2 class="product-name">Office</h2>
						</a>
					</li>				
					<li class="hover-over">
						<a href="<?=$website_url;?>/content/<?=$folder;?>/product/dus-flat-shoes-tali.html" class="effect-chico" style="background-image:url('<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/promosi-2.png');background-size:cover;" data-largesrc="<?=$website_url;?>/content/<?=$folder;?>/images/dus-flat-shoes-tali.jpg" data-title="Dus Flat Shoes Tali" data-description="Perbedaan dus ini dengan dus untuk flat shoes lainnya terletak pada talinya yang berada di kedua sisi sehingga lebih mudah untuk dibawa. Memiliki orientasi vertikal, dus ini sempurna untuk sepatu tipe flat shoes.">
							<img src="<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/promosi.png" alt="Promosi"/>
							<div id="overlay"></div>
							<h2 class="product-name">Promosi</h2>
						</a>
					</li>					
					<li class="hover-over">
						<a href="<?=$website_url;?>/content/<?=$folder;?>/product/dus-sepatu-basic.html" class="effect-chico" style="background-image:url('<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/packaging-2.png');background-size:cover;" data-largesrc="<?=$website_url;?>/content/<?=$folder;?>/images/dus-sepatu-basic.jpg" data-title="Dus Sepatu Basic" data-description="Jenis dus ini sering kita jumpai di toko sepatu karena desainnya yang klasik dan sederhana. Bisa digunakan untuk sepatu jenis apapun, sesuai dengan brand yang ingin tampil sederhana.">
							<img src="<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/packaging.png" alt="Packaging"/>							
							<div id="overlay"></div>
							<h2 class="product-name">Packaging</h2>
						</a>
					</li>								
					<li class="hover-over">
						<a href="<?=$website_url?>/price_lists" class="effect-chico chico-custom" style="background-image:url('<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/custom-2.png');background-size:cover;" data-largesrc="<?=$website_url;?>/content/<?=$folder;?>/images/custom-2.png" data-title="Dus Custom" data-description="Brand anda ingin tampil beda dan unik? Kami menerima pemesanan dus custom sesuai dengan keinginan dan spesifikasi khusus. Hubungi kami untuk penjelasan lebih lengkap.">
							<img src="<?=$website_url;?>/content/<?=$folder;?>/images/thumbs/custom.png" alt="Custom"/>
							<div id="overlay"></div>
							<h2 class="product-name">Custom</h2>
						</a>
					</li>
					
				</ul>
			</div>
		</div><!-- /container -->
	<!-- 
*******************************************************
	Include Footer Template
******************************************************* 
-->
<?php include_once "content/$folder/footer.php"; ?>
<?php } ?>