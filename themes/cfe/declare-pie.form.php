<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/script.js'); ?>
<?php drupal_add_js(drupal_get_path('theme','cfe') . '/js/validate.js'); ?>

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
			<div class="col_1" id="left_col">
				<div id="subnav">
					<div id="subnav_shadow_top"></div>
					<div id="subnav_menu">
						<ul>
							<?php
            $links = sub_menu_links('main-menu', current_path());
            foreach ($links as $link) {
              echo '<li><a href="' . url(($link->alias ? $link->alias : $link->link_path)) . '" class="' . ($link->link_path == current_path() ? 'selected' : '') . '">' . $link->link_title . '</a></li>' . "\n";
            }
          ?>
						</ul>
					</div>
					<div id="subnav_shadow_bottom"></div>
				</div>
				<div id="module1" class="pad pad_left_col">
					<?php if (function_exists('twitter_pull_render')) { print twitter_pull_render('@umcfe', 'Twitter', 3); } ?>
					<a href="https://twitter.com/#!/UMCFE" class="button" target="_blank">MORE TWEETS</a></div>
				<div id="module2" class="pad pad_left_col">
				<?php /*
					<h2>Events</h2>
					<p>Topping faworki gingerbread cookie macaroon sweet roll croissant. Dessert macaroon souffle sweet chocolate bar gummies. Toffee gummies caramels cupcake halvah jelly-o bonbon topping.</p>
					<a href="#" class="button">MORE EVENTS</a> 
					*/ ?>
				</div>
			</div>
			<div class="col_2">
				<div class="pad">

<h2 class="title" id="page-title">Declare the Program in Entrepreneurship</h2>

