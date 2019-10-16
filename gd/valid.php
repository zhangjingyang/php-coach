<?php
session_start();
if(strtoUpper($_POST['captcha']) == strtoUpper($_SESSION['captcha'])){
    echo 'ok';
}else{
    echo 'wrong';
}
