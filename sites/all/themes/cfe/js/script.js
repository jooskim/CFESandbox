/**
* Bootstrap.js by @fat & @mdo
* plugins: bootstrap-tooltip.js
* Copyright 2012 Twitter, Inc.
* http://www.apache.org/licenses/LICENSE-2.0.txt
*/
!function(a){var b=function(a,b){this.init("tooltip",a,b)};b.prototype={constructor:b,init:function(b,c,d){var e,f,g,h,i;this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.enabled=!0,g=this.options.trigger.split(" ");for(i=g.length;i--;)h=g[i],h=="click"?this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this)):h!="manual"&&(e=h=="hover"?"mouseenter":"focus",f=h=="hover"?"mouseleave":"blur",this.$element.on(e+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(f+"."+this.type,this.options.selector,a.proxy(this.leave,this)));this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},getOptions:function(b){return b=a.extend({},a.fn[this.type].defaults,this.$element.data(),b),b.delay&&typeof b.delay=="number"&&(b.delay={show:b.delay,hide:b.delay}),b},enter:function(b){var c=a.fn[this.type].defaults,d={},e;this._options&&a.each(this._options,function(a,b){c[a]!=b&&(d[a]=b)},this),e=a(b.currentTarget)[this.type](d).data(this.type);if(!e.options.delay||!e.options.delay.show)return e.show();clearTimeout(this.timeout),e.hoverState="in",this.timeout=setTimeout(function(){e.hoverState=="in"&&e.show()},e.options.delay.show)},leave:function(b){var c=a(b.currentTarget)[this.type](this._options).data(this.type);this.timeout&&clearTimeout(this.timeout);if(!c.options.delay||!c.options.delay.hide)return c.hide();c.hoverState="out",this.timeout=setTimeout(function(){c.hoverState=="out"&&c.hide()},c.options.delay.hide)},show:function(){var b,c,d,e,f,g,h=a.Event("show");if(this.hasContent()&&this.enabled){this.$element.trigger(h);if(h.isDefaultPrevented())return;b=this.tip(),this.setContent(),this.options.animation&&b.addClass("fade"),f=typeof this.options.placement=="function"?this.options.placement.call(this,b[0],this.$element[0]):this.options.placement,b.detach().css({top:0,left:0,display:"block"}),this.options.container?b.appendTo(this.options.container):b.insertAfter(this.$element),c=this.getPosition(),d=b[0].offsetWidth,e=b[0].offsetHeight;switch(f){case"bottom":g={top:c.top+c.height,left:c.left+c.width/2-d/2};break;case"top":g={top:c.top-e,left:c.left+c.width/2-d/2};break;case"left":g={top:c.top+c.height/2-e/2,left:c.left-d};break;case"right":g={top:c.top+c.height/2-e/2,left:c.left+c.width}}this.applyPlacement(g,f),this.$element.trigger("shown")}},applyPlacement:function(a,b){var c=this.tip(),d=c[0].offsetWidth,e=c[0].offsetHeight,f,g,h,i;c.offset(a).addClass(b).addClass("in"),f=c[0].offsetWidth,g=c[0].offsetHeight,b=="top"&&g!=e&&(a.top=a.top+e-g,i=!0),b=="bottom"||b=="top"?(h=0,a.left<0&&(h=a.left*-2,a.left=0,c.offset(a),f=c[0].offsetWidth,g=c[0].offsetHeight),this.replaceArrow(h-d+f,f,"left")):this.replaceArrow(g-e,g,"top"),i&&c.offset(a)},replaceArrow:function(a,b,c){this.arrow().css(c,a?50*(1-a/b)+"%":"")},setContent:function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},hide:function(){function e(){var b=setTimeout(function(){c.off(a.support.transition.end).detach()},500);c.one(a.support.transition.end,function(){clearTimeout(b),c.detach()})}var b=this,c=this.tip(),d=a.Event("hide");this.$element.trigger(d);if(d.isDefaultPrevented())return;return c.removeClass("in"),a.support.transition&&this.$tip.hasClass("fade")?e():c.detach(),this.$element.trigger("hidden"),this},fixTitle:function(){var a=this.$element;(a.attr("title")||typeof a.attr("data-original-title")!="string")&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},hasContent:function(){return this.getTitle()},getPosition:function(){var b=this.$element[0];return a.extend({},typeof b.getBoundingClientRect=="function"?b.getBoundingClientRect():{width:b.offsetWidth,height:b.offsetHeight},this.$element.offset())},getTitle:function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||(typeof c.title=="function"?c.title.call(b[0]):c.title),a},tip:function(){return this.$tip=this.$tip||a(this.options.template)},arrow:function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},validate:function(){this.$element[0].parentNode||(this.hide(),this.$element=null,this.options=null)},enable:function(){this.enabled=!0},disable:function(){this.enabled=!1},toggleEnabled:function(){this.enabled=!this.enabled},toggle:function(b){var c=b?a(b.currentTarget)[this.type](this._options).data(this.type):this;c.tip().hasClass("in")?c.hide():c.show()},destroy:function(){this.hide().$element.off("."+this.type).removeData(this.type)}};var c=a.fn.tooltip;a.fn.tooltip=function(c){return this.each(function(){var d=a(this),e=d.data("tooltip"),f=typeof c=="object"&&c;e||d.data("tooltip",e=new b(this,f)),typeof c=="string"&&e[c]()})},a.fn.tooltip.Constructor=b,a.fn.tooltip.defaults={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1},a.fn.tooltip.noConflict=function(){return a.fn.tooltip=c,this}}(window.jQuery);
// CFE JavaScript
;(function ($) {
    var root = "http://www.cfe.umich.edu/sandbox/";

    function getParameterByName(name) {
        var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
        return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
    }

	$(document).ready(function() {
		var browserName  = navigator.appName;
		var verOffsetMSIE= navigator.userAgent.indexOf("MSIE");
		var fullVerMSIE = navigator.userAgent.substring(verOffsetMSIE+5);
		var verMSIE = fullVerMSIE.substring(0,fullVerMSIE.indexOf(';'));

		/* Alert the users using IE7 about the browser incompatibility issues */
		if(verOffsetMSIE != -1 && verMSIE == '7.0'){
			$('#page_contents').prepend('<div style="position:relative; width: 0; height:0; z-index:170;"><div id="warningLayer" style="position: relative; width: 650px; height:auto; left: 160px; top: -180px; padding:10px; background-color: #000000; color: #ffffff; border: 1px solid #353535; filter: alpha(opacity=80);"><h1 style="color: #ffffff">We are sorry</h1><br>The browser you are using (Microsoft Internet Explorer 7) does not display our website in the best view, which may cause some features to function in unexpected ways. We recommend that you upgrade your browser to Microsoft Internet Explorer 8+ or other browsers such as Google Chrome. We are very sorry for your inconvenience and we will work on these browser incompatibility issues soon.<br><br><form id="form_DontShowMe"><input type="button" id="dontShowMe" style="width:150px" name="dontShowMe" value="Do not show this for a week"><input type="button" style="width:150px" id="closeWarning" value="Close"></form></div></div>');
			
			if($.cookies.get('donotshow') == 1){
				$('#warningLayer').hide();
			}
			
			$('#closeWarning').click(function(){
				$('#warningLayer').hide();
				//$('body').append($.cookies.get('donotshow'));
			});
		
			$('#dontShowMe').click(function(){
				$('#warningLayer').hide();
				$.cookies.set('donotshow','1',{hoursToLive: 168});
			});

		}
		
		// Small eye candies for the navigation menu
        $('#navigation .menu .expanded').not('.menu .expanded .expanded').each(function(){
            $(this).append("<div class='in'><div class='insideIn'></div></div>");
        });
        $('#navigation .menu .expanded').not('.menu .expanded .expanded').hover(function(){
           $('.in',$(this)).show();
        },function(){
            $('.in',$(this)).hide();
        });

		/* Navigation breakage fix IE7: IT WORKS, BUT NOT TO THE FULLY SATISFACTORY EXTENT... SHOULD BE WORKED ON LATER */
		if(verOffsetMSIE != -1 && (verMSIE == '7.0')){
			$('#navigation ul li').hover(function(){
				$('ul',this).css({'left':'-1px','top':'27px'});
			});
			$('.menu .menu li.expanded').hover(function(){
				$(this).parent().css('width','auto');
			});
		}
		
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

        $('#navigation .expanded .expanded').hover(
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
				$('html,body').animate({scrollTop: locOfSnippet}, 300,function(){
					var container = $('div span[class="field-content imgHeader"] a:contains("'+currentObjName+'")').parent().parent().parent();
					container.animate({'backgroundColor':'#ffcb05'},350,function(){
						container.animate({'backgroundColor':''},250);
					});
				});
			}else if($('.view-classes').length != 0){
				var courseNum = currentObjName.substr(0, currentObjName.indexOf("—"));
				var locOfSnippet = $('.view-classes .attachment-after span a:contains('+courseNum+')').parent().parent().position().top + 15;
				$('html,body').animate({scrollTop: locOfSnippet}, 300,function(){
					var container = $('.view-classes .attachment-after span a:contains('+courseNum+')').parent().parent().parent();
					container.animate({'backgroundColor':'#ffcb05'},350,function(){
						container.animate({'backgroundColor':''},250);
					});
				});
			}

		});
		
		/* Fix the layout breakage of the teaser articles shown on the home page */
		
		if($('body').hasClass('page-frontpage')){
			$('.newsItem').css('height', function(i){
				var curHeight = parseInt($(this).css('height').substr(0, $(this).css('height').length - 2));
				
				if($('img', $(this).parent()).height() != null){
					var imgHeight = $('img',this).height() + 44;
				}else{
					var imgHeight = curHeight;
				}
				
				if(curHeight < imgHeight){
					return imgHeight+'px';
				}else{
					return curHeight+'px';
				}
			});
			
		}
		
		/* -- Sidebar styling starts here -- */
		
		// Strap the news/event title and published date sections together as well as give it a link
		$('#block-views-latest-event-block-1 .newsItem, #block-views-latest-event-block-2 .newsItem, #block-views-latest-event-block-4 .newsItem').each(function(){
            var origin;
            if($('body').hasClass('page-press') || $('body').hasClass('page-press-tag')){
                origin = '?origin=press';
            }else if($('body').hasClass('page-videos') || $('body').hasClass('page-videos-tag')){
                origin = '?origin=videos';
            }else if($('body').hasClass('page-careers') || $('body').hasClass('page-careers-tag')){
                origin = '?origin=careers';
            }else if($('body').hasClass('page-events') || $('body').hasClass('page-events-tag')){
                origin = '?origin=events';
            }else{
                origin='';
            }
            $('.views-field-title a',$(this)).attr('href', $('.views-field-title a',$(this)).attr('href')+origin);
        });

        $('#block-views-latest-event-block-1 .newsItem, #block-views-latest-event-block-2 .newsItem, #block-views-latest-event-block-4 .newsItem').css('cursor','pointer').click(function(){
            var origin;
            if($('body').hasClass('page-press') || $('body').hasClass('page-press-tag')){
                origin = '?origin=press';
            }else if($('body').hasClass('page-videos') || $('body').hasClass('page-videos-tag')){
                origin = '?origin=videos';
            }else if($('body').hasClass('page-careers') || $('body').hasClass('page-careers-tag')){
                origin = '?origin=careers';
            }else if($('body').hasClass('page-events') || $('body').hasClass('page-events-tag')){
                origin = '?origin=events';
            }else{
                origin='';
            }

			location.href=$('.views-field-title span a',this).attr('href')+origin;
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
		
		// Highlight each item upon hovering
		$('#block-views-latest-event-block-1 .newsItem, #block-views-latest-event-block-2 .newsItem, #block-views-latest-event-block-4 .newsItem').hover(function(){
			$('a,span',this).css('color','#00274c');
			$(this).css({'background-color': '#ffcb05', 'text-shadow': '1px 1px 2px #ffffff'});
		},function(){
			$('a,span',this).css('color','#ffffff');
			$(this).css({'background-color': '#024b96', 'text-shadow': '1px 1px 2px #333333'});
		});
		
		$('#block-views-latest-event-block-3 #wrapTitleDate').hover(function(){
			$('a,span',this).css('color','#00274c');
			$(this).css({'background-color': '#ffcb05', 'text-shadow': '1px 1px 2px #ffffff'});
		},function(){
			$('a,span',this).css('color','#ffffff');
			$(this).css({'background-color': '#024b96', 'text-shadow': '1px 1px 2px #333333'});
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
		
		// Set up 'Top' button
		$('#page_contents .col_1').append('<div id="scrollToTop"><a href="#" id="goToTop" class="button" style="width:220px; text-align: center">Top</a></div>');
		$('#scrollToTop #goToTop').click(function(event){
			event.preventDefault();
			$('html,body').animate({'scrollTop':'0px'}, 300);
		});

		// When the height of the page is larger than 960px, display a button that sends the users back to the top of the screen
		$(document).scroll(function(){
			var scrollOffset = $(document).height() - $(document).scrollTop();
			
			if($(document).scrollTop() > 960){
				$('#page_contents .col_1 #scrollToTop').fadeIn(250);
				if(scrollOffset <= 990){
					//
				}else{
					
				}
			}else{
				$('#page_contents .col_1 #scrollToTop').fadeOut(250);
			}
			
			// need to check this again whether the code below breaks other pages that have 'page-node-' classes
			if($('body').hasClass('page-node-') && ($('body').hasClass('page-node-40') || $('body').hasClass('page-node-236') || $('body').hasClass('page-node-325') || $('body').hasClass('page-node-29') || $('body').hasClass('page-node-237') || $('body').hasClass('page-node-47') || $('body').hasClass('page-node-62') || $('body').hasClass('page-node-238'))){
				// when scroll goes below 300px, reset the col_1 location
				if($(document).scrollTop() < 300){
					$('.wrapper #page_contents .col_1').css("top",0);
				}
			
				if($(document).height() > 1500 && $(document).scrollTop() >= 0 && scrollOffset >= 1015 && $(document).scrollTop() > 300){
					$('.wrapper #page_contents .col_1').css("top",$(document).scrollTop()-300);
				}
			}else{
				
				if($(document).height() > 1200 && $(document).scrollTop() >= 0 && scrollOffset >= 1015){
					$('.wrapper #page_contents .col_1').css("top",$(document).scrollTop());
				}

                if($(document).height() <= 1200 && $('.wrapper #page_contents .col_1').css("top") != 0){
                    $('.wrapper #page_contents .col_1').css("top",0);
                }
			}
		});
		
		// On the home page, move the video section above the Twitter section
		if($('body').hasClass('page-frontpage')){
			var videoContent = "<div class='sidebarMargin'>"+$('.view-latest-event .attachment-after .view-display-id-attachment_2').html()+"</div>";
			$('.view-latest-event .attachment-after .view-display-id-attachment_2').empty();
			$('#page_contents .region-sidebar-first #block-block-2 .content div[class=tweets-pulled-listing]').after("<br>"+videoContent);

            // On the home page, put the headers under Events and Careers items
            $('.col_2 .view-display-id-page_1 .view-display-id-attachment_1 .newsItem').each(function(){
                $('.views-field-title',$(this)).after("<div class='views-field views-field-field-publication'><div class='field-content'>Event</div></div></div>");
            });

            $('.col_2 .view-display-id-page_1 .view-display-id-attachment_3 .newsItem').each(function(){
                $('.views-field-title',$(this)).after("<div class='views-field views-field-field-publication'><div class='field-content'>Job Opening</div></div></div>");
            });

		}

        /* -- Home page: title link synchronization with 'Read More' buttons */
        if($('body').hasClass('page-frontpage')){
            $('.col_2 .view-latest-event h3.view-latest-event-title a').each(function(){
                $(this).attr('href', $(this).parent().parent().parent().find('.views-field-field-url').find('a').attr('href'));
            });
            $('.col_2 .view-latest-event .views-field-field-image a').each(function(){
                $(this).attr('href', $(this).parent().parent().parent().find('.views-field-field-url').find('a').attr('href'));
            });
        }


		/* Remove the 'button' classes from the titles on the News page and Events page */
		if($('body').hasClass('page-press') || $('body').hasClass('page-events') || $('body').hasClass('page-careers')){
			$('a[class=button]','body').not('#scrollToTop a').removeClass('button');
		}

        /* -- Archive view layout in News page / Events page starts here -- */
        if($('body').attr('class').indexOf('page-press-') != -1 || $('body').attr('class').indexOf('page-events-') != -1){
            var loc = location.href.split('/');
            $('hr','div[class=view-footer]').remove();
            var year = parseInt((loc[loc.length-1].substr(0,loc[loc.length-1].indexOf('-'))));
            var month = parseInt(loc[loc.length-1].substr(loc[loc.length-1].indexOf('-')+1));
            var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

            //$('.wrapper #page_contents .col_2 .content .view-display-id-attachment_1','body').empty();
            $('.wrapper #page_contents .col_2 .content .view-display-id-attachment_1','body').prepend("<h2>"+monthNames[month-1]+" "+year+"</h2>");

        }
        /* -- Archive view layout in News page ends here -- */

        /* -- Replace the images on Videos page with Youtube thumbnails -- */
        if($('body').hasClass('page-videos')){
            $('.item-list .views-field-field-youtube').each(function(){
                $(this).parent().find('.views-field-field-image').html($(this).html());
                $($(this),$(this).parent()).remove();
            });
        }

        /* Enable directly going into the editing mode upon double-clicking on either the title or image of an item in Press and Event pages */
        if($('body').hasClass('page-press') || $('body').hasClass('page-events') || $('body').hasClass('page-careers') || $('body').hasClass('page-videos')){
            $('.item-list .views-field-field-image').each(function(){
                $(this).prepend('<div class="editShortcutContainer"><div class="editShortcut"><img src="http://www.cfe.umich.edu/img/glyphicons_030_pencil.png"></div></div>');
            });

            //$('.views-field-field-url').filter(function(index){
            //    return ($(this).parent().find('.views-field-field-image').html() == null);
            //}).after('<div class="editShortcutContainer" style="top:81px; left:0;"><div class="editShortcut"><img src="http://www.cfe.umich.edu/img/glyphicons_030_pencil.png"></div></div>');



        }
        /* -- New Press page layout with additional items displayed -- */
        if($('body').hasClass('page-press') || $('body').hasClass('page-events') || $('body').hasClass('page-careers') || $('body').hasClass('page-videos')){
            $('.item-list .views-field-field-image').prepend('<div class="imgShadeContainer"><div class="imgShade"></div></div>')
            $('.item-list .views-field-field-url').each(function(){
                $(this).parent().find('.views-field-field-image').append("<div class='views-field-field-url'>"+$(this).html()+"</div>");
                $($(this),$(this).parent()).remove();
            });
            $('.item-list .views-field-field-published').each(function(){
                $(this).parent().find('.views-field-field-image').append("<div class='views-field-field-published'>"+$(this).html()+"</div>");
                $($(this),$(this).parent()).remove();
            });
            $('.item-list .views-field-field-publication').each(function(){
                $(this).parent().find('.views-field-field-image').append("<div class='views-field-field-publication'>"+$(this).html()+"</div>");
                $($(this),$(this).parent()).remove();
            });
            $('.item-list .views-field-field-photocredit').each(function(){
                if($('.photoCredit',$(this)).html() != null){
                    $(this).parent().find('.views-field-field-image .imgShadeContainer').append("<div class='views-field-field-photocredit'><strong>Photo credit</strong><br>"+$(this).html()+"</div>");
                }else{
                    $(this).parent().find('.views-field-field-image .imgShadeContainer').append("<div class='views-field-field-photocredit'></div>");
                }
                $($(this),$(this).parent()).remove();
            });
            $('.item-list .views-field-field-tags').each(function(){
                $(this).parent().find('.views-field-field-image .photo').after("<div class='views-field-field-tags'>"+$(this).html()+"</div>");
                $($(this),$(this).parent()).remove();
            });

            $('.item-list .views-row .editShortcut img').click(function(){
                var curLocation = location.href.split('/');
                if($('body').hasClass('page-press-tag') || $('body').hasClass('page-events-tag') || $('body').hasClass('page-careers-tag') || $('body').hasClass('page-videos-tag')){
                    location.href=$('a',$(this).parent().parent().parent().parent().find('.views-field-view-node')).attr('href')+'?origin='+curLocation[curLocation.length - 3]+'/tag/'+curLocation[curLocation.length - 1]+'#overlay=node/'+$('.views-field-nid .nodeId', $(this).parent().parent().parent().parent()).text()+'/edit';
                }else{
                    if($('.view-id-news .view-display-id-attachment_1 h2, .view-id-events .view-display-id-attachment_1 h2').html() == null){
                        if(curLocation[curLocation.length-1] != ''){
                            location.href=$('a',$(this).parent().parent().parent().parent().find('.views-field-view-node')).attr('href')+'?origin='+curLocation[curLocation.length - 1]+'#overlay=node/'+$('.views-field-nid .nodeId', $(this).parent().parent().parent().parent()).text()+'/edit';
                        }else{
                            location.href=$('a',$(this).parent().parent().parent().parent().find('.views-field-view-node')).attr('href')+'?origin='+curLocation[curLocation.length - 2]+'#overlay=node/'+$('.views-field-nid .nodeId', $(this).parent().parent().parent().parent()).text()+'/edit';
                        }

                    }else{
                        location.href=$('a',$(this).parent().parent().parent().parent().find('.views-field-view-node')).attr('href')+'?origin='+curLocation[curLocation.length - 2]+'&archive='+curLocation[curLocation.length - 1]+'#overlay=node/'+$('.views-field-nid .nodeId', $(this).parent().parent().parent().parent()).text()+'/edit';
                    }
                }


            });

            $('.views-field-field-url a, .views-field-field-image a').each(function(){
                var curLocation = location.href.split('/');

                if($('body').hasClass('page-press-tag') || $('body').hasClass('page-events-tag') || $('body').hasClass('page-careers-tag') || $('body').hasClass('page-videos-tag')){
                    $(this).attr('href', $(this).attr('href')+'?origin='+curLocation[curLocation.length - 3]+'/tag/'+curLocation[curLocation.length - 1]);

                }else{
                    if($('.view-id-news .view-display-id-attachment_1 h2, .view-id-events .view-display-id-attachment_1 h2').html() == null){
                        if(curLocation[curLocation.length-1] != ''){
                            $(this).attr('href', $(this).attr('href')+'?origin='+curLocation[curLocation.length - 1]);
                        }else{
                            $(this).attr('href', $(this).attr('href')+'?origin='+curLocation[curLocation.length - 2]);
                        }

                    }else{

                        $(this).attr('href', $(this).attr('href')+'?origin='+curLocation[curLocation.length - 2]+'&archive='+curLocation[curLocation.length - 1]);
                    }
                }


            })


            $('.item-list .views-row .views-field-field-image').mouseenter(function(){
                $('.imgShade', $(this)).hide();
                $('.views-field-field-url, .views-field-field-published, .views-field-field-publication', $(this)).stop(true,true).fadeOut(300);
            });
            $('.item-list .views-row .views-field-field-image').mouseleave(function(){
                $('.imgShade', $(this)).show();
                $('.views-field-field-url, .views-field-field-published, .views-field-field-publication', $(this)).stop(true,true).fadeIn(300);
            });

            // Tag search
            if($('body').hasClass('page-press-tag') || $('body').hasClass('page-events-tag') || $('body').hasClass('page-careers-tag') || $('body').hasClass('page-videos-tag')){
                $('.tagItem .item-list li').css('cursor','pointer').click(function(){
                    location.href = "./"+$(this).text();
                });
            }else if($('body').hasClass('page-press')){
                $('.tagItem .item-list li').css('cursor','pointer').click(function(){
                    var curLocation = location.href.split('/');
                    if(curLocation[curLocation.length-1] == ''){
                        location.href = "tag/"+$(this).text();
                    }else{
                        location.href="press/tag/"+$(this).text();
                    }

                });
            }else if($('body').hasClass('page-events')){
                $('.tagItem .item-list li').css('cursor','pointer').click(function(){
                    var curLocation = location.href.split('/');
                    if(curLocation[curLocation.length-1] == ''){
                        location.href = "tag/"+$(this).text();
                    }else{
                        location.href="events/tag/"+$(this).text();
                    }

                });
            }else if($('body').hasClass('page-careers')){
                $('.tagItem .item-list li').css('cursor','pointer').click(function(){
                    var curLocation = location.href.split('/');
                    if(curLocation[curLocation.length-1] == ''){
                        location.href = "tag/"+$(this).text();
                    }else{
                        location.href="careers/tag/"+$(this).text();
                    }

                });
            }else if($('body').hasClass('page-videos')){
                $('.tagItem .item-list li').css('cursor','pointer').click(function(){
                    var curLocation = location.href.split('/');
                    if(curLocation[curLocation.length-1] == ''){
                        location.href = "tag/"+$(this).text();
                    }else{
                        location.href="videos/tag/"+$(this).text();
                    }

                });
            }


        }

        /* Match the links of the thumbnail images on News, Eventsm, Careers and Videos pages with those of the titles */
        if($('body').hasClass('page-press') || $('body').hasClass('page-events') || $('body').hasClass('page-careers') || $('body').hasClass('page-videos')){
            $('.views-field-field-image .photo a').each(function(){
                $(this).attr('href', $(this).parent().parent().find('.views-field-field-url a').attr('href'));
            });
            $('.item-list .views-field-field-url, .item-list .views-field-field-publication, .item-list .views-field-field-published').css('cursor','pointer').click(function(){
                location.href = $(this).parent().find('.views-field-field-url').find('a').attr('href');
            });
            $('.item-list .views-field-field-photocredit').css('cursor','pointer').click(function(){
                location.href = $(this).parent().parent().find('.views-field-field-url').find('a').attr('href');
            });
            $('.views-field-field-image .photo img').css('cursor','pointer').click(function(){
                location.href=$(this).parent().parent().parent().find('.views-field-field-url a').attr('href');
            });
        }

        /* -- Back-end stuff for Back Navigation in People pages -- */
        if($('body').hasClass('page-staff') || $('body').hasClass('page-interns') || $('body').hasClass('page-board') || $('body').hasClass('page-faculty-affiliates') || $('body').hasClass('page-ehour') || $('body').hasClass('page-ehour-archive') || $('body').hasClass('page-classes')){
            var curLocation = location.href.split('/');
            $('.views-field-field-image a, .views-field-title a').not('.scrollToTarget').each(function(){
                if(curLocation[curLocation.length-1] != ''){
                    $(this).attr('href', $(this).attr('href')+'?origin='+curLocation[curLocation.length -1]);
                }else{
                    $(this).attr('href', $(this).attr('href')+'?origin='+curLocation[curLocation.length -2]);
                }

            });
        }

        /* -- Back button on tag-search results page -- */
        if($('body').hasClass('page-press-tag')){
            $('h2[id=page-title]').after('&nbsp;&nbsp;<a class="backBtn3" href="../../press">Back to List</a>');
        }else if($('body').hasClass('page-events-tag')){
            $('h2[id=page-title]').after('&nbsp;&nbsp;<a class="backBtn3" href="../../events">Back to List</a>');
        }else if($('body').hasClass('page-careers-tag')){
            $('h2[id=page-title]').after('&nbsp;&nbsp;<a class="backBtn3" href="../../careers">Back to List</a>');
        }else if($('body').hasClass('page-videos-tag')){
            $('h2[id=page-title]').after('&nbsp;&nbsp;<a class="backBtn3" href="../../videos">Back to List</a>');
        }

		/* -- Article(External) view styling starts here -- */
		if($('body').hasClass('node-type-article-external-')){
			// Make a little bit of space between the published date and the link button
			$('.wrapper #page_contents .col_2 .field-name-field-url .field-items .field-item').css('margin-top', '25px');
		}
		/* -- Article(External) view styling ends here -- */
		
		/* -- Reordering of the list items on Competitions and Conferences page + header styling-- */
		if($('body').hasClass('page-competitions-conferences')){
			var divInternational = $('.item-list:eq(0)').html();
			var divStateOfMI = $('.item-list:eq(1)').html();
			var divUofM = $('.item-list:eq(2)').html();
			var divNational = $('.item-list:eq(3)').html();
			$('.item-list:eq(0)').html(divUofM);
			$('.item-list:eq(1)').html(divStateOfMI);
			$('.item-list:eq(2)').html(divNational);
			$('.item-list:eq(3)').html(divInternational);
			
			$('.item-list h3').replaceWith(function(){
				return "<h2>"+$(this).text()+"</h2>";
			});
		}
		
		/* -- Reordering of the list items on Resources page + header styling -- */
		if($('body').hasClass('page-resources')){
			$('.item-list h3').replaceWith(function(){
				return "<h2>"+$(this).text()+"</h2>";
			});
		}
		
		/* -- Reordering of the list items on Researchers Grants page + header styling -- */
		if($('body').hasClass('page-researcher-grant')){
			var divNational = $('.item-list:eq(0)').html();
			var divUofM = $('.item-list:eq(1)').html();
			var divInternational = $('.item-list:eq(2)').html();
			var divStateOfMI = $('.item-list:eq(3)').html();
			$('.item-list:eq(0)').html(divUofM);
			$('.item-list:eq(1)').html(divStateOfMI);
			$('.item-list:eq(2)').html(divNational);
			$('.item-list:eq(3)').html(divInternational);
			
			$('.item-list h3').replaceWith(function(){
				return "<h2>"+$(this).text()+"</h2>";
			});
		}
		
		/* -- Reordering of the list items on Funding page + header styling -- */
		if($('body').hasClass('page-funding')){
			var divStateOfMI = $('.item-list:eq(0)').html();
			var divUofM = $('.item-list:eq(1)').html();
			var divNational = $('.item-list:eq(2)').html();
			$('.item-list:eq(0)').html(divUofM);
			$('.item-list:eq(1)').html(divStateOfMI);
			
			$('.item-list h3').replaceWith(function(){
				return "<h2>"+$(this).text()+"</h2>";
			});
		}
		
		/* -- Header styling on Grants page -- */
		if($('body').hasClass('page-grants')){
			$('.item-list h3').replaceWith(function(){
				return "<h2>"+$(this).text()+"</h2>";
			});
		}
		
		/* -- Move the images on Student Groups page to the right and adjust the height of each div layer */
		if($('body').hasClass('page-student-groups')){
			$('.views-field-body').css('height', function(i){
				var curHeight = parseInt($(this).css('height').substr(0, $(this).css('height').length - 2));
				
				if($('img', $(this).parent()).height() != null){
					var imgHeight = $('img',$(this).parent()).height();
				}else{
					var imgHeight = curHeight;
				}
				
				if(curHeight < imgHeight){
					return imgHeight+'px';
				}else{
					return curHeight+30+'px';
				}
			});
		}
		
		
	/* -- Landing page layout starts here -- */
	if($('body').hasClass('page-node-') && $('body').hasClass('node-type-page') && ($('body').hasClass('page-node-40') || $('body').hasClass('page-node-236') || $('body').hasClass('page-node-325') || $('body').hasClass('page-node-29') || $('body').hasClass('page-node-237') || $('body').hasClass('page-node-47') || $('body').hasClass('page-node-62') || $('body').hasClass('page-node-238'))){
		var col2 = $('#page_contents .col_2');
		if($('body').hasClass('page-node-236')){
			// About page
			$('.wallTitle').text($('h2[class=title]',col2).text()).css('left', '830px');
		}else if($('body').hasClass('page-node-325')){
			// News page
			$('.wallTitle').text($('h2[class=title]',col2).text()).css('left', '840px');
		}else if($('body').hasClass('page-node-29')){
			// Learn page
			$('.wallTitle').text($('h2[class=title]',col2).text()).css('left', '840px');
		}else if($('body').hasClass('page-node-40')){
			// Participate page
			$('.wallTitle').text($('h2[class=title]',col2).text()).css('left', '735px');
		}else if($('body').hasClass('page-node-237')){
			// Launch page
			$('.wallTitle').text($('h2[class=title]',col2).text()).css('left', '812px');
		}else if($('body').hasClass('page-node-47')){
			// Educate page
			$('.wallTitle').text($('h2[class=title]',col2).text()).css('left', '792px');
		}else if($('body').hasClass('page-node-62')){
			// Innovate page
			$('.wallTitle').text($('h2[class=title]',col2).text()).css('left', '777px');
		}else if($('body').hasClass('page-node-238')){
			// Engage page
			$('.wallTitle').text($('h2[class=title]',col2).text()).css('left', '810px');
		}
		
		$('h2[class=title]',col2).hide();
		var bg = $('.field-type-image img',col2).attr('src');
		$('.landingPageWall').attr('style','background-image:'+'url('+bg+'); background-size: cover; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='+bg+', sizingMethod="scale"); background-position: center;');
		//var timerTest;
		//$('.landingPageWall').mousemove(function(e){
		//	var originY, offset;
		//	$(this).mousedown(function(e){
		//		originY = e.pageY;
		//		timerTest = setTimeout(function(){
		//			$('.landingPageWall').css('background-position', '0% ' + e.pageY + '%');
		//		}, 100);
		//	});
		//	
		//	$(this).mouseup(function(e){
		//		var offset = e.pageY - originY;
		//		var proportion = offset / $('.landingPageWall').height() * 100;
		//		//$('.landingPageWall').css('background-position','0% '+ proportion +'%');
		//		clearTimeout(timerTest);
		//	});
		//});
		$('.field-type-image',col2).hide();
	}

	/* -- Landing page layout ends here -- */
	
	/* -- Partners page UL/LI styling -- */
	if($('body').hasClass('page-partners')){
		$('.item-list ul').css('margin-left','10px');
		$('.item-list li').css({'font-weight':'normal','cursor':'pointer','margin':'0','list-style':'none','display':'inline-block','width':'96%','margin-bottom':'5px','padding-top':'5px','background-color':'#f3f3f3','padding-left':'10px','padding-right':'10px','padding-bottom':'7px'});
		$('.item-list li').click(function(){
			location.href = $('a',$(this)).attr('href');
		});
		$('.item-list li').hover(function(){
			$(this).css('background-color','#ffcb05');
		},function(){
			$(this).css('background-color','#f3f3f3');
		});
		$('.item-list li').before('<li style="margin: 0; list-style: none; height: 20px; margin-bottom: 5px; padding-top: 5px; padding-left: 0px; padding-right: 0px; padding-bottom: 5px;display:inline-block; width: 3px; background-color: #00274c;">&nbsp;</li>');
	}

	/* -- Competitions and Conferences page UL/LI styling -- */
	if($('body').hasClass('page-competitions-conferences')){
		$('.item-list ul').css('margin-left','10px');
		$('.item-list li').css({'font-weight':'normal','cursor':'pointer','margin':'0','list-style':'none','display':'inline-block','width':'96%','margin-bottom':'5px','padding-top':'5px','background-color':'#f3f3f3','padding-left':'10px','padding-right':'10px','padding-bottom':'7px'});
		$('.item-list li').click(function(){
			location.href = $('a',$(this)).attr('href');
		});
		$('.item-list li').hover(function(){
			$(this).css('background-color','#ffcb05');
		},function(){
			$(this).css('background-color','#f3f3f3');
		});
		$('.item-list li').before('<li style="margin: 0; list-style: none; height: 20px; margin-bottom: 5px; padding-top: 5px; padding-left: 0px; padding-right: 0px; padding-bottom: 5px;display:inline-block; width: 3px; background-color: #00274c;">&nbsp;</li>');
		
	}
	
	/* -- Resources, Grants and Researcher Grants pages UL/LI styling -- */
	if($('body').hasClass('page-resources') || $('body').hasClass('page-researcher-grant') || $('body').hasClass('page-grants')){
		$('.item-list ul').css('margin-left','10px');
		$('.item-list li').css({'font-weight':'normal','cursor':'pointer','margin':'0','list-style':'none','display':'inline-block','width':'96%','margin-bottom':'5px','padding-top':'5px','background-color':'#f3f3f3','padding-left':'10px','padding-right':'10px','padding-bottom':'7px'});
		$('.item-list li').click(function(){
			location.href = $('a',$(this)).attr('href');
		});
		$('.item-list li').hover(function(){
			$(this).css('background-color','#ffcb05');
		},function(){
			$(this).css('background-color','#f3f3f3');
		});
		$('.item-list li span.views-field-field-region').css({'float':'right','font-weight':'100','font-style':'italic','font-size':'14px','color':'#666666'});
		$('.item-list li').before('<li style="margin: 0; list-style: none; height: 20px; margin-bottom: 5px; padding-top: 5px; padding-left: 0px; padding-right: 0px; padding-bottom: 5px;display:inline-block; width: 3px; background-color: #00274c;">&nbsp;</li>');
		
	}

     /* -- Classes page UL/LI styling -- */
     if($('body').hasClass('page-classes')){
         $('.item-list li.views-row').each(function(){
             $('div.views-field-title',$(this)).after("<div class='editBtnContainer' style='display:none'><span class='editBtn'>Edit</span></div>")
             $('.views-label',$(this)).css('font-weight','bold');

             var appendDetails = "<div class='details' style='display:none;'>"+$('div.views-field-field-credit',$(this)).html()+$('div.views-field-field-grade',$(this)).html();
             if($('div.views-field-field-semester', $(this)).html() != null){
                 appendDetails += $('div.views-field-field-semester', $(this)).html();
             }
             if($('div.views-field-field-prereq', $(this)).html() != null){
                 appendDetails += $('div.views-field-field-prereq', $(this)).html();
             }
             if($('div.views-field-field-prof', $(this)).html() != null){
                 $('div.views-field-field-prof a', $(this)).addClass('bottomDashed');
                 appendDetails += $('div.views-field-field-prof', $(this)).html();
             }
             if($('div.views-fielf-field-syllabus', $(this)).html() != null){
                 appendDetails += $('div.views-field-field-syllabus', $(this)).html();
             }
             appendDetails += $('div.views-field-body').html();
             appendDetails += "</div>";

             $(this).after(appendDetails);


             $(this).next('div').prepend($('.views-field-field-image',$(this)).html());
             if($('.floatRight img', $(this).next('div')).html() != null){

             }else{
                 //$('.floatRight',$(this).next('div')).remove();
             }
             $('div.views-field-field-image',$(this)).remove();
             $('div.views-field-body',$(this)).remove();
             $('div.views-field-field-grade, .views-field-field-semester, .views-field-field-credit, .views-field-field-prereq, .views-field-field-prof, .views-field-field-syllabus',$(this)).remove();

         });

         $('.editBtn').each(function(){
             var articleURL = $(this).parent().parent().find('.views-field-title').find('a').attr('href');
             $(this).attr('data-link',articleURL);
             $(this).click(function(){
                 location.href=$(this).attr('data-link')+'#overlay=node/'+$(this).parent().parent().find('.views-field-nid .nodeId').text()+'/edit';
             });
             $(this).parent().parent().find('.views-field-title').find('a').css('font-weight','normal').removeAttr('href');
         });


         $('.item-list ul').not('.courseDetail ul').css('margin-left','10px');
         $('.item-list li').not('.courseDetail li').css({'font-weight':'normal','cursor':'pointer','margin':'0','list-style':'none','display':'inline-block','width':'96%','margin-bottom':'5px','padding-top':'5px','background-color':'#f3f3f3','padding-left':'10px','padding-right':'10px','padding-bottom':'7px'});
         $('.item-list li').not('.courseDetail li').click(function(){

             //location.href = $('a',$(this)).attr('href');
             var contentContainer = $(this).next('div');
             if($(contentContainer).css('display') == 'none'){
                 $(contentContainer).slideDown('fast');
             }else{
                 if($('.col_2',$('body')).height()<1315){
                     $('.wrapper #page_contents .col_1').css("top",0);
                 }
                 $(contentContainer).slideUp('fast');
             }

         });

         $('.item-list li').not('.courseDetail li').hover(function(){
             $(this).css('background-color','#ffcb05');
         },function(){
             $(this).css('background-color','#f3f3f3');
         });
         $('.item-list li span.views-field-field-region').not('.courseDetail li span.views-field-field-region').css({'float':'right','font-weight':'100','font-style':'italic','font-size':'14px','color':'#666666'});
         $('.item-list li').not('.courseDetail li').before('<li style="margin: 0; list-style: none; height: 20px; margin-bottom: 5px; padding-top: 5px; padding-left: 0px; padding-right: 0px; padding-bottom: 5px;display:inline-block; width: 3px; background-color: #00274c;">&nbsp;</li>');


     }
        /* -- Student Groups pages UL/LI styling -- */
        if($('body').hasClass('page-student-groups')){

            $('.item-list li.views-row').each(function(){
                $(this).after($('div.views-field-body',$(this)).html());
                $(this).next('div').prepend($('.views-field-field-image',$(this)).html());
                if($('.floatRight img', $(this).next('div')).html() != null){

                }else{
                    //$('.floatRight',$(this).next('div')).remove();
                }
                $('div.views-field-field-image',$(this)).remove();
                $('div.views-field-body',$(this)).remove();

            });

            $('.item-list ul').css('margin-left','10px');
            $('.item-list li').css({'font-weight':'normal','cursor':'pointer','margin':'0','list-style':'none','display':'inline-block','width':'96%','margin-bottom':'5px','padding-top':'5px','background-color':'#f3f3f3','padding-left':'10px','padding-right':'10px','padding-bottom':'7px'});
            $('.item-list li').click(function(){

                //location.href = $('a',$(this)).attr('href');
                var contentContainer = $(this).next('div');
                if($(contentContainer).css('display') == 'none'){
                    $(contentContainer).slideDown('fast');
                }else{
                    if($('.col_2',$('body')).height()<1315){
                        $('.wrapper #page_contents .col_1').css("top",0);
                    }
                    $(contentContainer).slideUp('fast');
                }

            });

            $('.item-list li').hover(function(){
                $(this).css('background-color','#ffcb05');
            },function(){
                $(this).css('background-color','#f3f3f3');
            });
            $('.item-list li span.views-field-field-region').css({'float':'right','font-weight':'100','font-style':'italic','font-size':'14px','color':'#666666'});
            $('.item-list li').before('<li style="margin: 0; list-style: none; height: 20px; margin-bottom: 5px; padding-top: 5px; padding-left: 0px; padding-right: 0px; padding-bottom: 5px;display:inline-block; width: 3px; background-color: #00274c;">&nbsp;</li>');

        }

        /* -- Blog page UL/LI styling -- */
        if($('body').hasClass('page-blog') && $('body').attr('class').indexOf('page-blog-') < 0){
            $('.item-list ul').css('margin-left','10px');
            $('.item-list li').css({'font-weight':'normal','cursor':'pointer','margin':'0','list-style':'none','display':'inline-block','width':'96%','margin-bottom':'5px','padding-top':'5px','background-color':'#f3f3f3','padding-left':'10px','padding-right':'10px','padding-bottom':'7px'});
            $('.item-list li').click(function(){
                location.href = $('a',$(this)).attr('href');
            });
            $('.item-list li').hover(function(){
                $(this).css('background-color','#ffcb05');
            },function(){
                $(this).css('background-color','#f3f3f3');
            });
            $('.item-list li span.views-field-field-region').css({'float':'right','font-weight':'100','font-style':'italic','font-size':'14px','color':'#666666'});
            $('.item-list li').before('<li style="margin: 0; list-style: none; height: 20px; margin-bottom: 5px; padding-top: 5px; padding-left: 0px; padding-right: 0px; padding-bottom: 5px;display:inline-block; width: 3px; background-color: #00274c;">&nbsp;</li>');

        }

	    /* -- Teaching Resources page UL/LI styling -- */
        if($('body').hasClass('page-node-48')){
            var scope = $('#page_contents .col_2 #node-48 .content');
            $('ul',scope).css({'margin-left':'10px','padding':'0'});
            $('li',scope).not('.ext').css({'font-weight':'normal','cursor':'pointer','margin':'0','list-style':'none','display':'inline-block','width':'96%','margin-bottom':'5px','padding-top':'5px','background-color':'#f3f3f3','padding-left':'10px','padding-right':'10px','padding-bottom':'7px'});
            $('li',scope).not('.ext').before('<li style="margin: 0; list-style: none; height: 20px; margin-bottom: 5px; padding-top: 5px; padding-left: 0px; padding-right: 0px; padding-bottom: 5px; display:inline-block; width: 3px; background-color: #00274c;">&nbsp;</li>');

            $('li',scope).click(function(){
                location.href = $('a',$(this)).attr('href');
            });
            $('li',scope).hover(function(){
                $(this).css('background-color','#ffcb05');
            },function(){
                $(this).css('background-color','#f3f3f3');
            });

            $('li.ext',scope).css({'font-weight':'normal','cursor':'pointer','margin':'0','list-style':'none','text-indent':'30px','display':'inline-block','width':'96%','margin-bottom':'5px','padding-top':'5px','background-color':'#f3f3f3','padding-left':'10px','padding-right':'10px','padding-bottom':'7px'});
            $('li.ext',scope).before('<li style="margin: 0; list-style: none; margin-left:0px; height: 20px; margin-bottom: 5px; padding-top: 5px; padding-left: 0px; padding-right: 0px; padding-bottom: 5px; display:inline-block; width: 3px; background-color: #00274c;">&nbsp;</li>');
        }

        /* -- Blog sub-header conditional statement -- */
        if($('body').hasClass('page-blog') && $('body').attr('class').indexOf('page-blog-') < 0){
            $('.col_2 .content .view-header h2').text('Posts by');
        }

        /* -- Back button for multi-layered pages -- */
        if($('body').hasClass('node-type-article') || $('body').hasClass('node-type-article-external-')){
            var originURL = getParameterByName('origin');
            $('h2[id=page-title]').after('&nbsp;&nbsp;<a class="backBtn">Back to List</a>');

            var referrer = document.referrer;
            if(referrer.indexOf('press') != -1 || referrer.indexOf('careers') != -1 || referrer.indexOf('events') != -1 || referrer.indexOf('videos') != -1){
                if(document.referrer.indexOf('#') == -1){
                    var str = document.referrer.split('/');


                    if(getParameterByName('origin') != null){
                        if(getParameterByName('archive') != null){
                            $('.backBtn').attr('href', root + getParameterByName('origin') + '/' + getParameterByName('archive'));
                        }else{
                            $('.backBtn').attr('href', root + getParameterByName('origin'));
                        }

                    }else{
                        var checker = document.referrer.split('/');

                        if(checker[checker.length - 1].indexOf('?origin')!= -1){
                            var str = document.referrer.split('/');
                            var idxOfOrigin = str[str.length-1].indexOf('?origin=');
                            var idxOfArchive = str[str.length-1].indexOf('&archive=');

                            if(idxOfArchive != -1){
                                $('.backBtn').attr('href', root + str[str.length-1].substr(idxOfOrigin+8, idxOfArchive - idxOfOrigin - 8) + '/' + str[str.length-1].substr(idxOfArchive+9));

                            }else{
                                $('.backBtn').attr('href', root + str[str.length-1].substr(idxOfOrigin+8));
                            }
                        }else{
                            var str = document.referrer.split('/');
                            //var idxOfOrigin = checker[checker.length - 3].indexOf('?');
                            //var searchTerm = checker[checker.length-3].substr(0, idxOfOrigin);
                            //alert(checker[checker.length - 3]);

                            var pathRevertTo = str[str.length-3].indexOf('origin=');
                            $('.backBtn').attr('href', root + str[str.length-3].substr(pathRevertTo+7)+'/tag/'+str[str.length-1]);
                        }

                    }

                    //$('.backBtn').attr('href', root + document.referrer);
                }
            }else{
                $('.backBtn').attr('href', document.referrer);
            }


            /*
            else{ // when an article has been edited
                var str = document.referrer.split('/');
                var idx_originStr = str[str.length - 1].indexOf('origin=');
                var idx_archiveStr = str[str.length - 1].indexOf('archive=');

                if(idx_archiveStr == -1){
                    alert(str[str.length-1].substr(idx_originStr+7));
                }else{

                }
            }
            */
        }else if($('body').hasClass('node-type-person') || $('body').hasClass('node-type-courses') || $('body').hasClass('node-type-entr407-recordings')){
            $('h2[id=page-title]').after('&nbsp;&nbsp;<a class="backBtn">Back to List</a>');
            $('.backBtn', $(this)).click(function(){
                if(document.referrer.indexOf('?origin=') != -1){
                    location.href = '/'+document.referrer.substr(document.referrer.indexOf('?origin=')+8);
                }else{
                    location.href = document.referrer;
                }
            });
        }

        /* -- Back button for pages that have an archive section -- */
        if($('body').attr('class').indexOf('page-press-') || $('body').attr('class').indexOf('page-events-')){
            var curLocation = location.href.split('/');
            $('.view-id-news .view-display-id-attachment_1 h2, .view-id-events .view-display-id-attachment_1 h2').after('&nbsp;&nbsp;<a class="backBtn2">Back to List</a>');
            $('.backBtn2').attr('href', root + curLocation[curLocation.length - 2]);
        }

        /* -- slideshow administrative panel -- */
        if($('body').hasClass('page-frontpage')){
            $('#ssAdmin').click(function(){
                var popupAdmin = window.open ("sshowadmin.php", "popup", "width=1200, height=600");
            });
        }
	
	}); // ready


	
}(jQuery));
