<?php if ($mod==""){
	header('location:../../404.php');
}else{
	if ($member_register == "Y"){
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
<script type="text/javascript">
    $(document).ready(function() {
    	$('#menu_pilih').linkToMenu('#kategori_pilih');
        $('#kategori_pilih').linkToSubCategory('#sub_kategori_pilih');
        $('#sub_kategori_pilih').linkToUkuran('#ukuran_brosur');
        $('#ukuran_brosur').linkToJenisBrosur('#jenis_brosur');
        $('#jenis_brosur').linkToWarnaBrosur('#warna_brosur');
        $('#warna_brosur').linkToLaminasiBrosur('#laminasi_brosur');
        $('#laminasi_brosur').linkToLipatanBrosur('#lipatan_brosur');
        $('#lipatan_brosur').linkToJumlahBrosur('#jumlah_brosur');
        $( "#reset_form" ).click(function() {
			$('#menu_pilih').val('kosong');
		});

		$('#menu_pilih').change(function() {
        	var main_menu = $('#menu_pilih').val();
        	if(main_menu == 'kosong')
            {
            	$('#div_kategori').hide('slow');
            	$('#div_sub_kategori').hide('slow');
        		$('#catatan_all_category').hide('slow');
        		$('#ukuran_sub_category_brosur').hide('slow');
        		$('#jenis_sub_category_brosur').hide('slow');
        		$('#warna_sub_category_brosur').hide('slow');
        		$('#laminasi_sub_category_brosur').hide('slow');
        		$('#lipatan_sub_category_brosur').hide('slow');
        		$('#jumlah_sub_category_brosur').hide('slow');
        		$('#catatan_sub_category_brosur').hide('slow');
    		}
    		else
    		{
    			$('#catatan_all_category').hide('slow');
    		}
        });

        $('#kategori_pilih').change(function() {
        	var kategori = $('#kategori_pilih').val();
        	switch (kategori) {
				case 'design':
					$('#catatan_all_category').show('slow');
					$('#ukuran_sub_category_brosur').hide('slow');
	        		$('#jenis_sub_category_brosur').hide('slow');
	        		$('#warna_sub_category_brosur').hide('slow');
	        		$('#laminasi_sub_category_brosur').hide('slow');
	        		$('#lipatan_sub_category_brosur').hide('slow');
	        		$('#jumlah_sub_category_brosur').hide('slow');
	        		$('#catatan_sub_category_brosur').hide('slow');
				break;
				case 'konveksi':
					$('#catatan_all_category').show('slow');
					$('#ukuran_sub_category_brosur').hide('slow');
	        		$('#jenis_sub_category_brosur').hide('slow');
	        		$('#warna_sub_category_brosur').hide('slow');
	        		$('#laminasi_sub_category_brosur').hide('slow');
	        		$('#lipatan_sub_category_brosur').hide('slow');
	        		$('#jumlah_sub_category_brosur').hide('slow');
	        		$('#catatan_sub_category_brosur').hide('slow');
				break;
				case 'office':
					$('#catatan_all_category').show('slow');
					$('#ukuran_sub_category_brosur').hide('slow');
	        		$('#jenis_sub_category_brosur').hide('slow');
	        		$('#warna_sub_category_brosur').hide('slow');
	        		$('#laminasi_sub_category_brosur').hide('slow');
	        		$('#lipatan_sub_category_brosur').hide('slow');
	        		$('#jumlah_sub_category_brosur').hide('slow');
	        		$('#catatan_sub_category_brosur').hide('slow');
				break;
				case 'promosi':
					$('#catatan_all_category').show('slow');
					$('#ukuran_sub_category_brosur').hide('slow');
	        		$('#jenis_sub_category_brosur').hide('slow');
	        		$('#warna_sub_category_brosur').hide('slow');
	        		$('#laminasi_sub_category_brosur').hide('slow');
	        		$('#lipatan_sub_category_brosur').hide('slow');
	        		$('#jumlah_sub_category_brosur').hide('slow');
	        		$('#catatan_sub_category_brosur').hide('slow');
				break;
				case 'packaging':
					$('#catatan_all_category').show('slow');
					$('#ukuran_sub_category_brosur').hide('slow');
	        		$('#jenis_sub_category_brosur').hide('slow');
	        		$('#warna_sub_category_brosur').hide('slow');
	        		$('#laminasi_sub_category_brosur').hide('slow');
	        		$('#lipatan_sub_category_brosur').hide('slow');
	        		$('#jumlah_sub_category_brosur').hide('slow');
	        		$('#catatan_sub_category_brosur').hide('slow');
				break;
				case 'custom':
					$('#catatan_all_category').show('slow');
					$('#div_sub_kategori').hide('slow');
					$('#ukuran_sub_category_brosur').hide('slow');
	        		$('#jenis_sub_category_brosur').hide('slow');
	        		$('#warna_sub_category_brosur').hide('slow');
	        		$('#laminasi_sub_category_brosur').hide('slow');
	        		$('#lipatan_sub_category_brosur').hide('slow');
	        		$('#jumlah_sub_category_brosur').hide('slow');
	        		$('#catatan_sub_category_brosur').hide('slow');
				break;
				default:
					$('#catatan_all_category').hide('slow');
				break;
			}
        });
    });
</script>
		<div id="main"class="main">
			<div class="container">
				<div class="row">
					<div class="col-md-8 kontak-kotak1">
						<figure>
							<div class="drawings iphone big-logo">
								<h1>Daftar Harga</h1>
								<div class="row">
									<div class="col-md-10" id="reload_form">
										<form method="POST">
											<div class="form-group">
												<label>Pilih Divisi</label>
												<select class="form-control" name="menu_pilih" id="menu_pilih">
													<option value="kosong">Silahkan Pilih Divisi Yang Anda Butuhkan</option>
													<option value="percetakan_promosi_design">Percetakan, Promosi & Design</option>
													<option value="foto_video">Fotografi & Video</option>
													<option value="web_system">Pembuatan Web & Sistem</option>
													<option value="event_organizer">Event Organizer</option>
												</select>
											</div>

											<div class="form-group" id="div_kategori" style="display:none">
												<label>Pilih Kategori</label>
												<select class="form-control" name="kategori_pilih" id="kategori_pilih">
													<option>pilih kategori</option>
												</select>
											</div>

											<div class="form-group" id="div_sub_kategori" style="display:none">
												<label>Pilih Sub Kategori</label>
												<select class="form-control" name="sub_kategori_pilih" id="sub_kategori_pilih">
													<option value="">pilih sub category</option>
												</select>
											</div>


											<!-- form untuk brosur -->
											<div class="form-group" id="ukuran_sub_category_brosur" style="display:none">
												<label id="judul_ukuran">Pilih Ukuran Brosur</label>
												<select class="form-control" name="ukuran_brosur" id="ukuran_brosur">
													<option value="">Pilih Ukuran</option>
												</select>
											</div>

											<div class="form-group" id="jenis_sub_category_brosur" style="display:none">
												<label>Pilih Jenis Brosur</label>
												<select class="form-control" name="jenis_brosur" id="jenis_brosur">
													<option value="">Pilih Jenis Brosur</option>
												</select>
											</div>

											<div class="form-group" id="warna_sub_category_brosur" style="display:none">
												<label>Pilih Warna Brosur</label>
												<select class="form-control" name="warna_brosur" id="warna_brosur">
													<option value="">Pilih Warna Brosur</option>
												</select>
											</div>

											<div class="form-group" id="laminasi_sub_category_brosur" style="display:none">
												<label>Pilih Laminasi Brosur</label>
												<select class="form-control" name="laminasi_brosur" id="laminasi_brosur">
													<option value="">Pilih Jenis Laminasi Brosur</option>
												</select>
											</div>

											<div class="form-group" id="lipatan_sub_category_brosur" style="display:none">
												<label>Pilih Lipatan Brosur</label>
												<select class="form-control" name="lipatan_brosur" id="lipatan_brosur">
													<option value="">Pilih Jenis Lipatan Brosur</option>
												</select>
											</div>

											<div class="form-group" id="jumlah_sub_category_brosur" style="display:none">
												<label>Jumlah Pesanan Browsur</label>
												<select class="form-control" name="jumlah_brosur" id="jumlah_brosur">
													<option value="">Pilih Jumlah Brosur</option>
												</select>
												<p>Minimal pemesanan 500 lembar</p>
											</div>

											<div class="form-group" id="catatan_sub_category_brosur" style="display:none">
												<label>Catatan Khusus Untuk Pesanan Anda</label>
												<textarea class="form-control" placeholder="Tuliskan Catatan untuk pesanan anda disini..."></textarea>
											</div>

											<div class="form-group" id="catatan_all_category" style="display:none">
												<label>Catatan Khusus Untuk Pesanan Anda</label>
												<textarea class="form-control" placeholder="Tuliskan Catatan untuk pesanan anda disini..."></textarea>
											</div>

											<button type="submit" class="btn btn-success">PESAN</button>
											<button class="btn btn-danger" id="reset_form">RESET</button>
										</form>
									</div>
								</div>
							</div>
						</figure>
					</div>
					<div class="col-md-4 kontak-kotak">
						<h2>Contact Us</h2>
						<p>Text/Whatsapp: +62 85659922339</p>
						<p>BBM: 7CDB8481</p>
						<p>Email: kotakpackaging@gmail.com</p>
						<p>Instagram: kotak.packaging</p>
						<p>Twitter: kotakpackaging</p>
						<p>Facebook:kotakpackaging</p>
						<p>Kontak kami untuk melakukan pemesanan. Keterangan lebih lanjut lihat <a href="faq.html">FAQ</a></p>
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
<?php
	}else{
		header('location:404.php');
	}
}
?>