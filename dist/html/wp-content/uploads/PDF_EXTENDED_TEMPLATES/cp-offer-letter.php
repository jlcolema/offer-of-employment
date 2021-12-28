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

<style type="text/css">

	/* blue = #0078ae, rgb 0, 120, 174 */

	/* Displays on all pages of the PDF */

	@page {

		header: html_offerLetterHeader;
		footer: html_offerLetterFooter;

	}

	/* Overrides the @page header and displays on the first page of the PDF */

	@page :first {

		header: html_offerLetterHeaderForFirstPage;

	}

	/* Header */

	.header {}

		.banner {

			margin: 0 0 12pt 0;
			padding: 0 0 12pt 0;
			border-bottom: 6pt solid #0078ae;

		}

			.banner__img {}

		.header__columns {

			overflow: hidden;

		}

			.header__column {

				width: 50%;
				font-size: 8pt;
				line-height: 12pt;
				color: silver;

			}

			.header__column--first {

				float: left;

			}

			.header__column--second {

				float: right;
				text-align: right;

			}

	/* Main */

	.main {

		font-size: 9pt;
		line-height: 11pt;

	}

		/* Entry */

		.entry {}

			.entry__title {

				font-size: 10pt;
				line-height: 12pt;
				font-weight: normal;
				color: #0078ae;

			}

			.entry__date {}

		/* Description */

		.description {}

		.description__opening {}

			.description__p--opening {}

		.description__details {}

			.description__p--details {}

				.description__list {}

					.description__item {

						font-size: 9pt;
						line-height: 11pt;

					}

		/* Schedule */

		.schedule {

			/* margin: 0 0 12pt 0; */

		}

			.schedule__header {

				font-size: 9pt;
				line-height: 11pt;
				font-weight: normal;
				color: #0078ae;

			}

			.schedule__weekly {}

				.schedule__thead {}

					.schedule__thead-tr {}

						.schedule__th {

							width: 25%;
							padding: 3pt 0 3pt 0;
							font-size: 9pt;
							line-height: 11pt;
							text-align: left;
							border-bottom: 2px solid black;

						}

				.schedule__tbody {}

					.schedule__tbody-tr {}

					.schedule__tbody-tr--sunday {}

					.schedule__tbody-tr--monday {

						background: lightgray;

					}

					.schedule__tbody-tr--tuesday {}

					.schedule__tbody-tr--wednesday {

						background: lightgray;

					}

					.schedule__tbody-tr--thursday {}

					.schedule__tbody-tr--friday {

						background: lightgray;

					}

					.schedule__tbody-tr--saturday {}

						.schedule__td {

							width: 25%;
							padding: 3pt 0 3pt 0;
							font-size: 9pt;
							line-height: 11pt;
							text-align: left;

						}

						.schedule__td--day {}

						.schedule__td--time {}

						.schedule__td--note {}

						.schedule__td--hours {}

							.flexible {}

				.schedule__tfoot {}

					.schedule__tfoot-tr {}

						.schedule__th--total-label {

							padding-right: 3pt;
							text-align: right;
							border: none;
							border-top: 1px solid black;

						}

						.schedule__td--total-hours {

							border: none;
							border-top: 1px solid black;

						}

		/* Positions */

		.positions {

			margin: 0 0 12pt 0;

		}

			.positions__p {}

			.positions__table {}

				.positions__thead {}

					.positions__thead-tr {}

						.positions__th {

							width: 25%;
							padding: 3pt 0 3pt 0;
							font-size: 9pt;
							line-height: 11pt;
							text-align: left;
							border-bottom: 2px solid black;

						}

						.positions__th--position {}

						.positions__th--campus {}

						.positions__th--rate {}

						.positions__th--hours {}

				.positions__tbody {}

					.positions__tbody-tr {}

					.positions__tbody-tr--odd {}

					.positions__tbody-tr--even {

						background: lightgray;

					}

						.positions__td {

							width: 25%;
							padding: 3pt 0 3pt 0;
							font-size: 9pt;
							line-height: 11pt;
							text-align: left;

						}

						.positions__td--position {}

						.positions__td--campus {}

						.positions__td--rate {}

						.positions__td--hours {}

				.positions__tfoot {}

					.positions__tfoot-tr {}

						.positions__th--total-label {

							padding-right: 3pt;
							font-size: 9pt;
							line-height: 11pt;
							text-align: right;
							border: none;
							border-top: 1px solid black;

						}

						.positions__td--total-hours {

							font-size: 9pt;
							line-height: 11pt;
							border: none;
							border-top: 1px solid black;

						}

		/* All Hours */

		.all-hours {

			margin: 0 0 12pt 0;

		}

			.all-hours__table {

				border: 2px solid black;

			}

				.all-hours__tbody {}

					.all-hours__tr {}

						.all-hours__th {

							width: 75%;
							padding: 3pt 3pt 3pt 0;
							text-align: right;

						}

						.all-hours__td {

							width: 25%;
							padding: 3pt 0 3pt 0;
							text-align: left;

						}

						.all-hours__th--total-label {}

						.all-hours__td--total-hours {}

		/* Benefits */

		.benefits {}

			.benefits__list {}

				.benefits__item {

					font-size: 9pt;
					line-height: 11pt;

				}

		/* Statments */

		.statement {}

			.statement__p {}

		.statement__at-will {

			font-size: 8pt;
			line-height: 10pt;
			font-style: italic;

		}

		.statement__agreement {}

		/* Signature */

		.signature {

			margin: 24pt 0 0 0;

		}

		.signature--employee {}

		.signature--crosspoint {}

			.signature__fields {

				overflow: hidden;

			}

				.signature__field {

					float: left;
					border-top: 1px solid black;

				}

				.signature__field--name {

					width: 4in;

				}

				.signature__field--date {

					width: 2in;
					margin: 0 0 0 0.25in;

				}

					.signature__label {}

	/* Footer */

	.footer {}

		.footer__columns {

			overflow: hidden;

		}

			.footer__column {

				float: left;
				width: 33.33333%;
				font-size: 8pt;
				line-height: 10pt;
				color: silver;

			}

			.footer__column--first {

				text-align: left;

			}

			.footer__column--second {

				text-align: center;

			}

			.footer__column--third {

				text-align: right;

			}

	/* Miscellaneous */

	/* Development */

	.variable {

		/* background: pink; */

	}

		.variable--is-working {

			/* background: lightgreen; */

		}

