<?php 
//Template Name: Contact Us
get_header(); 
the_post();
?>

  <div class="container">
            <div class="breadcrumb">
                <a href=""> الرئيسية</a>  /  <?php the_title(); ?>
            </div>
        </div>


        <div class="container">
            <div class="Left-col">
<!--                <div class="more-infos">
                    <div class="title-a"><h2>لمزيد من المعلومات</h2></div>
                    <div class="Tel-num">55 64 8452</div>
                </div>-->
                <?php echo do_shortcode('[test_shortcode]'); ?>
                <?php // dynamic_sidebar("main-sidebar"); ?>

            </div>
            <div class="Main-content">
                <div class="Conatct-us">
                    <div class="title-a"><h2>إتصل بنا</h2></div>
                    <div class="text-block">

                        <ul class="list-a">
                           <?php if(esc_attr( get_option('address') )): ?>
                            <li>
                                <h2>العنوان</h2>
                                <p><?php echo esc_attr( get_option('address') ); ?></p>
                            </li>
                            <?php                            endif;?>
                            <?php if(esc_attr( get_option('phone_no1') ) || esc_attr( get_option('phone_no2') )): ?>
                            <li>
                                <h2>الهاتف</h2>
                                <p><?php echo esc_attr( get_option('phone_no1') ); ?>  <br/> <?php echo esc_attr( get_option('phone_no2') ); ?></p>
                            </li>
                            <?php                            endif;?>
                            <?php if(esc_attr( get_option('email_no1') ) || esc_attr( get_option('email_no2') )): ?>
                            <li>
                                <h2>البريد الإلكتروني</h2>
                                <p><?php echo esc_attr( get_option('email_no1') ); ?> <br/><?php echo esc_attr( get_option('email_no2') ); ?></p>
                            </li>
                            <?php                            endif;?>
                        </ul>
                        <hr/>

                        <div class="form-box"> 
                        <?php the_content(); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="clearfix"></div>
 


<?php get_footer(); ?>

