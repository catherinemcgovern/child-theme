<?php

/*

Template Name: Wine Page

*/

?>

<?php global $optimizer;?>

<?php get_header(); ?>





    <div class="page_fullwidth_wrap layer_wrapper">

        

        <!--CUSTOM PAGE HEADER STARTS-->

            

        <!--CUSTOM PAGE HEADER ENDS-->

  
				<div class="header-color" style="background-image: url(https://cantaloupeisland.com/wp-content/themes/optimizer-child/images/wine-header.png)">
				
				<br>
<br>

<div id="headline">
			<h1 class="serif">
				Featured</h1>
					<h1 class="sans">
				Wines</h1>
				</div>
					
					</div>
					
					<!--experiment-->
				
				<div class="white-container">
		
			<div class="wine-clear-row-box">
				
				
				
				 <!-- begin Catherine's Code -->
					  	   <?php 
// the query
	
$args = array(
    'post_type' => array( 'wine' )
);
 
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
		<div class="wine-container">
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			
			<?php the_title(); ?></a></h2>
		<p><?php the_content(); ?></p>
				</div>	
				
				
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
	   
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