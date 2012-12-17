<div class="top">
        	<nav>
               
                
            <?php 
                wp_nav_menu(array(
                    'theme_location'  =>'' ,
                    'menu'            => 'منوی بالا(راست)', 
                    // 'container'       => 'div', 
                    // 'container_class' => 'menu-{menu slug}-container', 
                    // 'container_id'    =>'' ,
                    'menu_class'      => 'right', 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          =>'' ));
             ?>
            </nav>
            <nav>
               
                
            <?php 
                wp_nav_menu(array(
                    'theme_location'  =>'' ,
                    'menu'            => 'منوی بالا (چپ)', 
                    // 'container'       => 'div', 
                    // 'container_class' => 'menu-{menu slug}-container', 
                    // 'container_id'    =>'' ,
                    'menu_class'      => 'left', 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          =>'' ));
             ?>
            </nav>
        </div>