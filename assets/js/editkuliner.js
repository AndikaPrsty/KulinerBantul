document.querySelector(".map-container").innerHTML =
	'<div id="map" style="height:500px;z-index:0;width:100%;box-shadow: 0px 0px 5px 0px grey;cursor:crosshair" class="map"></div>';

var map = L.map("map").setView([-7.88776161446896, 110.32743226340244], 17);
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

let lat = document.querySelector(".latitude");
let long = document.querySelector(".longitude");

theMarker = L.marker([lat.value, long.value])
	.addTo(map)
	// .bindPopup(`${e.latlng.lat}, ${e.latlng.lng}`)
	.openPopup();

const onMapClick = (e) => {
	lat.value = e.latlng.lat;
	long.value = e.latlng.lng;

	if (theMarker != undefined) {
		map.removeLayer(theMarker);
	}

	theMarker = L.marker([e.latlng.lat, e.latlng.lng])
		.addTo(map)
		// .bindPopup(`${e.latlng.lat}, ${e.latlng.lng}`)
		.openPopup();
	L.DomUtil.addClass(map._container, "crosshair-cursor-enabled");
};
map.on("click", onMapClick);
