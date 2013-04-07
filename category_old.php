<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>" class="span12">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <div class="page-header">
         <h1><?php single_cat_title(); ?></h1>
         <p class="category-description"><?php echo category_description(); ?></p>
        </div>
        <?php get_template_part('loop', 'index'); ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php roots_post_inside_before(); ?>
     
      <header class="listing-page">
        
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
      </header>
      
      <div class="excerpt-content">
        <?php if (is_archive() || is_search()) { ?>
          <p><?php the_excerpt(); ?></p>
        <?php } else { ?>
          <?php the_content(); ?>
        <?php } ?>
      </div>
      
      <footer>
        <?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
      </footer>
    <?php roots_post_inside_after(); ?>
    </article>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) { ?>
  <nav id="post-nav" class="pager">
    <div class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></div>
    <div class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></div>
  </nav>
<?php } ?>

  </div><!-- /#main -->
    <?php roots_main_after(); ?>
       </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>