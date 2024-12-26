<?php
// Mulai atau lanjutkan session
session_start();

// Hapus semua data session
session_unset();
session_destroy();

// Arahkan pengguna kembali ke halaman login
header("Location: login.php");
exit();
?>
