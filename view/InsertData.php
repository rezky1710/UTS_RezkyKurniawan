<html>

<head>
    <title>Insert Data</title>
    <link rel="stylesheet" href="../model/insert.css">
</head>

<body style="background-color: lightgoldenrodyellow;">
    <div class="login-box">
        <h2>Insert Data</h2>
        <form method="POST" action="../controller/proses.php?aksi=tambah">
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="password" required="">
                <label>Password</label>

                <button style="background-color: transparent; outline:none; border:none;">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit</button>
        </form>
    </div>
</body>

</html>