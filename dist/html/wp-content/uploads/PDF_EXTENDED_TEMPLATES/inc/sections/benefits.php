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
