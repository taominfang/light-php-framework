<?php
if(!isset($____smartmain_php____)){
	$____smartmain_php____=true;
	if(!defined('__project_root__')){
		define ( '__project_root__', dirname(__FILE__)."/../.." );
	}
	if(!defined('__smarty_root__')){
		define ( '__smarty_root__', dirname(__FILE__)."/.." );
	}
	if(!defined('__web_root__')){
		define ( '__web_root__', dirname(__FILE__)."/../../webroot" );
	}
	
	require __smarty_root__.'/libs/Smarty.class.php';
	$smarty = new Smarty();
	$smarty->template_dir = __smarty_root__.'/templates';
	$smarty->compile_dir = __smarty_root__.'/templates_c';
	$smarty->config_dir = __smarty_root__.'/configs';
	$smarty->cache_dir = __smarty_root__.'/cache';
	
	//$smarty->debugging = true;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;
}
?>