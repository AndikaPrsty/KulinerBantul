var map = L.map("map").setView([-7.88776161446896, 110.32743226340244], 17);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
	attribution:
		'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

// L.marker([-7.88776161446896, 110.32743226340244])
// 	.addTo(map)
// 	.bindPopup("A pretty CSS3 popup.<br> Easily customizable.")
// 	.openPopup();
L.DomUtil.addClass(map._container, "crosshair-cursor-enabled");
let lat = document.querySelector(".latitude");
let long = document.querySelector(".longitude");
const onMapClick = (e) => {
	lat.value = e.latlng.lat;
	long.value = e.latlng.lng;
};
map.on("click", onMapClick);
