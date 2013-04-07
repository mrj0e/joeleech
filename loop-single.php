<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
  
	<div class="row">
      
		    <article id="post-<?php the_ID(); ?>" >
					    <?php roots_post_inside_before(); ?>
					
					    
					 			 <div class="span12">
								      <header>
								        <h1 class="entry-title"><?php the_title(); ?></h1>
								        <?php roots_entry_meta(); ?>
								      </header>
					     	 	</div>
			
			</article>		     	 
	</div><!--end row-->
					  
					
	<div class="row">
	<div class="span12 hacked">
					      
	
				      		
		<div class="entry-content span8">
						     		   <?php the_content(); ?>
						     		   
					<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
					</footer>
					<?php comments_template(); ?>
					<?php roots_post_inside_after(); ?>				     		   
						     		   
		</div>
		
				      
		
		    
		    
		  
			<?php roots_sidebar_before(); ?>
					    <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES;?> span3" role="complementary">
					    <?php roots_sidebar_inside_before(); ?>
					      <?php get_sidebar(); ?>
					    <?php roots_sidebar_inside_after(); ?>
					    </aside><!-- /#sidebar -->
			<?php roots_sidebar_after(); ?>

 			
 			</div>
 			</div>
    </div><!--end row-->
     </div><!-- /#content -->


  <?php roots_post_after(); ?>
  	
<?php endwhile; /* End loop */ ?>

