<div class="content">
	<div class="profile">
		<h3>profile</h3>
		<div class="row mr-3">
			<div class="col">
				<?= $this->session->flashdata('msg') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<img style="width:200px;border-radius:50%;" src="<?= $this->session->userdata('image') ?>" alt=""
					srcset="">
				<input type="file" class="form-control mt-1">
			</div>
			<div class="col-7 ml-4">
				<form action="<?= base_url('/user/ubah_profil') ?>" method="post">
					<div class="form-group">
						<label for="nama">Nama Lengkap</label>
						<input onkeyup="showBtnProfile()" type="text" id="nama" name="nama"
							value="<?= $user[0]['nama_user'] ?>" class="form-control">
						<small class="text-danger"><?= form_error('nama') ?></small>

					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input onkeyup="showBtnProfile()" type="text" disabled value="<?= $user[0]['email'] ?>"
							class="form-control">
					</div>
					<div class="form-group">
						<label for="telp">Telp</label>
						<input onkeyup="showBtnProfile()" type="number" id="telp" name="telp"
							value="<?= $user[0]['telp'] ?>" class="form-control">
						<small class="text-danger"><?= form_error('telp') ?></small>
					</div>
					<button style="float:right;display:none;" id="btnProfile" class="btn btn-primary">ubah</button>
				</form>
			</div>
		</div>
	</div>
	<div class="password">
		<h3>password</h3>
		<div class="row">
			<div class="col">
				<?= $this->session->flashdata('pw_msg') ?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="<?= base_url('/user/ubah_password') ?>" method="post">
					<div class="form-group">
						<label for="passwordlama">Password Lama</label>
						<input onkeyup="showBtnPassword()" class="form-control" type="password" id="passwordlama"
							name="passwordlama">
						<?= $this->session->flashdata('error') ?>
					</div>
					<div class="form-group">
						<label for="password1">Password Baru</label>
						<input onkeyup="showBtnPassword()" type="password" name="password1" id="password1"
							class="form-control">
						<small class="text-danger"><?= form_error('password1') ?></small>
					</div>
					<div class="form-group">
						<label for="password2">Konfirmasi Password Baru</label>
						<input onkeyup="showBtnPassword()" type="password" name="password2" id="password2"
							class="form-control">
						<small class="text-danger"><?= form_error('password2') ?></small>
					</div>
					<button style="float:right;display:none" class="btn btn-primary" type="submit"
						id="btnPassword">ubah</button>
				</form>
			</div>
		</div>
	</div>
</div>
