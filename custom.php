<?php
/*
Template Name: custom
*/
get_header(); ?> 
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>" class="span12">
    <!-- full width-->
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main" class="span12">
   
        <?php roots_loop_before(); ?>
       
            <div class="page-header">
       <div class="row">
       <div class="span12">
            <h1 id="post-<?php the_ID(); ?>" class="homepage-header"><?php the_title();?></h1>
            <?php the_content(); ?>
            
            </div>
        </div>
        </div>
        
          
       
        <?php roots_loop_after(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
   
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>