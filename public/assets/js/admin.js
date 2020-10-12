jQuery(document).ready(function() {

	jQuery('#upload-regions-button').on('click', function() {
		jQuery('#regions-input-file').click();
	});
	jQuery('#regions-input-file').on('change', function() {
		uploadRegions(this);
	});

	jQuery('#upload-offices-button').on('click', function() {
		jQuery('#offices-input-file').click();
	});
	jQuery('#offices-input-file').on('change', function() {
		uploadOffices(this);
	});

	jQuery.fancyConfirm = function( opts ) {
		opts  = $.extend( true, {
			title     : 'Are you sure?',
			message   : '',
			okButton  : 'OK',
			noButton  : 'Cancel',
			callback  : $.noop
		}, opts || {} );

		jQuery.fancybox.open({
			type : 'html',
			src  :
			'<div class="fc-content">' +
			'<h3>' + opts.title   + '</h3>' +
			'<p>'  + opts.message + '</p>' +
			'<p class="tright">' +
			'<a data-value="0" data-fancybox-close>' + opts.noButton + '</a>' +
			'<a data-value="1" data-fancybox-close>' + opts.okButton + '</a>' +
			'</p>' +
			'</div>',
			opts : {
				animationDuration : 350,
				animationEffect   : 'material',
				modal : true,
				baseTpl :
				'<div class="fancybox-container fc-container" role="dialog" tabindex="-1">' +
				'<div class="fancybox-bg"></div>' +
				'<div class="fancybox-inner">' +
				'<div class="fancybox-stage"></div>' +
				'</div>' +
				'</div>',
				afterClose : function( instance, current, e ) {
					var button = e ? e.target || e.currentTarget : null;
					var value  = button ? $(button).data('value') : 0;

					opts.callback( value );
				}
			}
		});
	};

	jQuery("#clear-database-button").click(function() {

  		jQuery.fancyConfirm({
  			title     : "Clear Database ?",
  			message   : "This operation is irreversible and will delete all records from the tables of regions and offices.",
  			okButton  : 'Confirm',
  			noButton  : 'Cancel',
  			callback  : function (value) {
  				if (value) {
  					clearDB();
  				}
  			}
  		});
  	});

	
	function uploadRegions(input)
	{
		let ext = jQuery(input).val().split('.').pop().toLowerCase();
		if (ext !== 'csv') {
			jQuery('#messages .error').text('It is allowed to upload only csv files').fadeIn();
			setTimeout(function() {
				jQuery('#messages .wrapper').fadeOut();
			}, 4000);
			return false;
		}

		let formData = new FormData();
		formData.append('file', jQuery(input)[0].files[0]);

		jQuery.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
			url: '/upload-regions',
			type: 'POST',
			cache : false,
            contentType : false,
            processData : false,
			dataType: 'JSON',
			data: formData,
			beforeSend: function() {
				jQuery(input).closest('.item').find('button .icon-spinner').show();
			},
			success: function(response) {
				if (response.data.status == 1) {
					jQuery('#messages .success').text(response.data.message).fadeIn();
				} else {
					jQuery('#messages .error').text(response.data.message).fadeIn();
				}
			},
			error: function(response) {
				jQuery('#messages .error').text('Error Import Data').fadeIn();
			},
			complete: function() {
				jQuery(input).closest('.item').find('button .icon-spinner').hide();

				setTimeout(function() {
					jQuery('#messages .wrapper').fadeOut();
				}, 3000);
			}
		});
	}

	function uploadOffices(input)
	{
		let ext = jQuery(input).val().split('.').pop().toLowerCase();
		if (ext !== 'csv') {
			jQuery('#messages .error').text('It is allowed to upload only csv files').fadeIn();
			setTimeout(function() {
				jQuery('#messages .wrapper').fadeOut();
			}, 4000);
			return false;
		}

		let formData = new FormData();
		formData.append('file', jQuery(input)[0].files[0]);

		jQuery.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
			url: '/upload-offices',
			type: 'POST',
			cache : false,
            contentType : false,
            processData : false,
			dataType: 'JSON',
			data: formData,
			beforeSend: function() {
				jQuery(input).closest('.item').find('button .icon-spinner').show();
			},
			success: function(response) {
				if (response.data.status == 1) {
					jQuery('#messages .success').text(response.data.message).fadeIn();
				} else {
					jQuery('#messages .error').text(response.data.message).fadeIn();
				}
			},
			error: function(response) {
				jQuery('#messages .error').text('Error Import Data').fadeIn();
			},
			complete: function() {
				jQuery(input).closest('.item').find('button .icon-spinner').hide();

				setTimeout(function() {
					jQuery('#messages .wrapper').fadeOut();
				}, 3000);
			}
		});
	}

	function clearDB()
	{
		jQuery.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
			url: '/clear-db',
			type: 'POST',
			dataType: 'JSON',
			beforeSend: function() {
				jQuery('#clear-database-button .icon-spinner').show();
			},
			success: function(response) {
				jQuery('#messages .success').text(response.message).fadeIn();
			},
			error: function(response) {
				jQuery('#messages .success').text(response.message).fadeIn();
			},
			complete: function() {
				jQuery('#clear-database-button .icon-spinner').hide();

				setTimeout(function() {
					jQuery('#messages .wrapper').fadeOut();
				}, 3000);
			}
		});
	}




});
