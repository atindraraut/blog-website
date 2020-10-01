<?php
/**
 * This file displays page with left sidebar.
 *
 */
?>

<?php
   /**
    * travelify_before_primary
    */
   do_action( 'travelify_before_primary' );
?>



/* change here  */




<?php
   /**
    * travelify_after_primary
    */
   do_action( 'travelify_after_primary' );
?>

<div id="secondary" class="no-margin-left">
	<?php get_sidebar( 'left' ); ?>
</div><!-- #secondary -->