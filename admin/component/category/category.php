<?phpsession_start();if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){	header('location:404.php');}else{$aksi="component/category/proses.php";?>	<div class="content-header">		<div class="header-section"><h1><?=$langcategory1;?></h1></div>	</div>	<ul class="breadcrumb breadcrumb-top">		<li><a href="admin.php?mod=home"><?=$langmenu1;?></a></li>		<li><?=$langcategory2;?></li>	</ul><?phpswitch($_GET[act]){	default:?>	<div class="block full">		<div class="block-title"><h2><?=$langcategory1;?></h2></div>		<div class="table-responsive">			<form method="post" action="<?=$aksi;?>">				<input type="hidden" name="mod" value="category">				<input type="hidden" name="act" value="multidelete">				<input type="hidden" value="0" name="totaldata" id="totaldata">				<table cellpadding="0" cellspacing="0" border="0" class="dTableAjax table table-vcenter table-condensed table-bordered" id="dynamic">					<thead><tr>						<th style="width:80px;" class="text-center"><i class="fa fa-check-circle-o"></i></th>						<th>Id Data</th>						<th><?=$langcategory3;?> | Link</th>						<th><?=$langcategory5;?></th>						<th><?=$langcategory6;?></th>					</tr></thead>					<tbody></tbody>					<tfoot>						<tr>							<td style="width:80px;" class="text-center"><input type="checkbox" id="titleCheck" data-toggle="tooltip" title="<?=$langaction5;?>" /></td>							<td colspan="5">								<button class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#alertalldel"><i class="fa fa-trash-o"></i> Delete Selected Item</button>							</td>						</tr>					</tfoot>				</table>			</form>		</div>	</div>	<div id="alertdel" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">		<div class="modal-dialog">			<div class="modal-content">				<form method="post" action="<?=$aksi;?>" autocomplete="off">					<div class="modal-header">						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>						<h3 id="modal-title"><i class="fa fa-exclamation-triangle text-danger"></i> <?=$langdelete1;?></h3>					</div>					<div class="modal-body">						<input type="hidden" name="mod" value="category">						<input type="hidden" name="act" value="delete">						<input type="hidden" id="delid" name="id">						<?=$langdelete2;?>					</div>					<div class="modal-footer">						<button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> <?=$langdelete3;?></button>						<button type="button" class="btn btn-sm btn-default" data-dismiss="modal" aria-hidden="true"><i class="fa fa-sign-out"></i> <?=$langdelete4;?></button>					</div>				</form>			</div>		</div>	</div>	<p style="width:100%; height:100px;">&nbsp;</p><?php    break;	case "addnew":?>	<div class="block full">		<div class="block-title"><h2>Add New</h2></div>		<form id="form-validation" class="form-bordered" method="post" action="<?=$aksi;?>" autocomplete="off">            <fieldset>				<input type="hidden" name="mod" value="category">				<input type="hidden" name="act" value="input">				<div class="form-group">					<label>Title <span class="text-danger">*</span></label>					<input class="form-control" type="text" id="title" name="title" required>				</div>				<div class="form-group form-actions">					<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Submit</button>					<button type="reset" class="btn btn-sm btn-danger pull-right" onclick="self.history.back()"><i class="fa fa-times"></i> Cancel</button>				</div>            </fieldset>		</form>	</div>	<p style="width:100%; height:500px;">&nbsp;</p><?php	break;	case "edit":	$valid = $val->validasi($_GET['id'],'sql');	$table = new WisasiTable('category');	$currentCategory = $table->findBy(id_category, $valid);	$currentCategory = $currentCategory->current();	if ($currentCategory == '0'){?>	<div class="block block-alt-noborder">		<h3 class="sub-header">Ooops! <?=$langpagenotfound1;?></h3>		<p>&nbsp;</p>		<p align="center">			<?php				$url = rtrim("http://".$_SERVER['HTTP_HOST'], "/").$_SERVER['PHP_SELF'];				$url2 = preg_replace("/\/(admin\.php$)/","",$url);				$siteurl = $url2;			?>			<a title="Back to Previous page" class="btn btn-sm btn-primary" onClick="history.back();"><?=$langpagenotfound3;?></a>			<a href="<?=$siteurl;?>" title="Back to the website" class="btn btn-sm btn-primary"><?=$langpagenotfound2;?></a>		</p>		<p>&nbsp;</p>	</div>	<p style="width:100%; height:500px;">&nbsp;</p><?php	}else{?>	<div class="block full">		<div class="block-title"><h2>Edit Category</h2></div>		<form id="form-validation" class="form-bordered" method="post" action="<?=$aksi;?>" autocomplete="off">            <fieldset>				<input type="hidden" name="mod" value="category">				<input type="hidden" name="act" value="update">				<input type="hidden" name="id" value="<?=$currentCategory->id_category;?>">				<div class="form-group">					<label>Title <span class="text-danger">*</span></label>					<input class="form-control" type="text" id="title" name="title" value="<?=$currentCategory->title;?>" required>				</div>				<div class="form-group">					<div class="row">						<?php if ($currentCategory->active=="N"){ ?>							<label class="col-md-2">Active</label>							<div class="col-md-10">								<label class="radio-inline"><input type="radio" id="active1" name="active" value="Y">Y</label>								<label class="radio-inline"><input type="radio" id="active2" name="active" value="N" checked="checked">N</label>							</div>						<?php }else{ ?>							<label class="col-md-2">Active</label>							<div class="col-md-10">								<label class="radio-inline"><input type="radio" id="active1" name="active" value="Y" checked="checked">Y</label>								<label class="radio-inline"><input type="radio" id="active2" name="active" value="N">N</label>							</div>						<?php } ?>						<p>&nbsp;</p>					</div>				</div>				<div class="form-group form-actions">					<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Submit</button>					<button type="reset" class="btn btn-sm btn-danger pull-right" onclick="self.history.back()"><i class="fa fa-times"></i> Cancel</button>				</div>			</fieldset>		</form>	</div>	<p style="width:100%; height:450px;">&nbsp;</p><?php	}    break;}}?>