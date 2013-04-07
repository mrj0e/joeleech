<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?> ">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?> span12" role="main">
     	
		        <?php roots_loop_before(); ?>
		        <?php get_template_part('loop', 'single'); ?>
		       <?php roots_loop_after(); ?>
	
       
 
    <?php roots_main_after(); ?>
    
   
   

   
  <?php roots_content_after(); ?>
<?php get_footer(); ?>