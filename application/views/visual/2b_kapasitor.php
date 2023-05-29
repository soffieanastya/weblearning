 
  <!-- materi pokok -->
  <div class="container text-center"  style="margin-top: 120px">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class="text-secondary text-uppercase mb-0">KAPASITOR</h2>
        
        <p class="text_content">
            Kapasitor merupakan salah satu jenis komponen elektronika yang memiliki kemampuan untuk <b>menyimpan muatan listrik</b> selama waktu tertentu. Meski mempunyai kesamaan dapat menyimpan listrik, kapasitor berbeda dengan accumulator (aki). ketika menyimpan listrik tidak terjadi proses perubahan secara kimiawi. <!-- Pada dasarnya, kapasitor mempunyai dua buah lempengan pelat metal (masing-masing memiliki muatan positif dan negatif) yang dipisahkan oleh bahan dielektrik seperti hampa udara, bahan gelas, dan keramik. Pada saat kedua kaki kapasitor dialiri arus listrik, muatan positif akan mengalir ke salah satu lempengan, sedangkan muatan negatif akan menuju ke lempengan kaki lainnya. Namun, kedua muatan tersebut tidak saling terhubung karena terpisah oleh bahan dielektrik tersebut. -->
        </p>
        <p class="text_content">
            <b>Besaran kapasitas</b> sebuah komponen kapasitor untuk menampung muatan elektron disebut dengan <b>kapasitansi</b> yang diukur dalam satuan <b>farad (F)</b>. Teori faraday menjelaskan bahwa sebuah kapasitor memiliki kemampuan menampung muatan listrik sebesar 1F jika diberikan tegangan sebesar 1 V atau dapat menampung elektron sebesar 1 C. 1 C = 6,25 x 1018 elektron. Dengan demikian, dapat dirumuskan sebagai berikut.
        </p>
        <p align="justify">
            <b>Q = C . V</b> <br>
            Dengan: <br>
            Q = banyaknya muatan elektron (C) <br>
            C = besar kapasitansi (F) <br>
            V = besar tegangan (V) <br><br>
        </p>

            Satuan kapasitansi: <br>
            <img src="<?php echo base_url('assets/img/komponen/kap1.png') ?>"><br><br>
        <p align="justify">  
            Berikut konversi beberapa jenis satuan kapasitansi: <br> 
            1 F = 106 µF (mikrofarad) <br>
            1 F = 109 nF (nanofarad) <br>
            1 F = 1012 pF (pikoFarad) <br>
        </p> 
        <!-- <p class="text_content">
            Pada saat membuat kapasitor, perlu diperhatikan besar kapasitansi yang akan dihasilkan berdasarkan rumus berikut.
        </p>

        <p align="justify">
            C = (8,85 x 10<sup>-12</sup>)(k A/t)
            <br><br>
            Dengan: <br>
            C = nilai kapasitansi (F) <br>
            k = nilai konstanta setiap bahan dielektrik <br>
            A = luas pelat <br>
            t = jarak antara pelat kapasitor <br>
            Nilai konstanta bahan dielektrik <br><br>
        </p> -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Bahan</td>
                    <td>Konstanta</td>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>Polietilen</td>
                <td>3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Keramik</td>
                <td>100 - 1000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Hampa udara</td>
                <td>1</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Gelas</td>
                <td>8</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alumunium oksida</td>
                <td>8</td>
            </tr>
        </table>

        <ol align="justify">
            <li>
                <b>Jenis kapasitor</b>
                <p>
                    Seperti halnya resistor, komponen elektronika berupa kapasitor juga dibedakan menjadi dua jenis yaitu:

                    <ol type="a">
                        <li>
                            <b>Kapasitor tetap</b>
                            <p class="text_content">
                                Kapasitor tetap merupakan jenis kapasitor yang memiliki <b>besaran kapasitansi secara tetap</b> dan tidak berubah-ubah. Berdasarkan sifat-sifat elektroda kaki-kaki pada kapasitor dapat diklasifikasikan menjadi dua jenis antara lain sebagai berikut

                                <ol>
                                    <li>
                                        <b>Kapasitor non polar</b>
                                        <p class="text_content">
                                            Pada kedua kaki elektroda kapasitor, <b>tidak memiliki perbedaan</b> jenis muatan yang bersifat positif atau negatif sehingga dalam pemasangannya dapat dibalik. Besar kapasitansi jenis ini relatif kecil, yaitu kurang dari 1 µF, dengan satuan nF sampai pF.
                                        </p>

                                        <img src="<?php echo base_url('assets/img/komponen/kap2.png') ?>">

                                    </li>
                                    <li>
                                        <b>Kapasitor polar</b>
                                        <p class="text_content">
                                            Berbeda dengan jenis kapasitor nonpolar, tipe kapasitor polar <b>memiliki elektrode positif dan negatif</b> sehingga dalam pemasangannya tidak boleh terbalik.
                                        </p>
                                        <p>
                                            Untuk membedakan kaki elektrode negatif dapat dilihat dari strip yang berwarna berbeda dengan badannya atau terdapat tanda minus (-) pada salah satu bagian badannya.
                                        </p>
                                        <p>
                                            Biasanya pada badan kapasitor terdapat informasi angka seperti 20 µF yang 22 V. angka tersebut memiliki pengertian bahwa kapasitor tersebut memiliki daya simpan sebesar 20 µF yang bekerja pada tegangan berukuran 22 V. contoh jenis kapasitor polar antara lain kapasitor elektrolit dan tantalum.
                                        </p>
                                        <img src=" <?php  echo base_url('assets/img/komponen/kap3.png') ?>">
                                    </li>

                                </ol>
                            </p>
                        </li>

                        <li> 
                            <b>Kapasitor tidak tetap (variabel)</b>
                            <p class="text_content">
                                Kapasitor tidak tetap merupakan <b>jenis kapasitor yang dapat diatur</b> dan diubah-ubah nilai besaran kapasitansinya.
                            </p>
                            <p>
                                Kapasitor jenis ini sering digunakan dalam hal pencarian gelombang frekuensi radio. Selain itu, juga sering digunakan dalam membangkitkan frekuensi osilator LC, seperti tuning radio penerima, pemancar gelombang radio, rangkaian blitz, adaptor, penghambat aliran arus listrik DC, kopling sinyal, dan sebagai komponen penguat frekuensi tingkat menengah.
                            </p>
                            <img src="<?php echo base_url('assets/img/komponen/kap4.png') ?>">
                        </li>
                    </ol>
                </p>
            </li>
            <!-- <li>
                Rangkaian kapasitor
                <ol>
                    <li>
                        Rangkaian seri
                        <p class="text_content">
                            Pada jenis rangkaian ini, kapasitor dihubungkan secara seri, saling terhubung satu sama lainnya. Kondidi ini mengakibatkan daya hambatan listrik menjadi besar dengan total kapasitansinya menjadi lebih rendah karena hitungan dielektrikanya menjadi lebih tebal.
                        </p>
                        
                        <img src="<?php //echo base_url('assets/img/komponen/kapseri.png') ?>">
                        <br><br>
                        <p>
                            Dari gambar rangkaian seri kapasitor tersebut diperoleh rumus
                        </p>
                        <p>
                            V = V<sub>1</sub> + V<sub>2</sub> + V<sub>3</sub>
                        </p>
                        <p class="text_content">
                            Dengan V adalah besar tegangan total yang dialirkan ke rangkaian seri tersebut. Sementara itu, untuk mencari nilai tegangan di setiap titik kapasitor memiliki rumus sebagai berikut.
                        </p>
                        $ V_n = \frac {Q_n}{C_n} $
                        <br><br>
                        Dengan <br>
                        V = besar tegangan di tiap titik (V) <br>
                        Q = banyaknya muatan elektron (C) <br>
                        C = besar kapasitansi dalam F (F) <br><br>

                        Sehingga <br>
                        $\frac {Q}{C} = \frac{Q_1}{C_1} + \frac{Q_2}{C_2} + \frac{Q_3}{C_3} $
                        <br>
                        <p class="text_content">
                            Rumus tersebut dapat disederhanakan untuk mencari besar total kapasitansi dari rangkaian seri kapasitor yaitu sebagai berikut
                        </p>
                        $\frac {1}{C} = \frac{1}{C_1} + \frac{1}{C_2} + \frac{1}{C_3} $ <br>
                    </li>
                    <br>
                    <li>
                        Rangkaian paralel
                        <p class="text_content">
                            Rangkaian paralel merupakan rangkaian kapasitor yang dihubungkan secara berjajar. Setiap kaki kapasitor langsung terhubung dengan sumber tegangan sehingga jika salah satu kapasitor mati, rangkaian elektronika masih tetap hidup.
                        </p>
                        <img src="<?php //echo base_url('assets/img/komponen/kappar.png') ?>"><br><br>
                        <p class="text_content">
                            Dari rangkaian paralel tersebut, dapat disimpulkan bahwa setiap tegangan yang mengalir, memiliki besaran yang sama dengan sumber tegangan. Dengan demikian, diperoleh rumus berikut.
                        </p>
                        V = V<sub>1</sub> = V<sub>2</sub> = V<sub>3</sub>
                        <br>
                        <p class="text_content">
                            Besar muatan elektron (Q) total dalam rangkaian merupakan penjumlahan setiap Q pada masing-masing titik sehingga dapat dirumuskan sebagai berikut.
                        </p>
                        Q<sub>t</sub> = Q<sub>1</sub> + Q<sub>2</sub> + Q<sub>3</sub> 
                        <br>
                        V<sub>t</sub>C<sub>t</sub> = V<sub>1</sub>C<sub>1</sub> + V<sub>2</sub>C<sub>2</sub> + V<sub>3</sub>C<sub>3</sub>
                        <br><br>
                        <p class="text_content">
                            Jika setiap titik kapasitor memiliki tegangan yang sama, maka besar kapasitansi memiliki perhitungan rumus sebagai berikut.
                        </p>
                        C = C<sub>1</sub> = C<sub>2</sub> = C<sub>3</sub>
                        <br><br>                       
                    </li>
                </ol>
            </li> -->
        </ol>
        <div class="row">
            <div class="col-lg-3 text-left" style="padding-top: 50px; padding-bottom: 50px">
              <a href="<?php echo site_url('materi') ?>" >
                <img src="<?php echo base_url('assets/img/sebelumnya.png') ?>" width="100%">
              </a>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-3 text-right" style="padding-top: 50px; padding-bottom: 50px">
                <a href="<?php echo site_url('soal_pemanasan/kapasitor') ?>" >
                  <img src="<?php echo base_url('assets/img/selanjutnya.png') ?>" width="100%">
                </a>
            </div>
        </div>
      </div>
