<div class="container" style="margin-top: 120px;">
  <div class="row">
    <div class="col-lg-10 mx-auto text-center">
    	<?php 
    		if($ke1 == true and $ke2 == true and $ke3 == true){
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
	       				Perhatikan gambar berikut. <br>
				        <img src="<?php echo base_url('assets/soal2/no4.png') ?>" width="30%"> <br>
				  		Nilai dari hambatan dan toleransi hambatan tersebut adalah... <br><br> 
				        Jawaban: <br> 
				        <table style="margin-left: 20px">
				          <tr>
				            <td>Daya</td>
				            <td>:</td>
				            <td><?php 
								if($ke1 == true){
									echo $mess1; 
								?>
										<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="10%">
								<?php
									}else{
										echo $mess1;;
								?>
										<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="10%">
								<?php 
									}   
								?></td>
				          </tr>
				          <tr>
				            <td>Besar hambatan</td>
				            <td>:</td>
				            <td><?php 
								if($ke2 == true){
									echo $mess2; 
								?>
										<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="10%">
								<?php
									}else{
										echo $mess2;
								?>
										<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="10%">
								<?php 
									}   
								?></td>
				          </tr>
				          <tr>
				            <td>Toleransi</td>
				            <td>:</td>
				            <td><?php 
								if($ke3 == true){
									echo $mess3; 
								?>
										<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="10%">
								<?php
									}else{
										echo $mess3;
								?>
										<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="10%">
								<?php 
									}   
								?></td>
				          </tr>
				        </table>
	       			</div>

	       			<div class="col-lg-6 text-left" style="background-color: #89C4F4; padding-top: 10px">
	       				<h6 style="text-align: center;">Jawaban yang benar:</h6><br>
	       				Pertanyaan: <br>
	       				Perhatikan gambar berikut. <br>
				        <img src="<?php echo base_url('assets/soal2/no4.png') ?>" width="30%"> <br>
				  		Nilai dari hambatan dan toleransi hambatan tersebut adalah... <br><br> 
				        Jawaban: <br> 
				        <table style="margin-left: 20px">
				          <tr>
				            <td>Daya</td>
				            <td>:</td>
				            <td>20 watt</td>
				          </tr>
				          <tr>
				            <td>Besar hambatan</td>
				            <td>:</td>
				            <td>120 ohm</td>
				          </tr>
				          <tr>
				            <td>Toleransi</td>
				            <td>:</td>
				            <td>10%</td>
				          </tr>
				        </table>
	       			</div>
       			</div>
       			
       		
       	<?php } ?>

       	<br><br><br>
       	<a href="<?php echo site_url('soal2/no5') ?>">
       		<input type="submit" value="SOAL SELANJUTNYA" width="100%" type="button" class="btn btn-info" style="width: 100%">
       	</a>
    	<br><br>	
    </div>
  </div>
</div>