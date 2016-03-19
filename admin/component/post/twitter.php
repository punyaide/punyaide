<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
	header('location:../../404.php');
}else{
include_once '../../../library/database.php';
include_once '../../../library/function.php';
require_once '../../component/oauth/twitter/twitteroauth/twitteroauth.php';

$val = new Wisasivalidasi;

$tableoauthtw = new WisasiTable('oauth');
$currentOauthtw = $tableoauthtw->findBy(id_oauth, '2');
$currentOauthtw = $currentOauthtw->current();
$conkeyOauthtw = $currentOauthtw->oauth_key;
$consecretOauthtw = $currentOauthtw->oauth_secret;
$idOauthtw = $currentOauthtw->oauth_id;
$tokenOauthtw = $currentOauthtw->oauth_token1;
$tokensecretOauthtw = $currentOauthtw->oauth_token2;

$tablesetting = new WisasiTable('setting');
$currentSetting = $tablesetting->findBy(id_setting, '1');
$currentSetting = $currentSetting->current();
$urlwebsite = $currentSetting->website_url;
$urlwebsitename = $currentSetting->website_name;

define('CONSUMER_KEY', ''.$conkeyOauthtw.'');
define('CONSUMER_SECRET', ''.$consecretOauthtw.'');
define('OAUTH_CALLBACK', ''.$urlwebsite.'/admin/admin.php?mod=post');

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $tokenOauthtw, $tokensecretOauthtw);

$valid = $val->validasi($_GET['id'],'sql');
$table = new WisasiTable('post');
$currentPosts = $table->findBy(id_post, $valid);
$currentPosts = $currentPosts->current();

$params = array(
	"status" => "$currentPosts->title, Link : $urlwebsite/detailpost/$currentPosts->seotitle"
);
$status = $connection->post('statuses/update', $params);
if (200 == $connection->http_code) {
	header('location:../../admin.php?mod=post');
}else{
	header('location:../../404.php');
}
}
?>