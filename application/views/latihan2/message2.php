<div class="container" style="margin-top: 120px;">
  <div class="row">
    <div class="col-lg-10 mx-auto text-center">
    	<?php 
    		if($ke1 == true and $ke2 == true and $ke3 == true and $ke4 == true and 
       		$ke5  == true){
       	?>
       			<br>
    			<h3>WAH SELAMAT! <br> JAWABAN KAMU SUDAH BENAR</h3><br>
    			<img src="<?php echo base_url('assets/soal2/congrats2.gif') ?>" width="50%">
    	<?php 
       		}else{
       	?>
       			<br>
       			<h3>YAAH SAYANG SEKALI,<br>JAWABAN KAMU ADA YANG KURANG TEPAT!</h3><br>
       			
       			<div class="row">
       				<div class="col-lg-6 text-left" style="background-color: #fa8072;  padding-top: 10px">
	       				<h6 style="text-align: center;">Jawaban Kamu:</h6><br>
	       				Pertanyaan: <br>
	       				Terdapat sebuah Laptop yang akan digunakan dan memerlukan Tegangan Listrik sebesar 220 Volt dan Arus Listrik sebesar 1.2 Ampere untuk mengaktifkan Laptop tersebut. Hitunglah Daya Listrik yang diperlukannya? <br>

					      Jawaban: <br>
					      Dik: <br>
					      V = <?php 
								if($ke1 == true){
									echo $mess1; 
							?>
									<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="4%">
							<?php
								}else{
									echo $mess1;;
							?>
									<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="4%">
							<?php 
								}   
							?> <br>
					      i &nbsp;&nbsp;= <?php 
								if($ke2 == true){
									echo $mess2; 
							?>
									<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="4%">
							<?php
								}else{
									echo $mess2;;
							?>
									<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="4%">
							<?php 
								}   
							?><br><br>
					      Dit: P...? <br><br>
					      Jawab:<br>
					   	  P = V x i <br>
					   	  P = &nbsp;<?php 
								if($ke3 == true){
									echo $mess3; 
							?>
									<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="4%">
							<?php
								}else{
									echo $mess3;
							?>
									<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="4%">
							<?php 
								}   
							?>
							 x 
							<?php 
								if($ke4 == true){
									echo $mess4; 
							?>
									<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="4%">
							<?php
								}else{
									echo $mess4;
							?>
									<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="4%">
							<?php 
								}   
							?> <br>
					   	  P = <?php 
								if($ke5 == true){
									echo $mess5 ." watt "; 
							?>
									<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="4%">
							<?php
								}else{
									echo $mess5 ." watt ";
							?>
									<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="4%">
							<?php 
								}   
							?>

						<br><br>
	       			</div>
	       			<div class="col-lg-6 text-left" style="background-color: #89C4F4; padding-top: 10px">
	       				<h6 style="text-align: center;">Jawaban yang benar:</h6><br>
	       				Pertanyaan: <br>
	       				Terdapat sebuah Laptop yang akan digunakan dan memerlukan Tegangan Listrik sebesar 220 Volt dan Arus Listrik sebesar 1.2 Ampere untuk mengaktifkan Laptop tersebut. Hitunglah Daya Listrik yang diperlukannya? <br>
					      Jawaban: <br>
					      Dik: <br>
					      V = 220 v <br>
					      i &nbsp;&nbsp;= 1.2 ampere<br><br>
					      Dit: P...? <br><br>
					      Jawab:<br>
					   	  P = V x i <br>
					   	  P = 220 x 1.2 <br>
					   	  P = 264 Watt
	       			</div>
       			</div>
       			
       		
       	<?php } ?>

       	<br><br><br>
       	<a href="<?php echo site_url('soal2/no3') ?>">
       		<input type="submit" value="SOAL SELANJUTNYA" width="100%" type="button" class="btn btn-info" style="width: 100%">
       	</a>
    	<br><br>	
    </div>
  </div>
</div>