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
<?php
	$title = $val->validasi($_GET['idp'],'xss');
	$tablepag = new WisasiTable('pages');
	$currentPag = $tablepag->findByAnd(seotitle, $title, active, 'Y');
	$currentPag = $currentPag->current();
	$idpag = $currentPag->id_pages;
	$content = $currentPag->content;
	$content = html_entity_decode($content);
?>
<?php if ($currentPag != "0"){ ?>
	<section id="blog-header" data-speed="6" data-type="background" style="background-image:url('<?=$website_url;?>/content/<?=$folder;?>/images/slider1-home.png');">
		<div class="screen">
			<div class="container blog-container blog-header">
				<h1><?=$currentPag->title;?></h1>	
			</div>
			</div>
		</section>

		<div class="container blog-container blog-content">	
			<p><?=$content;?></p>
		</div>

	</div><!-- #content -->
<?php }else{ ?>
	<div id="content" class="container">
		<div id="main" class="row-fluid">
			<div align="center">
				<header class="not-found-header">
					<h1>404</h1>
					<h2>Whoops! Terjadi kesalahan...
				</header><!-- .entry-header -->
				<article id="post-0" class="post not-found">
					<div class="entry-content">
						<p>Maaf halaman yang dicari tidak ditemukan,<br /> atau sudah dihapus. Kembali ke <a href="<?=$website_url;?>" title="<?=$website_name;?>" rel="home">halaman utama</a>.</p>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
			</div>
			<div class="clearfix"></div>
		</div><!-- #main -->
	</div><!-- #content -->
<?php } ?>

<!-- 
*******************************************************
	Include Footer Template
******************************************************* 
-->
<?php include_once "content/$folder/footer.php"; ?>
<?php } ?>