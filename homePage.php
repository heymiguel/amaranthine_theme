<?php

/*
	Template Name: Home Page - Amaranthine
*/
get_header(); ?>

<div class="rightSide">
				<!-- //intro blurb goes here -->
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
		      right

		      <?php the_content(); ?>
		      <?php endwhile; // end the loop?>
</div>
			
<div class="wrapper clearfix">
	<div class="main">

	  <div class="mainSection clearfix">

	    <?php // Start the loop ?>
	    

			 <div class="leftSide">
			  	<!-- //background image needed -->
				<!-- // -->
				more words
			</div>

	    
	  </div> <!-- /.container -->

	</div> <!-- /.main -->
</div> <!-- wrapper -->

<?php get_footer(); ?> 