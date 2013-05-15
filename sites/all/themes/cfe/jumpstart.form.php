<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/script.js'); ?>
<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/jumpstart.js'); ?>

<!-- Top Navigation: Start -->

<div id="top-nav">
	<div id="top_nav_contents"> <span id="logo"><a href="<?php print $base_path; ?>">Center for Entrepreneurship</a></span>
		<div id="top_links"><a href="http://www.engin.umich.edu/" target="_blank"><img src="<?php print $base_path . $directory; ?>/css/components/logo-coe.png" alt="University of Michigan - College of Engineering" width="122" height="16" border="0"></a> | <a href="http://eepurl.com/lij3b">Subscribe</a> | <!--<a href="#">Search</a> | --><a href="http://cfe.umich.edu/user/login">Login</a></div>
		<div id="nav">
			<?php
      echo theme('links__system_main_menu', array('links' => $main_menu));
      ?>
		</div>
	</div>
</div>
<!-- Top Navigation: End --> 

<!-- Body Contents: Start -->
<div id="body_contents">
	<div id="wrapper">
		<div id="slideshow_shadow_special"></div>
		
		<!-- Page Contents: Start -->
		<div id="page_contents">
			<div class="single_col">
				<div class="pad">

<h2 class="title" id="page-title">Declare the Program in Entrepreneurship</h2>

