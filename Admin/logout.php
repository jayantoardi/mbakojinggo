<?php
session_destroy();
echo "<script>alert('anda telah logout');</script>
<script>location='login.php';</script>";
?>