</style>

<!-- Variables -->

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
	$schedule_total_hours_sunday =  $f[58];
	$flexible_hours_for_sunday = $f[26];
	$hours_for_sunday_are_flexible = $f[26][1];

	$monday = $f[18];
	$schedule_work_days_monday = $f[35][2];
	$schedule_note_monday = $f[52];
	$schedule_total_hours_monday =  $f[59];
	$flexible_hours_for_monday = $f[27];
	$hours_for_monday_are_flexible = $f[27][1];

	$tuesday = $f[19];
	$schedule_work_days_tuesday = $f[35]['tuesday'];
	$schedule_note_tuesday = $f[53];
	$schedule_total_hours_tuesday =  $f[60];
	$flexible_hours_for_tuesday = $f[28];
	$hours_for_tuesday_are_flexible = $f[28][1];

	$wednesday = $f[20];
	$schedule_work_days_wednesday = $f[35]['wednesday'];
	$schedule_note_wednesday = $f[54];
	$schedule_total_hours_wednesday =  $f[61];
	$flexible_hours_for_wednesday = $f[29];
	$hours_for_wednesday_are_flexible = $f[29][1];

	$thursday = $f[21];
	$schedule_work_days_thursday = $f[35]['thursday'];
	$schedule_note_thursday = $f[55];
	$schedule_total_hours_thursday =  $f[62];
	$flexible_hours_for_thursday = $f[30];
	$hours_for_thursday_are_flexible = $f[30][1];

	$friday = $f[22];
	$schedule_work_days_friday = $f[35]['friday'];
	$schedule_note_friday = $f[56];
	$schedule_total_hours_friday =  $f[63];
	$flexible_hours_for_friday = $f[31];
	$hours_for_friday_are_flexible = $f[31][1];

	$saturday = $f[23];
	$schedule_work_days_saturday = $f[35]['saturday'];
	$schedule_note_saturday = $f[57];
	$schedule_total_hours_saturday =  $f[64];
	$flexible_hours_for_saturday = $f[32];
	$hours_for_saturday_are_flexible = $f[32][1];

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

