<?php
// $str = "<h1 style=\"color:red\">hello</h1>";
// echo $str;

//前面是什么字符串兽面是什么字符串，前后不能有空格
//heredoc
$name = 'Mike';
echo <<<PP
hello my name is {$name}
PP;

//nowdoc
echo <<<'DD'
hello my name is {$name}
DD;
