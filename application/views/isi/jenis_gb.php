<div class="container text-center" style="margin-top: 220px">
    <div class="row">
      <div class="col-lg-8 mx-auto">
      		SELAMAT! GAYA BELAJAR MU ADALAH ....
      		<?php foreach ($idsiswa as $id) { ?>
      			<h3><?php echo $id->id_siswa; ?></h3>
      		<?php } ?>
      </div>
    </div>
</div>