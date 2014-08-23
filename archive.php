<?php
get_header(); ?>

<h1 class="archive-title"><?php akaiv_archive_title(); ?></h1>
<ul>
<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'content' );
	endwhile;
?>
</ul>

<?php
get_footer();