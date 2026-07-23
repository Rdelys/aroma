<?php
/**
 * Template de la page d'accueil AROMA OËL
 * Contenu FR conforme au Document 04 — Contenus officiels du site
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main>

	<!-- BLOC 01 — HERO -->
	<section class="hero">
		<div class="hero-icon"><i class="ti ti-droplet" aria-hidden="true" style="font-size:28px;color:var(--vert);"></i></div>
		<h1>Des rituels naturels, simples et purs</h1>
		<p>AROMA OËL, maison française de rituels naturels. Huiles essentielles, huiles végétales et poudres sélectionnées avec exigence, pour accompagner vos moments de vie. PURE BY NATURE — la pureté, sans compromis.</p>
		<div class="hero-cta">
			<a href="<?php echo esc_url( home_url( '/rituels/' ) ); ?>" class="btn btn--primary">Découvrir les rituels</a>
			<a href="<?php echo esc_url( home_url( '/boutique/' ) ); ?>" class="btn btn--secondary">Explorer la boutique</a>
		</div>
	</section>

	<!-- BLOC 02 — PHILOSOPHIE -->
	<section class="section">
		<div class="container philo">
			<div class="philo-text">
				<h2>La philosophie AROMA OËL</h2>
				<p>AROMA OËL est une maison française de rituels naturels. Nous croyons que les gestes simples sont ceux qui durent : quelques gouttes dans un diffuseur, une huile chauffée entre les mains, un masque préparé le dimanche soir. C'est pourquoi nous parlons de rituels avant de parler de produits — parce qu'une huile ne prend tout son sens que dans le moment qu'elle accompagne.</p>
				<a href="<?php echo esc_url( home_url( '/notre-histoire/' ) ); ?>" class="btn btn--secondary btn--small">Découvrir notre histoire</a>
			</div>
			<div class="philo-img">
				<i class="ti ti-photo" aria-hidden="true"></i>
				<span class="sr-only">Mains versant quelques gouttes d'huile AROMA OËL, geste de rituel naturel</span>
			</div>
		</div>
	</section>

	<!-- BLOC 03 — ESSENTIAL RITUALS -->
	<section class="section section--alt">
		<div class="container">
			<div class="section-intro">
				<h2>Essential Rituals</h2>
				<p>Trois rituels d'huiles essentielles, quatre flacons chacun, un roll-on rechargeable de 10 ml offert (livré vide).</p>
			</div>
			<div class="grid-3">
				<div class="card-ritual card-ritual--essential">
					<div class="icon"><i class="ti ti-leaf" aria-hidden="true"></i></div>
					<h3>RESET</h3>
					<div class="subtitle">Le rituel pour retrouver son équilibre.</div>
					<div class="hook">Katrafay, Ravintsara, Saro, Eucalyptus globuleux.</div>
					<a href="<?php echo esc_url( home_url( '/rituels/reset/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel RESET</a>
				</div>
				<div class="card-ritual card-ritual--essential">
					<div class="icon"><i class="ti ti-wind" aria-hidden="true"></i></div>
					<h3>FLOW</h3>
					<div class="subtitle">Le rituel du souffle et de la fluidité.</div>
					<div class="hook">Ravintsara, Saro, Niaouli, Eucalyptus globuleux.</div>
					<a href="<?php echo esc_url( home_url( '/rituels/flow/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel FLOW</a>
				</div>
				<div class="card-ritual card-ritual--essential">
					<div class="icon"><i class="ti ti-bolt" aria-hidden="true"></i></div>
					<h3>BOOST</h3>
					<div class="subtitle">Le rituel énergie.</div>
					<div class="hook">Ylang-Ylang, Katrafay, Niaouli, Eucalyptus citronné.</div>
					<a href="<?php echo esc_url( home_url( '/rituels/boost/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel BOOST</a>
				</div>
			</div>
		</div>
	</section>

	<!-- BLOC 04 — BOTANICAL RITUALS -->
	<section class="section">
		<div class="container">
			<div class="section-intro">
				<h2>Botanical Rituals</h2>
				<p>Trois rituels de soin, autour d'huiles végétales et de poudres complémentaires.</p>
			</div>
			<div class="grid-3">
				<div class="card-ritual card-ritual--botanical">
					<div class="icon"><i class="ti ti-sparkles" aria-hidden="true"></i></div>
					<h3>GLOW</h3>
					<div class="subtitle">Le rituel éclat.</div>
					<div class="hook">Huile et poudre de Figue de Barbarie.</div>
					<a href="<?php echo esc_url( home_url( '/rituels/glow/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel GLOW</a>
				</div>
				<div class="card-ritual card-ritual--botanical">
					<div class="icon"><i class="ti ti-plant-2" aria-hidden="true"></i></div>
					<h3>ROOTS</h3>
					<div class="subtitle">Le rituel nourrissant.</div>
					<div class="hook">Huile et poudre de Moringa.</div>
					<a href="<?php echo esc_url( home_url( '/rituels/roots/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel ROOTS</a>
				</div>
				<div class="card-ritual card-ritual--botanical">
					<div class="icon"><i class="ti ti-feather" aria-hidden="true"></i></div>
					<h3>BLOOM</h3>
					<div class="subtitle">Le rituel douceur.</div>
					<div class="hook">Huile de Kukui, poudre de Baobab.</div>
					<a href="<?php echo esc_url( home_url( '/rituels/bloom/' ) ); ?>" class="btn btn--secondary btn--small">Vivre le rituel BLOOM</a>
				</div>
			</div>
		</div>
	</section>

	<!-- BLOC 05 — PRODUITS INDIVIDUELS -->
	<section class="section section--alt">
		<div class="container">
			<div class="section-intro">
				<h2>Nos produits</h2>
				<p>Pour découvrir, compléter ou renouveler un rituel — chaque produit est aussi disponible à l'unité.</p>
			</div>
			<div class="grid-3">
				<div class="card-product">
					<div class="thumb"><i class="ti ti-flask" aria-hidden="true"></i></div>
					<h3>Huiles essentielles</h3>
					<p style="font-size:13px;color:var(--brun-clair);">23 huiles 100&nbsp;% pures et naturelles, avec certificat d'analyse disponible.</p>
					<a href="<?php echo esc_url( home_url( '/boutique/huiles-essentielles/' ) ); ?>" class="btn btn--secondary btn--small">Découvrir</a>
				</div>
				<div class="card-product">
					<div class="thumb"><i class="ti ti-droplet-half-2" aria-hidden="true"></i></div>
					<h3>Huiles végétales</h3>
					<p style="font-size:13px;color:var(--brun-clair);">Figue de Barbarie, Kukui, Marula, Moringa — quatre huiles de soin, en 30&nbsp;ml.</p>
					<a href="<?php echo esc_url( home_url( '/boutique/huiles-vegetales/' ) ); ?>" class="btn btn--secondary btn--small">Découvrir</a>
				</div>
				<div class="card-product">
					<div class="thumb"><i class="ti ti-brush" aria-hidden="true"></i></div>
					<h3>Poudres végétales</h3>
					<p style="font-size:13px;color:var(--brun-clair);">Figue de Barbarie, Baobab, Moringa — trois poudres pour vos masques faits maison.</p>
					<a href="<?php echo esc_url( home_url( '/boutique/poudres-vegetales/' ) ); ?>" class="btn btn--secondary btn--small">Découvrir</a>
				</div>
			</div>
		</div>
	</section>

	<!-- BLOC 06 — ENGAGEMENTS -->
	<section class="section" style="padding-top:48px;padding-bottom:48px;">
		<div class="container">
			<div class="section-intro" style="margin-bottom:32px;"><h2>Nos engagements</h2></div>
			<div class="engagements">
				<div class="engagement"><i class="ti ti-droplet-filled" aria-hidden="true"></i><span>100&nbsp;% pur et naturel</span></div>
				<div class="engagement"><i class="ti ti-check" aria-hidden="true"></i><span>Sélection exigeante</span></div>
				<div class="engagement"><i class="ti ti-certificate" aria-hidden="true"></i><span>Certificat d'analyse</span></div>
				<div class="engagement"><i class="ti ti-package" aria-hidden="true"></i><span>Préparation soignée</span></div>
				<div class="engagement"><i class="ti ti-lock" aria-hidden="true"></i><span>Paiement sécurisé</span></div>
				<div class="engagement"><i class="ti ti-truck" aria-hidden="true"></i><span>Suivi de commande</span></div>
			</div>
		</div>
	</section>

	<!-- BLOC 07 — NOTRE HISTOIRE -->
	<section class="section section--alt">
		<div class="container story">
			<div class="story-img">
				<i class="ti ti-photo" aria-hidden="true"></i>
				<span class="sr-only">Atelier AROMA OËL, flacons et matières naturelles en lumière douce</span>
			</div>
			<div class="story-text">
				<h2>Notre histoire</h2>
				<p>AROMA OËL est née d'une conviction simple : la nature a toute sa place dans le quotidien, à condition de la rendre accessible par des gestes simples. Maison française de rituels naturels, portée par MAISON KAMEO, AROMA OËL sélectionne avec exigence des huiles essentielles, des huiles végétales et des poudres reconnues pour leur qualité.</p>
				<a href="<?php echo esc_url( home_url( '/notre-histoire/' ) ); ?>" class="btn btn--secondary btn--small">Lire notre histoire</a>
			</div>
		</div>
	</section>

	<!-- BLOC 08 — AVIS CLIENTS -->
	<!-- Règle Document 04 : masquer ce bloc tant qu'aucun avis authentique n'est disponible -->
	<?php if ( false ) : // passer à true une fois de vrais avis intégrés ?>
	<section class="section">
		<div class="container">
			<div class="section-intro"><h2>Ils vivent leurs rituels</h2></div>
			<div class="grid-3">
				<div class="review-card">« Avis client authentique à intégrer ici. »</div>
				<div class="review-card">« Avis client authentique à intégrer ici. »</div>
				<div class="review-card">« Avis client authentique à intégrer ici. »</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- BLOC 09 — JOURNAL (3 derniers articles) -->
	<section class="section section--alt">
		<div class="container">
			<div class="section-intro">
				<h2>Le Journal</h2>
				<p>Des idées de rituels, des plantes racontées, des gestes simples à adopter.</p>
			</div>
			<div class="grid-3">
				<?php
				$journal_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
				if ( $journal_query->have_posts() ) :
					while ( $journal_query->have_posts() ) : $journal_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="journal-card" style="display:block;">
							<div class="thumb">
								<?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'aromaoel-card' ); else : ?>
									<i class="ti ti-notebook" aria-hidden="true"></i>
								<?php endif; ?>
							</div>
							<h3><?php the_title(); ?></h3>
						</a>
					<?php endwhile; wp_reset_postdata();
				else :
					// Espace réservé tant qu'aucun article n'est publié
					for ( $i = 0; $i < 3; $i++ ) : ?>
						<div class="journal-card">
							<div class="thumb"><i class="ti ti-notebook" aria-hidden="true"></i></div>
							<h3>Article à publier</h3>
						</div>
					<?php endfor;
				endif; ?>
			</div>
			<div style="text-align:center;margin-top:32px;">
				<a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>" class="btn btn--secondary btn--small">Lire le Journal</a>
			</div>
		</div>
	</section>

	<!-- BLOC 10 — NEWSLETTER -->
	<section class="section newsletter">
		<div class="container" style="max-width:520px;">
			<h2>Restons en lien</h2>
			<p style="color:var(--brun-clair);font-size:14px;">Recevez nos idées de rituels, nos nouveautés et nos conseils — une à deux fois par mois, jamais plus.</p>
			<form class="newsletter-form" method="post" action="#">
				<label for="newsletter-email" class="sr-only">Votre adresse e-mail</label>
				<input type="email" id="newsletter-email" name="email" placeholder="Votre adresse e-mail" required>
				<button type="submit" class="btn btn--primary">Je m'inscris</button>
			</form>
			<small>En vous inscrivant, vous acceptez de recevoir nos e-mails et confirmez avoir lu notre politique de confidentialité. Désinscription en un clic.</small>
		</div>
	</section>

</main>

<?php get_footer(); ?>