<?php /* Header */ ?>

<div class="header">

	<?php /* For First Page */ ?>

	<htmlpageheader name="offerLetterHeaderForFirstPage">

		<div class="banner">

			<?php if ( $type === 'Crosspoint' ) : ?>

				<img src="/wp-content/uploads/PDF_EXTENDED_TEMPLATES/images/offer-letter-banner.png" width="" height="0.50in" alt="Crosspoint" class="banner__img banner__img--crosspoint" />

			<?php else : ?>

				<img src="/wp-content/uploads/PDF_EXTENDED_TEMPLATES/images/academy-offer-letter-banner.png" width="" height="0.50in" alt="Crosspoint Academy" class="banner__img banner__img--crosspoint-academy" />

			<?php endif; ?>

		</div>

	</htmlpageheader>

	<?php /* For All Other Pages */ ?>

	<htmlpageheader name="offerLetterHeader">

		<div class="header__columns">

			<div class="header__column header__column--first">

				<!-- Offer of Employment, <span class="variable">{Type:39}</span> -->

			</div>

			<div class="header__column header__column--second">

				<!-- Updated: 01/14/21 -->

			</div>

		</div>

	</htmlpageheader>

</div>

<?php /* Main */ ?>

<div class="main">

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

	<div class="schedule">

		<h2 class="schedule__header">Work Schedule</h2>

		<?php if ( $type === 'Crosspoint' ) : ?>

			<p><?php echo $weekly_schedule_for_crosspoint; ?></p>

		<?php else : ?>

			<table class="schedule__weekly">

				<thead class="schedule__thead">

					<tr class="schedule__tr schedule__thead-tr">

						<th class="schedule__th">Day</th>
						<th class="schedule__th">Time</th>
						<th class="schedule__th">Note</th>
						<th class="schedule__th">Hours</th>

					</tr>

				</thead>

				<tbody class="schedule__tbody">

					<tr class="schedule__tr schedule__tbody-tr schedule__tbody-tr--sunday">

						<td class="schedule__td schedule__td--day">Sundays</td>

						<td class="schedule__td schedule__td--time">
						
							<span class="variable variable--is-working">
							
								<?php if ( is_array( $form_data['list'][17] ) ) : ?>

									<?php foreach ( $form_data['list'][17] as $row ) : ?>

										<div class="">

											<?php echo $row['From']; ?>-<?php echo $row['To']; ?>

										</div>

									<?php endforeach; ?>

								<?php else : ?>

									Off

								<?php endif; ?>
							
							</span>
							
						</td>

						<td class="schedule__td schedule__td--note">

							<span class="variable variable--is-working"><?php echo $schedule_note_sunday; ?></span>
							
						</td>

						<td class="schedule__td schedule__td--hours">
						
							<span class="variable variable--is-working"><?php echo $schedule_total_hours_sunday; ?></span>
							
							<?php if ( $flexible_hours_for_sunday ) : ?>

								<span class="variable variable--is-working">(Hours are flexible)</span>

							<?php endif; ?>

						</td>

					</tr>

					<tr class="schedule__tr schedule__tbody-tr schedule__tbody-tr--monday">

						<td class="schedule__td schedule__td--day">Mondays</td>

						<td class="schedule__td schedule__td--time">
						
							<span class="variable variable--is-working">
								
								<?php if ( is_array( $form_data['list'][18] ) ) : ?>

									<?php foreach ( $form_data['list'][18] as $row ) : ?>

										<div class="">

											<?php echo $row['From']; ?>-<?php echo $row['To']; ?>

										</div>

									<?php endforeach; ?>

								<?php else : ?>

									Off

								<?php endif; ?>
							
							</span>
							
						</td>

						<td class="schedule__td schedule__td--note">
						
							<span class="variable variable--is-working"><?php echo $schedule_note_monday; ?></span>
							
						</td>

						<td class="schedule__td schedule__td--hours">
						
							<span class="variable variable--is-working"><?php echo $schedule_total_hours_monday; ?></span>
							
							<?php if ( $flexible_hours_for_monday ) : ?>

								<span class="variable variable--is-working">(Hours are flexible)</span>

							<?php endif; ?>

						</td>

					</tr>

					<tr class="schedule__tr schedule__tbody-tr schedule__tbody-tr--tuesday">

						<td class="schedule__td schedule__td--day">Tuesdays</td>

						<td class="schedule__td schedule__td--time">
						
							<span class="variable variable--is-working">
								
								<?php if ( is_array( $form_data['list'][19] ) ) : ?>

									<?php foreach ( $form_data['list'][19] as $row ) : ?>

										<div class="">

											<?php echo $row['From']; ?>-<?php echo $row['To']; ?>

										</div>

									<?php endforeach; ?>

								<?php else : ?>

									Off

								<?php endif; ?>
							
							</span>
							
						</td>

						<td class="schedule__td schedule__td--note">
						
							<span class="variable variable--is-working"><?php echo $schedule_note_tuesday; ?></span>
							
						</td>

						<td class="schedule__td schedule__td--hours">
						
							<span class="variable variable--is-working"><?php echo $schedule_total_hours_tuesday; ?></span>
							
							<?php if ( $flexible_hours_for_tuesday ) : ?>

								<span class="variable variable--is-working">(Hours are flexible)</span>

							<?php endif; ?>

						</td>

					</tr>

					<tr class="schedule__tr schedule__tbody-tr schedule__tbody-tr--wednesday">

						<td class="schedule__td schedule__td--day">Wednesdays</td>

						<td class="schedule__td schedule__td--time">
						
							<span class="variable variable--is-working">
								
								<?php if ( is_array( $form_data['list'][20] ) ) : ?>

									<?php foreach ( $form_data['list'][20] as $row ) : ?>

										<div class="">

											<?php echo $row['From']; ?>-<?php echo $row['To']; ?>

										</div>

									<?php endforeach; ?>

								<?php else : ?>

									Off

								<?php endif; ?>
							
							</span>
							
						</td>

						<td class="schedule__td schedule__td--note">
						
							<span class="variable variable--is-working"><?php echo $schedule_note_wednesday; ?></span>
							
						</td>

						<td class="schedule__td schedule__td--hours">
						
							<span class="variable variable--is-working"><?php echo $schedule_total_hours_wednesday; ?></span>
							
							<?php if ( $flexible_hours_for_wednesday ) : ?>

								<span class="variable variable--is-working">(Hours are flexible)</span>

							<?php endif; ?>

						</td>

					</tr>

					<tr class="schedule__tr schedule__tbody-tr schedule__tbody-tr--thursday">

						<td class="schedule__td schedule__td--day">Thursdays</td>

						<td class="schedule__td schedule__td--time">
						
							<span class="variable variable--is-working">
								
								<?php if ( is_array( $form_data['list'][21] ) ) : ?>

									<?php foreach ( $form_data['list'][21] as $row ) : ?>

										<div class="">

											<?php echo $row['From']; ?>-<?php echo $row['To']; ?>

										</div>

									<?php endforeach; ?>

								<?php else : ?>

									Off

								<?php endif; ?>
							
							</span>
							
						</td>

						<td class="schedule__td schedule__td--note">
						
							<span class="variable variable--is-working"><?php echo $schedule_note_thursday; ?></span>
							
						</td>

						<td class="schedule__td schedule__td--hours">
						
							<span class="variable variable--is-working"><?php echo $schedule_total_hours_thursday; ?></span>
							
							<?php if ( $flexible_hours_for_thursday ) : ?>

								<span class="variable variable--is-working">(Hours are flexible)</span>

							<?php endif; ?>

						</td>

					</tr>

					<tr class="schedule__tr schedule__tbody-tr schedule__tbody-tr--friday">

						<td class="schedule__td schedule__td--day">Fridays</td>

						<td class="schedule__td schedule__td--time">
						
							<span class="variable variable--is-working">
								
								<?php if ( is_array( $form_data['list'][22] ) ) : ?>

									<?php foreach ( $form_data['list'][22] as $row ) : ?>

										<div class="">

											<?php echo $row['From']; ?>-<?php echo $row['To']; ?>

										</div>

									<?php endforeach; ?>

								<?php else : ?>

									Off

								<?php endif; ?>
							
							</span>
							
						</td>

						<td class="schedule__td schedule__td--note">
						
							<span class="variable variable--is-working"><?php echo $schedule_note_friday; ?></span>
							
						</td>

						<td class="schedule__td schedule__td--hours">
						
							<span class="variable variable--is-working"><?php echo $schedule_total_hours_friday; ?></span>
							
							<?php if ( $flexible_hours_for_friday ) : ?>

								<span class="variable variable--is-working">(Hours are flexible)</span>

							<?php endif; ?>

						</td>

					</tr>

					<tr class="schedule__tr schedule__tbody-tr schedule__tbody-tr--saturday">

						<td class="schedule__td schedule__td--day">Saturdays</td>

						<td class="schedule__td schedule__td--time">
						
							<span class="variable variable--is-working">
								
								<?php if ( is_array( $form_data['list'][23] ) ) : ?>

									<?php foreach ( $form_data['list'][23] as $row ) : ?>

										<div class="">

											<?php echo $row['From']; ?>-<?php echo $row['To']; ?>

										</div>

									<?php endforeach; ?>

								<?php else : ?>

									Off

								<?php endif; ?>
							
							</span>
							
						</td>

						<td class="schedule__td schedule__td--note">
						
							<span class="variable variable--is-working"><?php echo $schedule_note_saturday; ?></span>
							
						</td>

						<td class="schedule__td schedule__td--hours">
						
							<span class="variable variable--is-working"><?php echo $schedule_total_hours_saturday; ?></span>
							
							<?php if ( $flexible_hours_for_saturday ) : ?>

								<span class="variable variable--is-working">(Hours are flexible)</span>

							<?php endif; ?>

						</td>

					</tr>

				</tbody>

				<tfoot class="schedule__tfoot">

					<tr class="schedule__tr schedule__tfoot-tr">

						<th colspan="3" class="schedule__th schedule__th--total-label">Total hours per week for this position:</th>

						<td class="schedule__td schedule__td--total-hours">

							<span class="variable variable--is-working"><?php echo $hours_per_week; ?></span>
							
						</td>

					</tr>

				</tfoot>

			</table>

		<?php endif; ?>

	</div>

	<?php /* Positions */ ?>

	<?php if ( is_array( $form_data['list'][10] ) ) : ?>

		<div class="positions">

			<p class="positions__p">This is in addition to the following positions that you currently hold:</p>

			<table class="positions__table">

				<thead class="positions__thead">

					<tr class="positions__tr positions__thead-tr">

						<th class="positions__th positions__th--position">Position</th>
						<th class="positions__th positions__th--campus">Campus</th>
						<th class="positions__th positions__th--rate">Rate (per hour)</th>
						<th class="positions__th positions__th--hours">Hours</th>

					</tr>

				</thead>

				<tbody class="positions__tbody">

					<?php foreach ( $form_data['list'][10] as $row ) : ?>

						<tr class="positions__tr positions__tbody-tr positions__tbody-tr--odd">

							<td class="positions__td positions__td--position">
							
								<span class="variable variable--is-working"><?php echo $row['Job Title']; ?></span>
								
							</td>
							<td class="positions__td positions__td--campus">
							
								<span class="variable variable--is-working"><?php echo $row['Campus']; ?></span>
								
							</td>
							<td class="positions__td positions__td--rate">
							
								<span class="variable variable--is-working">$<?php echo $row['Pay Rate']; ?></span>
								
							</td>
							<td class="positions__td positions__td--hours">
							
								<span class="variable variable--is-working"><?php echo $row['Hours Per Week']; ?></span>
								
							</td>

						</tr>

					<?php endforeach; ?>

				</tbody>

				<tfoot class="positions__tfoot">

					<tr class="positions__tr positions__tfoot-tr">

						<th colspan="3" class="positions__th positions__th--total-label">Total hours per week for additional positions:</th>
						<td class="positions__td positions__td--total-hours">

							<span class="variable variable--is-working"><?php echo $total_hours_for_additional_positions; ?></span>
							
						</td>

					</tr>

				</tfoot>

			</table>

		</div>

	<?php endif; ?>

	<?php /* All Hours */ ?>

	<!-- This should only display when there are additional positions -->

	<?php if ( is_array( $form_data['list'][10] ) ) : ?>

		<div class="all-hours">

			<table class="all-hours__table">

				<tbody class="all-hours__tbody">

					<tr class="all-hours__tr">
					
						<th colspan="3" class="all-hours__th all-hours__th--total-label">Total number of hours worked across all Crosspoint campuses:</th>
						<td class="all-hours__td all-hours__td--total-hours"><span class="variable variable--is-working"><?php echo $total_number_of_hours_working_for_crosspoint; ?></span></td>

					</tr>

				</tbody>

			</table>

		</div>

	<?php endif; ?>

	<!-- If there are benefits -->

	<div class="benefits">

		<!-- Crosspoint Benefits -->

		<?php if ( $type === 'Crosspoint' ) : ?>

			<!-- If Full Time -->

			<?php if ( $benefits_package === 'Full Time' ) : ?>

				<p>The benefits will be those specified in the Employee Handbook and will include:</p>

				<ul class="benefits__list">
					<li class="benefits__item">Individual health insurance that includes dental insurance (if the employee already has health insurance, $340 per month will be deposited into the employee&rsquo;s retirement account)</li>
					<li class="benefits__item">Disability insurance</li>
					<li class="benefits__item">Flex plan (Employee can elect to have deductions taken out of their salary on a pre-tax basis for health care and child care expenses.)</li>
					<li class="benefits__item">$25,000 life insurance policy that goes into effect after 90 days of employment.</li>
					<li class="benefits__item">4.5% of an employee&rsquo;s annual salary paid to a pension fund beginning the first of the month following 3 months of employment. Employee will be vested after 12 months of employment.</li>
					<li class="benefits__item">Wednesday Night Dinner is provided free for employee & one immediate family member. (Ncvl campus only)</li>
					<li class="benefits__item">3 weeks paid vacation (pro-rated through the end of the CY).</li>
					<li class="benefits__item">6 days per year sick leave which may be carried over into the next year (pro-rated through the end of the CY).</li>
					<li class="benefits__item">2 days per year personal leave (pro-rated through the end of the CY).</li>
					<li class="benefits__item">9 paid holidays per year (New Year&rsquo;s Day, Martin Luther King Day, Good Friday, Memorial Day, Independence Day, Labor Day, Veteran&rsquo;s Day, Thanksgiving and the day after Thanksgiving)</li>
					<li class="benefits__item">All campuses are closed the week between Christmas and New Year&rsquo;s Day, except for worship services and activities approved by the Campus Pastor/Executive Pastor.</li>
				</ul>

				<p>In addition Crosspoint agrees to:</p>

				<ul class="benefits__list">
					<li class="benefits__item">Provide reimbursement for all job related travel at normal per mile reimbursement rate set by the IRS.</li>
				</ul>

			<!-- If Part Time -->

			<?php elseif ( $benefits_package === 'Part Time' ) : ?>

				<p>The benefits will be those specified in the Employee Handbook and will include:</p>

				<ul class="benefits__list">
					<li class="benefits__item">4.5% of an employee&rsquo;s annual salary paid to a pension fund beginning the first of the month following 3 months of employment. Employee will be vested after 12 months of employment.</li>
					<li class="benefits__item">2 weeks paid vacation</li>
					<li class="benefits__item">3 days per year sick leave which may be carried over into the next year.</li>
					<li class="benefits__item">If scheduled to work on an official holiday, then holiday pay is awarded. Holidays per year: (New Year&rsquo;s Day, Martin Luther King Day, Good Friday, Memorial Day, Independence Day, Labor Day, Veteran&rsquo;s Day, Thanksgiving, Day after Thanksgiving, Christmas Eve and Christmas)</li>
					<li class="benefits__item">All campuses are closed the week between Christmas and New Year&rsquo;s Day, except for worship services and activities approved by the campus pastor/executive pastor.</li>
				</ul>

				<p>In addition Crosspoint agrees to:</p>

				<ul class="benefits__list">
					<li class="benefits__item">Provide reimbursement for all job related travel at normal per mile reimbursement rate set by the IRS.</li>
				</ul>

			<!-- If Less than Part Time -->

			<?php elseif ( $benefits_package === 'Less than Part Time' ) : ?>

				<p>The benefits will be those specified in the Employee Handbook and will include:</p>

				<ul class="benefits__list">
					<li class="benefits__item">If scheduled to work on an official holiday, then holiday pay is awarded. Holidays per year: (New Year&rsquo;s Day, Martin Luther King Day, Good Friday, Memorial Day, Independence Day, Labor Day, Veteran’s Day, Thanksgiving and the day after Thanksgiving)</li>
					<li class="benefits__item">All campuses are closed the week between Christmas and New Year&rsquo;s Day, except for worship services and activities approved by the campus pastor/executive pastor.</li>
				</ul>

				<p>In addition Crosspoint agrees to:</p>

				<ul class="benefits__list">
					<li class="benefits__item">Provide reimbursement for all job related travel at normal per mile reimbursement rate set by the IRS.
				</ul>

			<!-- No Benefits -->

			<?php else : ?>

				<!-- Content -->

			<?php endif; ?>

		<!-- Crosspoint Academy Benefits -->

		<?php else : ?>

			<!-- If Full Time -->

			<?php if ( $benefits_package === 'Full Time' ) : ?>

				<p>The benefits will be those specified in the Employee Handbook and will include:</p>

				<ul class="benefits__list">
					<li class="benefits__item">Individual health insurance that includes dental insurance (if the employee already has health insurance, $340 per month will be deposited into the employee&rsquo;s retirement account)</li>
					<li class="benefits__item">Disability insurance</li>
					<li class="benefits__item">Flex plan (Employee can elect to have deductions taken out of their salary on a pre-tax basis for health care and child care expenses.)</li>
					<li class="benefits__item">$25,000 life insurance policy that goes into effect after 90 days of employment.</li>
					<li class="benefits__item">4.5% of an employee&rsquo;s annual salary paid to a pension fund beginning the first of the month following 3 months of employment. Employee will be vested after 12 months of employment.</li>
					<li class="benefits__item">Provide reimbursement for all job related travel at normal per mile reimbursement rate set by the IRS.</li>
				</ul>

			<!-- If Part Time -->

			<?php elseif ( $benefits_package === 'Part Time' ) : ?>

				<p>The benefits will be those specified in the Employee Handbook and will include:</p>

				<ul class="benefits__list">
					<li class="benefits__item">4.5% of an employee&rsquo;s annual salary paid to a pension fund beginning the first of the month following 3 months of employment. Employee will be vested after 12 months of employment.</li>
					<li class="benefits__item">Provide reimbursement for all job related travel at normal per mile reimbursement rate set by the IRS.</li>
				</ul>

			<!-- If Less than Part Time -->

			<?php elseif ( $benefits_package === 'Less than Part Time' ) : ?>

				<!-- Content -->

			<!-- No Benefits -->

			<?php else : ?>

				<!-- Content -->

			<?php endif; ?>

		<?php endif; ?>

	</div>

	<div class="">

		<p><b>Your start date is:</b> <span class="variable variable--is-working"><?php echo $new_employees_start_date; ?></span>.</p>

		<?php if ( $employment_end_date ) : ?>

			<p><b>Your end date is:</b> <span class="variable variable--is-working"><?php echo $employment_end_date; ?></span>.</p>

		<?php endif; ?>

		<p><b>Payment schedule:</b> On the 1st and 16th of each month. Your first pay check will be on <span class="variable variable--is-working"><?php echo $date_of_first_paycheck; ?></span>.</p>

	</div>

	<div class="statement statement__at-will">

		<p class="statement__p">Your employment with the church constitutes at-will employment and is specified for no period of time. You are free to resign at any time, for any or no reason. Similarly, the church is free to conclude its employment relationship with you at any time, with or without notice and with or without cause. Your at-will status can only be modified in an express writing signed by both you and an official of the church. By your signature, you acknowledge, understand and agree that your employment relationship with the church is at-will. The church may prospectively modify your job title, duties, compensation and benefits from time to time as it deems necessary, in its sole discretion.</p>

	</div>

	<div class="statement statement__agreement">

		<p class="statement__p">By signing below, I agree with this Offer of Employment and with my status as a <span class="variable variable--is-working"><?php echo $employee_status; ?></span>. I am also aware that discussing pay is grounds for dismissal.</p>

		<p class="statement__p"><b>Signed:</b></p>

	</div>

	<div class="signature signature--employee">

		<div class="signature__fields">

			<div class="signature__field signature__field--name">
			
				<div class="signature__label">
				
					<span class="variable variable--is-working"><?php echo $name_of_employee_being_hired_first; ?></span> <span class="variable variable--is-working"><?php echo $name_of_employee_being_hired_last; ?></span>
				
				</div>
				
			</div>
			
			<div class="signature__field signature__field--date">
			
				<div class="signature__label">Date</div>

			</div>

		</div>

	</div>

	<div class="signature signature--crosspoint">

		<div class="signature__fields">

			<div class="signature__field signature__field--name">
			
				<div class="signature__label">

					<span class="variable variable--is-working"><?php echo $who_is_offering_the_job_first; ?></span>

					<span class="variable variable--is-working"><?php echo $who_is_offering_the_job_last; ?>,

					<span class="variable variable--is-working"><?php echo $title_of_who_is_offering_the_job; ?></span>

				</div>

			</div>

			<div class="signature__field signature__field--date">
			
				<div class="signature__label">Date</div>
				
			</div>

		</div>

	</div>

</div>

<?php /* Footer */ ?>

<htmlpagefooter name="offerLetterFooter">

	<div class="footer">

		<div class="footer__columns">

			<div class="footer__column footer__column--first">

				Offer of Employment, <span class="variable variable--is-working"><?php echo $type; ?></span>

			</div>

			<div class="footer__column footer__column--second">

				{PAGENO}/{nbpg}

			</div>

			<div class="footer__column footer__column--third">

				Updated: 03/01/21

			</div>

		</div>

	</div>

</htmlpagefooter>