<?php

	/* Utilities */

	$f = $form_data['field'];

	/* About the Position */

	$type = $f[39];
	$date = $f[1];
	$title_of_job_being_offered = $f[2];
	$on_which_campus_will_this_employee_work = $f[3];
	$who_is_offering_the_job_first = $f[47]['first'];
	$who_is_offering_the_job_last = $f[47]['last'];
	$title_of_who_is_offering_the_job = $f[48];

	/* About the Employee */

	$name_of_employee_being_hired_first = $f[4]['first'];
	$name_of_employee_being_hired_last = $f[4]['last'];
	$employee_status = $f[5];
	$pay_rate_you_are_offering_this_employee = $f[6];
	$hours_per_week = $f[72];
	$will_this_employee_use_timeclock = $f[7];

	/* Start Date */

	$hourly_or_salary = $f[66];
	$salary_pay_rate = $f[71];

	$new_employees_start_date = $f[12];
	$is_there_a_known_employement_end_date = $f[14];
	$employment_end_date = $f[15];
	$date_of_first_paycheck = $f[49];
	$payment_schedule = $f[73];

	$benefits_package = $f[75];

	/* Schedule */

	$weekly_schedule_for_crosspoint = $f[70];

	$schedule_work_days = $f[35];

	$sunday = $f[17];
	$sunday_hours_from = $form_data['list'][17][0];
	$sunday_hours_to = $form_data['list'][17][1];
	$schedule_work_days_sunday = $f[35][1];
	$schedule_note_sunday = $f[51];
	$schedule_total_hours_sunday =  $f[92];
	$flexible_hours_for_sunday = $f[26];
	$hours_for_sunday_are_flexible = $f[26][1];

	$monday = $f[18];
	$schedule_work_days_monday = $f[35][2];
	$schedule_note_monday = $f[52];
	$schedule_total_hours_monday =  $f[93];
	$flexible_hours_for_monday = $f[27];
	$hours_for_monday_are_flexible = $f[27][1];

	$tuesday = $f[19];
	$schedule_work_days_tuesday = $f[35]['tuesday'];
	$schedule_note_tuesday = $f[53];
	$schedule_total_hours_tuesday =  $f[94];
	$flexible_hours_for_tuesday = $f[28];
	$hours_for_tuesday_are_flexible = $f[28][1];

	$wednesday = $f[20];
	$schedule_work_days_wednesday = $f[35]['wednesday'];
	$schedule_note_wednesday = $f[54];
	$schedule_total_hours_wednesday =  $f[95];
	$flexible_hours_for_wednesday = $f[29];
	$hours_for_wednesday_are_flexible = $f[29][1];

	$thursday = $f[21];
	$schedule_work_days_thursday = $f[35]['thursday'];
	$schedule_note_thursday = $f[55];
	$schedule_total_hours_thursday =  $f[96];
	$flexible_hours_for_thursday = $f[30];
	$hours_for_thursday_are_flexible = $f[30][1];

	$friday = $f[22];
	$schedule_work_days_friday = $f[35]['friday'];
	$schedule_note_friday = $f[56];
	$schedule_total_hours_friday =  $f[97];
	$flexible_hours_for_friday = $f[31];
	$hours_for_friday_are_flexible = $f[31][1];

	$saturday = $f[23];
	$schedule_work_days_saturday = $f[35]['saturday'];
	$schedule_note_saturday = $f[57];
	$schedule_total_hours_saturday =  $f[98];
	$flexible_hours_for_saturday = $f[32];
	$hours_for_saturday_are_flexible = $f[32][1];

	$schedule_total_hours = $f[99];

	/* Additional Positions */

	$is_this_the_only_position_this_employee_fills_at_the_company = $f[9];
	$list_other_positions = $f[10];
	$total_hours_for_additional_positions = $f[65];

	/* Total Number of Hours Working for Crosspoint */

	$total_number_of_hours_working_for_crosspoint = $f[11];

	/* Title */



	/* Title */

	$name_of_employee_being_hired_prefix = $f[4][2];
	$name_of_employee_being_hired_middle = $f[4][4];
	$name_of_employee_being_hired_suffix = $f[4][8];

?>
