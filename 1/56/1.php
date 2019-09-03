<?php
//正则表达式，又称规则表达式。（英语：Regular Expression，在代码中常简写为regex、regexp或RE），计算机科学的一个概念。正则表达式通常被用来检索、替换那些符合某个模式(规则)的文本。
//边界符// ## @@都可以
$status = preg_match('/a/','sodifjosida');//查看是否有a
var_dump($status);