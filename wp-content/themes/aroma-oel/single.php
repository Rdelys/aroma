<?php
/** Template article du Journal */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="container section" style="max-width:760px;">
	<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) : ?>
			<div style="margin-bottom:32px;"><?php the_post_thumbnail( 'aromaoel-hero' ); ?></div>
		<?php endif; ?>
		<div class="page-content"><?php the_content(); ?></div>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
