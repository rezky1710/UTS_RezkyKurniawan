<?php
include '../model/database.php';
$db = new database();
?>

<h1>Politeknik Caltex Riau</h1>
<h2>Edit Data Mahasiswa</h2>

<form action="../controller/proses.php?aksi=update" method="post">
	<?php
	foreach ($db->edit($_GET['id']) as $d) {
	?>
	<table>
		<tr>
			<td>Prodi</td>
        	<td>
            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
            <select name="prodi">
                <?php
                if($d['prodi'] == "Program Reguler D-III dan D-IV"){
                ?>
                <option value="<?php echo $d['prodi'] ?>"><?php echo $d['prodi'] ?></option>
                <option value="Program Magister">Program Magister</option>
                <option value="Program Non Reguler SLTA ke D-III">Program Non Reguler SLTA ke D-III</option>
                <option value="Program Alih Jenjang D-III ke D-IV">Program Alih Jenjang D-III ke D-IV</option>
                <?php }
                elseif($d['prodi'] == "Program Magister"){
                ?>
                <option value="<?php echo $d['prodi'] ?>"><?php echo $d['prodi'] ?></option>
                <option value="Program Reguler D-III dan D-IV">Program Reguler D-III dan D-IV</option>
                <option value="Program Non Reguler SLTA ke D-III">Program Non Reguler SLTA ke D-III</option>
                <option value="Program Alih Jenjang D-III ke D-IV">Program Alih Jenjang D-III ke D-IV</option>
                <?php }
                elseif($d['prodi'] == "Program Non Reguler SLTA ke D-III"){
                ?>
                <option value="<?php echo $d['prodi'] ?>"><?php echo $d['prodi'] ?></option>
                <option value="Program Reguler D-III dan D-IV">Program Reguler D-III dan D-IV</option>
                <option value="Program Magister">Program Magister</option>
                <option value="Program Alih Jenjang D-III ke D-IV">Program Alih Jenjang D-III ke D-IV</option>
                <?php }
                elseif($d['prodi'] == "Program Alih Jenjang D-III ke D-IV"){
                ?>
                <option value="<?php echo $d['prodi'] ?>"><?php echo $d['prodi'] ?></option>
                <option value="Program Reguler D-III dan D-IV">Program Reguler D-III dan D-IV</option>
                <option value="Program Magister">Program Magister</option>
                <option value="Program Non Reguler SLTA ke D-III">Program Non Reguler SLTA ke D-III</option>
                <?php } ?>
            </select>
        	</td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="nama" value="<?php echo $d['nama'] ?>" required> </td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $d['email'] ?>" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Simpan"></td>
		</tr>
	</table>
	<?php }?>
</form>