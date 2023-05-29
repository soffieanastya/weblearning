
  <!-- materi pokok -->
  <div class="container text-center" style="margin-top: 120px">
    <div class="row">
      <!-- <div class="col-lg-2" style="background: green"></div> -->
      <div class="col-lg-8 mx-auto">
        <h3>Daftar nama siswa</h3>
        <div class="text-left">
          <?php 
            foreach($data as $baris){
          ?>
            <?php 
              echo $baris->nama_lengkap; //$pertanyaan disini bukan dilempar dari extract diatas, tapi kolom dari database asalnya
            ?> <br><br>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>