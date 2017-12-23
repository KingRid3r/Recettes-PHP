<?php
	require_once 'application/libraries/Smarty/libs/Smarty.class.php';
	require_once 'config.inc.php';
	$current_page = $_GET['page'];
	include 'application/modules/'.$_PAGE[$current_page].'.inc.php';
	$smarty = new Smarty;
	$smarty->debugging = true;
	$smarty->caching = false;
	$smarty->assign('data', $data);
	$smarty->display('application/views/modules/'.$_PAGE[$current_page].'.tpl',$data);
?>
