<?php
/**
 * Fichier de secours obligatoire (WordPress l'exige dans tout thème)
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="container section">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?> style="margin-bottom:48px;">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
		</article>
	<?php endwhile; else : ?>
		<p>Aucun contenu trouvé.</p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
