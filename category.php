<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        
        <div class="page-header">
         <div class="row">
      	   <div class="span12 cat-description">
		         <h1><?php single_cat_title(); ?></h1>
		         
		         <?php if (is_category('Speaking')) : ?>
		         
		         <div class="row">
		         	<img src="<?php bloginfo('template_directory'); ?>/img/meFOWD.jpg" title="" alt="Joe Leech aka mrjoe at Future of web design" class="span12 cat-image"/>          
		         </div>
		         	
		         <?php elseif (is_category('Writing here')) : ?>
		            <!--Here-->
		         <?php elseif (is_category('Writing there')) : ?>
		         	<!--There-->
		         	
		         <?php else : ?>
		         	<!--nothing-->
		         <?php endif; ?>
		         
		        <?php if ( $paged < 2 ) : ?>
		         	<p><?php echo category_description(); ?></p>
		        <?php else : ?>
		         
		         <!--nothing here-->
		         
		         <?php endif; ?>
         
       	  </div>
         </div>
        
        </div>
        <div class="row">
        	   <div class="span12">
        <?php get_template_part('loop', 'index'); ?>
        	</div>
        </div>





  </div><!-- /#main -->
    <?php roots_main_after(); ?>
       </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>