<?php
/**
 * Displays the footer section of the theme.
 *
 */
?>
	   </div><!-- #main -->

	   <?php
	      /**
	       * travelify_after_main hook
	       */
	      do_action( 'travelify_after_main' );
	   ?>

	   <?php
	   	/**
	   	 * travelify_before_footer hook
	   	 */
	   	do_action( 'travelify_before_footer' );
	   ?>

	  /* change here*/
	  
	  
	  
	  
	  

		<?php
	   	/**
	   	 * travelify_after_footer hook
	   	 */
	   	do_action( 'travelify_after_footer' );
	   ?>

	</div><!-- .wrapper -->

	<?php
		/**
		 * travelify_after hook
		 */
		do_action( 'travelify_after' );
	?>

<?php wp_footer(); ?>

</body>
</html>