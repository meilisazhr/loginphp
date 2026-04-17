<?php
session_start();

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username & password sederhana (bisa kamu ganti)
    if ($username === "admin" && $password === "12345") {
        $_SESSION['login'] = true;
        header("Location: index.php#admin");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center" style="height:100vh; background:#eef1f7;">

<div class="card p-4 shadow" style="width:350px;">
    <h4 class="text-center mb-3">Login Admin</h4>

    <?php if ($error) : ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" class="form-control mb-3" placeholder="Username">
        <input type="password" name="password" class="form-control mb-3" placeholder="Password">
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
    </form>
</div>

</body>
</html>
