<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="container section">
	<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<div class="page-content"><?php the_content(); ?></div>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
