// CFE JavaScript
(function ($) {
	
	var timer1, timer2, timer3;
	
	function autoslide(index) {
		// Note: In this case slide index is 1-5
		if (index < 5) index++;
		else index = 1;
		//$('#slideshow_controls_thumbnails ul li #selected').remove();
		//$('#slideshow_thumbnail'+index.toString()).append('<div id="selected"></div>');
        $('#slideshow_controls_thumbnails ul li span .whiteCircle').show();
        $('#slideshow_controls_thumbnails ul li span .whiteCircle:eq('+(index-1)+')').hide();
		$('#slideshow_photos ul').stop(true, false).animate({
			marginTop: -300*(index-1),
			height: 300*index
		}, {
			duration: 1000,
			specialEasing: {
				duration: 'slow',
				easing: 'easeOutBounce'
			},
			complete: function() {
				timer1 = setTimeout(function() {
					autoslide(index);
				}, 5000);
			}
		});
	}
	
	$(document).ready(function() {

        $('#slideshow_controls_thumbnails ul li img').css('border','1px solid #fff');

		timer2 = setTimeout(function() {
			autoslide(1);
		}, 5000);


        $('#slideshow_controls_thumbnails ul li span .whiteCircle').show();
        $('#slideshow_controls_thumbnails ul li span .whiteCircle:eq(0)').hide();
		
		$('#slideshow_controls_thumbnails ul li').each(function(index) {
			// Note: In this case slide index is 0-4
            $(this).hover(function(){
                $('.slideTooltip .tooltipBody',$(this)).html($('#slideshow #slideshow_photos li#slideshow_photo'+(index+1)+' h2').text());
                $('.slideTooltip',$(this)).stop(true,true).animate({'opacity':'1'},250,'easeOutCirc');
            },function(){
                $('.slideTooltip',$(this)).stop(true,true).animate({'opacity':'0'},250,'easeOutCirc');
            });

			$(this).click(function() {
				clearTimeout(timer1);
				clearTimeout(timer2);
				clearTimeout(timer3);
				//$('#slideshow_controls_thumbnails ul li #selected').remove();
				//$(this).append('<div id="selected"></div>');

                $('#slideshow_controls_thumbnails ul li span .whiteCircle').show();
                $('#slideshow_controls_thumbnails ul li span .whiteCircle:eq('+index+')').hide();

				$('#slideshow_photos ul').stop(true, false).animate({
					marginTop: -300*index,
					height: 300*(index+1)
				}, {
					duration: 1000,
					specialEasing: {
						duration: 'slow',
						easing: 'easeOutBounce'
					},
					complete: function() {
						timer3 = setTimeout(function() {
							autoslide(index+1);
						}, 10000);
					}
				});
			});
		});
		
	});

}(jQuery));