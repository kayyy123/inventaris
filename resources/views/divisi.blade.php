<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets\css/login.css">
</head>
<body>
    <!-- start navbar -->
    <nav class="navbar">
        <div class="navigation">
            <ul>
                <li><a href="owner.php?page=active">Owner</a></li>
                <li><a href="admin.php?page=active">Admin</a></li>
                <li><a href="divisi.php?page=active">Divisi</a></li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->
    <div class="container">
        <h3>PT. INVENTARIS ADITYA NAUFAL</h3><br>
        <h5>LOGIN AS</h5>
    <form action="" method="">
        <div class="input-box">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" maxlength="32" required>
        </div>
        <div class="input-box">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" maxlength="16" required>
        </div>
        <button type="submit">
            <label>LOGIN</label>
        </button>
    </form>
    </div>
</body>
</html>