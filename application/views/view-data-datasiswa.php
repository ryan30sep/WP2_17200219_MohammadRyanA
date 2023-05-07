<html>
<head>
 <title>Tampil Data Di-Lemas Siswa</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Tampil Data Di-Lemas Siswa
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nama Siswa</th>
 <th>:</th>
 <td>
 <?= $nama; ?>
 </td>
 </tr>
 <tr>
 <th>Nomor Induk Sekolah</th>
 <td>:</td>
 <td>
 <?= $nis; ?>
 </td>
 </tr>
 <tr>
 <th>Kelas</th>
 <td>:</td>
 <td>
 <?= $kelas; ?>
 </td>
 </tr>
 <tr>
 <th>Tanggal Lahir</th>
 <th>:</th>
 <td>
 <?= $tanggallahir; ?>
 </td>
 </tr>
 <tr>
 <th>Tempat Lahir</th>
 <th>:</th>
 <td>
 <?= $tempatlahir; ?>
 </td>
 </tr>
 <tr>
 <th>Alamat Tinggal</th>
 <th>:</th>
 <td>
 <?= $alamattinggal; ?>
 </td>
 </tr>
 <tr>
 <th>Jenis Kelamin</th>
 <th>:</th>
 <td>
 <?= $jeniskelamin; ?>
 </td>
 </tr>
 <tr>
 <th>Agama</th>
 <th>:</th>
 <td>
 <?= $agama; ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('datasiswa'); 
?>">Kembali</a>
 </td>
 </tr>
 </table>
 </center>
 </body>
</html>