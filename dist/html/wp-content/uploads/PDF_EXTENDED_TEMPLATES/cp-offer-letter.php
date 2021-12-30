<?php

/*
 * Template Name: Offer Letter
 * Version: 1.0.0
 * Description: A custom template for offer letters.
 * Author: Joshua Coleman
 * Author URI: https://coleman.work
 * Group: Crosspoint
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: header, footer, background, optional html fields, optional page fields
 */

/* Prevent direct access to the template */

if ( ! class_exists( 'GFForms' ) ) {
	return;
}

?>

<?php /* Styles */ ?>

<?php include( 'inc/common/styles.php' ); ?>

<?php /* Variables */ ?>

<?php include( 'inc/common/variables.php' ); ?>

<?php /* Header */ ?>

<?php include( 'inc/layouts/header.php' ); ?>

<?php /* Main */ ?>

<div class="main">

	<?php /* Opening */ ?>

	<?php include( 'inc/sections/opening.php' ); ?>

	<?php /* Work Schedule */ ?>

	<?php include( 'inc/sections/work-schedule.php' ); ?>

	<?php /* Positions */ ?>

	<?php include( 'inc/sections/positions.php' ); ?>

	<?php /* All Hours */ ?>

	<?php include( 'inc/sections/all-hours.php' ); ?>

	<?php /* Benefits */ ?>

	<?php include( 'inc/sections/benefits.php' ); ?>

	<?php /* Start Date and Payment Schedule */ ?>

	<?php include( 'inc/sections/start-date-and-payment-schedule.php' ); ?>

	<?php /* Statements */ ?>

	<?php include( 'inc/sections/statements.php' ); ?>

	<?php /* Signatures */ ?>

	<?php include( 'inc/sections/signatures.php' ); ?>

</div>

<?php /* Footer */ ?>

<?php include( 'inc/layouts/footer.php' ); ?>
