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
