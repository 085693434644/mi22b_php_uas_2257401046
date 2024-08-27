<?php
/**
 * Nama : Edo Nuralimin
 * Nim  : 2257401046
 * Kelas : MI22B 
 */
?>
<?php 
    session_start();
    if (!isset($_SESSION['user'])) {
        $_SESSION['error'] = "Login dahulu";
        header('location: login.php');
    }
?>