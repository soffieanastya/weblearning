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
	       				Muatan listrik sebanyak 24 coloumb melewati kawat konduktor selama 3 detik. Besar arus listriknya adalah .... Ampere <br><br>
	       				Pembahasan: <br>
	       				Diketahui:  <br>
						q = <?php 
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

						t = <?php 
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
							?> <br><br>
						Ditanyakan: i…?<br><br>
						Jawab:<br>
						i = q / t <br>
						&ensp;= <?php 
								if($ke3 == true){
									echo $mess3; 
							?>
									<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="4%">
							<?php
								}else{
									echo $mess3;;
							?>
									<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="4%">
							<?php 
								}   
							?> 
							/ 
							<?php 
								if($ke4 == true){
									echo $mess4; 
							?>
									<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="4%">
							<?php
								}else{
									echo $mess4;;
							?>
									<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="4%">
							<?php 
								}   
							?> <br>

							 ?> <br>
						i = <?php 
								if($ke5 == true){
									echo $mess5." Ampere"; 
							?>
									<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="4%">
							<?php
								}else{
									echo $mess5 ." Ampere";
							?>
									<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="4%">
							<?php 
								}   
							?> <br><br>
	       			</div>
	       			<div class="col-lg-6 text-left" style="background-color: #89C4F4; padding-top: 10px">
	       				<h6 style="text-align: center;">Jawaban yang benar:</h6><br>
	       				Pertanyaan: <br>
	       				Muatan listrik sebanyak 24 coloumb melewati kawat konduktor selama 3 detik. Besar arus listriknya adalah .... Ampere <br><br>
	       				Pembahasan: <br>
	       				Diketahui:  <br>
						q = 24 coloumb <br>
						t = 3 detik <br><br>
						Ditanyakan: i…?<br><br>
						Jawab:<br>
						i = q / t <br>
						&ensp;= 24 / 3 <br>
						i = 8 Ampere <br><br>
	       			</div>
       			</div>
       			
       		
       	<?php } ?>

       	<br><br><br>
       	<a href="<?php echo site_url('soal2/no2') ?>">
       		<input type="submit" value="SOAL SELANJUTNYA" width="100%" type="button" class="btn btn-info" style="width: 100%">
       	</a>
    	<br><br>	
    </div>
  </div>
</div>