<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="span12" role="main">
      

      
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop'); ?>
        <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
        <?php roots_loop_after(); ?>
    
        <div class="row">
        <div class="span8">
        <p><a href="/assets/cxwebgrey.png"><img class="alignleft size-medium wp-image-757" title="cxwebgrey" src="http://localhost:8888/wordpress/assets/cxwebgrey.png" alt="cxpartners" width="20%" /></a>I <a href="/writing">write</a>, <a href="/speaking">speak</a> and consult on User Experience from Bristol in the UK. I work for cxpartners as a User Experience Director. You can follow me on twitter, I'm <a title="Joe Leech on Twitter" href="http://twitter.com/mrjoe">@mrjoe</a>, I'm on <a title="View Joe Leech on Linkedin" href="http://www.linkedin.com/profile/view?id=6938849">LinkedIn</a> and <a title="view Joe Leech on Zerply" href="http://zerply.com/mrjoe">Zerply</a>.</p>
        </div>
        <div class="span4">
        <a href="http://localhost:8888/wordpress/assets/joe_leech.png"><img class="size-medium wp-image-740" title="joe_leech" src="http://localhost:8888/wordpress/assets/joe_leech-300x200.png" alt="Joe Leech aka @mrjoe"/></a>
        </div>
        </div><!-- end row -->
       
  
       
        
        
      </div><!-- /#main -->
    <?php roots_main_after(); ?>




    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>