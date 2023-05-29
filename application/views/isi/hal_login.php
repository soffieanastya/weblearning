

	  <div class="container text-center" style="margin-top: 200px;">
	    <div class="row">
	        <div class="col-lg-5 mx-auto text-left">

			  <form action="<?php echo site_url('siskom/aksilogin'); ?>" method="post">
				<h3 style="text-align: center;">LOG IN</h3>
				<TABLE style="margin-top: -30px">
					<?php $message = null; ?>
					
					<TR>
						<td>Nama Akun</td>
						<td width="80px"></td>
						<td>:</td>
						<td width="10px"></td>
						<td><input type="text" name="username" placeholder="Nama akun" class="form-control" id="usr" required></td><br>
					</TR>

					<TR>
						<td>Kata Sandi</td>
						<td width="30px"></td>
						<td>:</td>
						<td width="10px"></td>
						<td><input type="password" name="password" placeholder="password" class="form-control" id="usr" required></td><br>
					</TR>
					<tr style="">
						<td  colspan="5" style="text-align: right; padding-top: 10px; padding-bottom: 10px">
							<a class="portfolio-item mx-auto" href="#hint">
	                          Bantuan
	                        </a>
						</td>
					</tr>
					<?php if($notfound != null){ ?>
						<tr>
							<td  colspan="5" style="text-align: right; padding-top: 10px; padding-bottom: 10px">
								<?php echo $notfound; ?>
							</td>
						</tr>
					<?php } ?>
					<tr>
						<td colspan="5" style="text-align: center; color: red">	
							<input type="submit" value="MASUK" type="button" class="btn btn-info" style="width: 100%">
						</td>
					</tr>
				</TABLE>
			  </form>
			</div> 
		</div> 
	</div> 

		<!-- modals -->
	<div class="portfolio-modal mfp-hide mx-auto" id="hint" align="center">
	    <div class="portfolio-modal-dialog bg-white" style="width: 450px;">
	      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
	        <i class="fa fa-3x fa-times"></i>
	      </a>
	      <div class="text-center">
	            <h3 class="text-secondary text-uppercase mb-0">BANTUAN</h3>
	            <br>
	            <p class="mb-5" align="justify">
	            	<ul class="text-left">
	                Pada bagian:
	            		<li>
	            			<b>Nama pengguna</b>,<br>diisi sesuai dengan nama kamu yang telah saya berikan.
	            		</li>
	            		<li>
	            			<b>Kata sandi</b>, <br>diisi sesuai dengan kata sandi yang telah saya berikan bersama dengan nama pengguna yang saya berikan.
	            		</li>
	            		<li>
	            			<b>Masuk</b> <br>merupakan tombol yang dapat kamu klik setelah mengisi nama pengguna dan kata sandi.
	            		</li>
	            	</ul>
	            </p>
	            <br><br><br>
	            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
	              <i class="fa fa-close"></i>
	              Close
	            </a>
	      </div>
	    </div>
	  </div>
