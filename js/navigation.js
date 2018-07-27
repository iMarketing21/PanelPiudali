/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {

	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );

} )();


/*Mapa Donde Comprar*/

var image = '../assets/img/marker.png';
var center = {lat: 5.0645004, lng: -71.9883374};
var ciudad_center_map = 'Cali';
var zoom = 5;
var contentString = '';
var marker = [];
var infowindow = [];

function initMap(distribuidores) {

	var distribuidores = JSON.parse(distribuidores);

	console.log(distribuidores);

	ciudad_center = distribuidores[0]["ciudad"];

	if (ciudad_center != '') {

		switch(ciudad_center){

			case 'Cali':
			center = {lat: 3.3950619, lng: -76.595704};
			zoom = 12;
			break;

			case 'Bogota':

			ciudad_center_map = 'Bogota';
			zoom = 11;
			center = {lat: 4.6482837, lng: -74.2478914};

			break;

			case 'Tulua':
			
			ciudad_center_map = 'Tulua';
			zoom = 13;
			center = {lat: 4.0909798, lng: -76.2137905};

			break;

		}
	}

	console.log(ciudad_center);

	var myLatLng = center;

    map = new google.maps.Map(document.getElementById('map'), {
      zoom: zoom,
      center: myLatLng
    });

    
    /*var markerc = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Hello World!'
      
    });*/

    var geocoder = new google.maps.Geocoder();

    for (var i = 0; i < 10; i++) {
    	
    	if (distribuidores[i]["direccion"] != '') {
    		
	    	address = distribuidores[i]["direccion"]+", "+distribuidores[i]["ciudad"]+", Colombia";
	    	
	    	contentString = '<h3>'+distribuidores[i]["nombre"]+'</h3><p>'+distribuidores[i]["direccion"]+'<br>'+distribuidores[i]["ciudad"]+'<br>'+distribuidores[i]["telefono"]+'</p>';

	    	geocodeAddress(address, geocoder, map, contentString, distribuidores[i]["idsucursal"]);

	    	sleep(0);
	    }
    }
}


function geocodeAddress(address, geocoder, resultsMap, contentWindow, iddistribuidor) {
	//var address = document.getElementById('address').value;
	//var address = "Calle 48A # 29c - 11, Cali, Colombia";
	geocoder.geocode({'address': address}, function(results, status) {
	  if (status === 'OK') {
	    //resultsMap.setCenter(results[0].geometry.location);
	    marker[iddistribuidor] = new google.maps.Marker({
	      map: resultsMap,
	      position: results[0].geometry.location,
	      icon: '../assets/img/marker.png'
	    });

	    if (contentWindow) {

	    	infowindow[iddistribuidor] = new google.maps.InfoWindow({
		      content: contentWindow
		    });

	    	marker[iddistribuidor].addListener('click', function() {
		        infowindow[iddistribuidor].open(map, marker[iddistribuidor]);
		    });
	    }
	  } else {
	    console.log('Geocode was not successful for the following reason: ' + status);
	  }
	});
}

function openWindowMap(iddistribuidor){
	infowindow[iddistribuidor].open(map, marker[iddistribuidor]);
}

function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

/*Fin Mapa Donde Comprar*/