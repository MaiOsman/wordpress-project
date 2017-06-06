<?php get_header(); ?>

<?php
//Template Name: Team Template
$team = new WP_Query(array(
    'post_type' => 'team',
    'posts_per_page' => -1 
));
if($team->have_posts()):
    
?>
<div class="container">

            <div class="Main-content">
                <div class="about-company">
                    <div class="title-a"><h2>فريق العمل</h2></div>

                    <ul id="teamList">
                        
                        <?php while ($team->have_posts()):$team->the_post(); ?>
                        <li>
                            <!--<div class="img-box pull-left">-->
                            <?php 
                                if(has_post_thumbnail()):
                                    $image_id = get_post_thumbnail_id();
                                    $image_url= wp_get_attachment_image_src($image_id,'full');
                                    $image_url= $image_url[0];
                                
                            ?>
                            <img alt="" src="<?php echo $image_url;?>" width="105" height="100">
                            
                            <aside>
                                <p><?php the_title(); ?></p>
                                <p> <?php 
                                echo get_post_meta(get_the_ID(),'team_position',true);
//                                $mykey_values = get_post_custom_values( 'team_position' ); 
//                                foreach ( $mykey_values as $key => $value ) {
//                                      echo "$value"; 
//                                 }
                                 ?></p>
                                
                            </aside>
                            <?php endif; ?>

                        </li> 
                    <?php 
                         endwhile; 
                         wp_reset_query();
                      ?>
                        
                      
                    </ul>
                </div>
            </div>
        </div>
<?php endif; ?>
<?php get_footer(); ?>