<?php if (!isset($_POST['submit'])) { // If before form submission ?>

<form method="post" enctype="multipart/form-data" action="/jumpstart">
	<input type="hidden" name="block" value="block" />
	
	<fieldset style="border:none">
		<table class="first last">
			<tr>
				<td width="33%"><label>Company Name:</label> *</td>
				<td><input type="text" name="company_name" size="50" value="" /></td>
			</tr>
		</table>
	</fieldset>
	
	<!-- Team Information -->
	<fieldset>
		<legend>A. Team Information</legend>
		
		<table class="first">
			<tr>
				<td width="33%"><label>Number of team members:</label> *</td>
				<td><select name="number_team" id="number_team">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select></td>
			</tr>
		</table>
		
		<table>
			<tr class="member_1">
				<td width="33%"><label>Team member 1 name:</label> *</td>
				<td><input type="text" id="team_member_1_name" name="team_member_1_name" size="50" value="" /></td>
			</tr>
			<tr class="member_1">
				<td><label>Team member 1 e-mail:</label> *</td>
				<td><input type="text" name="team_member_1_email" size="50" value="" /></td>
			</tr>
			<tr class="member_1">
				<td><label>Team member 1 UMID:</label> *</td>
				<td><input type="text" name="team_member_1_umid" size="50" value="" /></td>
			</tr>
			<tr class="member_1">
				<td><label>Team member 1 school:</label> *</td>
				<td><input type="text" name="team_member_1_school" size="50" value="" /></td>
			</tr>
			<tr class="member_1">
				<td><label>Team member 1 major:</label> *</td>
				<td><input type="text" name="team_member_1_major" size="50" value="" /></td>
			</tr>
			<tr class="member_1">
				<td><label>Team member 1 class level:</label> *</td>
				<td><input type="text" name="team_member_1_level" size="50" value="" /></td>
			</tr>
			<tr class="member_1">
				<td><label>Team member 1 entrepreneurial skills:</label> *</td>
				<td><textarea name="team_member_1_entrepreneurial_skills" cols="40" rows="3"></textarea></td>
			</tr>
			<tr class="member_1">
				<td><label>Team member 1 role/title:</label> *</td>
				<td><input type="text" name="team_member_1_role_title" size="50" value="" /></td>
			</tr>
			<tr class="member_2" style="display:none;">
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr class="member_2" style="display:none;">
				<td><label>Team member 2 name:</label></td>
				<td><input type="text" id="team_member_2_name" name="team_member_2_name" size="50" value="" /></td>
			</tr>
			<tr class="member_2" style="display:none;">
				<td><label>Team member 2 e-mail:</label></td>
				<td><input type="text" name="team_member_2_email" size="50" value="" /></td>
			</tr>
			<tr class="member_2" style="display:none;">
				<td><label>Team member 2 UMID:</label></td>
				<td><input type="text" name="team_member_2_umid" size="50" value="" /></td>
			</tr>
			<tr class="member_2" style="display:none;">
				<td><label>Team member 2 school:</label></td>
				<td><input type="text" name="team_member_2_school" size="50" value="" /></td>
			</tr>
			<tr class="member_2" style="display:none;">
				<td><label>Team member 2 major:</label></td>
				<td><input type="text" name="team_member_2_major" size="50" value="" /></td>
			</tr>
			<tr class="member_2" style="display:none;">
				<td><label>Team member 2 class level:</label></td>
				<td><input type="text" name="team_member_2_level" size="50" value="" /></td>
			</tr>
			<tr class="member_3" style="display:none;">
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr class="member_3" style="display:none;">
				<td><label>Team member 3 name:</label></td>
				<td><input type="text" id="team_member_3_name" name="team_member_3_name" size="50" value="" /></td>
			</tr>
			<tr class="member_3" style="display:none;">
				<td><label>Team member 3 e-mail:</label></td>
				<td><input type="text" name="team_member_3_email" size="50" value="" /></td>
			</tr>
			<tr class="member_3" style="display:none;">
				<td><label>Team member 3 UMID:</label></td>
				<td><input type="text" name="team_member_3_umid" size="50" value="" /></td>
			</tr>
			<tr class="member_3" style="display:none;">
				<td><label>Team member 3 school:</label></td>
				<td><input type="text" name="team_member_3_school" size="50" value="" /></td>
			</tr>
			<tr class="member_3" style="display:none;">
				<td><label>Team member 3 major:</label></td>
				<td><input type="text" name="team_member_3_major" size="50" value="" /></td>
			</tr>
			<tr class="member_3" style="display:none;">
				<td><label>Team member 3 class level:</label></td>
				<td><input type="text" name="team_member_3_level" size="50" value="" /></td>
			</tr>
			<tr class="member_4" style="display:none;">
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr class="member_4" style="display:none;">
				<td><label>Team member 4 name:</label></td>
				<td><input type="text" id="team_member_4_name" name="team_member_4_name" size="50" value="" /></td>
			</tr>
			<tr class="member_4" style="display:none;">
				<td><label>Team member 4 e-mail:</label></td>
				<td><input type="text" name="team_member_4_email" size="50" value="" /></td>
			</tr>
			<tr class="member_4" style="display:none;">
				<td><label>Team member 4 UMID:</label></td>
				<td><input type="text" name="team_member_4_umid" size="50" value="" /></td>
			</tr>
			<tr class="member_4" style="display:none;">
				<td><label>Team member 4 school:</label></td>
				<td><input type="text" name="team_member_4_school" size="50" value="" /></td>
			</tr>
			<tr class="member_4" style="display:none;">
				<td><label>Team member 4 major:</label></td>
				<td><input type="text" name="team_member_4_major" size="50" value="" /></td>
			</tr>
			<tr class="member_4" style="display:none;">
				<td><label>Team member 4 class level:</label></td>
				<td><input type="text" name="team_member_4_level" size="50" value="" /></td>
			</tr>
		</table>

		<table>
			<tr>
				<td width="33%">
					<label>Brief Description of Company and Business Model:</label> *
					<p>Describe your company&rsquo;s mission, product, and business model. Talk about how it is scalable, disruptive, and will benefit society.</p>
				</td>
				<td><textarea name="company_business_model" cols="60" rows="12"></textarea></td>
			</tr>
		</table>

		<table>
			<tr>
				<td width="33%">
					<label>Market Need:</label> *
					<p>Describe the market need that your company addresses, what you have done to validate this need, and the companies and products already addressing this need.</p>
				</td>
				<td><textarea name="market_need" cols="60" rows="12"></textarea></td>
			</tr>
		</table>
		
		<p>Is this project or company associated with any University of Michigan course(s) (i.e. Social Venture Creation, Entrepreneurship Practicum, Smartphone Programming, etc.)? *</p>
		<table class="last">
			<tr>
				<td width="33%"><label>UM Association?</label> *</td>
				<td>
					<input name="um_association" type="radio" value="n"  checked="checked"/> No
					<input name="um_association" type="radio" value="y" /> Yes
				</td>
			</tr>
			<tr style="display:none;" class="um_association_yes">
				<td colspan="2"><label>If &quot;Yes&quot;:</label></td>
			</tr>
			<tr style="display:none;" class="um_association_yes">
				<td><label>Course Name/Number:</label> *</td>
				<td><input type="text" name="affiliation_course_name_number" size="50" value="" /></td>
			</tr>
			<tr style="display:none;" class="um_association_yes">
				<td><label>Instructor:</label> *</td>
				<td><input type="text" name="affiliation_instructor" size="50" value="" /></td>
			</tr>
			<tr style="display:none;" class="um_association_yes">
				<td><label>Semester Enrolled:</label> *</td>
				<td><input type="text" name="um_association_semester_1" size="50" value="" /></td>
			</tr>
		</table>
	
	</fieldset>
		
	<!--Grant Information --> 
	<fieldset>
		<legend>B. Grant Information</legend>
			
		<p>In the table below, please indicate the type(s) of CFE Jump Start Grants for which you are applying, and the dollar amount you are soliciting for each grant type.</p>
		<table class="first last">
			<tr>
				<td width="33%"><input type="hidden" name="grant_type[]" value="cfe_travel_grant" /><label>CFE Travel Grant:</label></td>
				<td>$<input type="text" name="cfe_travel_grant_amount" id="cfe_travel_grant_amount" size="15" value="0.00" /></td>
			</tr>
			<tr>
				<td><input type="hidden" name="grant_type[]" value="cfe_legal_services" /><label>CFE Legal Services Grant:</label></td>
				<td>$<input type="text" name="cfe_legal_services_amount" size="15" value="0.00"/></td>
			</tr>
			<tr>
				<td><input type="hidden" name="grant_type[]" value="cfe_prototype_development" /><label>CFE Prototype Development Grant:</label></td>
				<td>$<input type="text" name="cfe_prototype_development_amount" size="15" value="0.00"/></td>
			</tr>
			<tr>
				<td><input type="hidden" name="grant_type[]" value="cfe_spark_bootcamp" /><label>CFE Spark Bootcamp Grant:</label></td>
				<td>$<input type="text" name="cfe_spark_bootcamp_amount" size="15"  value="0.00"/></td>
			</tr>
		</table>
		
	</fieldset>
	
	<!-- Allocation of funds--> 
	<fieldset>
		<legend>C. Allocation of Funds</legend>
		
		<p>In the table below, indicate how the funds should be distributed amongst the team members: </p>
		<table>
			<tr>
				<td width="30%"><label>Team Member</label></td>
				<td width="14%"><label>Travel Grant</label></td>
				<td width="14%"><label>Legal Services Grant</label></td>
				<td width="14%"><label>Prototype Development Grant</label></td>
				<td width="14%"><label>Spark Boot Camp Grant</label></td>
				<td width="14%"><label>Total</label></td>
			</tr>
			<tr class="member_1">
				<td><input class="member_1_name" name="team_member_1_name" type="text" value="" size="30" readonly="readonly" /></td>
				<td>$<input type="text" name="funds_team_member_1_cfe_travel_grant_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_1_cfe_legal_services_grant_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_1_prototype_development_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_1_spark_boot_camp_grant_amount" size="10" value="0.00"/>
				<td>$<input id="funds_team_member_1_total" name="funds_team_member_1_total" type="text" value="0.00" size="10" readonly="readonly" /></td>
			</tr>
			<tr class="member_2" style="display:none;">
				<td><input class="member_2_name" name="team_member_2_name" type="text" value="" size="30" readonly="readonly"/></td>
				<td>$<input type="text" name="funds_team_member_2_cfe_travel_grant_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_2_cfe_legal_services_grant_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_2_prototype_development_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_2_spark_boot_camp_grant_amount" size="10" value="0.00"/></td>
				<td>$<input id="funds_team_member_2_total" name="funds_team_member_2_total" type="text" value="0.00" size="10" readonly="readonly" /></td>
			</tr>
			<tr class="member_3" style="display:none;">
				<td><input class="member_3_name" name="team_member_3_name" type="text" value="" size="30" readonly="readonly"/></td>
				<td>$<input type="text" name="funds_team_member_3_cfe_travel_grant_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_3_cfe_legal_services_grant_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_3_prototype_development_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_3_spark_boot_camp_grant_amount" size="10" value="0.00"/></td>
				<td>$<input id="funds_team_member_3_total" name="funds_team_member_3_total" type="text" value="0.00" size="10" readonly="readonly" /></td>
			</tr>
			<tr class="member_4" style="display:none;">
				<td><input class="member_4_name" name="team_member_4_name" type="text" value="" size="30" readonly="readonly"/></td>
				<td>$<input type="text" name="funds_team_member_4_cfe_travel_grant_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_4_cfe_legal_services_grant_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_4_prototype_development_amount" size="10" value="0.00"/></td>
				<td>$<input type="text" name="funds_team_member_4_spark_boot_camp_grant_amount" size="10" value="0.00"/></td>
				<td>$<input id="funds_team_member_4_total" name="funds_team_member_4_total" type="text" value="0.00" size="10" readonly="readonly" /></td>
			</tr>
			<tr>
				<td colspan="4">&nbsp;</td>
				<td style="text-align:right;"><label>Grand Total</label></td>
				<td>$<input id="team_grand_total" name="team_grand_total" type="text" value="0.00" size="10" readonly="readonly" /></td>
			</tr>
		</table>
		<p>Note: An individual student may receive no more than $1,000 in Jump Start Grants per fiscal year (July 1-June 30).</p>
	
	</fieldset>
	
	<fieldset>
		<legend>D. Budget Proposal</legend>
		
		<p>Using the table provided, detail the anticipated expenses for each grant type. For example, if you are requesting a travel grant, anticipated expenses might include: airfare, transportation, lodging, food, etc.</p>
		<table class="last">
			<tr>
				<td width="40%"><label>Expense Category</label></td>
				<td width="20%"><label>Amount Requested</label></td>
				<td width="40%"><label>Justification</label></td>
			</tr>	
			<tr>
				<td><input name="expense_1_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="expense_1_amount" size="10" value="0.00" /></td>
				<td><input type="text" name="expense_1_justification" size="50" value="" /></td>
			</tr>
			<tr>
				<td><input name="expense_2_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="expense_2_amount" size="10" value="0.00" /></td>
				<td><input type="text" name="expense_2_justification" size="50" value="" /></td>
			</tr>
			<tr>
			</div>
				<td><input name="expense_3_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="expense_3_amount" size="10" value="0.00" /></td>
				<td><input type="text" name="expense_3_justification" size="50" value="" /></td>
			</tr>
			<tr>
				<td><input name="expense_4_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="expense_4_amount" size="10" value="0.00" /></td>
				<td><input type="text" name="expense_4_justification" size="50" value="" /></td>
			</tr>
			<tr>
				<td><input name="expense_5_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="expense_5_amount" size="10" value="0.00" /></td>
				<td><input type="text" name="expense_5_justification" size="50" value="" /></td>
			</tr>
			<tr>
				<td style="text-align:right;"><label>Total</label></td>
				<td>$<input id="budget_total" name="budget_total" type="text" value="0.00" size="10" readonly="readonly" /></td>
				<td>&nbsp;</td>
			</tr>
		</table>
		
	</fieldset>
	
	<fieldset>
		<legend>E. External Funding</legend>
		
		<p>Using the table provided, detail the funding you have requested or received from other institutions in support of your project.</p>
		<table class="last">
			<tr>
				<td width="40%"><label>Name of Institution and/or Grant</label></td>
				<td width="20%"><label>Amount Requested</label></td>
				<td colspan="3" width="40%"><label>Approved, Denied or Pending</label></td>
			</tr>
			<tr>
				<td><input name="external_1_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="external_1_amount" size="10" value="0.00" /></td>
				<td><input name="external_funding_1" type="radio" value="Approved" /> Approved</td>
				<td><input name="external_funding_1" type="radio" value="Pending" /> Pending</td>
				<td><input name="external_funding_1" type="radio" value="Denied" checked="checked"/> Denied</td>
			</tr>
			<tr>
			</div>
				<td><input name="external_2_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="external_2_amount" size="10" value="0.00" /></td>
				<td><input name="external_funding_2" type="radio" value="Approved" /> Approved</td>
				<td><input name="external_funding_2" type="radio" value="Pending" /> Pending</td>
				<td><input name="external_funding_2" type="radio" value="Denied"  checked="checked"/> Denied</td>
			</tr>
			<tr>
			</div>
				<td><input name="external_3_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="external_3_amount" size="10" value="0.00" /></td>
				<td><input name="external_funding_3" type="radio" value="Approved" /> Approved</td>
				<td><input name="external_funding_3" type="radio" value="Pending" /> Pending</td>
				<td><input name="external_funding_3" type="radio" value="Denied"  checked="checked"/> Denied</td>
			</tr>
			<tr>
			</div>
				<td><input name="external_4_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="external_4_amount" size="10" value="0.00" /></td>
				<td><input name="external_funding_4" type="radio" value="Approved" /> Approved</td>
				<td><input name="external_funding_4" type="radio" value="Pending" /> Pending</td>
				<td><input name="external_funding_4" type="radio" value="Denied"  checked="checked"/> Denied</td>
			</tr>
			<tr>
			</div>
				<td><input name="external_5_name" type="text" value="" size="42" /></td>
				<td>$<input type="text" name="external_5_amount" size="10" value="0.00" /></td>
				<td><input name="external_funding_5" type="radio" value="Approved" /> Approved</td>
				<td><input name="external_funding_5" type="radio" value="Pending" /> Pending</td>
				<td><input name="external_funding_5" type="radio" value="Denied"  checked="checked"/> Denied</td>
			</tr>
			<tr>
				<td style="text-align:right;"><label>Total</label></td>
				<td>$<input id="external_funds_total" name="external_funds_total" type="text" value="0.00" size="10" readonly="readonly" /></td>
				<td colspan="3">Approved and Pending</td>
			</tr>
		</table>
	
	</fieldset>
		
	<!-- Funding Justification-->
	<fieldset>
		<legend>F. Funding Justification</legend>
		
		<table class="first">
			<tr>
				<td width="33%">
					<label>Impact of Grant:</label> *
					<p>How will this award significantly and positively impact your entrepreneurial development and/or advance your entrepreneurial idead.</p>
				</td>
				<td><textarea name="purpose_funding_request" cols="60" rows="12"></textarea></td>
			</tr>
		</table>
		
		<table class="last">
			<tr>
				<td width="33%">
					<label>Objectives and Milestones for Funding:</label> *
					<p>Describe the goals and the milestones for this funding, and the time frame in which you anticipate achieving them.</p>
				</td>
				<td><textarea name="objectives_and_milestones" cols="60" rows="12"></textarea></td>
			</tr>
		</table>
		
	</fieldset>
	
	<!-- Travel Information -->
	<div id="travel_grant_extra_fields" style="display:;">
	<fieldset>
		<legend>G. Travel Information</legend>
		
		<table class="first">
			<tr>
				<td width="33%"><label>Destination:</label> *</td>
				<td><input type="text" name="travel_destination" value="" size="50"/></td>
			</tr>
			<tr>
				<td><label>Travel Dates:</label> *</td>
				<td>
					From <input type="text" name="travel_date_from" id="travel_date_from" value="" size="12"/> &nbsp;
					To <input type="text" name="travel_date_to" id="travel_date_to" value="" size="12"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Reason(s) for travel:</label> *
					<p>(Select all that apply)</p>
				</td>
				<td>
					<input type="checkbox" name="travel_options[]" value="present_conference" /> Present at an entrepreneurial conference<br />
					<input type="checkbox" name="travel_options[]" value="participate_competition" /> Participate in an entrepreneurial competition<br />
					<input type="checkbox" name="travel_options[]" value="customer_discovery" /> Customer discovery
					<div id="research_association_check" style="display:; padding-left:2em;">
						<input type="checkbox" name="travel_options[]" value="university_research" /> Is this field research associated with a University course or program?
					</div>
				</td>
			</tr>
		</table>
		
		<!-- For Students Attending an Entrepreneurship Conference, Award Ceremony, or Competition -->
		<table id="conf_extra_fields" style="display:;">
			<tr>
				<td width="33%"><label>Conference or Competition Title:</label></td>
				<td><input type="text" name="conference_competition_title" value="" size="50"/></td>
			</tr>
			<tr>
				<td><label>Conference/Competition Dates:</label> *</td>
				<td>
					From <input type="text" name="conf_date_from" id="conf_date_from" value="" size="12"/> &nbsp;
					To <input type="text" name="conf_date_to" id="conf_date_to" value="" size="12"/>
				</td>
			</tr>
			<tr>
				<td><label>Brief Description of Conference or Competition:</label></td>
				<td><textarea name="description_conference_competition" cols="60" rows="9"></textarea></td>
			</tr>
			<tr>
				<td>
					<label>Presentation type:</label> *
					<p>(Select all that apply)</p>
				</td>
				<td>
					<input type="checkbox" name="presentation_type[]" value="Poster"/> Poster<br />
					<input type="checkbox" name="presentation_type[]" value="presentation"/> Presentation<br />
					<input type="checkbox" name="presentation_type[]" value="pitch"/> Pitch<br />
					<input type="checkbox" name="presentation_type[]" value="keynote"/> Keynote Address<br />
					<input type="checkbox" name="presentation_type[]" value="awardee"/> Awardee<br />
					<input type="checkbox" name="presentation_type[]" value="other"/> Other
				</td>
			</tr>
		</table>
		
		<p>
			<strong>Additional Supporting Documentation:</strong><br />
			Please submit a copy of the confirmation of acceptance from the conference (an e-mail is acceptable) with the applicant(s)' name(s) clearly listed, to verify the student(s) will participate in and present at the conference.
		</p>
		<table class="last">
			<tr>
				<td width="33%"><label>Upload Support Documentation:</label></td>
				<td><input type="file" name="conference_supporting_documentation" /></td>
			</tr>
		</table>
	
	</fieldset>
	</div>
		
	<!-- Faculty Reference --> 
	<fieldset>
		<legend>H. Faculty Reference</legend>
		
		<p>Please list the names and email addresses of up to 3 faculty members (1 minimum) who can recommend you for this grant. Ask one of your recommenders to write a brief <a href="http://cfe.umich.edu/files/Jump_Start_Grants_Faculty_Reference.pdf" target="_blank">letter of support</a> on behalf of your team, idea, and funding request, and upload the letter below.</p>
		<table class="last">
			<tr>
				<td width="33%"><label>Faculty Recommender Name:</label> *</td>
				<td><input type="text" name="faculty_1_name" value="" size="50"/></td>
			</tr>
			<tr>
				<td><label>Faculty Email:</label> *</td>
				<td><input type="text" name="faculty_1_email" value="" size="50"/></td>
			</tr>
			<tr>
				<td><label>Letter of Recommendation:</label> *</td>
				<td><input type="file" name="FacultyLetter1" id="FacultyLetter1" /></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td><label>Faculty Recommender Name:</label></td>
				<td><input type="text" name="faculty_2_name" value="" size="50"/></td>
			</tr>
			<tr>
				<td><label>Faculty Email:</label></td>
				<td><input type="text" name="faculty_2_email" value="" size="50"/></td>
			</tr>
			<tr>
				<td><label>Letter of Recommendation:</label></td>
				<td><input type="file" name="FacultyLetter2" id="FacultyLetter2" /></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td><label>Faculty Recommender Name:</label></td>
				<td><input type="text" name="faculty_3_name" value="" size="50"/></td>
			</tr>
			<tr>
				<td><label>Faculty Email:</label></td>
				<td><input type="text" name="faculty_3_email" value="" size="50"/></td>
			</tr>
			<tr>
				<td><label>Letter of Recommendation:</label></td>	
				<td><input type="file" name="FacultyLetter3" id="FacultyLetter3" /></td>
			</tr>
		</table>
		
	</fieldset>
	
	<div style="text-align: center"><input type="submit" name="submit" value="Submit Application" id="submit" /></div>
	
</form>

<?php } else { // else after form submission ?>

<h3 class="title" id="page-title">Application Received</h3>

<?php

$error = array();

if (sizeof($error) > 0) {
	echo "\n".'<p><strong>Error!</strong></p>';
	foreach ($error as $e) {
		echo "\n".'<p>'.$e.'</p>';
	}
} else {
	echo "\n".'<p>Success!</p>';
}

?>

<?php } // end else after form submission ?>

				</div><!-- end col_2 -->
			</div><!-- end page_contents -->
		</div><!-- end wrapper -->
		<!-- Page Contents: End -->

		<!-- Footer: Start -->
		<div id="footer">
			<div id="footer_shadow_top"></div>
			<div id="footer_col_1" class="footer_col"><a href="<?php print $base_path; ?>"><img src="<?php print $base_path . $directory; ?>/css/components/logo-cfe-mono.png" width="96" height="35" border="0"></a>
				<p><br>
					<br>
				</p>
			</div>
			<div id="footer_col_2" class="footer_col">
				<p>
					<?php
            $links = sub_menu_links('main-menu', 'node/19');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br>\n";
							$i++;
            }
          ?>
				</p>
			</div>
			<div id="footer_col_3" class="footer_col">
				<p>
					<?php
            $links = sub_menu_links('main-menu', 'node/29');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br>\n";
							$i++;
            }
          ?>
					<br>
					<?php
            $links = sub_menu_links('main-menu', 'node/40');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br>\n";
							$i++;
            }
          ?>
				</p>
			</div>
			<div id="footer_col_4" class="footer_col">
				<p>
					<?php
            $links = sub_menu_links('main-menu', 'node/31');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br>\n";
							$i++;
            }
          ?>
					<br>
					<?php
            $links = sub_menu_links('main-menu', 'node/14');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br>\n";
							$i++;
            }
          ?>
					<br>
					<?php
            $links = sub_menu_links('main-menu', 'node/43');
						$i = 0;
            foreach ($links as $link) {
							echo ($i == 0)? '<strong>':'';
              echo '<a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a>';
							echo ($i == 0)? '</strong>':'';
							echo "<br>\n";
							$i++;
            }
          ?>
				</p>
			</div>
			<div id="footer_col_5" class="footer_col"> <img src="<?php print $base_path . $directory; ?>/css/components/logo-cfe-spark.png" width="132" height="143" border="0"></div>
			<div id="footer_shadow_bottom"></div>
			<div id="footer_copyright"><a href="http://www.regents.umich.edu/">&copy; <?php echo date('Y'); ?>, The Regents of the University of Michigan</a> &nbsp; | &nbsp; <a href="<?php print $base_path . 'contact-us';?>">Contact Us</a><!-- &nbsp; | &nbsp; <a href="<?php print $base_path . 'faq';?>">Frequently Asked Questions</a>--></div>
		</div>
		<!-- Footer: End -->
	</div>
</div>
<!-- Body Contents: End -->