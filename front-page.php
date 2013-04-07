<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="span12" role="main">
      

      
        
        <?php roots_loop_before(); ?>
        <div class="page-header">
   <div class="row">
   <div class="span12">
        <h1 id="post-<?php the_ID(); ?>" class="homepage-header">Hi, I<span class="constrict">'</span>m @mrjoe but you can call me<span class="constrictJ"> </span>Joe.</h1>
        </div>
    </div>
    </div>
    
        <div class="row">
        <div class="span12">
        
        <img class="size-medium wp-image-740 homepageImage" src="/wordpress/assets/joe_leech-300x200.png" alt="Joe Leech aka @mrjoe" />
        
        <p>I'm Joe Leech and I <a href="category/writing-here/">write here</a> and I <a href="category/writing-there/">write elswhere</a> for various websites & magazines, <a href="category/speaking-conferences/">speak</a> and <a href="consult/">consult</a> on User Experience from Bristol in the UK. I work for <a href="http://www.cxpartners.co.uk">cxpartners</a> as a User Experience Director. </p>
        
        <p>You can follow me on twitter, I'm <a title="Joe Leech on Twitter" href="http://twitter.com/mrjoe">@mrjoe</a>, I'm on <a title="View Joe Leech on Linkedin" href="http://www.linkedin.com/profile/view?id=6938849">LinkedIn</a> and <a title="view Joe Leech on Zerply" href="http://zerply.com/mrjoe">Zerply</a>.<br />
        <!--
        	<img src="./img/cxwebgrey.png" alt="cxpartners" width="20%" />-->
        
        </p>
     
        <p>I've also written an eBook. <a href="http://www.fivesimplesteps.com/products/psychology-for-designers">Psychology for designers</a>. Out now and only £2/$3.  
       		</p>
       		
        
        
        
        <?php the_content();?>
        
    </div>
      
        </div><!-- end row -->
       <?php roots_loop_after(); ?>
  
       
        
        
      </div><!-- /#main -->
    <?php roots_main_after(); ?>




    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>