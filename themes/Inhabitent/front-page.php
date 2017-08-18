<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">





<?php //get_sidebar(); ?>
<div id="main-image"></div>

<h2 id="shopZero">Shop Stuff</h2>

<!-- <section class="shopStuff">
<div id="doOne">  
<img src="http://tent.academy.red/wp-content/themes/inhabitent/images/do.svg" alt="Do">  
<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
<button class="shopButton" type="button">Do Stuff</button>
</div>
<div id="eatTwo">
<img src="http://tent.academy.red/wp-content/themes/inhabitent/images/eat.svg" alt="Eat">
<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
<button class="shopButton" type="button">Eat Stuff</button>
</div>
<div id="sleepThree" class="category-item">
<img src="http://tent.academy.red/wp-content/themes/inhabitent/images/sleep.svg" alt="Sleep">
<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
<button class="shopButton" type="button">Sleep Stuff</button>
</div>
<div id="wearFour">
<img src="http://tent.academy.red/wp-content/themes/inhabitent/images/wear.svg" alt="Wear">  
<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.<p>
<button class="shopButton" type="button">Wear Stuff</button>
</div>  
</section> -->

<?php
   $args = array( 'post_type' => 'product-type' );
   $product_terms = get_terms( $args ); // returns an array of posts
?>
<section class="shopStuff">
<?php foreach ( $product_terms as $term ) : setup_postdata( $term ); ?>
<div class="category-item">
  <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug . '.svg'; ?>">
  <p><?php echo $term->description;?></p>
  <a class="shopButton" href="<?php get_term_link( $term ); ?>"><?php echo $term->name ?></a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</section>

<?php
   $journal_args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date' );
   $journal_posts = get_posts( $journal_args ); // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
   <?php /* Content from your array of post results goes here */ ?>
  

<div class="journal-recent-block-item">
  <div class="journal-thumbnail-wrapper">

  <?php if (has_post_thumbnail()) :?>
  <?php the_post_thumbnail( 'medium' ); ?>
<?php endif; ?>
  </div>

  </div>
  <div class="entry-meta">
  <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
</div>

  <a href="<? echo get_post_permalink() ?>"><?php the_title(); ?></a>
  </div>

  <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </main><!-- #main -->
	</div><!-- #primary -->
  <?php get_footer(); ?>


