// Initialize and add the map
function initMap() {
	// The location of Uluru
	var harare = {lat: -17.824858, lng:31.053028};
	// The map, centered at Uluru
	var map = new google.maps.Map(
		document.getElementById('map'), {zoom: 4, center: harare});
	// The marker, positioned at Uluru
	var marker = new google.maps.Marker({position: harare, map: map});
  }