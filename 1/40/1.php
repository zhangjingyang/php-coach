<?php
//list — 把数组中的值赋给一组变量
// Warning
// PHP 5 里，list() 从最右边的参数开始赋值； PHP 7 里，list() 从最左边的参数开始赋值。
// 如果你用单纯的变量，不用担心这一点。 但是如果你用了具有索引的数组，通常你期望得到的结果和在 list() 中写的一样是从左到右的，但在 PHP 5 里实际上不是， 它是以相反顺序赋值的。
// 通常而言，不建议依赖于操作的顺序，在未来可能会再次发生修改。
//Warning 在 list() 执行过程中修改数组（比如使用 list($a, $b) = $b）将会产生不可预知的结果。

//索引数组
$arr = ['Sam', 'David'];
list($a, $b) = $arr;
echo $a;
echo '<hr>';
echo $b;
//关联数组
$user = ['name' => 'James', 'age' => 34];
list('name' => $name, 'age' => $age) = $user;
echo $age;
//只想取某一个值
$arr = [1, 2, 3];
list(, , $c) = $arr;
echo $c;
