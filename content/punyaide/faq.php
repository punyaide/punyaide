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
		<h2 class="faq">Frequently Asked Questions</h2>
		 <div class="panel-group big-logo" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							Apa Itu Punya Ide?
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse">
					<div class="panel-body">
						Punya ide adalah wadah untuk orang-orang muda yang kreatif untuk menciptakan dan memberikan solusi terbaik bagi perusahaan/instansi maupun perorangan. Didirikan dengan semangat independen untuk keberhasilan mitra kami untuk membangun merek dan meningkatkan penjualan. 
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							Apa saja yang dapat dibuat Punya ide.com ?
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse">
					<div class="panel-body">
						Punya ide khusus & berbakat di bidang : <br><br>
						Advertising & Promotion <br>
						Fotography & video shooting<br>
						Web & system development<br>
						Event organizer<br> 
						untuk melihat produk lebih lengkap klik
						<a href="ide-kita">daftar produk</a>.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							Kami mempunyai ide, apakah punya ide dapat membantu kami mewujudkannya?
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse">
					<div class="panel-body">
						Ya, kami ada untuk memberi solusi dari ide kreatif Anda. Konsultasikan terlebih dahulu ide Anda kepada Punyaide.com
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
							Berapa lama waktu pembuatannya?
						</a>
					</h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse">
					<div class="panel-body">
						Lama pengerjaan advertising & promosi estimasi 14 hari kerja.
						untuk fotografi & video shooting estimasi 14 hari kerja.
						untuk web & system development lama pengerjaan tergantung project yang diinginkan.
						untuk event organizer tentatif.

					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
							Mengenai Sistem pembayaran ?
						</a>
					</h4>
				</div>
				<div id="collapseSix" class="panel-collapse collapse">
					<div class="panel-body">
						Setelah anda submit project yang Anda percayakan pada punyaide.com, Anda akan mendapat email invoice. Pembayaran 50% setelah project diterima. Pelunasan dapat dilakukan setelah project selesai.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
							Kami ingin melakukan pemesanan ?
						</a>
					</h4>
				</div>
				<div id="collapseFive" class="panel-collapse collapse">
					<div class="panel-body">
						Anda dapat membuka menu <a href="price_lists">pricelist </a> lalu lengkapi data sesuai project Anda. Setelah pembayaran uang muka 50% dilakukan kami akan membuatkan sample dari project anda.
						kami akan menghubungi anda kembali setelah pengerjaan selesai, setelah anda menyelesaikan sisa pembayaran kami akan melakukan serah terima project. Untuk info lebih lanjut Anda dapat menghubungi kami di 08569939100 atau info@punyaide.com

					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
							Reputasi kami
						</a>
					</h4>
				</div>
				<div id="collapseSeven" class="panel-collapse collapse">
					<div class="panel-body">
						Kami telah berpengalaman dan dipercaya untuk menangani berbagai perusahaan/instansi maupun perorangan. Kami ada untuk memberi Solusi Ide Kreatif Anda.
					</div>
				</div>
			</div>
		</div>

	<?php include_once "content/$folder/footer.php"; ?>
<?php } ?>