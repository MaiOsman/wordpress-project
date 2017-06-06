<?php get_header();

$slider = new WP_Query(array(
    'post_type' => 'slider',
    'posts_per_page' => -1 // no limit for retriev
));
if($slider->have_posts()):
?>

<section class="slider">

            <!------------------------------------- THE CONTENT ------------------------------------------------->
            <div id="jslidernews2" class="lof-slidecontent" style="width:980px; height:400px;">
                <div class="preload"><div></div></div>


                <div  class="button-previous">Previous</div>

                <!-- MAIN CONTENT --> 
                <div class="main-slider-content" style="width:640px; height:400px;">
                    <ul class="sliders-wrap-inner">
                      <?php while ($slider->have_posts()):$slider->the_post(); ?>
                        <li>
                            <?php 
                                if(has_post_thumbnail()):
                                    $image_id = get_post_thumbnail_id();
                                    $image_url= wp_get_attachment_image_src($image_id,'full');
                                    //var_dump($image_url);
                                    $image_url= $image_url[0];
                                
                            ?>
                            <img alt="<?php the_title(); ?>" src="<?php echo $image_url;?>">
                            <?php endif; ?>
                            <div class="slider-description">
                               <?php the_content(); ?>
                            </div>
                        </li> 
                    <?php 
                         endwhile; 
                         wp_reset_query();
                      ?>	
                    </ul>  	
                </div>
                <!-- END MAIN CONTENT --> 
                <!-- NAVIGATOR -->
                <div class="navigator-content">
                    <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
                          <?php while ($slider->have_posts()):$slider->the_post(); ?>
                            <li>
                                <div>
                                    <h3><?php the_title(); ?> </h3>
                                </div>    
                            </li>
                         <?php 
                             endwhile; 
                             wp_reset_query();
                          ?>		
                        </ul>
                    </div>

                </div> 
                <!----------------- END OF NAVIGATOR --------------------->
                <div class="button-next">Next</div>

                <!-- BUTTON PLAY-STOP -->
                <div class="button-control"><span></span></div>
                <!-- END OF BUTTON PLAY-STOP -->

            </div> 

            <!------------------------------------- END OF THE CONTENT ------------------------------------------------->

        </section>
<?php endif ;
$news = new WP_Query(array(
    'post_type' => 'news',
    'posts_per_page' => -1 // no limit for retriev
));
if($news->have_posts()):
?>
<section class="news-block">  
            <div class="container">
                <div class="new-news">
                    <h3>أخبار الشركة</h3>

                    <!-- Start newslider-minimal -->
                    <div class="sliderkit newslider-minimal">						

                        <div class="sliderkit-panels">
                        <?php while ($news->have_posts()):$news->the_post(); ?>
                            <div class="sliderkit-panel">
                                <a href="<?php the_permalink(); ?>" class="news-line" title="[link title]"><?php the_title(); ?></a>

                                <time><?php echo get_the_date('d-m-y'); ?></time>
                            </div>
                         <?php 
                             endwhile; 
                             wp_reset_query();
                          ?>
                        </div>
                    </div>				
                    <!-- // end of newslider-minimal -->


                </div><!--new-news-->
            </div>
        </section>
<?php endif ;
$aboutus = new WP_Query( 'pagename=about-us' ); //nbza 3n el sharka 
$service = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => -1 // no limit for retriev
));
if($service->have_posts()):
		?>

	<section class="Home-content">
            <div class="container">
                <div class="about-comp  pull-right">
                    <div class="title-a"><h2>نبذة عن شركة حلول</h2></div>
                    <div class="text-box">
                        <div class="img-box">
                        <?php while ($aboutus ->have_posts()) : $aboutus->the_post(); ?>
                        	<?php 
	                        	if(has_post_thumbnail()):
	                        		$image_id = get_post_thumbnail_id();
	                        		$image_url = wp_get_attachment_image_src($image_id,'full');
	                        		$image_url = $image_url[0];
	                        	?>
                        <img src="<?php echo $image_url ?>" width="369" height="183">
                        <?php endif ?>
                        </div>

                        <?php the_excerpt(); ?>

                        <br/><br/><br/><br/>
                        <a href="<?php the_permalink();?>" class="more">اقراء المزيد</a>
                    </div>
                    <?php endwhile ;
	                        		wp_reset_query();
	                        		?>
                </div><!--about-comp-->

                <div class="comp-service">
                    <div class="title-a"><h2>خدمات حلول</h2></div>

                    <div class="text-box">
                        <ul class="list-a">
                    <?php while ($service->have_posts()):$service->the_post(); ?>

                            <li>

                                <div class="img-box">
                        
                            <?php 
                                if(has_post_thumbnail()):
                                    $image_id = get_post_thumbnail_id();
                                    $image_url= wp_get_attachment_image_src($image_id,'full');
                                    //var_dump($image_url);
                                    $image_url= $image_url[0];
                                
                            ?>
      
                           <img src="<?php echo $image_url;?>"><div class="caption-a"><a href=""><?php the_title(); ?></a></div>
                                </div>

                            <?php endif; ?>
                                        <?php the_excerpt(); ?>
                            </li>
                        <?php 
                             endwhile; 
                             wp_reset_query();
                          ?>
                        </ul>

                        
                        <div class="clearfix"></div>
                    </div>
                </div><!--comp-service-->
            </div>
        </section><!--Home-content-->
  <?php        endif; ?>

<?php get_footer();?>