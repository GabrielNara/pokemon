<?php
session_destroy();
setcookie('PHPSESSID', '', time() - 3600, '/');
header('Location: /pokemon/');
exit();