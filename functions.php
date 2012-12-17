<?php 
	add_theme_support('menus');
	register_nav_menu("firstMenu","Menu in index page");
	register_sidebar(array(
		'name' => 'فعالیت ها و خدمات',
		'id' => 'sidebar-r',
		'description' => 'Right panel ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => 'پروژه ها',
		'id' => 'sidebar-l',
		'description' => 'Left panel after menu',
		'before_widget' => '<nav class="w6 right project">',
		'after_widget' => "</nav>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => 'لینک ها',
		'id' => 'links',
		'description' => 'bottom links',
		'before_widget' => '<section class="w6 right links">',
		'after_widget' => "</section>\n",
		'before_title' => '<h3>',
		'after_title' => "</h3>\n"
	));

 ?>
  