<div class="entry">

	<span class="entry__date">

		<span class="variable variable--is-working"><?php echo $date; ?></span>

	</span>

</div>

<div class="description description__opening">

	<p class="description__p--opening">Crosspoint hereby offers the job of <span class="variable variable--is-working"><?php echo $title_of_job_being_offered; ?></span> at our <span class="variable variable--is-working"><?php echo $on_which_campus_will_this_employee_work; ?></span> Campus to <span class="variable variable--is-working"><?php echo $name_of_employee_being_hired_first; ?></span> <span class="variable variable--is-working"><?php echo $name_of_employee_being_hired_last; ?></span>. You are a <span class="variable variable--is-working"><?php echo $employee_status; ?></span>.</p>

</div>

<div class="description description__details">

	<ul class="description__list">

		<li class="description__item">The pay rate will be $<span class="variable variable--is-working"><?php if ( $hourly_or_salary === 'Hourly' ) : ?><?php echo $pay_rate_you_are_offering_this_employee; ?><?php else : ?><?php echo $salary_pay_rate; ?><?php endif; ?></span> per hour for <span class="variable variable--is-working"><?php echo $hours_per_week; ?></span> hours per week.</li>
		<?php /* <li class="description__item">You will also be paid $<span class="variable">[dollars]</span> per hour for being a substitute in either a Lead Teacher or Assistant Teacher position.</li> */ ?>
		<li class="description__item">You <span class="variable variable--is-working">will<?php if ( $will_this_employee_use_timeclock == 'No' ) : ?> not<?php endif; ?></span> use TimeClock to account for your time.</li>

	</ul>

</div>
