<?php
include '../../connect/connect.php';
    // Routes
    $tpl = 'includes/templates/'; // templates directory
    $css = '../files/css/'; // css directory
    $js  = '../files/js/'; // js directory
    $func = 'includes/functions/'; // language directory



    // include the important Files
    include $func . 'functions.php';
    include $tpl .'header.php';
	if(!isset($noNav)) {include $tpl .'navbar.php';}

?>
