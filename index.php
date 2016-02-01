<?php get_header(); ?>
<div id="content">
	<div id="inner-content-top">

		<video autoplay  poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" loop>
		  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
		<source src="wp-content/themes/w4e-education/library/video/demo.webm" type="video/webm">
		<source src="wp-content/themes/w4e-education/library/video/demo.mp4" type="video/mp4">
		</video>

		<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<?php

		// $query = new WP_Query( 'cat=11' );
		// if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		// unset($post_image);
		// if ( has_post_thumbnail() ) {
		// 	$post_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		// }
		?>


		<?php
		// endwhile;
		// bones_page_navi();
		// endif;
		?>
		</main>
	</div>
	<div class="container">
        <!-- Page Content goes here -->

	<div id="inner-content-corsi" >

		<h2 >[:it]Acquista il tuo corso[:xx]Buy your ticket now![:]</h2>
		<h3>Web 4 Enterprise offre corsi di formazione con docenti specializzati per le tematiche più calde.
			Scegli il corso di tuo interessa, e prenota subito il tuo posto! Tutti i corsi hanno un limite di posti disponibili.</h3>


		<div class="courses swiper-container">
			<div class="row swiper-wrapper">
			<?php

			$args = array(
			    'post_type' => 'product',
			    'meta_key' => '_featured',
			    'meta_value' => 'yes',
			    'posts_per_page' => 12
			);

			$featured_query = new WP_Query( $args );
			?>
			<?php if ( $featured_query->have_posts() ) : while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
			<?php
			unset($post_image);
			if ( has_post_thumbnail() ) {
				$post_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			}
			?>

				<div class="col s12 m4 l3 swiper-slide">
					<div class="card medium hoverable">
						<div class="card-image">
							<img src="<?php echo($post_image[0]);?>">
							<span class="badge promoBadge">PROMO</span>
						</div>
						<div class="card-content">
						<span class="card-title"><?php the_title(); ?></span>
							<p class="truncate">I am a very simple card. I am good at containing small bits of information.
							I am convenient because I require little markup to use effectively.</p>
						</div>
						<div class="card-action">
							<div class="prezzoCorso">100€</div>
							<a class="waves-effect waves-light btn buttonsMore"><?php _e( 'Acquista!', 'bonestheme' ); ?></a>
						</div>
					</div>
				</div>

				<?php endwhile; ?>
				<?php else : ?>
				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
						<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>
				<?php endif; ?>
			</div>



		</div>
		</div>


	</div>
</div>
</div>

<div id="inner-content-aziende">


<div class="b2b-solutions">
	<?php $query = new WP_Query( 'cat=12' ); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	<?php
	unset($post_image);
	if ( has_post_thumbnail() ) {
		$post_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	}
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" style="background-image: url(<?php echo($post_image[0]);?>)">
		<header class="article-header">
			<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<p class="byline entry-meta vcard">
				<?php
					printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
								/* the time the post was published */
								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
								/* the author of the post */
								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
				); ?>
			</p>
		</header>
		<section class="entry-content cf">
			<?php the_content(); ?>
		</section>
		<footer class="article-footer cf">
			<p class="footer-comment-count">
				<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
			</p>
			<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
			<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
		</footer>
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>
<!--End slider-->
</div> <!-- /content  -->
<?php get_footer(); ?>