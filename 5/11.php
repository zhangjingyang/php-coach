<?php
session_name('php-course');
session_id(md5('php-course'));
session_start();
$_SESSION['name'] = 'Mike';
var_dump($_SESSION);