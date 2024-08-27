<?php
/**
 * Nama : Edo Nuralimin 
 * Nim  : 2257401046
 * Kelas : MI22B 
 */
?>

<?php 
    session_start();

    session_destroy();
    session_unset();

    header('location: login.php');
?>