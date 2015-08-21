<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="rightBlog">
  <div class="blogPosts">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->
  </div> <!-- /.container -->
  <div class="container">
  	<?php get_footer(); ?>
  </div>
</div> <!-- /.main -->

<div class="wrapper clearfix">
	<div class="main">

	  <div class="mainSection clearfix">


			 <div class="leftBlog">
				<div class="redTextLeft">
								<?php 
								$blogHeaderQuery = new WP_Query(
				        			            array(
				        			              'post_type' => 'customheader'
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