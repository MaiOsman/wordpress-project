<?php 
//Template Name: Our Partner
get_header(); 
the_post();
?>

  <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo home_url(); ?>"> الرئيسية</a>  /  <?php the_title(); ?>
            </div>
        </div>


        <div class="container">
           <div class="Left-col">
<!--                <div class="more-infos">
                    <div class="title-a"><h2>لمزيد من المعلومات</h2></div>
                    <div class="Tel-num">55 64 8452</div>
                </div>-->
                <?php dynamic_sidebar("main-sidebar"); ?>

            </div>
            <div class="Main-content">
                <div class="partner-page">
                    <div class="title-a"><h2><?php the_title(); ?></h2></div>
                    <div class="text-block">
                        <div class="img-box">
                                  <?php 
                                if(has_post_thumbnail()):
                                    $image_id = get_post_thumbnail_id();
                                    $image_url= wp_get_attachment_image_src($image_id,'full');
                                    //var_dump($image_url);
                                    $image_url= $image_url[0];
                                
                            ?>
                            <img alt="<?php the_title(); ?>" src="<?php echo $image_url;?>">
                            <?php endif; ?>
                        </div>
<?php
$partner = new WP_Query(array(
    'post_type' => 'partner',
    'posts_per_page' => -1 // no limit for retriev
));
if($partner->have_posts()):
?>
                        <ul>
                               <?php while ($partner->have_posts()):$partner->the_post(); ?>
                        <li>
                            <div class="img-box pull-left">
                            <?php 
                                if(has_post_thumbnail()):
                                    $image_id = get_post_thumbnail_id();
                                    $image_url= wp_get_attachment_image_src($image_id,'full');
//                                    var_dump($image_url);
                                    $image_url= $image_url[0];
                                
                            ?>
                            <a href=""> <img alt="" src="<?php echo $image_url;?>" width="192" height="62"></a>
                           
                            <?php endif; ?>
                            </div>
                            <?php the_title(); ?>
                            <?php the_content(); ?>
                        </li> 
                    <?php 
                         endwhile; 
                         wp_reset_query();
                      ?>

                        </ul>
    <?php        endif; ?>

                    </div>

                </div>
            </div>
        </div>


<!--        <div class="clearfix"></div>
        <section class="partner">
            <h2>شركاء النجاح</h2>
            <div class="container">
                <ul class="list-b">
                    <li><a href=""><img src="img/img-p_03.jpg" width="192" height="62"></a></li>
                    <li><a href=""><img src="img/img-p_05.jpg" width="192" height="62"></a></li>
                    <li><a href=""><img src="img/img-p_07.jpg" width="192" height="62"></a></li>
                    <li><a href=""><img src="img/img-p_09.png" width="192" height="62"></a></li>
                </ul>
            </div>-->
        <!--</section>-->



<?php get_footer(); ?>
