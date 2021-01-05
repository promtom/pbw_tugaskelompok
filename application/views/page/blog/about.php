<?php $i=0;?>
<div class="col">
	<div class="row my-3">
		<div class="col">
			<div class="parallax-abo">
				<div class="centered text-center container-fluid" id="txtabout">
					<h2 class="about_title">Penulis</h2>
					<p class="mb-0">
						Tak kenal maka tak sayang
					</p>
				</div>
			</div>
		</div>
	</div>
    <div class="row my-3">
    	<?php foreach ($user as $row) : ?>
    	<div class="col-lg-4 col-sm-6">
    		<?php
				if($row["foto"]){
					$foto = 'assets/img/profil/'.$row["foto"];
				}
				else $foto = 'assets/img/profil/profil0.png';
            ?>
    		<div class="card card-profile bg-dark text-white">
    			<div class="card-header backprofil">
    				<div class="profile-picture">
    					<div class="avatar avatar-xl">
                            <img src="<?= base_url($foto)?>" alt="..." class="avatar-img rounded-circle">
    					</div>
    				</div>
    			</div>
    			<div class="card-body text-center">
    				<h4 class="card-title profil_title">
						<?= $row["username"] ?>
					</h4>
    				<div class="card-text">
    					Total artikel yang sudah dibuat
						<h4 class="profil_title">
							<?php foreach ($berita as $wow) : ?>
								<?php 
									if($wow["brt_admin"]==$row["ID"]){
										$i++;
									}
								?>
							<?php endforeach ?>
							<?= $i ?>
						</h4>
    				</div>
    				<a href="<?= base_url('blog/thor/') ?><?= $row["ID"] ?>" class="btn btn-secondary btn-block">See Profile</a>
    			</div>
    		</div>
    	</div>
		<?php $i=0;?>
    	<?php endforeach ?>
    </div>
	<?= $this->pagination->create_links(); ?>
</div>