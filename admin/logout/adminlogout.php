<?php

session_unset();
session_destroy();
header("Location: ../../home/log_in/log_in_page.php");