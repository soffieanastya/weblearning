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
	       				Dua buah kapasitor dirangkai seri dengan nilai C1 = 40 µF dan C2 = 20 µF. Berapakah nilai kapasitansi kapasitor tersebut?<br>
				        Jawaban: <br> <br> 
				        <!-- Diketahui:
				        <table style="margin-left: 20px">
				          <tr>
				            <td>$C_1$</td>
				            <td>=</td>
				            <td>40</td>
				          </tr>
				          <tr>
				            <td>$C_2$</td>
				            <td>=</td>
				            <td><?php 
								//if($ke2 == true){
									//echo $mess2; 
								?>
										//<img src="<?php //echo base_url('assets/soal2/checklist.png') ?>" width="10%">
								<?php
									//}else{
										//echo $mess2;
								?>
										//<img src="<?php //echo base_url('assets/soal2/x.png') ?>" width="10%">
								<?php 
									}   
								?></td>
				          </tr>
				        </table>
				        Ditanyakan: C...? <br>
				        Jawab: <br>
				        $\frac {1}{C} = \frac {1}{C_1} + \frac {1}{C_2}$ <br>
				        $\frac {1}{C} = \frac {1}{40} + \frac {1}{20}$ <br>
				        $\frac {1}{C} = \frac {40+20}{800}$ <br>
				        $\frac {1}{C} = \frac {60}{800}$ <br>
				        $\frac {800}{60} = C$ <br> -->
				        C = <?php 
								if($ke1 == true){
									echo $mess1 ."µF"; 
								?>
										<img src="<?php echo base_url('assets/soal2/checklist.png') ?>" width="10%">
								<?php
									}else{
										echo $mess1 ." µF"; 
								?>
										<img src="<?php echo base_url('assets/soal2/x.png') ?>" width="5%">
								<?php 
									}   
								?>  <br><br>
	       			</div>

	       			<div class="col-lg-6 text-left" style="background-color: #89C4F4; padding-top: 10px">
	       				<h6 style="text-align: center;">Jawaban yang benar:</h6><br>
	       				Pertanyaan: <br>
	       				Dua buah kapasitor dirangkai seri dengan nilai C1 = 40 µF dan C2 = 20 µF. Berapakah nilai kapasitansi kapasitor tersebut?<br>
				        Jawaban: <br> <br> 
				        <img src="<?php echo base_url('assets/soal2/no5b.png') ?>">
				        <!-- Diketahui:
				        <table style="margin-left: 20px">
				          <tr>
				            <td>$C_1$</td>
				            <td>=</td>
				            <td>40</td>
				          </tr>
				          <tr>
				            <td>$C_2$</td>
				            <td>=</td>
				            <td>20</td>
				          </tr>
				        </table>
				        Ditanyakan: C...? <br>
				        Jawab: <br>$\boxed {\frac {1}{R_total} = \frac {1}{R_1} + \frac {1}{R_2} + ... + \frac {1}{R_n}}$<br>
				        ${\frac {1}{C} = \frac {1}{C_1} + \frac {1}{C_2}}$ <br>
				        $\frac {1}{C} = \frac {1}{40} + \frac {1}{20}$ <br>
				        $\frac {1}{C} = \frac {40+20}{800}$ <br>
				        $\frac {1}{C} = \frac {60}{800}$ <br>
				        $\frac {800}{60} = C$ <br>
				        C = 13.333 µF <br><br> -->
				        <br><br>
	       			</div>
       			</div>
       	<br><br>
       	<a href="<?php echo site_url('soal2/no6') ?>">
       		<input type="submit" value="SOAL SELANJUTNYA" width="100%" type="button" class="btn btn-info" style="width: 100%">
       	</a>
    	<br><br>	
    </div>
  </div>
</div>