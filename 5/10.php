<?php
session_save_path('session');
session_start();
$_SESSION['name'] = 'Mike';
var_dump($_SESSION);