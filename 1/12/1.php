<?php
var_dump(true);
var_dump(false);
var_dump(0 == false);
var_dump(0.0 == false);
var_dump(9 == false);
var_dump(-0.9 == false);
var_dump('' == false);
var_dump('asd' == false);
var_dump([] == false);
var_dump([1,2,3] == false);
var_dump(NULL == false);

class Demo{

}
//基本不用对象来判断
var_dump((new Demo()) == false);