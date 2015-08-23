<?php

/*
	Template Name: Home Page - Amaranthine
*/
get_header(); ?>

<div class="rightSide">
				<!-- //intro blurb goes here -->
				<div class="mainMessage">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<!-- content starts here -->

						<h2><?php the_title(); ?></h2>
		      				<?php the_content(); ?>

				
		      		<!-- content ends here -->
		      	<?php endwhile; // end the loop?>
		      	</div>
<?php get_footer(); ?> 
</div>
			
<div class="wrapper clearfix">
	<div class="main">

	  <div class="mainSection clearfix">

	    
	    

			 <div class="leftSide">
			  	<!-- //background image needed -->
				<!-- // -->
				

			</div>

	    
	  </div> <!-- /.container -->

	</div> <!-- /.main -->
</div> <!-- wrapper -->

