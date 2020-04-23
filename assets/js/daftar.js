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

let storage = firebase.storage();
let uploadBtn = document.querySelector("#gambar");
let submitBtn = document.querySelector(".submit");
let progress = document.querySelector(".progress");

uploadBtn.addEventListener("change", function (e) {
	let imgFile = e.target.files[0];
	let storageRef = storage.ref("user/profile/" + imgFile.name);
	let imgRef = storage.ref("user/profile/" + imgFile.name);
	let task = storageRef.put(imgFile);
	submitBtn.disabled = true;

	task.on(
		"state_changed",
		function (snapshot) {
			let percent = snapshot.bytesTransferred / snapshot.totalBytes;
			progress.value = percent;
		},
		function error(err) {
			console.log(err);
		},
		function complete() {
			imgRef.getDownloadURL().then(function (url) {
				console.log(url);
				let xhr = new XMLHttpRequest();
				let baseurl = `${window.origin}/KulinerBantul/home/set_img`;
				let imgURL = {
					image: url,
				};
				let jsonimgURL = JSON.stringify(imgURL);
				xhr.onload = function () {
					if (xhr.status >= 200 && xhr.status < 300) {
						console.log("success");
					} else {
						console.log("failed");
					}
				};

				xhr.open("post", baseurl, false);
				xhr.setRequestHeader("Content-type", "application/json");
				xhr.send(jsonimgURL);
			});
			submitBtn.disabled = false;
		}
	);
});
