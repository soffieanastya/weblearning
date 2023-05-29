<div class="container" style="margin-top: 120px">
 <div class="row">
      <!-- <div class="col-lg-2" style="background: green"></div> -->
  <div class="col-lg-8 mx-auto" >
    <h2 class="text-secondary text-uppercase mb-0" style="text-align: center;">LATIHAN</h2>
    <br>	
	<?php echo validation_errors(); ?>
	<?php echo form_open('soal/latihan2'); ?>
	<div class="list">
	  <ol type="1">
	  	<li id="1">
	  		
	  		Jika jumlah elektron lebih sedikit dari jumlah proton, maka benda tersebut memiliki potensial listrik 
			<input type="text" name="1"><br/>
			<div  style="text-align: right;">
				<button class="next" id="btn">NEXTTT</button>
			</div>
			<?php echo form_error('1'); ?>
			
	  	</li>
	  	<li id="2">
	  		Arus listrik <input type="text" name="2"> biasanya digunakan untuk alat listrik ber-kekuatan/daya kecil
	  		
			<?php echo form_error('2'); ?>
	  	</li>
	  	<li id="3">
	  		Satuan untuk mengukur beda potensial adalah
	  		<input type="text" name="3"><br/>
			<?php echo form_error('3'); ?>
	  	</li>
	  	
		
	  </ol>
	</div>


		
	</form>
   </div>
 </div>
</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn').click(function(){
				var nomor = $(this).attr('id');
				if(nomor == "1"){
					$('#1').hide();
					$('#2').show();
					$('#3').hide();
				}else if(nomor == "2"){
					$('#1').hide();
					$('#2').hide();
					$('#3').show();
				}
				
			});
			$('#1').show();
			$('#2').hide();
			$('#3').hide();
		}); 
	</script>

<br><br><br><br><br><br><br>