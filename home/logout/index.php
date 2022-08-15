<?php
session_start();
session_unset();
session_destroy();
header("Location: ../../home/login/index.php");