let pos = ol.proj.fromLonLat([112.86881206118748, 0.7907467593118866]);
let map = new ol.Map({
	layers: [
		new ol.layer.Tile({
			source: new ol.source.OSM(),
		}),
	],
	view: new ol.View({
		center: pos,
		zoom: 15,
	}),
	target: "map",
});
let marker_el = document.getElementById("marker");
let marker = new ol.Overlay({
	position: pos,
	positioning: "center-center",
	element: marker_el,
	stopEvent: false,
	dragging: true,
});
map.addOverlay(marker);

let dragPan;
map.getInteractions().forEach(function (interaction) {
	if (interaction instanceof ol.interaction.DragPan) {
		dragPan = interaction;
	}
});

marker_el.addEventListener("click", function (e) {
	dragPan.setActive(false);
	marker.set("dragging", true);
});
map.on("pointermove", function (e) {
	console.log(e.coordinate);
	if (marker.get("dragging") == true) {
		marker.setPosition(e.coordinate);
	}
});
map.on("pointerup", function (e) {
	if (marker.get("dragging") == true) {
		console.log(e.pixel);
		console.log(map.getPixelFromCoordinate(e.coordinate));
		console.log(ol.proj.toLonLat(e.coordinate));
		let coords = ol.proj.toLonLat(e.coordinate);
		let lat = coords[0];
		let lon = coords[1];

		document.querySelector(".latitude").innerHTML = lat;
		document.querySelector(".longitude").innerHTML = lon;

		dragPan.setActive(true);
		marker.set("dragging", false);
	}
});
var layer = new ol.layer.Vector({
	source: new ol.source.Vector({
		features: [
			new ol.Feature({
				geometry: new ol.geom.Point(ol.proj.fromLonLat([4.35247, 50.84673])),
			}),
		],
	}),
});
map.addLayer(layer);
