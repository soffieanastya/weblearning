
      <div class="col-lg-3" style="padding-top: 20px; border: groove;">
        <h4>Halo, <?php echo $this->fungsi->user_login()->nama_lengkap; ?>!</h4>
        <img src="<?php echo base_url('assets/img/profile2.jpg') ?>" width="100%">
        <p align="center">
          _________
        </p><br>
        <h5>TABLE OF CONTENT</h5>
        <div style="padding: 10px; text-align: left;">
            <a href="<?php echo site_url('c_auditori/kelistrikan') ?>">Kelistrikan</a>
        </div>
        <div style="padding: 10px; text-align: left;">
            <a href="<?php echo site_url('c_auditori/potensial') ?>">Potensial Listrik</a>
        </div>
        <div style="padding: 10px; text-align: left;">
            <a href="<?php echo site_url('c_auditori/arus') ?>">Kuat Arus Listrik</a>
        </div>
        <div style="padding: 10px; text-align: left; ">
            <a href="<?php echo site_url('c_auditori/bedapotensial') ?>">Beda Potensial/Tegangan</a>
        </div>
        <div style="padding: 10px; text-align: left; ">
            <a href="<?php echo site_url('c_auditori/resistansi') ?>">Resistansi</a>
        </div>
        <div style="padding: 10px; text-align: left; " class="c">
            <a href="<?php echo site_url('c_auditori/daya') ?>">Daya Listrik</a>
        </div>
      </div>
    </div>
  </div>

<!--   <script>
      $(document).ready(function(){
        $('.col-lg-3').mouseenter(function(){
            $('.col-lg-3').css('color','red')
        });
      });
  </script> -->