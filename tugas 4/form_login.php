<?php
function cekLogin($username, $password)
{

    $adminUsername = 'admin';
    $adminPassword = 'mimin';

    if ($username === $adminUsername && $password === $adminPassword) {

        header('Location: admin.php');
        exit();
    } else {
        echo 'Username atau password salah.';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['pass'];
    $proses = $_POST['proses'];

    if (isset($proses)) {
        cekLogin($inputUsername, $inputPassword);
    }
}
?>
<form action="" method="POST">
    <label for="">Username</label><br>
    <input type="text" name="username"><br>
    <label for="">Password</label><br>
    <input type="password" name="pass"><br>
    <input type="submit" name="proses" value="Login">
</form>