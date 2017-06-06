<?php get_header(); ?>

<div class="container">
      <div class="breadcrumb">
          <a href=""> الرئيسية</a>  /  <?php single_cat_title(); ?>
      </div>
     </div>
     
     
     <div class="container">
     	<div class="Left-col">
        	<div class="more-infos">
        	 	<div class="title-a"><h2>لمزيد من المعلومات</h2></div>
                <div class="Tel-num">55 64 8452</div>
			</div>
            
            
            
        </div>
        <div class="Main-content">
        	 	<div class="Blog">
                <div class="title-a"><h2><?php single_cat_title(); ?></h2></div>
                	<div class="text-block">
                
               			<ul>
                                  <?php while (have_posts()):the_post(); ?>

                        	<li>
                            	<div class="img-box pull-left"><img src="img/img1.jpg" width="230" height="118"></div>	
                                <a href=""><?php the_title(); ?>
</a>
                            
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
                         wp_pagenavi(); 
                      }
                      ?>
                    </div>
 
                </div>
        </div>
     </div>
     

<?php get_footer(); ?>