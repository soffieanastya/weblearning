
<div class="container" style="margin-top: 130px">
  <div class="row">
    <div class="col-lg-7 mx-auto">
    	<form action="<?php echo site_url('soal2/aksi_latihan4'); ?>" method="post">		
  			<h3 style="text-align: center;">Soal no 4</h3><br>
        Perhatikan gambar berikut. <br>
        <img src="<?php echo base_url('assets/soal2/no4.png') ?>" width="30%"> <br>
  			Nilai dari hambatan dan toleransi hambatan tersebut adalah... <br><br> 
        Jawaban: <br> 
        <table style="margin-left: 20px">
          <tr>
            <td>Daya</td>
            <td>:</td>
            <td><input type="text" name="jawaban1" required></td>
          </tr>
          <tr>
            <td>Besar hambatan</td>
            <td>:</td>
            <td><input type="text" name="jawaban2" required></td>
          </tr>
          <tr>
            <td>Toleransi</td>
            <td>:</td>
            <td><input type="text" name="jawaban3" required+></td>
          </tr>
        </table>
        <br><br>  
        <div>
          <input type="submit" value="NEXT" type="button" class="btn btn-info" style="width: 100%"> 
        </div>
    	</form>
    </div>
  </div>
</div>