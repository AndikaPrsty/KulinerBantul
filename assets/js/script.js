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
	document
		.querySelector(".content .post .post-container .post-content-img")
		.addEventListener("click", () => {
			console.log("clicked");
			alert(base_url);
		});
	window.addEventListener("click", function (event) {
		if (event.target == document.querySelector(".modal")) {
			document.querySelector(".modal").classList.remove("show");
		}
	});
}
console.log(window);
