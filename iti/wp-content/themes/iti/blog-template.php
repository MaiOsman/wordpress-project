<?php 
//Template Name: List Posts
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
                     
<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$posts = new WP_Query(array(
    'post_type' => 'post',
    'paged' => $paged
));
if($posts->have_posts()):
?>
                        <ul>
                               <?php while ($posts->have_posts()):$posts->the_post(); ?>
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
                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?>
                        </li> 
                    <?php 
                         endwhile; 
                         wp_reset_query();
                      ?>

                        </ul>

                    </div>
                    <div class="Foot-blog">
                        <?php
                      if(function_exists('wp_pagenavi')){
                          wp_pagenavi(array(
                            'query' => $posts
                        )); 
                      }
                          ?>
                    </div>
                        <?php        endif; ?>

                </div>
            </div>
        </div>

<?php get_footer(); ?>
