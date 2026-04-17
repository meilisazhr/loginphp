<div class="d-flex justify-content-center align-items-center" style="min-height:100vh; background:#eef1f7;" id="admin">

<?php if (!isset($_SESSION['login'])) : ?>

    <div class="text-center">
        <h4>Silakan login untuk mengakses Admin Panel</h4>
        <a href="login.php" class="btn btn-primary mt-3">Login</a>
    </div>

<?php else : ?>

    <div class="card shadow border-0 p-4" style="max-width:400px; width:100%; border-radius:15px;">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="fw-bold mb-2">Manage Posts</h4>
                <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
            </div>
