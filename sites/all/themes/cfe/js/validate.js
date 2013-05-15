// Form Validation Javascript

(function ($) {

function checkText(jqObj) {					// for use on input.textfield
	jqObj.filter(function() { return $(this).val().length > 0; }).closest("tr").find("label").removeClass("error");
	jqObj.filter(function() { return $(this).val().length == 0; }).closest("tr").find("label").addClass("error");
} // END checkText()

function checkDate(jqObj) {					// for use on input.date
	var validFormat = /^\d{2}\/\d{2}\/\d{4}$/;
	jqObj.not(function() { return $(this).val().match(validFormat); }).closest("tr").find("label").addClass("error"); // Add error if invalid format
	var matchRegEx = jqObj.filter(function() { return $(this).val().match(validFormat); }); // Get fields with valid format for further validation
	matchRegEx.each(function() { // Check ranges
		var currentDate = $(this).val().split("/");
		var monthField = currentDate[0];
		var dayField = currentDate[1];
		var yearField = currentDate[2];
		var dayObj = new Date(yearField, monthField-1, dayField);
		if ((dayObj.getMonth()+1 != monthField) || (dayObj.getDate() != dayField) || (dayObj.getFullYear() != yearField)) {
			$(this).closest("tr").find("label").addClass("error");
		} else {
			$(this).closest("tr").find("label").removeClass("error");
		}
	});
	jqObj.filter("input:not(.required)").filter(function() { return $(this).val().length == 0; }).closest("tr").find("label").removeClass("error"); // Remove error if field is blank
} // END checkDate()

function checkFormat(jqObj, validFormat) {	// for use on input with regex input formats
	jqObj.filter(function() { return $(this).val().match(validFormat); }).closest("tr").find("label").removeClass("error"); // Remove error if valid format
	jqObj.not(function() { return $(this).val().match(validFormat); }).closest("tr").find("label").addClass("error"); // Add error if invalid format
	jqObj.filter("input:not(.required)").filter(function() { return $(this).val().length == 0; }).closest("tr").find("label").removeClass("error"); // Remove error if field is blank
} // END checkIRB()

function updateErrors() {					// updates div#form_errors with count of label.error
	var errorCount = $("label.error").length;
	if (errorCount > 0) {
		if (errorCount == 1) $("div#form_errors").html('<p>There is '+errorCount+' field that requires your attention</p>');
		else $("div#form_errors").html('<p>There are '+errorCount+' fields that require your attention</p>');
	} else $("div#form_errors").html('');
} // END updateErrors()

$(document).ready(function() {
	
	$("input.textfield.required").blur(function() { checkText($(this)); });	// Check text inputs on blur
	$("select.required").blur(function() { checkText($(this)); });	// Check dropdown on blur
	//$("input.eightnum").blur(function() { checkFormat($(this), /^[0-9]{8}$/); });
	$("input.date").blur(function() { checkDate($(this)); });	// Check date input on blur
	$("input").blur(function() { updateErrors(); });
	$("a.submit").click(function(event) {				// Submit form on click
		event.preventDefault();				// Don't follow link
		var form = $(this).attr("href");	// Get form from href of clicked submit link
		$(form).submit();					// Submit form
	});
	$("form.validate").submit(function() {				// Validate form on submit
		checkText($("input.textfield.required"));				// Validate required input.textfield
		//checkFormat($("input.eightnum.required"), /^[0-9]{8}$/);
		checkDate($("input.date.required"));					// Validate required input.date
		updateErrors();											// Update form errors
		if ($("label.error").length == 0) { 					// Submit form if there are no errors, otherwise scroll to top
			return true;
		} else {
			$('html,body').animate({scrollTop: $("div#form_errors").offset().top - 100}, 'fast');
			return false;
		}
	});
});

}(jQuery));