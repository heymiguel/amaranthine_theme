<?php get_header(); ?>

<div class="rightCategory">
  <div class="categoryItems">

    <div class="content">
            <?php
              $category_description = category_description();
              if ( ! empty( $category_description ) )
                echo '' . $category_description . '';
               get_template_part( 'loop', 'category' );
              ?>
    </div>
  </div>
  <?php get_footer(); ?>
</div>

<div class="wrapper clearfix">
  <div class="main">
    <div class="mainSection clearfix">

      
      

       <div class="leftCategory">
          <div class="redTextLeft">
            <h1>Category Archives: <?php single_cat_title(); ?></h1>
          </div>
      </div>

      
    </div> <!-- /.container -->

  </div> <!-- /.main -->
</div> <!-- wrapper -->



