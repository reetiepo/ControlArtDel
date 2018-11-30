/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
2. Init Menu
3. Init Parallax
4. Init Flickr
5. Init Gallery


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var ctrl = new ScrollMagic.Controller();
	var header = $('.header');
	var menuActive = false;
	var hamb = $('.hamburger_container');
	var menu = $('.fs_menu_container');
	var hambIcon = $('.hamburger_icon');

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initMenu();
	initParallax();
	initFlickr();
	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if(window.innerWidth < 992)
		{
			if($(window).scrollTop() > 100)
			{
				header.css({'height':"80"});
			}
			else
			{
				header.css({'height':"110"});
			}
		}
		else
		{
			if($(window).scrollTop() > 100)
			{
				header.css({'height':"80"});
			}
			else
			{
				header.css({'height':"110"});
			}
		}
		if(window.innerWidth > 991 && menuActive)
		{
			closeMenu();
		}
	}

	/* 

	2. Init Menu

	*/

	function initMenu()
	{
		if($('.hamburger_container').length)
		{
			hamb.on('click', function()
			{
				if(!menuActive)
				{
					openMenu();
				}
				else
				{
					closeMenu();
				}
			});
		}
	}

	function openMenu()
	{
		menu.addClass('active');
		setTimeout(function()
		{
			hambIcon.addClass('active');
		},500);
		menuActive = true;
	}

	function closeMenu()
	{
		menu.removeClass('active');
		setTimeout(function()
		{
			hambIcon.removeClass('active');
		},500);
		menuActive = false;
	}

	/* 

	3. Init Parallax

	*/

	function initParallax()
	{
		if($('.prlx_parent').length && $('.prlx').length)
		{
			var elements = $('.prlx_parent');

			elements.each(function()
			{
				var ele = this;
				var bcg = $(ele).find('.prlx');

				var slideParallaxScene = new ScrollMagic.Scene({
			        triggerElement: ele,
			        triggerHook: 1,
			        duration: "200%"
			    })
			    .setTween(TweenMax.from(bcg, 1, {y: '-30%', ease:Power0.easeNone}))
			    .addTo(ctrl);
			});
		}
	}

	/* 

	4. Init Flickr

	*/

	function initFlickr() {
		getAlbunsList(function(data) {
			var data = data.photosets.photoset;
			var html = '';
			$.each(data, function(i, item) {
				html += '<div class="elements_accordions">' +
					'<div class="accordion_container">' +
						'<div class="accordion d-flex flex-row align-items-center">' + data[i].title._content + '</div>' +
						'<div class="accordion_panel">' +
							'<div class="sidebar_flickr">' +
								'<div class="flickr_gallery" data-toggle="jsfg" data-per-page="20" data-set-id="' + data[i].id + '"></div>' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>';
			});
			$('#section_galleries').html(html);
			console.log(data);
			console.log(html);
			
			var script = document.createElement('script');
			script.src = 'plugins/js-flickr-gallery-1.24/js-flickr-gallery.js';
			document.getElementsByTagName('head')[0].appendChild(script);
			
			if($('.flickr_gallery').length) {
				setTimeout(function() {
					$('.colorbox').colorbox();	
				},1000);
			}

			initAccordions();
			$('.accordion')[0].click();
		});
	} 

	function getAlbunsList(callback) {
        var settings = {
			"async": true,
			"crossDomain": true,
			"url": "https://api.flickr.com/services/rest/?method=flickr.photosets.getList&api_key=ff88e61b776f726e4cb4116482a242ab&user_id=114081595%40N06&format=json&nojsoncallback=1",
			"method": "GET",
			"headers": {}
		}

		$.ajax(settings).done(callback);
    }

	/* 

	6. Init Accordions

	*/

	function initAccordions()
	{
		if($('.accordion').length)
		{
			var accs = $('.accordion');

			accs.each(function()
			{
				var acc = $(this);

				acc.on('click', function()
				{
					acc.toggleClass('active');
					
					var panel = $(acc.next());
					var panelH = panel.prop('scrollHeight') + "px";
					
					if(panel.css('max-height') == "0px")
					{
						//panel.css('max-height', panel.prop('scrollHeight') + "px");
						panel.css('max-height', "100%");
					}
					else
					{
						panel.css('max-height', "0px");
						
					} 
				});
			});
		}
	}

});