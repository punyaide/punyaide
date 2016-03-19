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


		
			<div class="wrapper">
				<div class="main">
					
					<section class="page1">
						<div class="page_container">
							<h1>Detailed Print</h1>
							<h2>Hasil sablon yang tajam siap membuat desain anda tetap terlihat hebat pada packaging.</h2>
							<a href="products.html" class="kotak-button">Our Products</a>
						</div>
					</section>
					
					<section class="page2">
						<div class="page_container">
							<h1>Top Quality</h1>
							<h2>Terbuat dari bahan yang kuat ditambah berbagai teknik opsional seperti emboss, siap membuat dus anda terlihat lebih sempurna. </h2>
						</div>
					</section>
					
					<section class="page3">
						<div class="page_container">
							<h1>Custom Ready</h1>
							<h2>Buat Brand anda menjadi lebih unik dengan dus custom. Hubungi kami untuk konsultasi terlebih dahulu.</h2>
							<a href="contact.html" class="kotak-button">Contact Us</a>
						</div>
					</section>
				</div>
			</div>
			


  	<!-- 
*******************************************************
	Include Footer Template
******************************************************* 
-->
<?php include_once "content/$folder/footer.php"; ?>
<?php } ?>