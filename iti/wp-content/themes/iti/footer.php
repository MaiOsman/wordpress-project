
<?php  
$partner = new WP_Query(array(
    'post_type' => 'partner',
    'posts_per_page' => -1 // no limit for retriev
));
if($partner->have_posts()):
?>

        <section class="partner">
            <h2>شركاء النجاح</h2>
            <div class="container">
                <ul class="list-b">
             <?php while ($partner->have_posts()):$partner->the_post(); ?>
                        <li>
                            <?php 
                                if(has_post_thumbnail()):
                                    $image_id = get_post_thumbnail_id();
                                    $image_url= wp_get_attachment_image_src($image_id,'full');
//                                    var_dump($image_url);
                                    $image_url= $image_url[0];
                                
                            ?>
                            <a href=""> <img alt="" src="<?php echo $image_url;?>" width="192" height="62"></a>
                           
                            <?php endif; ?>
                        </li> 
                    <?php 
                         endwhile; 
                         wp_reset_query();
                      ?>
        
                    
                </ul>
            </div>
        </section>
<?php endif ; ?>

        <footer class="Footer">
            <div class="container">
                <a href="" class="scroll-up"></a>

<!--                <ul class="menu-footer list-c">
                    <li><a href="">الرئيسية</a></li>
                    <li><a href="">عن الشركة</a></li>
                    <li><a href="">خدماتنا</a></li>
                    <li><a href="">شركاء النجاح</a></li>
                    <li><a href="">مدونة</a></li>
                    <li><a href="">اتصل بنا</a></li>
                </ul>
-->                <p>جميع الحقوق محفوظة لشركة حلول© 2013 </p>
                <ul class="social-icons pull-right  unstyled">
                    <li><a href="<?php echo esc_attr( get_option('facebook_url') ); ?>" class="Facebook"></a></li>
                    <li><a href="<?php echo esc_attr( get_option('twitter_url') ); ?>" class="Twitter"></a></li>
                </ul>
                <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'footer-menu' ,
                            'container' => '',
                            'menu_class' => 'menu-footer list-c'
                            ) ); 
                    ?>
            </div>

        </footer>


<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
        <script language="javascript" type="text/javascript" src="js/script.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

         jQuery Plugin scripts 
        <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>

         Slider Kit scripts 
        <script type="text/javascript" src="js/jquery.sliderkit.1.9.pack.js"></script>




        <script type="text/javascript" src="js/jquery.selectbox-0.1.3.js"></script>-->
<!--        <script type="text/javascript">
            





        </script>-->


    <?php wp_footer(); ?>
    </body>
</html>
