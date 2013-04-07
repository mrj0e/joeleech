<?php if ($maxitems == 0) echo '<li>No items.</li>';
else
// Loop through each feed item and display each item as a hyperlink.
foreach ( $rss_items as $item ) : ?>
<div class='latesttweet'>
<h2>
	<a href='<?php echo $item->get_permalink(); ?>' title='Go see @mrjoe on Twitter'></a>

<?php echo $item->get_title(); ?>
</a>
</h2>
</div>
<?php endforeach; ?>