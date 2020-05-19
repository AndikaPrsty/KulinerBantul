const firebaseConfig = {
	apiKey: "AIzaSyC88jAXIHV2wGIeiq5xbhK7brXhWv88-v4",
	authDomain: "kuliner-bantul.firebaseapp.com",
	databaseURL: "https://kuliner-bantul.firebaseio.com",
	projectId: "kuliner-bantul",
	storageBucket: "kuliner-bantul.appspot.com",
	messagingSenderId: "1042483799999",
	appId: "1:1042483799999:web:e0d5692257a8bd721fe30a",
};
firebase.initializeApp(firebaseConfig);

let postNav = document.querySelector(".post-nav");
let eventNav = document.querySelector(".event-nav");

if (postNav != null) {
	postNav.addEventListener("click", () => {
		document.querySelector(".post-nav").classList.add("active");
		document.querySelector(".event-nav").classList.remove("active");
		document.querySelector(".content .event").classList.remove("show");
		document.querySelector(".content .post").classList.remove("hide");
		document
			.querySelector(".content .post .post-container")
			.classList.remove("hide");
	});
}
if (eventNav != null) {
	eventNav.addEventListener("click", () => {
		document.querySelector(".event-nav").classList.add("active");
		document.querySelector(".post-nav").classList.remove("active");
		document.querySelector(".content .post").classList.add("hide");
		document
			.querySelector(".content .post .post-container")
			.classList.add("hide");
		document.querySelector(".content .event").classList.add("show");
	});

	const base_url = `${window.location.origin}/KulinerBantul/`;
}

let carousel = document.querySelectorAll(".carousel-inner");

for (let i = 0; i < carousel.length; i++) {
	carousel[i].children[0].classList.add("active");
	// console.log(carousel[i].children[i]);
}
// console.log(window);

let btnmap = document.querySelectorAll("#btnmap");
let latitude;
let longitude;
let modalTitle = document.querySelector(".modal-title");
let themarker = {};

for (let i = 0; i < btnmap.length; i++) {
	btnmap[i].addEventListener("click", function (e) {
		document.querySelector("#maphome").innerHTML =
			'<div id="map" style="height:500px;width:760px"></div>';
		longitude = null;
		latitude = null;
		judul = null;
		latitude = this.dataset.latitude;
		longitude = this.dataset.longitude;
		modalTitle.innerHTML = this.dataset.judul;
		let map = L.map("map").setView([latitude, longitude], 16);

		L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
			attribution:
				'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
		}).addTo(map);

		map.removeLayer(themarker);

		console.log(longitude, latitude);
		themarker = L.marker([latitude, longitude]).addTo(map).openPopup();
		$(document).ready(function () {
			$("#mapmodal").on("shown.bs.modal", function () {
				setTimeout(function () {
					map.invalidateSize();
				}, 10);
			});
		});
	});
}
// let mapmodal = document.querySelector(".modal-body");
