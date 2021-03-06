
<?php 

get_header(); ?>

<div class="rightSingle">
  <div class="portfolioItems">

    <div class="content">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <!-- <div class="entry-meta"> -->
              <!-- <?php hackeryou_posted_on(); ?> -->
            <!-- </div>  --><!-- .entry-meta -->

            <div class="entry-content">
              <?php the_content(); ?>
              <?php ?>
              <?php wp_link_pages(array(
                'before' => '<div class="page-link"> Pages: ',
                'after' => '</div>'
              )); ?>
            </div><!-- .entry-content -->

            <div class="entry-utility">
              <?php hackeryou_posted_in(); ?>
              <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
            </div><!-- .entry-utility -->
          </div><!-- #post-## -->

          <div id="nav-below" class="navigation">
            <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
            <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
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
        
            <?php  
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
            $thumb_url = $thumb_url_array[0];
            ?>
          <?php if ( has_post_thumbnail( $post_id ) ){ ?>
            <div class="leftSingle" style="background-image: url('<?php echo $thumb_url; ?>')">
                <div class="redTextLeft">
                 
                </div>
            </div>  
          <?php } else {?>
            <div class="leftSingle" style="background-image: url('<?php bloginfo('template_url'); ?>/images/vintage-technology-keyboard-old.jpg')"> <!-- change default background image -->
              <div class="redTextLeft">
               
              </div>
            </div>
          <?php } ?>
      
    </div> <!-- /.container -->

  </div> <!-- /.main -->
</div> <!-- wrapper -->
