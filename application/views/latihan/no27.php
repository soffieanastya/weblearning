
<div class="container" style="margin-top: 130px">
  <div class="row">
    <div class="col-lg-7 mx-auto">
        <h2 class="text-secondary text-uppercase mb-0" style="text-align: center;">LATIHAN</h2>
    	<br><br>
    	<form action="<?php echo site_url('soal_pemanasan/aksi_relay'); ?>" method="post">	
			Normally open pada relay merupakan relay yang akan &ensp;<input type="text" name="jawaban1" required> bila dialiri arus listrik. <br/><br><br>

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


  <div class="portfolio-modal mfp-hide mx-auto" id="hint" align="center">
    <div class="portfolio-modal-dialog bg-white" style="width: 60%; height: 100px">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="text-center">
            <h3 class="text-secondary text-uppercase mb-0">Petunjuk</h3>
            <br>
            <p class="mb-5" align="justify">
              Susunan kontak pada relay yaitu normally open, normally close, serta changeover.
            </p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close
            </a>
      </div>
    </div>
  </div>