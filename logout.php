<?php

session_start();
session_destroy();
echo "<script>alert('vous avez déconnecté')</script>";
echo "<script>window.open('index.php','_self')</script>";

?>