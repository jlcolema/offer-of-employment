<div class="">

	<p><b>Your start date is:</b> <span class="variable variable--is-working"><?php echo $new_employees_start_date; ?></span>.</p>

	<?php if ( $employment_end_date ) : ?>

		<p><b>Your end date is:</b> <span class="variable variable--is-working"><?php echo $employment_end_date; ?></span>.</p>

	<?php endif; ?>

	<p><b>Payment schedule:</b> On the 1st and 16th of each month. Your first pay check will be on <span class="variable variable--is-working"><?php echo $date_of_first_paycheck; ?></span>.</p>

</div>
