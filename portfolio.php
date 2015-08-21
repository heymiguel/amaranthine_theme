
<?php 

/*
  Template Name: Portfolio Pieces - Amaranthine
*/

get_header(); ?>

<div class="rightPortfolio">
  <div class="portfolioItems">
            <?php 
            $portfolioHeaderQuery = new WP_Query(
                              array(
                                'post_type' => 'portfolio'
                              )
                            );
                           ?>

                           <?php if ($portfolioHeaderQuery->have_posts()): ?>
                              <?php while ($portfolioHeaderQuery->have_posts()) : $portfolioHeaderQuery->the_post(); ?>
                          <h2><?php the_title(); ?></h2>
                          <p><?php the_content(); ?></p>
                              <?php endwhile; ?>
                              
                              <?php wp_reset_postdata(); ?>
                           <?php endif; ?>
    <div class="content">
        
    </div> <!--/.content -->
  </div> <!-- /.container -->
  <div class="container">
    <?php get_footer(); ?>
  </div>
</div> <!-- /.main -->

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>