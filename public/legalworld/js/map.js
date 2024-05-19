
	/*START CONTACT MAP JS*/
			if ($('.map-canvas').length) {
				// Specify features and elements to define styles.
				var styles = [{
								"featureType": "administrative.country",
								"elementType": "geometry",
								"stylers": [
									{
										"visibility": "simplified"
									},
									{
										"hue": "#ff0000"
									}
								]
							}
						];
						// https://maps.google.com/maps?q=41.362536,69.285985&ll=41.362536,69.285985&z=16
				var mapOptions = {
					center: new google.maps.LatLng(41.322451, 69.259580),
					zoom: 18,
					scrollwheel: false,
					panControl: true,
					mapTypeControl: false,
					streetViewControl: false,
					disableDefaultUI: false,
					zoomControl: true,
					disableDoubleClickZoom: false,
					fullscreenControl: false,
					styles: styles
				};

                console.log('map')
				var initMap = function() {
					var contactdata = $('#contact-map').data('content');
					var map = new google.maps.Map(document.getElementById("contact-map"), mapOptions);
					var bounds = new google.maps.LatLngBounds();
					var myIcon = new google.maps.MarkerImage("/legalworld/images/map_pin.png", null, null, null, new google.maps.Size(30, 30));
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(41.322451, 69.259580),
						map: map,
						icon: myIcon
					});



				};
				initMap();
				google.maps.event.addDomListener(window, 'load resize', initMap);
			}

	   /*END CONTACT MAP JS*/
