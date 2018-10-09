new WOW().init();

const waypoint = new Waypoint({
	element: document.getElementById('concepts'),
	handler: function(direction) {
		new Vivus('my-svg', { type:'oneByOne', duration: 500, delay: 100, start: 'autostart' });
		new Vivus('my-svg-two', { type:'oneByOne',duration: 500, delay: 200, start: 'autostart' });
		new Vivus('my-svg-three', { type:'oneByOne',duration: 500, delay: 300, start: 'autostart' });
		 new Vivus('my-svg-four', { type:'oneByOne',duration: 500, delay: 400, start: 'autostart' });
	}
  })


 // Initialize and add the map
 function initMap() {
	// The location of Uluru
			var uluru = { lat: 45.756900, lng: 4.852230 };

			var styles = [
		{
		"featureType": "water",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#e9e9e9"
			},
			{
				"lightness": 17
			}
		]
		},
		{
		"featureType": "landscape",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#f5f5f5"
			},
			{
				"lightness": 20
			}
		]
		},
		{
		"featureType": "road.highway",
		"elementType": "geometry.fill",
		"stylers": [
			{
				"color": "#ffffff"
			},
			{
				"lightness": 17
			}
		]
		},
		{
		"featureType": "road.highway",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"color": "#ffffff"
			},
			{
				"lightness": 29
			},
			{
				"weight": 0.2
			}
		]
		},
		{
		"featureType": "road.arterial",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#ffffff"
			},
			{
				"lightness": 18
			}
		]
		},
		{
		"featureType": "road.local",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#ffffff"
			},
			{
				"lightness": 16
			}
		]
		},
		{
		"featureType": "poi",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#f5f5f5"
			},
			{
				"lightness": 21
			}
		]
		},
		{
		"featureType": "poi.park",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#dedede"
			},
			{
				"lightness": 21
			}
		]
		},
		{
		"elementType": "labels.text.stroke",
		"stylers": [
			{
				"visibility": "on"
			},
			{
				"color": "#ffffff"
			},
			{
				"lightness": 16
			}
		]
		},
		{
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"saturation": 36
			},
			{
				"color": "#333333"
			},
			{
				"lightness": 40
			}
		]
		},
		{
		"elementType": "labels.icon",
		"stylers": [
			{
				"visibility": "off"
			}
		]
		},
		{
		"featureType": "transit",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#f2f2f2"
			},
			{
				"lightness": 19
			}
		]
		},
		{
		"featureType": "administrative",
		"elementType": "geometry.fill",
		"stylers": [
			{
				"color": "#fefefe"
			},
			{
				"lightness": 20
			}
		]
		},
		{
		"featureType": "administrative",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"color": "#fefefe"
			},
			{
				"lightness": 17
			},
			{
				"weight": 1.2
			}
		]
		}
		];

			var contentString = `
				<h3>Quartier d'Affaires Lyon 3 - Part Dieu</h3>
				<h6>Transports publics</h6>
				<ul>
					<li>Garibaldi (Métro D)</li>
					<li> Saxe - Gambetta (Métro B-D)</li>
					<li>Place Guichard - Bourse du Travail (Métro B)</li>
				</ul>
				<h6>Parking</h6>
				<ul>
					<li>Parking Bonnefoi</li>
					<li>Parc Bonnefoi</li>
					<li>Parking of Cuirassiers</li>
				</ul>
				`;
	// The map, centered at Uluru
	const map = new google.maps.Map(
		document.getElementById('map'), {
			styles: styles,
			zoom: 14, center: uluru,
			center: { lat: 45.756900, lng: 4.852230},
		});

	const infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	const marker = new google.maps.Marker({ position: uluru, map: map, title: 'Quartier Affaire Lyon 3 Part Dieu' });

	google.maps.event.addListener(marker, 'click', function () {
		infowindow.open(map, marker);
	});
	if (typeof window.orientation == 'undefined') { 
		infowindow.open(map, marker);
	 }


}


$(document).ready(function(){

$('a.contactez').click((e) => {
	e.preventDefault();
	var speed = 750; // Durée de l'animation (en ms)
	$('html, body').animate( { scrollTop: $('#contactez-nous').offset().top }, speed ); // Go
	
})

$('form.wpcf7-form').submit((e) => {
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "/",
		data: $('form.wpcf7-form').serialize(),
	  }).done((data) =>  {
		$('form.wpcf7-form, #thx-remove').slideUp();
		$('#thx').fadeIn()

	})

	
});

	$(".owl-carousel").owlCarousel({
		center: true,
		items:2,
		dots: true,
		autoplay: true,
		lazyLoad: true,
		loop:true,
		responsive:{
			600:{
				items:4
			}
		}
	});
});

if ('serviceWorker' in navigator) {
	navigator.serviceWorker.register('/js/sw.js');
  }
  