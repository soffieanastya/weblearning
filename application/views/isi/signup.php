<?php //echo form_open('siskom/signup') ?>
<h3>SIGN UP</h3>
<TABLE border=0>
	<?php $message = null; ?>
	<TR>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap Siswa"></td><br>
	</TR>

	<TR>
		<td>E-mail</td>
		<td>:</td>
		<td><input type="email" name="email" placeholder="E-mail Aktif"></td><br>
	</TR>

	<TR>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" placeholder="Username"></td><br>
	</TR>

	<TR>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password" placeholder="Password"></td><br>
	</TR>



</TABLE>

<?php 
	//echo form_submit('submit', 'SIGN-UP');
	//echo form_close();
?>