document.querySelector('.map-container').innerHTML = '<div id="map" style="width:1090px;height:550px;z-index:0" class="map"></div>'

var map = L.map("map").setView([-7.88776161446896, 110.32743226340244], 16);
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

var markers = [];

fetch('http://localhost/KulinerBantul/admin/get_markers').then(data => data.json()).then(maps => {
	maps.forEach(mp => {
		let markerLocation = new L.LatLng(mp.latitude, mp.longitude);
		let marker = new L.Marker(markerLocation);
		map.addLayer(marker);

		marker.bindPopup(mp.konten);
	});
});
