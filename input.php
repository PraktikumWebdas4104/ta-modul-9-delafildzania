<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td>Genre Film </td>
		<td><select name="genre" >
				<option value="Horror">Horror</option>
				<option value="Action">Action</option>
				<option value="Anime">Anime</option>
				<option value="Anime">Thriller</option>
				<option value="Drama">Animasi</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Tempat Wisata </td>
		<td><select name="wisata">
				<option value="Bali">Bali</option>
				<option value="Raja Ampat">Raja Ampat</option>
				<option value="Pulau Derawan">Pulau Derawan</option>
				<option value="Bangka Belitung">Bangka Belitung</option>
				<option value="Labuan Bajo">Labuan Bajo</option>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
