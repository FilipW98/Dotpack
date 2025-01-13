window.addEventListener('load', function () {
	const tag = document.createElement('script');
	tag.src =
		'https://maps.googleapis.com/maps/api/js?somesensetivekey';
	document.getElementsByTagName('head')[0].appendChild(tag);
	// Initialize and add the map
});


function initMap() {
	var centerCoordinates = {
		lat: 50.87752353290799,
		lng: 19.00099688903087
	};
	var markerCoordinates = {
		lat: 50.87752353290799,
		lng: 19.00099688903087
	};

	// console.log('initmap');
	var opts = {
		center: centerCoordinates,
		zoom: calculateZoom(),
		styles: [{
				"featureType": "all",
				"elementType": "all",
				"stylers": [{
					"color": "#b1a5d5"
				}]
			},
			{
				"featureType": "all",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f1f2f6"
				}]
			},
			{
				"featureType": "all",
				"elementType": "labels.text",
				"stylers": [{
					"color": "#b2a6d2"
				}]
			},
			{
				"featureType": "all",
				"elementType": "labels.icon",
				"stylers": [{
					"color": "#aa96d2"
				}]
			},
			{
				"featureType": "administrative",
				"elementType": "labels.text",
				"stylers": [{
					"color": "#b2a6d2"
				}]
			},
			{
				"featureType": "administrative",
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "administrative",
				"elementType": "labels.icon",
				"stylers": [{
						"visibility": "off"
					},
					{
						"color": "#7c69b7"
					}
				]
			},
			{
				"featureType": "administrative.land_parcel",
				"elementType": "all",
				"stylers": [{
					"color": "#f1f2f6"
				}]
			},
			{
				"featureType": "landscape",
				"elementType": "labels.text",
				"stylers": [{
					"color": "#7c69b7"
				}]
			},
			{
				"featureType": "landscape",
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "landscape.natural",
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "landscape.natural.terrain",
				"elementType": "all",
				"stylers": [{
					"color": "#dfdaed"
				}]
			},
			{
				"featureType": "landscape.natural.terrain",
				"elementType": "geometry",
				"stylers": [{
					"color": "#dfdaed"
				}]
			},
			{
				"featureType": "poi",
				"elementType": "all",
				"stylers": [{
						"visibility": "on"
					},
					{
						"color": "#dfdaed"
					}
				]
			},
			{
				"featureType": "poi",
				"elementType": "labels",
				"stylers": [{
						"visibility": "on"
					},
					{
						"color": "#7c69b7"
					}
				]
			},
			{
				"featureType": "poi",
				"elementType": "labels.text",
				"stylers": [{
						"visibility": "on"
					},
					{
						"color": "#b1a5d5"
					}
				]
			},
			{
				"featureType": "poi",
				"elementType": "labels.text.fill",
				"stylers": [{
					"visibility": "on"
				}]
			},
			{
				"featureType": "poi",
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "poi",
				"elementType": "labels.icon",
				"stylers": [{
						"saturation": "0"
					},
					{
						"lightness": "0"
					},
					{
						"color": "#aa96d2"
					},
					{
						"visibility": "on"
					}
				]
			},
			{
				"featureType": "poi.attraction",
				"elementType": "labels",
				"stylers": [{
					"color": "#aa96d2"
				}]
			},
			{
				"featureType": "poi.attraction",
				"elementType": "labels.icon",
				"stylers": [{
					"color": "#aa96d2"
				}]
			},
			{
				"featureType": "poi.business",
				"elementType": "all",
				"stylers": [{
					"visibility": "on"
				}]
			},
			{
				"featureType": "poi.business",
				"elementType": "geometry",
				"stylers": [{
					"color": "#dfdaed"
				}]
			},
			{
				"featureType": "poi.business",
				"elementType": "labels.text",
				"stylers": [{
					"visibility": "on"
				}]
			},
			{
				"featureType": "poi.business",
				"elementType": "labels.text.fill",
				"stylers": [{
					"visibility": "on"
				}]
			},
			{
				"featureType": "poi.business",
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "poi.business",
				"elementType": "labels.icon",
				"stylers": [{
						"visibility": "on"
					},
					{
						"color": "#aa96d2"
					}
				]
			},
			{
				"featureType": "poi.government",
				"elementType": "labels.icon",
				"stylers": [{
					"color": "#aa96d2"
				}]
			},
			{
				"featureType": "poi.medical",
				"elementType": "labels.icon",
				"stylers": [{
					"color": "#aa96d2"
				}]
			},
			{
				"featureType": "poi.park",
				"elementType": "labels.icon",
				"stylers": [{
					"color": "#aa96d2"
				}]
			},
			{
				"featureType": "poi.place_of_worship",
				"elementType": "labels.icon",
				"stylers": [{
					"color": "#aa96d2"
				}]
			},
			{
				"featureType": "poi.school",
				"elementType": "labels.icon",
				"stylers": [{
					"color": "#aa96d2"
				}]
			},
			{
				"featureType": "poi.sports_complex",
				"elementType": "labels.icon",
				"stylers": [{
					"color": "#aa96d2"
				}]
			},
			{
				"featureType": "road",
				"elementType": "all",
				"stylers": [{
						"color": "#7c69b7"
					},
					{
						"lightness": "75"
					},
					{
						"saturation": "0"
					},
					{
						"visibility": "on"
					}
				]
			},
			{
				"featureType": "road",
				"elementType": "labels.text",
				"stylers": [{
						"color": "#b1a5d5"
					},
					{
						"visibility": "on"
					}
				]
			},
			{
				"featureType": "road",
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "off"
				}]
			},
			{
				"featureType": "road",
				"elementType": "labels.icon",
				"stylers": [{
						"hue": "#ff0000"
					},
					{
						"visibility": "off"
					}
				]
			},
			{
				"featureType": "transit",
				"elementType": "labels.text",
				"stylers": [{
					"color": "#7c69b7"
				}]
			},
			{
				"featureType": "transit.station",
				"elementType": "all",
				"stylers": [{
					"visibility": "off"
				}]
			}
		],
		maxZoom: 25,
		minZoom: 0,
		mapTypeId: 'roadmap',
		// clickableIcons: true,
		disableDoubleClickZoom: false,
		draggable: true,
		keyboardShortcuts: true,
		// scrollwheel: true,
	};

	var map = new google.maps.Map(document.getElementById('map'), opts);

	var marker = new google.maps.Marker({
		position: markerCoordinates,
		map: map,
		visible: false,
	});

	var contentString = `
        <div class="button-box">
            <div class="custom-map-control-button btn-purple-to-trans-black">
                Wyznacz trasę
            </div>
			 <img class="map-logo" src="https://dot.hiforyou.pl/wp-content/uploads/2024/10/dotpack_logo.svg" alt="Logo"/>
        </div>
    `;

	var infoWindow = new google.maps.InfoWindow({
		content: contentString,
	});

	infoWindow.open(map, marker);

	// Listener kliknięcia w przycisk "Wyznacz trasę"
	google.maps.event.addListener(infoWindow, 'domready', function () {
		document.querySelector('.custom-map-control-button').addEventListener('click', function () {
			window.open('https://maps.app.goo.gl/2w2FGiMCTiUHaqUo9', '_blank');
		});
	});

	window.addEventListener('resize', function () {
		map.setZoom(calculateZoom());
	});
}

function calculateZoom() {
	const screenWidth = window.innerWidth;
	if (screenWidth > 1200) {
		return 12;
	} else if (screenWidth > 800) {
		return 12;
	} else if (screenWidth > 600) {
		return 12;
	} else {
		return 11;
	}
}