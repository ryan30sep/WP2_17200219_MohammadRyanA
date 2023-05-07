<html>
<head>
 <title>Form Input Di-Lemas Data Siswa</title>
</head>
<body>
 <center>
 <?php echo validation_errors(); ?>
 <form action="<?= base_url('datasiswa/cetak'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Di-Lemas Data Siswa
 </th>
 </tr>
 <tr>
 <td colspan="3"<hr>
 </td>
 </tr>
 <tr>
 <th>Nama Siswa</th>
 <th>:</th>
 <td>
 <input type="text" name="nama" id="nama">
 </td>
 </tr>
 <tr>
 <th>Nomor Induk Sekolah</th>
 <td>:</td>
 <td>
 <input type="text" name="nis" id="nis">
 </td>
 </tr>
 <tr>
 <th>Kelas</th>
 <td>:</td>
 <td>
 <input type="text" name="kelas" id="kelas">
 </td>
 </tr>
 <tr>
 <th>Tanggal Lahir</th>
 <td>:</td>
 <td>
 <input type="text" name="tanggallahir" id="tanggallahir">
 </td>
 </tr>
 <tr>
 <th>Tempat Lahir</th>
 <td>:</td>
 <td>
 <input type="text" name="tempatlahir" id="tempatlahir">
 </td>
 </tr>
 <tr>
 <th>Alamat Tinggal</th>
 <td>:</td>
 <td>
 <input type="text" name="alamattinggal" id="alamattinggal">
 </td>
 </tr>
 <tr>
 <th>Jenis Kelamin</th>
 <td>:</td>
 <td>
 <input type="radio" name="jeniskelamin" value="Laki-laki"> Laki-laki<br>
 <input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan<br>
 </td>
 </tr>
 <tr>
 <th>Agama</th>
 <td>:</td>
 <td>
 <select name="agama" id="agama">
 <option value="islam">Islam</option>
 <option value="kristen">Kristen</option>
 <option value="katolik">Katolik</option>
 <option value="budha">Budha</option>
 <option value="hindu">Hindu</option>
 <option value="protestan">Protestan</option>
 <option value="khonghucu">Khonghucu</option>
 </select>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>