<footer>
  <div class="footerForm" id="footerForm">
  	<div class="socialIcons clearfix" id="footerIcons">
  	    <button class="contactMe">contact@heymiguel.com</button>
  	    <i class="fa fa-twitter fa-lg"></i>
  	    <i class="fa fa-code-fork fa-lg"></i>
  	    <i class="fa fa-linkedin fa-lg"></i>
  	    <i class="fa fa-medium fa-lg"></i>
  	    <form class="contactForm clearfix"> <?php echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]'); ?></form>          
  	</div>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>