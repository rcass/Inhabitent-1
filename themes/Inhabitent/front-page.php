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

<section class="front-section">

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
  </section>

<section class="adventures container">
                 <h2>Latest Adventures</h2>
     <ul class="clearfix">
                       <li>
           <div class="story-wrapper">
                                         <img width="3000" height="2000" src="http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl.jpg" class="attachment-full size-full wp-post-image" alt="A girl paddling a canoe" srcset="http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl.jpg 3000w, http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl-300x200.jpg 300w, http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl-768x512.jpg 768w, http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl-1024x683.jpg 1024w" sizes="(max-width: 3000px) 100vw, 3000px" />                                                <div class="story-info">
                 <h3 class="entry-title"><a href="http://tent.academy.red/adventure/getting-back-to-nature-in-a-canoe/" rel="bookmark">Getting Back to Nature in a Canoe</a></h3>                           <a class="white-btn" href="http://tent.academy.red/adventure/getting-back-to-nature-in-a-canoe/">Read More</a>
              </div>
           </div>
        </li>
                       <li>
           <div class="story-wrapper">
                                         <img width="640" height="427" src="http://tent.academy.red/wp-content/uploads/2016/04/beach-bonfire-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="A bonfire with friends on the beach" srcset="http://tent.academy.red/wp-content/uploads/2016/04/beach-bonfire-1024x683.jpg 1024w, http://tent.academy.red/wp-content/uploads/2016/04/beach-bonfire-300x200.jpg 300w, http://tent.academy.red/wp-content/uploads/2016/04/beach-bonfire-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px" />                                                <div class="story-info">
                 <h3 class="entry-title"><a href="http://tent.academy.red/adventure/a-night-with-friends-at-the-beach/" rel="bookmark">A Night with Friends at the Beach</a></h3>                           <a class="white-btn" href="http://tent.academy.red/adventure/a-night-with-friends-at-the-beach/">Read More</a>
              </div>
           </div>
        </li>
                       <li>
           <div class="story-wrapper">
                                         <img width="640" height="427" src="http://tent.academy.red/wp-content/uploads/2016/04/mountain-hikers-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="Hikers taking in the view on a mountain" srcset="http://tent.academy.red/wp-content/uploads/2016/04/mountain-hikers-1024x683.jpg 1024w, http://tent.academy.red/wp-content/uploads/2016/04/mountain-hikers-300x200.jpg 300w, http://tent.academy.red/wp-content/uploads/2016/04/mountain-hikers-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px" />                                                <div class="story-info">
                 <h3 class="entry-title"><a href="http://tent.academy.red/adventure/taking-in-the-view-at-big-mountain/" rel="bookmark">Taking in the View at Big Mountain</a></h3>                           <a class="white-btn" href="http://tent.academy.red/adventure/taking-in-the-view-at-big-mountain/">Read More</a>
              </div>
           </div>
        </li>
                       <li>
           <div class="story-wrapper">
                                         <img width="640" height="427" src="http://tent.academy.red/wp-content/uploads/2016/04/night-sky-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="Person star-gazing at the night sky" srcset="http://tent.academy.red/wp-content/uploads/2016/04/night-sky-1024x683.jpg 1024w, http://tent.academy.red/wp-content/uploads/2016/04/night-sky-300x200.jpg 300w, http://tent.academy.red/wp-content/uploads/2016/04/night-sky-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px" />                                                <div class="story-info">
                 <h3 class="entry-title"><a href="http://tent.academy.red/adventure/star-gazing-at-the-night-sky/" rel="bookmark">Star-Gazing at the Night Sky</a></h3>                           <a class="white-btn" href="http://tent.academy.red/adventure/star-gazing-at-the-night-sky/">Read More</a>
              </div>
           </div>
        </li>
                    </ul>
     <p class="see-more">
        <a href="http://tent.academy.red/adventures/" class="btn">More Adventures</a>
     </p>
           </section>
  <?php get_footer(); ?>


