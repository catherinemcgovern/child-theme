<?php

/*

Template Name: About Page

*/

?>

<?php global $optimizer;?>

<?php get_header(); ?>





    <div class="page_fullwidth_wrap layer_wrapper">

        

        <!--CUSTOM PAGE HEADER STARTS-->

            

        <!--CUSTOM PAGE HEADER ENDS-->

  
				<div class="header-color" style="background-image: url(https://cantaloupeisland.com/wp-content/themes/optimizer-child/images/About-header.png)">
				
				<br>
<br>

<div id="headline">
			<h1 class="serif">
				Good Vibes</h1>
					<h1 class="sans">
				Good Times</h1>
				</div>
					
					</div>
					
					<!--experiment-->
				
				<div class="white-container">
		
			<div class="wine-clear-row-box">
				
				
				
				 <!-- begin Catherine's Code -->
					  	   
				<div id="content">

            <div class="center">

                <div class="single_wrap<?php if ( !is_active_sidebar( 'sidebar' ) ) { ?> no_sidebar<?php } ?>">

                    <div class="single_post">

                        <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>

                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">  

                                    

                        <!--EDIT BUTTON START-->

                            <?php if ( is_user_logged_in() || is_admin() ) { ?>

                                    <div class="edit_wrap">

                            			<a href="<?php echo get_edit_post_link(); ?>">

                            				<?php _e('Edit','optimizer'); ?>

                                		</a>

                            		</div>

                            <?php } ?>

                        <!--EDIT BUTTON END-->

                        

                        <!--PAGE CONTENT START-->   

                        <div class="single_post_content">

                        

                                <!--THE CONTENT START-->

                                    <div class="thn_post_wrap">

                                        <?php the_content(); ?>

                                    </div>

                                        <div style="clear:both"></div>

                                    <div class="thn_post_wrap wp_link_pages">

                                        <?php wp_link_pages('<p class="pages"><strong>'.__('Pages:', 'optimizer').'</strong> ', '</p>', 'number'); ?>

                                    </div>

                                <!--THE CONTENT END-->

                        </div>

                        <!--PAGE CONTENT END--> 

                                    

                                    

                        </div>

                   

                   <?php endwhile ?> 

                    </div>

                    

                    

                  <!--COMMENT START: Calling the Comment Section. If you want to hide comments from your posts, remove the line below-->     

                  <?php if (!empty ($optimizer['post_comments_id'])) { ?>

                      <div class="comments_template">

                          <?php comments_template('',true); ?>

                      </div>

                  <?php }?> 

                  <!--COMMENT END-->

                  

                  <?php endif ?>

                

                    </div>

               

                <!--PAGE END-->

            

            


            

                    </div>

            </div>

				
				
				
	   
	    <!-- end Catherine's Code -->
				
				
				
				
				
				
				</div>
		</div>
				
			<!--experiment ends-->	
					
			
				</div>

		
		

	
    <div id="content">

        <div class="center">
			

            <div class="single_wrap no_sidebar">
			
				
				<!--single_post class END-->

                      

                  <!--COMMENT START: Calling the Comment Section. If you want to hide comments from your posts, remove the line below-->     

           

                  <!--COMMENT END-->

                  

          

            

              </div><!--single_wrap class END-->

           

            

            </div>

        </div>

   </div><!--layer_wrapper class END-->

<?php get_footer(); ?>