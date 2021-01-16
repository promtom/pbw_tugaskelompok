<div class="modal fade" id="changebioModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="dialog">
		<div class="modal-content">
			<form action="<?= base_url('admin/home/editBio/').$this->session->userdata('id_u'); ?>" method="post">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Bio</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="profil">Profil</label>
						<textarea type="text" class="form-control" id="profil" name="profil" aria-describedby="importInfo" required><?= $this->session->userdata('bio'); ?></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary float-left" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-primary" type="submit">Ganti</button>
				</div>
			</form>
		</div>
	</div>
</div>