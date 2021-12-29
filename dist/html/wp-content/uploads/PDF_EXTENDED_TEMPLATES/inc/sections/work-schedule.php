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
