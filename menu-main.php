<div class="feature">
    <section>
                        <?php 
                            wp_nav_menu(array(
                                'theme_location'  =>'' ,
                                'menu'            => 'منوی اصلی', 
                                'container'       => 'nav', 
                                'container_class' => 'right', 
                                // 'container_id'    =>'' ,
                                'menu_class'      => '', 
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                
                                // 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          =>'' ));
                         ?>
                <img src="" class="left">
    </section>
</div>