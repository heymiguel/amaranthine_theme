<?php

/*
	Template Name: Blog Page
*/

get_header();  ?>



<div class="rightBlog">
  <div class="blogPosts">

    <div class="content">
    	<?php get_template_part( 'loop', 'blog' );	?>
    </div> <!--/.content -->
  </div> <!-- /.container -->
  <?php get_footer(); ?>
</div> <!-- /.main -->

<div class="wrapper clearfix">
	<div class="main">

	  <div class="mainSection clearfix">
		
	    
	    

			 <div class="leftBlog">
				<div class="redTextLeft">

				</div>
			</div>

	    
	  </div> <!-- /.container -->

	</div> <!-- /.main -->
</div> <!-- wrapper -->

		