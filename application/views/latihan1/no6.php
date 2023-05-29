
<div class="container" style="margin-top: 130px">
  <div class="row">
    <div class="col-lg-7 mx-auto" >
        <h2 class="text-secondary text-uppercase mb-0" style="text-align: center;">LATIHAN</h2>
    	<br><br><br>
    	<form action="<?php echo site_url('soal/aksi_latihan6'); ?>" method="post">		
			Soal no 6<br><br>
            Perhatikan gambar komponen elektronika berikut <br>
            <img src="<?php echo base_url('assets/soal1/6.png') ?>" width="50%"><br><br>
            Besar resistansi resistor tersebut adalah &ensp;<input type="text" name="jawaban1" required> <br>
            Toleransi dari resistor tersebut adalah &ensp;<input type="text" name="jawaban2" required>

			<br><br><br>
    			
            <div style="text-align: right;">
                <table align="right">
                    <tr>
                        <td style="text-align: left; text-align: right; width: 60px" >
                              <a class="portfolio-item mx-auto" href="#hint" style="width: 0%">
                                <img src="<?php echo base_url('assets/img/hint.png') ?>" width="70%" alt="" align="right"> 
                              </a>
                        </td>
                        <td style="width: 20px"></td>
                        <td style="text-align: right;">
                            <input type="submit" value="NEXT" type="button" class="btn btn-info">
                        </td>
                    </tr>
                </table>
            </div>
            
    	</form>
    </div>
  </div>
</div>

<!-- MODALS -->
  <div class="portfolio-modal mfp-hide mx-auto" id="hint" align="center">
    <div class="portfolio-modal-dialog bg-white" style="width: 60%; height: 100px">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="text-center">
            <h3 class="text-secondary text-uppercase mb-0">Petunjuk</h3>
            <br>
            <p class="mb-5" align="justify">
                Terdapat tiga jenis kondisi yang memungkinkan pada potensial listrik, yaitu potensial listrik tinggi, rendah, dan netral.
            </p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close
            </a>
      </div>
    </div>
  </div>