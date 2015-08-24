<?php 

/*
  Template Name: portfolio archive
*/
get_header(); ?>

<div class="rightPortfolio">
  <div class="portfolioItems clearfix">

    <div class="content">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="entry-title">
            <div class="redTriangle"></div>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a> 
            </h1>

            <div class="entry-content">
              <img src="<?php the_field('item_photo'); ?>">
              <?php the_excerpt(); ?> 
              <?php wp_link_pages(array(
                'before' => '<div class="page-link"> Pages: ',
                'after' => '</div>'
              )); ?>
            </div><!-- .entry-content -->

            <div class="entry-utility">
              <strong class="liveLink"><a href="<?php the_field("livelink") ?>">see it live</a></strong>
              <?php hackeryou_posted_in(); ?>
              <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
            </div><!-- .entry-utility -->
          </div><!-- #post-## -->

          <div class="entry-meta">
            <!-- <?php hackeryou_posted_on(); ?> -->
          </div><!-- .entry-meta -->

          <div id="nav-below" class="navigation">
            <!-- <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p> -->
            <!-- <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p> -->
          </div><!-- #nav-below -->

          <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>
    </div> <!--/.content -->
  </div> <!-- /.container -->
  <div class="container">
    <?php get_footer(); ?>
  </div>
</div> <!-- /.main -->

<div class="wrapper clearfix">
  <div class="main">

    <div class="mainSection clearfix">

      
      

       <div class="leftPortfolio">
          <div class="redTextLeft">
           <?php 
           $blogHeaderQuery = new WP_Query(
                             array(
                               'post_type' => 'customarchive'
                             )
                           );
                          ?>

                          <?php if ($blogHeaderQuery->have_posts()): ?>
                             <?php while ($blogHeaderQuery->have_posts()) : $blogHeaderQuery->the_post(); ?>
                         <h2><?php the_title(); ?></h2>
                         <p><?php the_content(); ?></p>
                             <?php endwhile; ?>
                             
                             <?php wp_reset_postdata(); ?>
                          <?php endif; ?>
          </div>
      </div>
      
    </div> <!-- /.container -->

  </div> <!-- /.main -->
</div> <!-- wrapper -->

