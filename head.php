<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="utf-8" />
<title>Architecture |
	<?php 
		$srv_ur=$_SERVER['REQUEST_URI' ];
		$page=end(explode('/', $srv_ur));
		$page_name=ucwords(strstr($page,'.', true));
		echo $page_name;
	 ?>
</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/reset.css" >
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/grid.css" >
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css" >
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/architecture2-pages.css">
    <script src="<?php bloginfo('template_url') ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/zepto.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/fadeloop.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/architecture.js"></script>

</head>