/**
* Bootstrap.js by @fat & @mdo
* plugins: bootstrap-tooltip.js
* Copyright 2012 Twitter, Inc.
* http://www.apache.org/licenses/LICENSE-2.0.txt
*/
!function(a){var b=function(a,b){this.init("tooltip",a,b)};b.prototype={constructor:b,init:function(b,c,d){var e,f,g,h,i;this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.enabled=!0,g=this.options.trigger.split(" ");for(i=g.length;i--;)h=g[i],h=="click"?this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this)):h!="manual"&&(e=h=="hover"?"mouseenter":"focus",f=h=="hover"?"mouseleave":"blur",this.$element.on(e+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(f+"."+this.type,this.options.selector,a.proxy(this.leave,this)));this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},getOptions:function(b){return b=a.extend({},a.fn[this.type].defaults,this.$element.data(),b),b.delay&&typeof b.delay=="number"&&(b.delay={show:b.delay,hide:b.delay}),b},enter:function(b){var c=a.fn[this.type].defaults,d={},e;this._options&&a.each(this._options,function(a,b){c[a]!=b&&(d[a]=b)},this),e=a(b.currentTarget)[this.type](d).data(this.type);if(!e.options.delay||!e.options.delay.show)return e.show();clearTimeout(this.timeout),e.hoverState="in",this.timeout=setTimeout(function(){e.hoverState=="in"&&e.show()},e.options.delay.show)},leave:function(b){var c=a(b.currentTarget)[this.type](this._options).data(this.type);this.timeout&&clearTimeout(this.timeout);if(!c.options.delay||!c.options.delay.hide)return c.hide();c.hoverState="out",this.timeout=setTimeout(function(){c.hoverState=="out"&&c.hide()},c.options.delay.hide)},show:function(){var b,c,d,e,f,g,h=a.Event("show");if(this.hasContent()&&this.enabled){this.$element.trigger(h);if(h.isDefaultPrevented())return;b=this.tip(),this.setContent(),this.options.animation&&b.addClass("fade"),f=typeof this.options.placement=="function"?this.options.placement.call(this,b[0],this.$element[0]):this.options.placement,b.detach().css({top:0,left:0,display:"block"}),this.options.container?b.appendTo(this.options.container):b.insertAfter(this.$element),c=this.getPosition(),d=b[0].offsetWidth,e=b[0].offsetHeight;switch(f){case"bottom":g={top:c.top+c.height,left:c.left+c.width/2-d/2};break;case"top":g={top:c.top-e,left:c.left+c.width/2-d/2};break;case"left":g={top:c.top+c.height/2-e/2,left:c.left-d};break;case"right":g={top:c.top+c.height/2-e/2,left:c.left+c.width}}this.applyPlacement(g,f),this.$element.trigger("shown")}},applyPlacement:function(a,b){var c=this.tip(),d=c[0].offsetWidth,e=c[0].offsetHeight,f,g,h,i;c.offset(a).addClass(b).addClass("in"),f=c[0].offsetWidth,g=c[0].offsetHeight,b=="top"&&g!=e&&(a.top=a.top+e-g,i=!0),b=="bottom"||b=="top"?(h=0,a.left<0&&(h=a.left*-2,a.left=0,c.offset(a),f=c[0].offsetWidth,g=c[0].offsetHeight),this.replaceArrow(h-d+f,f,"left")):this.replaceArrow(g-e,g,"top"),i&&c.offset(a)},replaceArrow:function(a,b,c){this.arrow().css(c,a?50*(1-a/b)+"%":"")},setContent:function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},hide:function(){function e(){var b=setTimeout(function(){c.off(a.support.transition.end).detach()},500);c.one(a.support.transition.end,function(){clearTimeout(b),c.detach()})}var b=this,c=this.tip(),d=a.Event("hide");this.$element.trigger(d);if(d.isDefaultPrevented())return;return c.removeClass("in"),a.support.transition&&this.$tip.hasClass("fade")?e():c.detach(),this.$element.trigger("hidden"),this},fixTitle:function(){var a=this.$element;(a.attr("title")||typeof a.attr("data-original-title")!="string")&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},hasContent:function(){return this.getTitle()},getPosition:function(){var b=this.$element[0];return a.extend({},typeof b.getBoundingClientRect=="function"?b.getBoundingClientRect():{width:b.offsetWidth,height:b.offsetHeight},this.$element.offset())},getTitle:function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||(typeof c.title=="function"?c.title.call(b[0]):c.title),a},tip:function(){return this.$tip=this.$tip||a(this.options.template)},arrow:function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},validate:function(){this.$element[0].parentNode||(this.hide(),this.$element=null,this.options=null)},enable:function(){this.enabled=!0},disable:function(){this.enabled=!1},toggleEnabled:function(){this.enabled=!this.enabled},toggle:function(b){var c=b?a(b.currentTarget)[this.type](this._options).data(this.type):this;c.tip().hasClass("in")?c.hide():c.show()},destroy:function(){this.hide().$element.off("."+this.type).removeData(this.type)}};var c=a.fn.tooltip;a.fn.tooltip=function(c){return this.each(function(){var d=a(this),e=d.data("tooltip"),f=typeof c=="object"&&c;e||d.data("tooltip",e=new b(this,f)),typeof c=="string"&&e[c]()})},a.fn.tooltip.Constructor=b,a.fn.tooltip.defaults={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1},a.fn.tooltip.noConflict=function(){return a.fn.tooltip=c,this}}(window.jQuery);
// CFE JavaScript
;(function ($) {
		
	$(document).ready(function() {
		/* This seems to be incompatible with the old version of jQuery.
		//$('.social-icons').tooltip({
		//	'placement': 'bottom'
		});
		*/
			
		// Search bar hover show-and-hide
		$('.search-container-inside').hover(
			function() {
				var searchContainer = $('#search-container');
				searchContainer.css('overflow', 'visible');
				searchContainer.find('#edit-search-keys').focus();
			},
			function() {
				var searchContainer = $('#search-container');
				searchContainer.css('overflow', 'hidden');
			}
          );

        $('navigation .expanded .expanded').hover(
            function() {
                $(this).children('.menu').show();
            }, function() {
                $(this).children('.menu').hide();
            }
        );
		
		// Prevent header from covering anchors
		$('a[href^="#"]').click(function (event) {
			event.preventDefault();
			var targetpos = $($(this).attr('href')).offset().top - 172;
			$('html,body').animate({scrollTop: targetpos}, 'fast');
		});
		
		// Scroll down to the item upon clicking the corresponding item in the list view for every Person View page
		$('a[class=scrollToTarget]').mouseup(function(){
			var currentObj = $(this);
			var currentObjName = currentObj.text();
			var currentObjNameHyp = currentObjName.toLowerCase().replace(" ", "-");
			var currentPage = window.location.pathname;
			
			if($('.view-people').length != 0) {
				var locOfSnippet = $('div span[class="field-content imgHeader"] a:contains("'+currentObjName+'")').position().top - 180;
			}else if($('.view-classes').length != 0){
				var courseNum = currentObjName.substr(0, currentObjName.indexOf("—"));
				
				var locOfSnippet = $('.view-classes .attachment-after h2 a:contains('+courseNum+')').parent().parent().position().top + 15;
			}
			$('html,body').animate({scrollTop: locOfSnippet}, 300);
		});
		
		/* -- Sidebar styling starts here -- */
		
		// Strap the news/event title and published date sections together as well as give it a link
		$('#block-views-latest-event-block-1 .newsItem').css('cursor','pointer').click(function(){
			location.href=$('.views-field-title span a',this).attr('href');
		});
		// Strap the youtube video title and published date sections together as well as give it a link
		$('#block-views-latest-event-block-3 .content .views-field-title').before('<div id="wrapTitleDate">');
		$('#wrapTitleDate').append($('#block-views-latest-event-block-3 .content .views-field-title').html()+$('#block-views-latest-event-block-3 .content .views-field-field-published').html());
		$('#block-views-latest-event-block-3 #wrapTitleDate').css('cursor','pointer').click(function(){
			location.href=$('#block-views-latest-event-block-3 #wrapTitleDate h3 a').attr('href');
		});
		
		// Hide the existing areas
		$('#block-views-latest-event-block-3 .content .views-field-title').hide();
		$('#block-views-latest-event-block-3 .content .views-field-field-published').hide();
		
		//
		$('#block-views-latest-event-block-1 .newsItem').hover(function(){
			$(this).css('background-color', 'rgba(0,75,150,1)');
		},function(){
			$(this).css('background-color', 'rgba(0,75,150,0.7)');
		});
		
		$('#block-views-latest-event-block-3 #wrapTitleDate').hover(function(){
			$(this).css('background-color', 'rgba(0,75,150,1)');
		},function(){
			$(this).css('background-color', 'rgba(0,75,150,0.7)');
		});
		
		// Play icon shows up on hovering over the thumbnail of the video
		$('#block-views-latest-event-block-3 .thumbnail a').before('<div class="floatingLayer"><div class="playIcon"></div></div>');
		$('#block-views-latest-event-block-3 .thumbnail .playIcon').click(function(){
			window.open($('#block-views-latest-event-block-3 .thumbnail a').attr('href'),'video');
		});
		$('#block-views-latest-event-block-3 .thumbnail').hover(function(){
			$('#block-views-latest-event-block-3 .thumbnail .playIcon').fadeIn(250);
		},function(){
			$('#block-views-latest-event-block-3 .thumbnail .playIcon').fadeOut(250);
		});
		
		// When the height of the page is larger than a certain size, display a button that sends the users back to the top of the screen
		$('#page_contents .col_1').append('<div id="scrollToTop"><a href="#" id="goToTop" class="button" style="width:220px; text-align: center">Top</a></div>');
		$('#scrollToTop #goToTop').click(function(event){
			event.preventDefault();
			$('html,body').animate({'scrollTop':'0px'}, 300);
		});
		$(document).scroll(function(){
			if($(document).scrollTop() > 960){
				$('#page_contents .col_1 #scrollToTop').fadeIn(250);
			}else{
				$('#page_contents .col_1 #scrollToTop').fadeOut(250);
			}
		});
		/* -- Sidebar styling ends here -- */
	}); // ready
	
}(jQuery));
