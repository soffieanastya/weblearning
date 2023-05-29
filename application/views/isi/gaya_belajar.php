	  <header class="masthead bg-primary text-white text-center">
	    <div class="container">
	      <h2 class="text-uppercase mb-0">MENENTUKAN GAYA BELAJAR SISWA</h2>
	      <hr class="star-light">
	    </div>
	  </header>

	  <div class="container text-center">
	    <div class="row">
	      <div class="col-lg-8 mx-auto" align="justify"><br>
	      	<?php 
	      		if($message != null){
	      	 ?>
		      	<div style="background-color: #fa8072; text-align: center; padding-top: 10px; padding-bottom: 10px">
		      		<?php echo $message; ?>
		      	</div>
		    <?php } ?>

	      	<br>
	        <p class="mb-5" align="justify">
	       		<b>Petunjuk pengisian angket <br>
				Isilah pertanyaan dengan salah satu jawaban yang paling sesuai dengan keadaan Anda.</b>
	      	</p>
		  <form action="<?php echo site_url('siskom/aksi_gayabelajar'); ?>" method="post">
	      	<p class="mb-5" >
	       		<?php $no=1; ?>
				<table align-text="justify">
					
					<TR align="justify">
						<?php 
							foreach($data as $baris){
						?>
						<td valign="top">
							<?php echo $no; ?>
						</td>
						<td>
							<?php 
								echo $baris->pertanyaan; //$pertanyaan disini bukan dilempar dari extract diatas, tapi kolom dari database asalnya
								$no++; 
							?> 
							<br>
							<input type="radio" name="pilihan[<?php echo $baris->id_gayabelajar ?>]" value="a">&ensp;<?php echo $baris->a; ?><br>
							<input type="radio" name="pilihan[<?php echo $baris->id_gayabelajar ?>]" value="b">&ensp;<?php echo $baris->b; ?><br>
							<input type="radio" name="pilihan[<?php echo $baris->id_gayabelajar ?>]" value="c">&ensp;<?php echo $baris->c; ?><br>
							<br>
						</td>
						<td>
							
						</td>
					</TR>

					<?php } ?>
					<tr>
						<td colspan="3" style="text-align: right; padding-top: 30px">
							<input type="submit" value="NEXT" type="button" class="btn btn-info" style="width: 100%">
						</td>
					</tr>
					
				</table>
	      	</p>
	       </form>

	      </div>
	    </div>
	  </div>
	<!-- </form> -->
	</div>
  </div>
</div>

