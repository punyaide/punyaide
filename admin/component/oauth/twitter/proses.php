<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
	header('location:../../../404.php');
}else{
	include_once '../../../../library/database.php';
	include_once '../../../../library/function.php';

	$val = new Wisasivalidasi;

	$oauth_id = $_POST['twuserid'];
	$oauth_user = $_POST['twusername'];
	$oauth_token1 = $_POST['tokenuser'];
	$oauth_token2 = $_POST['tokenuser_secret'];
	$data = array(
		'oauth_id' => $oauth_id,
		'oauth_user' => $oauth_user,
		'oauth_token1' => $oauth_token1,
		'oauth_token2' => $oauth_token2,
	);
	$table = new WisasiTable('oauth');
	$table->updateBy('id_oauth', '2', $data);
	header('location:../../../admin.php?mod=setting');
}
?>