<?php if (!isset($_POST['submit'])) { // If before form submission ?>

<p>To be eligible to declare the Program in Entrepreneurship (PIE) you must:</p>
	<ul>
		<li>Be in good academic standing based on an earned UM GPA (minimum 2.0 for undergraduate students/5.0 for graduate students).</li>
		<li>Have sophomore standing or above (Note: graduate and transfer students may declare the PIE during their first semester at UM).</li>
		<li>Have already declared your major concentration.</li>
	</ul>
	<p>Remember, you are welcome to enroll in entrepreneurship courses at any time. However, you cannot declare the PIE unless you meet the eligibility criteria.</p>
</div>
<div id="form_errors"></div>
<form action="/declare-pie" class="validate" method="post">
	<table class="form">
		<tr>
			<td><label>First Name:</label>*</td>
			<td><input type="text" class="textfield required" name="fname" value="" /></td>
		</tr>
		<tr>
			<td><label>Last Name:</label>*</td>
			<td><input type="text" class="textfield required" name="lname" value="" /></td>
		</tr>
		<tr>
			<td><label>Uniqname:</label>*</td>
			<td><input type="text" class="textfield required" name="uname" value="" /></td>
		</tr>
		<tr>
			<td><label>UMID:</label>*<!--<br /><span class="field-format">Format: ########</span>--></td>
			<td><input type="text" class="textfield required" name="umid" value="" maxlength="8" /></td>
		</tr>
		<tr>
			<td><label>School:</label>*</td>
			<td><select class="required" name="school">
				<option value="" selected="selected">Select One</option>
				<option value="Architecture & Urban Planning">Architecture &amp; Urban Planning</option>
				<option value="Art & Design">Art &amp; Design</option>
				<option value="Business">Business</option>
				<option value="Dentistry">Dentistry</option>
				<option value="Education">Education</option>
				<option value="Engineering">Engineering</option>
				<option value="Rackham School of Graduate Studies">Rackham School of Graduate Studies</option>
				<option value="School of Information">School of Information</option>
				<option value="Kinesiology">Kinesiology</option>
				<option value="Law">Law</option>
				<option value="Literature, Science, & the Arts">Literature, Science, &amp; the Arts</option>
				<option value="Medicine">Medicine</option>
				<option value="Music, Theatre & Dance">Music, Theatre &amp; Dance</option>
				<option value="Natural Resources & Environment">Natural Resources &amp; Environment</option>
				<option value="Nursing">Nursing</option>
				<option value="Officer Education Programs">Officer Education Programs</option>
				<option value="Pharmacy">Pharmacy</option>
				<option value="Public Health">Public Health</option>
				<option value="Public Policy">Public Policy</option>
				<option value="Social Work">Social Work</option>
			</select></td>
		</tr>
		<tr>
			<td><label>Major:</label>*</td>
			<td><input type="text" class="textfield required" name="major" value="" /></td>
		</tr>
		<tr>
			<td><label>Minor:</label></td>
			<td><input type="text" class="textfield" name="minor" value="" /></td>
		</tr>
		<tr>
			<td><label>Expected Graduation<br />Term (e.g. FA12, WN13):</label>*</td>
			<td><input type="text" class="textfield required" name="gyear" value="" /></td>
		</tr>
		<tr>
			<td><label>Current Grade:</label>*</td>
			<td><select class="required" name="grade">
				<option value="" selected="selected">Select One</option>
				<option value="Sophomore">Sophomore</option>
				<option value="Junior">Junior</option>
				<option value="Senior">Senior</option>
				<option value="Graduate Student">Graduate Student</option>
			</select></td>
		</tr>
		<tr>
			<td><label>Additional Information:</label></td>
			<td><textarea class="textfield" cols="50" rows="8" name="info"></textarea></td>
		</tr>
		<tr>
			<td><label>Requirements:</label></td>
			<td>
				<input type="radio" name="requirement" value="I have sophomore standing or above and my GPA is a 2.0 or higher" /> I have sophomore standing or above and my GPA is a 2.0 or higher.<br />				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>OR</b><br />
				<input type="radio" name="requirement" value="I am a transfer student or graduate student in good academic standing" /> I am a transfer student or graduate student in good academic standing.<br />
		</td>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Declare" /></td>
	</table>
</form>

<?php } else { // else after form submission ?>

<h3 class="title" id="page-title">Application Received</h3>

<?php

$error = array();

// Get form data
if (isset($_POST['fname']))			$fname = $_POST['fname'];
if (isset($_POST['lname']))			$lname = $_POST['lname'];
if (isset($_POST['uname']))			$uname = $_POST['uname'];
if (isset($_POST['umid']))			$umid = $_POST['umid'];
if (isset($_POST['school']))		$school = $_POST['school'];
if (isset($_POST['major']))			$major = $_POST['major'];
if (isset($_POST['minor']))			$minor = $_POST['minor'];
if (isset($_POST['gyear']))			$gyear = $_POST['gyear'];
if (isset($_POST['grade']))			$grade = $_POST['grade'];
if (isset($_POST['info']))			$info = $_POST['info'];
if (isset($_POST['requirement']))	$requirement = $_POST['requirement'];

// Application Details
$app_details = "----- Application Details -----
First Name: $fname
Last Name: $lname
Uniqname: $uname
UMID: $umid
School: $school
Major: $major
Minor: $minor
Graduation Term: $gyear
Current Year: $grade
Additional Information: $info
Requirement: $requirement";

// User Confirmation:
$user_to = $uname."@umich.edu";
$user_subject = "PIE Declaration";
$user_headers = "From: CFE Website <afgoldst@umich.edu>";
$user_body = "We've recieved your application to declare the Program in Entrepreneurship.
If you haven't done so already, please complete the brief survey found at:
http://www.surveymonkey.com/s/PieEntrySurvey

In the next 3-5 business days, you should receive an email from the Center
for Entrepreneurship welcoming you to the program and asking you to schedule
an advising appointment. If you do not receive such an email, please contact
Amy Goldstein, Academic Program Assistant, at afgoldst@umich.edu. In the
meantime, we encourage you to explore the website to learn about the
entrepreneurial events, activities, courses, and programs happening on
campus.

".$app_details;

// Admin Confirmation:
$admin_to = "afgoldst@umich.edu";
$admin_subject = "PIE Declaration - ".$uname;
$admin_headers = "From: CFE Website <afgoldst@umich.edu>";
$admin_body = $app_details;

// Send Emails
if (!mail($user_to, $user_subject, $user_body, $user_headers)) $error[] = "User confirmation email failed";
if (!mail($admin_to, $admin_subject, $admin_body, $admin_headers)) $error[] = "Administrator confirmation email failed";

if (sizeof($error) > 0) {
	echo "\n".'<p><strong>Error!</strong></p>';
	foreach ($error as $e) {
		echo "\n".'<p>'.$e.'</p>';
	}
} else {
	echo "\n".'<p>The final step in declaring the Program in Entrepreneurship is to complete a brief entry survey. The survey can be found at: <a href="http://www.surveymonkey.com/s/PieEntrySurvey" target="_blank">http://www.surveymonkey.com/s/PieEntrySurvey</a>.</p>';
	echo "\n".'<p>In the next 3-5 business days, you should receive an email from the Center for Entrepreneurship welcoming you to the program and asking you to schedule an advising appointment. If you do not receive such an email, please contact Amy Goldstein, Academic Program Assistant, at <a href="mailto:afgoldst@umich.edu">afgoldst@umich.edu</a>. In the meantime, we encourage you to explore the website to learn about the entrepreneurial events, activities, courses, and programs happening on campus.</p>';
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