<?php
session_start();
session_destroy(); // Xóa session
header('Location: home.php');