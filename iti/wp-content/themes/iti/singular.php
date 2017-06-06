<?php 
get_header(); 
the_post();
?>

  <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo home_url(); ?>"> الرئيسية</a>  / <?php echo the_title(); ?>
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
                <div class="about-company">
                    <div class="title-a"><h2><?php echo the_title(); ?></h2></div>
                    <div class="text-block">
                   
                        <div class="img-box2">
                                 <?php 
                                if(has_post_thumbnail()):
                                    $image_id = get_post_thumbnail_id();
                                    $image_url= wp_get_attachment_image_src($image_id,'full');
                                    //var_dump($image_url);
                                    $image_url= $image_url[0];
                                
                            ?>
                            <img alt="<?php the_title(); ?>" src="<?php echo $image_url;?>">
                            <?php endif; ?>
                        </div><!--img-box-->
                                 <?php the_content(); ?>        
                    </div>
                </div>
            </div>
        </div>


        <div class="clearfix"></div>

<?php get_footer(); ?>
