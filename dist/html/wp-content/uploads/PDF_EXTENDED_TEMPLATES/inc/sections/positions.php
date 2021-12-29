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
