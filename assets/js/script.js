document.querySelector(".post-nav").addEventListener("click", () => {
	document.querySelector(".post-nav").classList.add("active");
	document.querySelector(".event-nav").classList.remove("active");
	document.querySelector(".content .event").classList.remove("show");
	document.querySelector(".content .post").classList.remove("hide");
});
document.querySelector(".event-nav").addEventListener("click", () => {
	document.querySelector(".event-nav").classList.add("active");
	document.querySelector(".post-nav").classList.remove("active");
	document.querySelector(".content .post").classList.add("hide");
	document.querySelector(".content .event").classList.add("show");
});
