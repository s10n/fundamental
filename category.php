<?php
get_header(); ?>

<h1 class="archive-title">
	<?php single_cat_title(); ?>
</h1>
<ul class="archive-list">
<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'content' );
	endwhile;
?>
</ul>

<?php
get_footer();