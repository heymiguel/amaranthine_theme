<?php get_header(); ?>
<div class="rightTag">
	<div class="tagItems">

		<div class="content">
      		<?php get_template_part( 'loop', 'tag' ); ?>
		</div>
	</div>
	<div class="container">
		<?php get_footer(); ?>
	</div>
</div>

<div class="wrapper clearfix">
	<div class="main">

	  <div class="mainSection clearfix">

	    
	    

			 <div class="leftTag">
			 		<div class="redTextLeft">
						<h2><?php single_tag_title(); ?></h2>
					</div>
			</div>

	    
	  </div> <!-- /.container -->

	</div> <!-- /.main -->
</div> <!-- wrapper -->