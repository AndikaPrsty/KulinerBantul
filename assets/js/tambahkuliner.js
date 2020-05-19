document.querySelector(".map-container").innerHTML =
	'<div id="map" style="height:500px;z-index:0;width:100%;box-shadow: 0px 0px 5px 0px grey;cursor:crosshair" class="map"></div>';

var map = L.map("map").setView([-7.88776161446896, 110.32743226340244], 17);
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
	attribution:
		'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

let lat = document.querySelector(".latitude");
let long = document.querySelector(".longitude");
let theMarker = {};

function uploadpost() {
	xhr.onload = function () {
		if (xhr.status >= 200 && xhr.status < 300) {
			console.log("success");
		} else {
			console.log("failed");
		}
	};
	post_data = {
		judul_post: judul_post.value,
		alamat: alamat.value,
		jam_buka: jam_buka.value,
		konten: deskripsi.value,
		latitude: lat.value,
		longitude: long.value,
		id_jenis_post: "klr1587608474",
	};

	jsonpost = JSON.stringify(post_data);
	console.log(jsonpost);
	xhr.open("post", `${baseurl}post/set_post/`, false);
	xhr.setRequestHeader("Content-Type", "application/json");
	xhr.send(jsonpost);
}

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

let uploadimg = document.querySelector(".upload-img");
let imgcontainer = document.querySelector(".img-upload-container");
let fileList = [];
let imgURL = "";

if (uploadimg != undefined) {
	uploadimg.addEventListener("change", (e) => {
		for (let i = 0; i < e.target.files.length; i++) {
			fileList.push(e.target.files[i]);
			imgURL += `<img src="${URL.createObjectURL(e.target.files[i])}">`;
		}
		imgcontainer.innerHTML = imgURL;
	});
}

let judul_post = document.querySelector(".judul_post");
let alamat = document.querySelector(".alamat");
let deskripsi = document.querySelector(".deskripsi");
let jam_buka = document.querySelector(".jam_buka");

let submit = document.querySelector(".submit");
let reset = document.querySelector(".reset");
let progressBar = document.querySelector(".progress-bar");
let storage = firebase.storage();

let post_data = {};
let imageRef = [];

let nomor = 0;

let imgdownloadURL = [];

let xhr = new XMLHttpRequest();
let baseurl = `${window.origin}/KulinerBantul/`;

function uploadToFirebase(imgFile) {
	let extfile = imgFile.name.split(".").pop();
	let newimgname = `${Date.now()}.${extfile}`;
	imgFile.name = newimgname;
	let imgRef = storage.ref("/img/post/tempat-kuliner/" + newimgname);
	imageRef.push(`/img/post/tempat-kuliner/${newimgname}`);
	let task = imgRef.put(imgFile);

	task.on(
		"state_changed",
		(snapshot) => {
			let percent = 0;
			percent = snapshot.bytesTransferred / snapshot.totalBytes;
			progressBar.value = percent;
		},
		(er) => {
			console.error(err);
		},
		() => {
			imgRef.getDownloadURL().then((url) => {
				imgdownloadURL.push(url);
				if (imgdownloadURL.length == fileList.length) {
					let i = 0; //  set your counter to 1

					function myLoop() {
						//  create a loop function
						setTimeout(function () {
							//  call a 3s setTimeout when the loop is called
							let Image = {
								gambar: imgdownloadURL[i],
								image_ref: imageRef[i],
							};
							xhr.onload = function () {
								if (xhr.status >= 200 && xhr.status < 300) {
									console.log("success");
								} else {
									console.log("failed");
								}
							};
							jsonimg = JSON.stringify(Image);
							xhr.open("post", `${baseurl}post/set_post_img/`, false);
							xhr.setRequestHeader("Content-type", "application/json");
							xhr.send(jsonimg);
							if (i + 1 == fileList.length) {
								uploadpost();
								confirm(
									"berhasil menambahkan, post akan diperiksa oleh admin terlebih dahulu"
								);
								window.location.href = baseurl;
							}
							// console.log(jsonimg);
							i++; //  increment the counter
							if (i < fileList.length) {
								//  if the counter < 10, call the loop function
								myLoop(); //  ..  again which will trigger another
							} //  ..  setTimeout()
						}, 1000);
					}
					myLoop();
				}
			});
			console.log(`image ${newimgname} uploaded`);
		}
	);
}

function formValidation() {
	if (
		judul_post.value !== "" &&
		alamat.value !== "" &&
		jam_buka.value !== "" &&
		lat.value !== "" &&
		long.value !== "" &&
		deskripsi.value !== "" &&
		fileList.length > 0
	) {
		return true;
	} else {
		return false;
	}
}

submit.addEventListener("click", function () {
	let valid = formValidation();
	console.log(valid);
	if (valid) {
		submit.disabled = true;
		reset.disabled = true;
		judul_post.disabled = true;
		alamat.disabled = true;
		jam_buka.disabled = true;
		deskripsi.disabled = true;
		document.querySelector(".lds-ring").style.display = "inline-block";
		uploadimg.disabled = true;
		for (let i = 0; i < fileList.length; i++) {
			uploadToFirebase(fileList[i]);
		}
		$("#modalLoading").modal("show");
	} else {
		alert("mohon isi form dengan lengkap");
	}
});
