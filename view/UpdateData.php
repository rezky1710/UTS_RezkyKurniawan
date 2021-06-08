<html>

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="../model/insert.css">
</head>

<body>

    <?php include "../model/database.php";
    $db = new database();
	foreach ($db->edit($_GET['id']) as $d) {
    ?>

    <div class="login-box">
        <h2>Edit Data</h2>
        <form method="POST" action="../controller/proses.php?aksi=update">
            <div class="user-box">
                <input type="text" name="username" value="<?php echo $d['username']; ?>" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" value="<?php echo $d['email']; ?>" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="password" value="<?php echo $d['password']; ?>" required="">
                <label>Password</label>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            </div>

            <button style="background-color: transparent; outline:none; border:none;">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit</button>
                    <?php }?>
        </form>
    </div>
</body>

</html>