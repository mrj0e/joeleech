<div id="recentList">
	<?php get_sidebar(); ?>
</div>

  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  <div id="footer-container">
  

  
  
  <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
    <?php roots_footer_inside(); ?>
 

 	<div class="span12 latest-tweet">
  		 <p>
  		 <a href="http://www.twitter.com/mrjoe" title="@mrjoe on Twitter"><img src="<?php bloginfo('template_directory'); ?>/img/tweet-black-small2.png" alt="From Twitter" class="twitter-icon"/><?php displayLatestTweet('mrjoe'); ?></a></p>
 	</div>

      
    <div class="row">
    	<?php dynamic_sidebar('sidebar-footer'); ?>
    </div>

    
    
    
    <p class="now-playing"><small><img src="<?php bloginfo('template_directory'); ?>/img/eq.gif"alt="" height="10px"><?php lastfm_tracks('niceguyjoe', 1, false, false, true); ?> is currently on the stereo. ALWAYS BE NICE. &copy; Joe Leech </small> </p>

  </footer>
  </div>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>

</body>
</html>