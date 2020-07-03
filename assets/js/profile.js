let btnProfile = document.querySelector('#btnProfile');
let btnPassword = document.querySelector('#btnPassword');

let PostTempatButtons = document.querySelectorAll('#modalTempatOptionsButton');
let PostTempatModal = document.querySelector('#modalTempatOptions');
let PostEventButtons = document.querySelectorAll('#modalEventOptionsButton');
let PostEventModal = document.querySelector('#modalEventOptions');
let deskripsi = document.querySelector('.deskripsi');

if (deskripsi !== null) {
	deskripsi.value = deskripsi.dataset.konten
}

console.log('asdasdasd');

const showBtnProfile = () => {
	btnProfile.style.display = 'unset';
}

const showBtnPassword = () => {
	btnPassword.style.display = 'unset';
}
if (PostTempatButtons !== null) {
	PostTempatButtons.forEach(button => {
		button.addEventListener('click', function () {
			let id_post = button.dataset.id
			PostTempatModal.querySelector('.modal-body').innerHTML = `
		<div class="row">
		<a href="${location.origin}/KulinerBantul/user/editkuliner/${id_post}" class="btn btn-block btn-primary m-1">edit</a>
		</div>
		<div class="row">
		<a onclick="return confirm('apakah anda yakin ingin menghapus post ini?')" href="${location.origin}/KulinerBantul/user/deletepost/${id_post}" class="btn btn-block btn-danger m-1">hapus</a>
		</div>
		`
		});
	})
}
if (PostEventButtons !== null) {
	PostEventButtons.forEach((button) => {
		button.addEventListener('click', function () {
			let id_post = button.dataset.id
			console.log(id_post);
			PostEventModal.querySelector('.modal-body').innerHTML = `
		<div class="row">
		<a href="${location.origin}/KulinerBantul/user/editevent/${id_post}" class="btn btn-block btn-primary m-1">edit</a>
		</div>
		<div class="row">
		<a onclick="return confirm('apakah anda yakin ingin menghapus post ini?')" href="${location.origin}/KulinerBantul/user/deletepost/${id_post}" class="btn btn-block btn-danger m-1">hapus</a>
		</div>
		`
		});
	})
}
