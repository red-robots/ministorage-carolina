<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<section class="intro">

  <div class="wrapper">
    

    <div id="row1-box2">
      <div class="row1box2-heading">Helpful People, Convenient Storage</div>
      <ul>
        <li>Monthly & Long Term Rentals</li>
        <li>Unit Sizes To Suit Your Needs</li>
        <li>Packing Supplies</li>
        <li>Super Competitive Rates!</li>
      </ul>
      <div id="specials">
        <a href="<?php bloginfo('url'); ?>/specials">
          See Our Specials
        </a>
      </div>
    </div>
    <!-- row1-box2 -->

  <div id="find-location-box">
    <div id="find-location-box-header">Find A Location</div>
    <div id="find-location-menu">

      <div id="find-location-text2">
        View Storage Unit Sizes,  Make a Reservation, Make a Payment, <br>
        View Map of Locations, See Features, Contact Us & More!
      </div>

      <div class="drop-container">
        <div id="dropdown-text">LOCATIONS: </div>
          <div id="dropdown-menu" class="home">  
            <nav>
              <ul>
                <li class="main-li-width">Choose from our convenient locations
                <?php $wp_query = new WP_Query();
                      $wp_query->query(array(
                        'post_type'=>'location',
                        'posts_per_page' => -1
                      )); ?>
                  <ul>
                    <?php while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>
                      <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                    <?php endwhile;?>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- drop container -->

        <div class="butn-cont">
          <div class="button-location ">
            <a href="<?php bloginfo('url'); ?>/our-storage-locations/">GO</a>
          </div>
        </div>
      </div>  
      <!-- dropdown-text -->
    </div>
    <!-- find-location-box -->
    </div>
    <!-- wrapper -->
</section>


<section class="boxes">
  <?php 
  $recent = new WP_Query("page_id=73"); 
  while($recent->have_posts()) : $recent->the_post();?>
    <div class="box box-third">
      <h2 class="heading1">GETTING STARTED:</h2>
        <h3><?php the_field('box_1_heading'); ?></h3>
        <p><?php the_field('box_1_text'); ?></p>
        <?php 
        $image = get_field('box_1_image');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
        <?php endif; ?>
      
        <div class="button-lg button-bottom">
          <a href="<?php bloginfo('url'); ?>/getting-started/how-much-space-do-you-need/">GO</a>
        </div>
    </div>
    <!-- home-row2-box -->

  <div class="box box-third">
    <h2 class="heading2">SEARCH BY FEATURES:</h2>
      <h3><?php the_field('box_2_heading'); ?></h3>
      <p><?php the_field('box_2_text'); ?></p>
      <?php 
      $image = get_field('box_2_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
      <?php endif; ?>
      <div class="button-lg button-bottom">
        <a href="<?php bloginfo('url'); ?>/features-amenities/">GO</a>
      </div>
  </div>
  <!-- home-row2-box -->

  <div class="box box-third">
    <h2 class="heading3">REQUEST A RESERVATION NOW: </h2>
      <h3><?php the_field('box_3_heading'); ?></h3>
      <p><?php the_field('box_3_text'); ?></p>
      <?php 
      $image = get_field('box_3_image');
      if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
      <?php endif; ?>
      <div class="button-lg button-bottom">
        <a href="<?php bloginfo('url'); ?>/rent-space/">GO</a>
      </div>
  </div>
  <!-- home-row2-box -->
  <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
  
</section>

<div id="row3">

<div id="row3-left">
<h2>Storage Locations</h2>
  <div class="map">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=z7c8s7_q7uUo.k0vgc2Miq_FI" width="100%" height="350"></iframe> 
  </div>
<?php $wp_query = new WP_Query();
    $wp_query->query(array(
      'post_type'=>'location',
      'posts_per_page' => -1
    )); ?>
    <ul>
    <?php while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
    <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
    </ul>
</div>

<div id="row3-right">
  <h2>Latest News</h2>

<div class="stories">


    <div id="news">
      <ul>
      <?php /* Second Custom Query pulling the post type, "announcements" */  
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => '2'  
      );
      $query = new WP_Query( $args );  // Query all of your arguments from above
      if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>
    <div class="news-story">
          <div class="story-title">
          <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        </div><!--story-title -->
        <div class="story-body">
          <div class="img-wrap"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
          
          <div class="story-excerpt"><?php the_excerpt(); ?></div>
        </div><!-- story-body -->
        <div class="story-read">
          <a href="<?php the_permalink() ?>">read more</a>
        </div><!-- story-read -->
        <div class="clear"></div>
    </div>  <!--news-story -->
      <?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
      </ul>
    </div><!-- news -->
</div><!-- stories -->

<div class="all-news-button">
    <a href="http://localhost:8888/ministorage/site/news/">All News</a>
</div><!-- all-news-button -->


</div><!-- row3-right -->

<?php get_footer(); ?>