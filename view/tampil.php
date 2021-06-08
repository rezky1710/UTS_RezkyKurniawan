<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>

	<link rel="stylesheet" href="../model/tampil.css">
</head>

<body>

    <h1 style="text-align: center;">Welcome, Administrator</h1>
    <h1 class="tiga"><a href="InsertData.php">Insert Data</a></h1>
	<div class="table-users"></div>
    <?php include "../model/database.php"; 
	$db = new database() ?>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th align="Center">No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
			<th>Aksi</th>
        </tr>
        <?php
	$no = 1;
	foreach ($db->tampil_data() as $x) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['username']; ?></td>
		<td><?php echo $x['email']; ?></td>
		<td><?php echo $x['password'] ?></td>
		<td>
		<a class="dua" href="UpdateData.php?id=<?php echo $x['id']; ?>">Edit</a>
        <a class="satu" href="../controller/proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Delete</a>
		</td>
	</tr>
	<?php } ?>
    </table>

</body>

</html>