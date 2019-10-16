<?php
//heredoc
$name = 'Mike';
echo <<<PP
hello my name is {$name}
PP;

//nowdoc
echo <<<'DD'
hello my name is {$name}
DD;