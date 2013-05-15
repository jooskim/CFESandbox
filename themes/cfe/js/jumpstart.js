// Jumpstart Form Javascript

(function ($) {

$(document).ready(function() {
	
	$("select#number_team").change(function() {
		var num_members = Number($(this).val());
		switch(num_members) {
			case 1:
				$("tr.member_1").css("display","");
				$("tr.member_2").css("display","none");
				$("tr.member_3").css("display","none");
				$("tr.member_4").css("display","none");
				break;
			case 2:
				$("tr.member_1").css("display","");
				$("tr.member_2").css("display","");
				$("tr.member_3").css("display","none");
				$("tr.member_4").css("display","none");
				break;
			case 3:
				$("tr.member_1").css("display","");
				$("tr.member_2").css("display","");
				$("tr.member_3").css("display","");
				$("tr.member_4").css("display","none");
				break;
			case 4:
				$("tr.member_1").css("display","");
				$("tr.member_2").css("display","");
				$("tr.member_3").css("display","");
				$("tr.member_4").css("display","");
				break;
		}
	});
	
	$("input[name=um_association]").change(function() {
		var um_association = $('input[name=um_association]:checked').val();
		if (um_association == 'y') $("tr.um_association_yes").css("display","");
		else $("tr.um_association_yes").css("display","none");
	});
});

}(jQuery));