document.querySelector(".post-nav").addEventListener("click", () => {
	document.querySelector(".post-nav").classList.add("active");
	document.querySelector(".event-nav").classList.remove("active");
	document.querySelector(".content .event").classList.remove("show");
	document.querySelector(".content .post").classList.remove("hide");
	document
		.querySelector(".content .post .post-container")
		.classList.remove("hide");
});
document.querySelector(".event-nav").addEventListener("click", () => {
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
