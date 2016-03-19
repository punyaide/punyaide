;(function($) {
	var menu_percetakan = {
		'' 				: 'Pilih Kategori',
		'percetakan' 	: 'Percetakan',
		'design' 		: 'Design',
		'konveksi' 		: 'Konveksi',
		'office' 		: 'Office',
		'promosi' 		: 'Promosi & Merchandise',
		'packaging' 	: 'Packaging',
		'custom' 		: 'Custom'
	}
	var kategori_percetakan = {
		''				: 'Pilih Sub Kategori',
		'brosur' 		: 'Brosur',
		'buku' 			: 'Buku',
		'undangan' 		: 'Undangan',
		'banner' 		: 'Banner',
		'sticker' 		: 'Sticker'
	}

	var kategori_design = {
		'' 				: 'Pilih Kategori Design',
		'branding' 		: 'Branding',
		'grafis' 		: 'Design Grafis',
		'interior' 		: 'Design Interior'
	}

	var kategori_konveksi = {
		'kaos' 			: 'Kaos',
		'jaket' 		: 'Jaket',
		'polo' 			: 'Polo Shirt',
		'kemeja' 		: 'Kemeja Seragam',
		'topi' 			: 'Topi',
		'bordir' 		: 'Bordir & Sablon'
	}

	var kategori_office = {
		'kartu_nama' 	: 'Kartu Nama',
		'amplop' 		: 'Amplop',
		'ballpoint' 	: 'Ballpoint',
		'kop_surat' 	: 'Kop Surat',
		'company_profile' : 'Company Profile'
	}

	var kategori_promosi = {
		'goodie_bag' 	: 'Goodie Bag',
		'plastik' 		: 'Plastik',
		'pin' 			: 'Pin',
		'wristban' 		: 'Wristban',
		'kalender' 		: 'Kalender',
		'payung' 		: 'Payung',
		'jam' 			: 'Jam',
		'thumbler' 		: 'Thumbler',
		'handy_craft' 	: 'Handy Craft',
		'souvenir' 		: 'Souvenir'
	}

	var kategori_packaging = {
		'box_kardus' : 'Box & Kardus',
		'botol' : 'Botol',
		'mug' : 'Mug & Gelas'
	}

/* UNTUK BROSUR */

	var ukuran_sub_kategori_brosur = {
		'' 			: 'Pilih Ukuran Brosur',
		'a3_poster' : 'A3 ( Poster )',
		'a4' 		: 'A4',
		'a5_flyer' 	: 'A5 ( Flyer )'
	}

	var jenis_kertas_sub_kategori_brosur = {
		'' 			: 'Silahkan Pilih Jenis Kertas',
		'hvs_70' 	: 'HVS 70 gsm',
		'hvs_100' 	: 'HVS 100 gsm',
		'art_120' 	: 'Art Paper 120 gsm',
		'art_150' 	: 'Art Paper 150 gsm',
		'art_210' 	: 'Art Carton 210 gsm',
		'art_230' 	: 'Art Carton 230 gsm',
		'art_260' 	: 'Art Carton 260 gsm',
		'art_310' 	: 'Art Carton 310 gsm'
	}

	var warna_sub_kategori_brosur = {
		''				: 'Silahkan Pilih Warna',
		'full_1_sisi' 	: 'Full Color 1 Sisi',
		'full_2_sisi' 	: 'Full Color 2 Sisi'
	}

	var laminasi_sub_kategori_brosur = {
		'' 				: 'Silahkan Pilih Laminasi',
		'tanpa_laminasi': 'Tanpa Laminasi',
		'warna_doff' 	: 'Doff',
		'warna_glossy' 	: 'Glossy',
		'spot_uv' 		: 'Spot UV',
		'varnish_uv' 	: 'Varnish UV'
	}

	var lipatan_sub_kategori_brosur = {
		''				: 'Silahkan Pilih Jenis Lipatan',
		'tanpa_lipatan' : 'Tanpa Lipatan',
		'lipat_2' 		: 'Lipat 2',
		'lipat_3' 		: 'Lipat 3',
		'lipat_4' 		: 'Lipat 4'
	}

	var jumlah_sub_kategori_brosur = {
		''				: 'Silahkan Pilih Jenis Lipatan',
		'500' 			: '500 Lembar (1 RIM)',
		'1000' 			: '1.000 Lembar (2 RIM)',
		'1500' 			: '1.500 Lembar (3 RIM)',
		'2000' 			: '2.000 Lembar (4 RIM)',
		'2500' 			: '2.500 Lembar (5 RIM)',
		'3000' 			: '3.000 Lembar (6 RIM)'
	}

/* UNTUK BUKU */
	
	var jenis_sub_kategori_buku = {
		'' : 'Pilih Kategori Buku',
		'katalog' : 'Katalog',
		'majalah' : 'Majalah',
		'yassin' : 'Yassin',
		'buku_bergambar' : 'Buku Bergambar',
		'notebook' : 'Notebook',
		'buku_tahunan' : 'Buku Tahunan'
	}

/* UNTUK UNDANGAN */

	// var sub_kategori_undangan = {
	// 	'custom' = 'Customize'
	// }

/* UNTUK BANNER */

	var jenis_sub_kategori_banner = {
		'spanduk' : 'Spanduk',
		'backdrop' : 'Backdrop',
		'baligo' : 'Baligo',
		'neon_box' : 'Neon Box',
		'x_banner' : 'X-Banner',
		'roll_banner' : 'Roll Banner'
	}

/* UNTUK STICKER */

	var jenis_sub_kategori_sticker = {
		'' : 'Chromo',
		'' : 'Vynil',
		'' : 'Transparant',
		'' : 'One Way',
		'' : 'Cutting'
	}

	// var ukuran_sub_kategori_sticker = {
	// 	'custom' : 'Custom'
	// }


 
/* EKSEKUSi QUERY KE TAMPILAN */

$.fn.extend({
	linkToMenu: function(category_select_id) {
		$(this).change(function() {			
			var value_menu = $(this).val();
			$(category_select_id).removeOption(/.*/);
			switch (value_menu) {
				case 'percetakan_promosi_design':
				$('#div_kategori').show('slow');
				$(category_select_id).addOption(menu_percetakan, false);
				break;
				default:
				$(category_select_id).addOption({ '' : 'Silahkan Pilih Divisi Terlebih Dahulu'}, false);
				break;
			}
		});
	}
});

	$.fn.extend({
		linkToSubCategory: function(sub_category_select_id) {
			$(this).change(function() {			
				var value_kategori = $(this).val();
				$(sub_category_select_id).removeOption(/.*/);
				switch (value_kategori) {
					case 'percetakan':
					$('#div_sub_kategori').show('slow');
					$(sub_category_select_id).addOption(kategori_percetakan, false);
					break;
					case 'design':
					$('#div_sub_kategori').show('slow');
					$(sub_category_select_id).addOption(kategori_design, false);
					break;
					case 'konveksi':
					$('#div_sub_kategori').show('slow');
					$(sub_category_select_id).addOption(kategori_konveksi, false);
					break;
					case 'office':
					$('#div_sub_kategori').show('slow');
					$(sub_category_select_id).addOption(kategori_office, false);
					break;
					case 'promosi':
					$('#div_sub_kategori').show('slow');
					$(sub_category_select_id).addOption(kategori_promosi, false);
					break;
					case 'packaging':
					$('#div_sub_kategori').show('slow');
					$(sub_category_select_id).addOption(kategori_packaging, false);
					break;
					default:
					$(sub_category_select_id).addOption({ '' : 'Silahkan Pilih Kategori Terlebih Dahulu'}, false);
					break;
				}
			});
		}
	});

	$.fn.extend({
		linkToUkuran: function(ukuran_category_select_id) {
			$(this).change(function() {			
				var value_sub_kategori = $(this).val();
				$(ukuran_category_select_id).removeOption(/.*/);
				switch (value_sub_kategori) {
					case 'brosur':
					$('#ukuran_sub_category_brosur').show('slow');
					$('#judul_ukuran').text('Pilih Ukuran Brosur');
					$(ukuran_category_select_id).addOption(ukuran_sub_kategori_brosur, false);
					break;
					case 'buku':
					$('#ukuran_sub_category_brosur').show('slow');
					$('#judul_ukuran').text('Pilih Jenis Buku');
					$(ukuran_category_select_id).addOption(jenis_sub_kategori_buku, false);
					break;

					default:
					$(ukuran_category_select_id).addOption({ '' : 'Silahkan Pilih Sub Kategori Terlebih Dahulu'}, false);
					break;
				}
			});
		}
	});

	$.fn.extend({
		linkToJenisBrosur: function(ukuran_category_brosur_select_id) {
			$(this).change(function() {			
				var value_jenis_brosur = $(this).val();
				$(ukuran_category_brosur_select_id).removeOption(/.*/);
				switch (value_jenis_brosur) {
					case 'a3_poster':
					$('#jenis_sub_category_brosur').show('slow');
					$(ukuran_category_brosur_select_id).addOption(jenis_kertas_sub_kategori_brosur, false);
					break;

					case 'a4':
					$('#jenis_sub_category_brosur').show('slow');
					$(ukuran_category_brosur_select_id).addOption(jenis_kertas_sub_kategori_brosur, false);
					break;

					case 'a5_flyer':
					$('#jenis_sub_category_brosur').show('slow');
					$(ukuran_category_brosur_select_id).addOption(jenis_kertas_sub_kategori_brosur, false);
					break;

					default:
					$(ukuran_category_brosur_select_id).addOption({ '' : 'Silahkan Pilih Ukuran Terlebih Dahulu'}, false);
					break;
				}
			});
		}
	});

	$.fn.extend({
		linkToWarnaBrosur: function(warna_category_brosur_select_id) {
			$(this).change(function() {			
				var value_warna_brosur = $(this).val();
				$(warna_category_brosur_select_id).removeOption(/.*/);
				switch (value_warna_brosur) {
					case 'hvs_70':
					$('#warna_sub_category_brosur').show('slow');
					$(warna_category_brosur_select_id).addOption(warna_sub_kategori_brosur, false);
					break;
					case 'hvs_100':
					$('#warna_sub_category_brosur').show('slow');
					$(warna_category_brosur_select_id).addOption(warna_sub_kategori_brosur, false);
					break;
					case 'art_120':
					$('#warna_sub_category_brosur').show('slow');
					$(warna_category_brosur_select_id).addOption(warna_sub_kategori_brosur, false);
					break;
					case 'art_150':
					$('#warna_sub_category_brosur').show('slow');
					$(warna_category_brosur_select_id).addOption(warna_sub_kategori_brosur, false);
					break;
					case 'art_210':
					$('#warna_sub_category_brosur').show('slow');
					$(warna_category_brosur_select_id).addOption(warna_sub_kategori_brosur, false);
					break;
					case 'art_230':
					$('#warna_sub_category_brosur').show('slow');
					$(warna_category_brosur_select_id).addOption(warna_sub_kategori_brosur, false);
					break;
					case 'art_260':
					$('#warna_sub_category_brosur').show('slow');
					$(warna_category_brosur_select_id).addOption(warna_sub_kategori_brosur, false);
					break;
					case 'art_310':
					$('#warna_sub_category_brosur').show('slow');
					$(warna_category_brosur_select_id).addOption(warna_sub_kategori_brosur, false);
					break;

					default:
					$(warna_category_brosur_select_id).addOption({ '' : 'Silahkan Pilih Jenis Brosur Terlebih Dahulu'}, false);
					break;
				}
			});
		}
	});

	$.fn.extend({
		linkToLaminasiBrosur: function(laminasi_category_brosur_select_id) {
			$(this).change(function() {			
				var value_laminasi_brosur = $(this).val();
				$(laminasi_category_brosur_select_id).removeOption(/.*/);
				switch (value_laminasi_brosur) {
					case 'full_1_sisi':
					$('#laminasi_sub_category_brosur').show('slow');
					$(laminasi_category_brosur_select_id).addOption(laminasi_sub_kategori_brosur, false);
					break;
					case 'full_2_sisi':
					$('#laminasi_sub_category_brosur').show('slow');
					$(laminasi_category_brosur_select_id).addOption(laminasi_sub_kategori_brosur, false);
					break;
					default:
					$(laminasi_category_brosur_select_id).addOption({ '' : 'Silahkan Pilih Warna Brosur Terlebih Dahulu'}, false);
					break;
				}
			});
		}
	});

	$.fn.extend({
		linkToLipatanBrosur: function(lipatan_category_brosur_select_id) {
			$(this).change(function() {		
				var value_lipatan_brosur = $(this).val();
				$(lipatan_category_brosur_select_id).removeOption(/.*/);
				switch (value_lipatan_brosur) {
					case 'tanpa_laminasi':
					$('#lipatan_sub_category_brosur').show('slow');
					$(lipatan_category_brosur_select_id).addOption(lipatan_sub_kategori_brosur, false);
					break;
					case 'warna_doff':
					$('#lipatan_sub_category_brosur').show('slow');
					$(lipatan_category_brosur_select_id).addOption(lipatan_sub_kategori_brosur, false);
					break;
					case 'warna_glossy':
					$('#lipatan_sub_category_brosur').show('slow');
					$(lipatan_category_brosur_select_id).addOption(lipatan_sub_kategori_brosur, false);
					break;
					case 'spot_uv':
					$('#lipatan_sub_category_brosur').show('slow');
					$(lipatan_category_brosur_select_id).addOption(lipatan_sub_kategori_brosur, false);
					break;
					case 'varnish_uv':
					$('#lipatan_sub_category_brosur').show('slow');
					$(lipatan_category_brosur_select_id).addOption(lipatan_sub_kategori_brosur, false);
					break;
					default:
					$(lipatan_category_brosur_select_id).addOption({ '' : 'Silahkan Pilih Warna Brosur Terlebih Dahulu'}, false);
					break;
				}
			});
		}
	});

	$.fn.extend({
		linkToJumlahBrosur: function(jumlah_category_brosur_select_id) {
			$(this).change(function() {			
				var value_jumlah_brosur = $(this).val();
				$(jumlah_category_brosur_select_id).removeOption(/.*/);
				switch (value_jumlah_brosur) {
					case 'tanpa_lipatan':
					$('#jumlah_sub_category_brosur').show('slow');
					$('#catatan_sub_category_brosur').show('slow');
					$(jumlah_category_brosur_select_id).addOption(jumlah_sub_kategori_brosur, false);
					break;
					case 'lipat_2':
					$('#jumlah_sub_category_brosur').show('slow');
					$('#catatan_sub_category_brosur').show('slow');
					$(jumlah_category_brosur_select_id).addOption(jumlah_sub_kategori_brosur, false);
					break;
					case 'lipat_3':
					$('#jumlah_sub_category_brosur').show('slow');
					$('#catatan_sub_category_brosur').show('slow');
					$(jumlah_category_brosur_select_id).addOption(jumlah_sub_kategori_brosur, false);
					break;
					case 'lipat_4':
					$('#jumlah_sub_category_brosur').show('slow');
					$('#catatan_sub_category_brosur').show('slow');
					$(jumlah_category_brosur_select_id).addOption(jumlah_sub_kategori_brosur, false);
					break;
					default:
					$(jumlah_category_brosur_select_id).addOption({ '' : 'Silahkan Pilih Warna Brosur Terlebih Dahulu'}, false);
					break;
				}
			});
		}
	});

/* EKSEKUSU QUERY KE TAMPILAN */
})(jQuery);