
;(function($) {
	var menu_percetakan = {
		'percetakan' 	: 'Percetakan',
		'design' 		: 'Design',
		'konveksi' 		: 'Konveksi',
		'office' 		: 'Office',
		'promosi' 		: 'Promosi & Merchandise',
		'packaging' 	: 'Packaging',
		'custom' 		: 'Custom',
	}
	var kategori_percetakan = {
		'browsur' 		: 'Browsur',
		'buku' 			: 'Buku',
		'undangan' 		: 'Undangan',
		'banner' 		: 'Banner',
		'sticker' 		: 'Sticker'
	}

	var kategori_design = {
		'branding' 		: 'Branding',
		'grafis' 		: 'Design Grafis',
		'interior' 		: 'Design Interior',
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

/* UNTUK BROWSUR */

	var ukuran_sub_kategori_browsur ={
		'a3_poster' : 'A3 ( Poster )',
		'a4' : 'A4',
		'a5_flyer' : 'A5 ( Flyer )'
	}

	var jenis_kertas_sub_kategori_browsur = {
		'hvs_70' : 'HVS 70 gsm',
		'hvs_100' : 'HVS 100 gsm',
		'art_120' : 'Art Paper 120 gsm',
		'art_150' : 'Art Paper 150 gsm',
		'art_210' : 'Art Carton 210 gsm',
		'art_230' : 'Art Carton 230 gsm',
		'art_260' : 'Art Carton 260 gsm',
		'art_310' : 'Art Carton 310 gsm',
	}

	var warna_sub_kategori_browsur = {
		'full_1_sisi' : 'Full Color 1 Sisi',
		'full_2_sisi' : 'Full Color 2 Sisi'
	}

	var laminasi_sub_kategori_browsur = {
		'' : 'Tanpa Laminasi',
		'' : 'Doff',
		'' : 'Glossy',
		'' : 'Spot UV',
		'' : 'Varnish UV'
	}

	Var lipatan_sub_kategori_browsur = {
		'' : 'Tanpa Lipatan',
		'' : 'Lipat 2',
		'' : 'Lipat 3',
		'' : 'Lipat 4'
	}

/* UNTUK BUKU */
	
	var jenis_sub_kategori_buku = {
		'' : 'Katalog',
		'' : 'Majalah',
		'' : 'Yassin',
		'' : 'Buku Bergambar',
		'' : 'Notebook',
		'' : 'Buku Tahunan'
	}

/* UNTUK UNDANGAN */

	var sub_kategori_undangan = {
		'custom' = 'Customize'
	}

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

	var ukuran_sub_kategori_sticker = {
		'custom' : 'Custom',
	}


 
/* EKSEKUSi QUERY KE TAMPILAN */

	$.fn.extend({
		linkToCategory: function(state_select_id) {
			$(this).change(function() {
				var country = $(this).attr('value');
				$(state_select_id).removeOption(/.*/);
				switch (country) {
					case 'percetakan':
					$(state_select_id).addOption(kategori_percetakan, false);
					break;
					case 'design':
					$(state_select_id).addOption(us_states, false);
					break;
					default:
					$(state_select_id).addOption({ '' : 'Please select a Country'}, false);
					break;
				}
			});
		}
	});

/* EKSEKUSU QUERY KE TAMPILAN */
})(jQuery);
