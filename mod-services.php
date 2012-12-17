<article class="third home">

    <?php
                   
            // $my_wp_query = new WP_Query();
            // $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
            // $services =  get_page_by_title('فعالیت ها و خدمات');
            // $services_children = get_page_children($services->ID, $all_wp_pages);
            //  //echo '<pre>'.print_r($services_children,true).'</pre>';
            //  //print_r($services_children[0] ) ;
            // foreach ($services_children as $child) {
            //    //print_r($child);
            //    print_r($child->ID);
            // }
        $args=array(
                'child_of'    => 144,
                'post_type'   => 'page',
                'post_status' => 'publish'
            );
        $all_subpages=get_pages($args);
        foreach ($all_subpages as $page ) {
            $meta=get_post_custom($page->ID);
            echo "<section class='w6 right'>";
                foreach ($meta['img'] as $imag) {
                    echo wp_get_attachment_image($imag,'thumbnail');
                }
                echo '<h4>'.$page->post_title.'</h4>';
                echo '<p>'.$page->post_content.'</p>';
            echo "</section>";
        }
            
        
    ?>
    
</article>