<?php if ( is_singular() ) : ?>

	<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php the_content(); ?>

<?php else : ?>

	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_excerpt(); ?></li>

<?php endif; ?>
