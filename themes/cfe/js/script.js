// CFE JavaScript
(function ($) {

	$(document).ready(function() {
		
		// jQuery
		var currentPage = $('meta[property|="dc:title"]').prop("content");
		
		// Prevent header from covering anchors
		$('a[href^="#"]').click(function (event) {
			event.preventDefault();
			var targetpos = $($(this).attr('href')).offset().top - 172;
			$('html,body').animate({scrollTop: targetpos}, 'fast');
		});
		
		
		// Selecting different courses in semesters
		if(currentPage=='Courses') {
			$("#CourseDisplay").buttonset();
			$("tr td:contains('Fall')").each(function(){
				$(this).parent().addClass('Fall');
				var name = $('a:eq(0)', $(this)).attr("name");
				$('a[href|="#'+name+'"]').parent().addClass('Fall');
			});
			$("tr td:contains('Winter')").each(function(){
				$(this).parent().addClass('Winter');
				var name = $('a:eq(0)', $(this)).attr("name");
				$('a[href|="#'+name+'"]').parent().addClass('Winter');
			});
			$("tr td:contains('Summer')").each(function(){
				$(this).parent().addClass('Summer');
				var name = $('a:eq(0)', $(this)).attr("name");
				$('a[href|="#'+name+'"]').parent().addClass('Summer');
			});
			$("tr td:contains('Spring')").each(function(){
				$(this).parent().addClass('Spring');
				var name = $('a:eq(0)', $(this)).attr("name");
				$('a[href|="#'+name+'"]').parent().addClass('Spring');
			});
			
			$('#CourseDisplay input').on('change', function() {
				$('.Fall, .Winter, .Spring, .Summer').hide();
				$('#CourseDisplay input').each(function(){
					var semester = "."+$(this).attr('id');
					if ($(this).is(':checked')) {
						$(semester).show();
					}
				});
			});
		};
		
	});

}(jQuery));