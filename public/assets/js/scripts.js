jQuery(document).ready(function() {

	jQuery('.main-menu .sub').on('click', function(event) {
		event.preventDefault();

		if (jQuery(event.target).attr('class') == 'sub') {
			event.stopPropagation();
		}

		if (jQuery(this).closest('li').find('ul.dropdown').is(':visible')) {
			jQuery(this).closest('li').find('ul.dropdown').slideUp();
		} else {
			jQuery(this).closest('li').find('ul.dropdown').slideDown();
		}
	});

	jQuery('body').on('click', function(event) {
		if (jQuery(event.target).attr('class') != 'sub-item') {
			if (jQuery('.main-menu ul.dropdown').is(':visible')) {
				jQuery('.main-menu ul.dropdown').slideUp();
			}
		}
	});

	/* MAIN SLIDER */

	jQuery('#topSlider .owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    items: 1,
	    navText: ['<span class="icon icon-arrow-left3"></span>','<span class="icon icon-arrow-right3"></span>']
	});

	/* PORTFOLIO SLIDER */
	jQuery('#portfolioSlider .owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    dots: false,
	    responsive:{
	        0:{
	            items:1
	        },

	        550:{
	        	items:2
	        },
	        767: {
	        	items: 4
	        }
	    },
	    navText: ['<span class="icon icon-arrow-left3"></span>','<span class="icon icon-arrow-right3"></span>']
	});

	/* BURGER MENU ICON */
	jQuery('.main-menu .burger-icon').on('click', function() {

		if (jQuery('#responsive-menu').is(':visible')) {
			jQuery('#responsive-menu').slideUp();
		} else {
			jQuery('#responsive-menu').slideDown();
		}
	});
	/* END BURGER MENU */

	jQuery('section.search button').on('click', function(event) {
		event.preventDefault();

		jQuery('section.search .message').text('').hide();

		let zip = jQuery('#searchZipInput').val();
		let reg = /^[0-9]+$/;

		if (!reg.test(zip)) {
			jQuery('section.search .message').text('Please enter valid ZIP Code').fadeIn();
			return false;
		}
		
		jQuery.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
			url: '/search-offices',
			type: 'POST',
			dataType: 'JSON',
			data: {
				zip: zip
			},
			success: function(response) {

				if (response.data.status == 0) {
					jQuery('section.search .message').text('Please enter valid ZIP Code').fadeIn();
				} else if (response.data.status == 1) {
					jQuery('section.search .message').text('Search result is empty').fadeIn();
				} else if (response.data.status == 2) {

					
					jQuery('#searchResult  .main-title').text('Region : '+response.data.region.title+' [ '+response.data.region.state+' ] - offices search result');
					searchMapInit(response.data.region, response.data.offices);
					jQuery.fancybox.open({
						src: '#searchResult'
					});
				}
			},
			error: function(response) {
				jQuery('section.search .message').fadeIn();
			},

		});
	});

	/* INIT GOOGLE MAP */
	function searchMapInit(region, offices)
	{
	    var map = new google.maps.Map(document.getElementById('google_map_search'),
	          {
	            center: new google.maps.LatLng(offices[0]['coord_1'], offices[0]['coord_2']),
	            zoom: 8,
	            mapTypeId: google.maps.MapTypeId.ROADMAP,
	    });

	    jQuery(offices).each(function(i, el) {
	    	var marker = new google.maps.Marker({
				position: new google.maps.LatLng(el.coord_1, el.coord_2),
				map: map,
				title: el.title 
			});

			let html = '<div class="item">' +
				'<div class="title">'+
					(i+1)+') '+el.title+
				'</div>' +
				'<div class="icon icon-location2"></div>'+
				'<div class="description">' +
					'<div class="state">' +
						el.state+
					'</div>' +
					'<div class="city">' +
						el.city+
					'</div>' +
					'<div class="zip">' +
						el.zip+
					'</div>'+
				'</div>' +
			'</div>';

			jQuery('#searchResult .offices-wrapper').append(html);
	    });
	}
});