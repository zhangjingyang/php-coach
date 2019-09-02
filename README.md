# PHP培训大纲        
## 第一天上午
### 1. PHP基础        
1.1 PHP市场点有率与性能分析      
PHP即“超文本预处理器”，是一种通用开源脚本语言。PHP是在服务器端执行的脚本语言，与C语言类似，是常用的网站编程语言。PHP独特的语法混合了C、Java、Perl以及 PHP 自创的语法。利于学习，使用广泛，主要适用于Web开发领域。  
#### 简介  
PHP原始为Personal Home Page的缩写，已经正式更名为 "PHP: Hypertext Preprocessor"。自20世纪90年代国内互联网开始发展到现在，互联网信息几乎覆盖了我们日常活动所有知识范畴，并逐渐成为我们生活、学习、工作中必不可少的一部分。据统计，从2003 年开始，我国的网页规模基本保持了翻番的增长速度，并且呈上升趋势。PHP 语言作为当今最热门的网站程序开发语言，它具有成本低、速度快、可移植性好、 内置丰富的函数库等优点，因此被越来越多的企业应用于网站开发中。但随着互联网的不断更新换代，PHP语言也出现了不少问题。  
根据动态网站要求，PHP语言作为一种语言程序，其专用性逐渐在应用过程中显现，其技术水平的优劣与否将直接影响网站的运行效率。其特点是具有公开的源代码， 在程序设计上与通用型语言，如C语言相似性较高，因此在操作过程中简单易懂，可操作性强。同时，PHP语言具有较高的数据传送处理水平和输出水平，可以广泛应用在Windows系统及各类Web服务器中。如果数据量较大，PHP语言还可以拓宽链接面，与各种数据库相连，缓解数据存储、检索及维护压力。随着技术的发展，PHP 语言搜索引擎还可以量体裁衣，实行个性化服务，如根据客户的喜好进行分类收集储存，极大提高了数据运行效率。
#### 主要特点  
（一）开源性和免费性  
由于PHP的解释器的源代码是公开的，所以安全系数较高的网站可以自己更改PHP的解释程序。另外，PHP 运行环境的使用也是免费的。  
（二）快捷性  
PHP是一种非常容易学习和使用的一门语言，它的语法特点类似于C语言，但又没有C语言复杂的地址操作，而且又加入了面向对象的概念，再加上它具有简洁的语法规则，使得它操作编辑非常简单，实用性很强。  
（三）数据库连接的广泛性  
PHP可以与很多主流的数据库建立起连接，如MySQL、ODBC、Oracle等，PHP是利用编译的不同函数与这些数据库建立起连接的，PHPLIB就是常用的为一般事务提供的基库。  
（四）面向过程和面向对象并用    
在PHP语言的使用中，可以分别使用面向过程和面向对象， 而且可以将PHP面向过程和面向对象两者一起混用，这是其它很多编程语言是做不到的。

#### 优点  
（一）流行，容易上手  
PHP是目前最流行的编程语言，这毋庸置疑。它驱动全球超过2亿多个网站，有全球超过81.7%的公共网站在服务器端采用PHP。PHP常用的数据结构都内置了，使用起来方便简单，也一点都不复杂，表达能力相当灵活。  
（二）开发职位很多  
在服务器端的网站编程中PHP会更容易帮助你找到工作。很多互联网相关企业都在使用PHP开发框架，所以可以说市场对PHP的开发程序员的需求还是比较大的。  
（三）仍然在不断发展  
PHP在不断兼容着类似closures和命名空间等技术，同时兼顾性能和当下流行的框架。版本是7之后，一直在提供更高性能的应用。  
（四）可植入性强  
PHP 语言在补丁漏洞升级过程中，核心部分植入简单易行，且速度快。  
（五）拓展性强  
PHP 语言在数据库应用过程中，可以从数据库调取各类数据，执行效率高。  

#### 缺点  
（一）PHP的解释运行机制  
在 PHP 中，所有的变量都是页面级的，无论是全局变量， 还是类的静态成员，都会在页面执行完毕后被清空。  
（二）设计缺陷  
缺少关注PHP被称作是不透明的语言，因为没有堆栈追踪，各种脆弱的输入。没有一个明确的设计哲学。早期的PHP受到Perl的影响，带有out参数的标准库又是有C语言引入，面向对象的部分又是从 C++和Java学来的。  
（三）对递归的不良支持  
PHP并不擅长递归。它能容忍的递归函数的数量限制和其他语言比起来明显少。  

#### PHP主流框架
1. Lavarel 框架  
优点：  
Laravel 的设计思想是很先进的，非常适合应用各种开发模式TDD, DDD 和BDD，作为一个框
架，它准备好了一切，composer 是个php 的未来，没有composer，PHP 肯定要走向没落。
laravel 最大的特点和优秀之处就是集合了php 比较新的特性，以及各种各样的设计模式，
Ioc 容器，依赖注入等。  
缺点：  
基于组件式的框架，所以比较臃肿
2. CodeIgniter  
优点：  
Code Igniter推崇“简单就是美”这一原则。没有花哨的设计模式、没有华丽的对象结构，一切都是那么简单。几行代码就能开始运行，再加几 行代码就可以进行输出。可谓是“大道至简”的典范。 配置简单，全部的配置使用PHP脚本来配置，执行效率高；具有基本的路由功能，能够进行一定程度的路 由；具有初步的Layout功能，能够制作一定程度的界面外观；数据库层封装的不错，具有基本的MVC功能. 快速简洁，代码不多，执行性能高，框架简 单，容易上手，学习成本低，文档详细；自带了很多简单好用的library，框架适合小型应用.  
缺点：  
本身的实现不太理想。内部结构过于混乱，虽然简单易用，但缺乏扩展能力。 把Model层简单的理解为数据库操作. 框架略显简单，只能够满足小型应用，略微不太能够满足中型应用需要.

3. SYMFONY  
它是另一个着名的PHP框架，用于开发大型社区的网站开发。Symfony团队提供不同语言的培训材料，并经常更新博客以保持社区活跃。由于环境先进且易于理解，许多开发人员都推荐使用Symfony。它使用可重用的PHP库，可以轻松完成各种工作，例如路由身份验证，对象配置，模板创建，表单创建等。然而，它有着陡峭的学习曲线。

4. ZEND框架  
它是一个功能强大的PHP框架，可用于快速应用程序开发。这个框架是由大型开发人员社区推荐的。Zend是市场上最先进的PHP框架之一。它具有许多功能，可以让开发人员构建强大的应用程序。这个用于网站开发的PHP框架具有许多优化的功能，如拖放编辑器，PHP单元测试工具，加密编码工具等。

5. ThinkPHP  
ThinkPHP(FCS)是一个轻量级的中型框架，是从Java的Struts结构移植过来的中文PHP开发框架。它使用面向对象的开发结构和MVC模式，并且模拟实现了Struts的标签库，各方面都比较人性化，熟悉J2EE的开发人员相对比较容易上手，适合php框架初学者。 ThinkPHP的宗旨是简化开发、提高效率、易于扩展，其在对数据库的支持方面已经包括MySQL、MSSQL、Sqlite、PgSQL、 Oracle，以及PDO的支持。ThinkPHP有着丰富的文档和示例，框架的兼容性较强，但是其功能有限，因此更适合用于中小项目的开发。  

#### PHP产品
1. 电商  
+ Magento
+ Shopify
+ Opencart
+ Woocommerce
2. CMS  
+ Wordpress
+ Drupal
+ Joomla

1.2 安装windows下的PHP开发环境   
安装xampp https://www.apachefriends.org/index.html  
或者wamp http://www.wampserver.com/en/    

1.3 网站运行目录结构介绍      

1.4 优秀的开发编辑器推荐      
vscode https://code.visualstudio.com/  
sublime https://www.sublimetext.com/  

1.5 PHP的标记风格      
```
<?php
    echo 'Hello World';
?>
```
如果文件内容是纯 PHP 代码，最好在文件末尾删除 PHP 结束标记。这可以避免在 PHP 结束标记之后万一意外加入了空格或者换行符，会导致 PHP 开始输出这些空白，而脚本中此时并无输出的意图。  

1.6 执行符与空白和注释说明   
```
<?php
    //这里的分号就是执行符，一个指令只能做一件事情。
    echo 'Hello World';
    //可以包含空行，不会报错，可以用来排版
    echo 'sdifj
    
    
    
    ';
    //单行注释
    #单行注释
    /**
    * 多行注释
    */
    //某些工具可以通过注释生成说明文档
?>
```
1.7 弱类型说明与传值与传址详解  
变量的类型由值决定
```
<?php
//变量都是以$开始
$name = 'zhangsan';
var_dump($name);
$name = 100;
var_dump($name);

//变量名字母数字下划线都是可以的
$a = 1;
$_ = 2;
$a1 = 3;
$a_3 = 5;


```
```
<?php
//值传递
$a = 1;
$b = $a;
echo $a;
echo '<hr>';
echo $b;
echo '<hr>';
$a = 2;
echo $a;
echo '<hr>';
echo $b;
```

```
<?php
//地址传递 希望函数处理完之后影响外部的变量
$a = 1;
$b = &$a;
echo $a;
echo '<hr>';
echo $b;
echo '<hr>';
$a = 2;
echo $a;
echo '<hr>';
echo $b;
```
1.8 掌握变量作用域知识     
```
<?php
//可变变量
$name = 'word';
$$name = 'zhangsan';
echo $word;
```

```
<?php
//超全局变量 $_GET, $_POST...
var_dump($_GET);
function show(){
    var_dump($_GET);
}
show();

//普通变量

```
```
<?php
//普通变量 
$name = 'zhangsan';
print_r($GLOBALS['name']);
function show(){
    global $name;
    echo $name;
}
show();
```
尽量少用global，会引起变量污染  
1.9 变量检测与删除及全局变量删除技巧   
```
<?php
//检测变量
var_dump(isset($name));
$age = 10;
var_dump(isset($age));
//删除变量
unset($age);
var_dump(isset($age));
```   
```
<?php
$name = 'zhangsan';
function make(){
    global $name;
    echo $name;
    unset($name);//可以执行，但是删除不掉
}
make();
echo $name;
```
1.10 非常好用的static静态变量  
```
<?php
function make(){
    $num = 1;
    $num = $num + 1;
    return $num . '<hr>';
}
echo make();
echo make();
echo make();
```    
```
<?php
//用作配置项 缓存...
function make(){
    static $num = 1;
    $num = $num + 1;
    return $num . '<hr>';
}
echo make();
echo make();
echo make();
```    

1.11 数据类型  
```
<?php
/**
 * string
 * integer
 * float
 * array
 * object
 * boolean
 * resource
 * NULL
 * Callback/Callable
 */
//整形
//八进制(Octal) 十进制（Decimal） 十六进制(Hexadecimal)
//777
//7*8^2+7*8^1+7*8^0 = 511
echo octdec(777);
//FAF = 4015
echo hexdec('FAF');

//浮点数 小数 1.1

```
1.12 Boolean类型详细说明     
```
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
``` 
1.13 获取PHP语言的帮助    
www.php.net
可以在线阅读也可以下载文档离线阅读    
1.14 字符串定义与header响应头设置  
```
<?php
//防止乱码
header('Content-type:text/html;charset=utf-8');
//单双引号的区别,为什么要加花括号
$name = 'zhangsan';

$str = "my name is {$name}hello";

echo $str;
```
1.15 字符串转义详解   
```
<?php
$str = "zhangsan \"Day\"";
echo $str;
echo '<hr>';
echo "变量定义方法: \$string = 10";
echo '<hr>';
echo "输出 \\";
echo '<hr>';
//制表符
echo "hello\t\t\tworld";
echo '<hr>';
//换行符
echo "hello\nworld";
```
1.16 字符串定界符与strlen-mb_strlen函数使用  
```
<?php
// $str = "<h1 style=\"color:red\">hello</h1>";
// echo $str;


//前面是什么字符串兽面是什么字符串，前后不能有空格
$str = <<<php
<h1 style="color:red">hello</h1>
php;

echo $str;
```    
```
<?php
//字符串连接
$str = 'my name is';
$name = 'zhangsan';

echo $str . $name . '.';
```
```
<?php
$string = 'soowiekdjs';
echo strlen($string);
echo '<hr>';
//中文一个字多于一个长度，使用mb库
echo strlen('大家好');
echo mb_strlen('大家好','utf8');
```
1.17 字符串函数trim-ucfirst-ucwords-strtolower 
```
<?php
//查询函数库文档

$str = "hello world";
echo strlen($str);
echo '<hr>';
$str = "hello world   ";
echo strlen($str);
echo '<hr>';
//默认删除空格
echo strlen(trim($str));
echo '<hr>';
//去除首尾
echo trim($str," dl");

//ltrim,rtrim

echo strtolower('AbCdEfG');
echo '<hr>';
echo strtoupper('AbCdEfG');
echo '<hr>';
echo ucfirst('word');
echo '<hr>';
echo ucwords('hello world');
echo '<hr>';
echo ucwords('hello|world','|');
```
1.18 字符串函数md5-explode-implode-substr-mb_substr  
```
<?php
//md5函数吧一个字符串hash成一个32位的字符串
//以前用来加密密码,现在不用了，有加密库
echo md5('zhangsan');

//特殊的方式不方便变成文件名 缓存
$file = 'user1/info';
echo md5($file) . '.php';
```    
```
<?php
//打散
print_r(explode('.','www.ibm.com'));
//合并
$arr = ['email','zhangjy@cn.ibm.com'];
echo implode(':',$arr);
//截断
$course = 'php:string function';
echo substr($course,3);
echo substr($course,0,4);

$str = "php教程:字符串函数";
echo mb_substr($str,6,null,'utf-8');
```
1.19 PHP常量使用详解   
```
<?php
//常量规范大写
//函数 灵活性好
define('DB_HOST','localhost',true);
// define('DB_HOST','127.0.0.1');
define('DATA',[1,2,3]);
//类的常量必须用const 执行效率高
const DB_USER = 'root';
echo DB_USER;
```
```
<?php
//常量不受访问限制
const NAME = 'zhangsan';

function show(){
    echo NAME;
}
show();
echo '<hr>';
//检测一个常量是否被定义过
var_dump(defined('NAME'));
echo '<hr>';
//系统常量
echo PHP_OS;
echo '<hr>';
//查看所有常量
print_r(get_defined_constants());
```   
1.20 算术运算符   
```
<?php
//+ - * / %
$a = 1;
$b = 2;
echo $a + $b;


//++i,i++,--i,i--
$c = 1;
echo $c++;
```   
1.21 赋值运算符   
```
<?php
//+= -= = *= /= %= .=
```
1.22 比较运算符与逻辑运算符    
```
<?php
//== 类型不同会进行类型转换
$a = 1;
$b = 2;
$c = false;
$d = 0;
var_dump($a == $b);
echo '<hr>';
//=== !==三个等号类型也要一样，不转换类型
var_dump($c == $d);
echo '<hr>';
var_dump($c === $d);
echo '<hr>';
//>= <= != <> > < 

//逻辑运算
//&& || ! 优先级高
var_dump(true && true);
echo '<hr>';
var_dump(true || false);
echo '<hr>';
var_dump(!ture);
//and or优先级低 xor异或
```

1.23 三元表达式??与?：及@使用   
```
<?php
echo true?'yes':'no';

$name = 'zhangsan';
echo $name?:'lisi';

//?? 变量必须存在并且变量的值不能为空
//一般用来处理数据库的null数据
$a = 0;
echo $name??'NO';
$b = null;
echo $b??'NO';
echo $c??'No';

//屏蔽警告错误 @
@(20/0);
```

1.24 流程控制之if详解    
```
<?php
$day = 'monday';
if($day == 'monday'){
    echo '饺子';
} elseif($day == 'thuesday'){
    echo '米线';
}else{
    echo '套餐';
}

//第二种写法
$status = false;
if($status):
echo 11;
else:
echo 22;
endif;
```  
1.25 流程控制之switch详解  
```
<?php
$day = 'monday';

switch($day){
    case 'monday':
        echo '星期一';
        break;
    case 'tuesday':
        echo '星期二';
        break;
    case 'wensday':
        echo '星期三';
        break;
}

switch($day){
    case 'monday':
    case 'tuesday':
    case 'wensday':
        echo '工作日';
        break;
    default:
        echo '周末';
}

// $age = 15;
// switch($age){
//     case $age < 12;
//         echo '儿童';
// }

//其他写法
// switch($status):
//     case:
//     default:
// endswitch;
```
1.26 流程控制之while-dowhile与for循环操作     
```
<?php
//跳出条件break continue return
$a = 10;
while($a--){
    echo $a;
    return 0;
}
$num = 10;
while($num){
    $num--;
    if($num == 5){
        break;
    }
}


$num = 10;
do{
    $num--;
}while($num > 0);
```
```
<?php
for($i = 10;$i > 0;$i--){
    echo $i;
}
$num = 10;
for(;;){
    if($num == 0)break;
    echo $num;
    $num--;
}
```
1.27 流程控制之break与continue使用技巧     
break 结束当前 for，foreach，while，do-while 或者 switch 结构的执行。
break 可以接受一个可选的数字参数来决定跳出几重循环。
 break跳出当前循环体
 break后加数字，跳出第几层循环。
 continue跳出本次循环
 continue加数字，跳过几次循环
1.28 文件引入之include与require详解 
共通代码引入

+ include函数：会将指定的文件读入并且执行里面的程序；
+ require函数：会将目标文件的内容读入，并且把自己本身代换成这些读入的内容；

**inclue和require的区别**
include与require除了在处理引入文件的方式不同外，最大的区别就是：include在引入不存文件时产生一个警告且脚本还会继续执行，而require则会导致一个致命性错误且脚本停止执行。 
```
<?php
  include 'no.php';
  echo '123';
?>
```
如果no.php文件不存在，echo '123'这句是可以继续执行的.

```
<?php
require 'no.php';
echo '123';
?>
```
如果no.php文件不存在，echo '123'这句是不执行的，在require时就停止了。

include()与require()的功能相同，但在用法上却有一些不同，include()是有条件包含函数，而 require()则是无条件包含函数。

例如在下面的一个例子中，如果变量$somgthing为真，则将包含文件somefile：
```
if($something){
include("somefile");
}
```
但不管$something取何值，下面的代码将把文件somefile包含进文件里：
```
if($something){
require("somefile");
}
```
1.29 文件引入之include_once与require_once     
+ include_once 函数：在脚本执行期间包含并运行指定文件。此行为和 include 语句类似，唯一区别是如果该文件中已经被包含过，则不会再次包含。如同此语句名字暗示的那样，只会包含一次；
+ require_once 函数：和 require 语句完全相同，唯一区别是 PHP 会检查该文件是否已经被包含过，如果是则不会再次包含 。

**include与include_once的区别（require与require_once的区别）**
include_once （require_once）语句在脚本执行期间包含并运行指定文件。此行为和 include （require）语句类似，区别是如果该文件中的代码已经被包含了，则不会再次包含，只会包含一次。include_once（require_once）需要查询一遍已加载的文件列表, 确认是否存在, 然后再加载。
```
<?php
require '1.php';
require '1.php';
?>
```
这种情况下1.php被包含两次。
```
<?php
require '1.php';
require_once '1.php';
?>
```
这种情况下，第二次包含时，是不会进行包含的。

**include（require）与include_once（require_once）的抉择问题**  

通常：include_once和require_once会有性能上的下降，因为他需要判断之前是否包含过。一般情况下，也不太需要去考虑，除非这已经影响到你程序的性能了。

require通常使用方法，这个函数通常放在 PHP 程序的最前面，PHP 程序在执行前，就会先读入 require 所指定引入的文件，使它变成 PHP 程序网页的一部份。常用的函数，亦可以这个方法将它引入网页中。

include通常使用方法，这个函数一般是放在流程控制的处理部分中。PHP 程序网页在读到 include 的文件时，才将它读进来。这种方式，可以把程序执行时的流程简单化。

理论上来说：include和require后面加不加括号对执行结果没有区别，但是加上括号效率较低，所以后面能不加括号就不加括号。

1.30 函数编程之结合现实案例清晰解读函数编程    
函数式编程不依赖、也不会改变外界的状态，只要给定输入参数，返回的结果必定相同。因此，每一个函数都可以被看做独立单元，很有利于进行单元测试（unit testing）和除错（debugging），以及模块化组合
```
<?php
//函数一定有返回值，如果没有自定义，默认返回null
function welcome($name){
    echo 'hello ' . $name;
}
welcome('Mike');
var_dump(welcome('Mike'));
```
1.31 通过命名空间namespace隔离函数 
后面讲namespace再说
1.32 点语法与参数默认值及传值与传址特性    
```
<?php
//展示函数的灵活性，复用性
function mobile($tel){
    return substr($tel,0,-4).'****';
}

echo mobile('13998674839');
```
```
<?php
//变量作用域，函数参数传递方式
function show($var){
    $var++;
    echo $var;
}
//地址传递
function show(&$var){
    $var++;
    echo $var;
}
$var = 1;
show($var);
echo '<hr>';
echo $var;
```
```
<?php
//点语法
function sum(...$vars){
    print_r($vars);
    //array_sum($vars);
}
sum(1,2,3,4,5,6);
```
```
<?php
//函数参数的默认值
function mobile($tel,$num=4,$fix='****'){
    return substr($tel,0,-1*$num).$fix;
}

echo mobile('13998674839');
echo '<hr>';
echo mobile('13998674839',3,'###');
```
1.33 严格模式declare与参数类型约束 
```
<?php
//严格模式下必须要类型一样，数字字符串也不可以
// declare(strict_types = 1);
function show(int $num){
    return $num;
}

// var_dump(show('a'));//报错

var_dump(show('1'));//非严格模式可以

// function sum(int ...$nums){
//     return array_sum($nums);
// }

```
1.34 函数返回值约束      
```
<?php
function sum(int ...$nums):int{
    return array_sum($nums);
}

echo sum(1,2,3,4,5);

//可以返回空或者指定类型数据 void没有返回值
function show():?string{
    return null;
}

show();
```
1.35 变量能见度与静态变量    
重复知识点，可以考虑重新安排该知识点的授课顺序。
   
1.36 变量函数的奇妙使用    
```
<?php
function sum(int ...$nums):int{
    return array_sum($nums);
}

$callback = 'sum';

echo $callback(1,2,3,4);

//判断函数是否存在
function_exists('sum');
```  
1.37 教你清晰掌握递归算法 
不讲也行，阶乘小例子     
```
<?php
function recursive(int $num): int
{
    $result = 1;
    if ($num == 1) {
        return $result * 1;
    } else {
        return $result = $num * recursive($num - 1);
    }
}

echo recursive(5);
```
1.38 关联数组与索引数组详解  
PHP 中的数组实际上是一个有序映射。映射是一种把 values 关联到 keys 的类型。此类型在很多方面做了优化，因此可以把它当成真正的数组，或列表（向量），散列表（是映射的一种实现），字典，集合，栈，队列以及更多可能性。由于数组元素的值也可以是另一个数组，树形结构和多维数组也是允许的。
```
<?php
//两种写法
//数组下标从0开始
$arr1 = array(1,2,3);

$arr2 = [1,2,3,4];
//索引数组0，1，2，3 默认

//关联数组 key为字符串的数组
$player = [
    'name' => 'Messi',
    'age' => '32',
    'position' => 'SS'
];
echo $player['name'];
//多维数组
$players = [
    ['name' => 'Messi',
    'age' => '32',
    'position' => 'SS'],
    ['name' => 'CR',
    'age' => '34',
    'position' => 'LWF']
];
echo $player[1]['name'];
```
1.39 通过指针读取数组元素      
```
<?php
//索引数组添加元素
$arr = ['Sam'];
$arr[1] = 'David';
$arr[5] = 'Mike';
$arr[5] = 'Joe';
print_r($arr);

//编号其实不用写，自增长的
$arr[] = 'Jim';
print_r($arr);
```
```
<?php
//操作关联数组
$user = [
    'name' => 'James',
    'age' => 34,
];
$user['name'] = 'Lebron James';
print_r($user);

$users = [
    ['name' => 'James', 'age' => 34],
    ['name' => 'Harden', 'age' => 29],
];
$users[0]['name'] = 'Lebron James';
print_r($users);
```
```
<?php
//指针
$arr = ['James', 'Paul'];

echo key($arr); //当前key
echo '<hr>';
echo current($arr); //当前value
next($arr); //指针指向下一个元素，并返回下一个元素的值
echo '<hr>';
echo current($arr); //当前value
prev($arr);
echo current($arr); //指针指向上一个元素，并返回上一个元素的值
var_dump(prev($arr)); //上面没有元素会返回false
```

1.40 PHP7中使用list与foreach操作数组  
```
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
```
```
<?php
//应用案例
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];

while (list('name' => $name, 'age' => $age) = current($players)) {
    echo "Player name is {$name}, age:{$age}. <br>";
    next($players);
}
```
```
<?php
//foreach
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];
foreach ($players as $player) {
    print_r($player);
}

foreach ($players as $key => $value) {
    echo $key . '=>' . $value['name'];
}
//练习：如何通过foreach批量修改值呢？ 每个人加10岁
```
1.41 数组函数array_push-array_pop-array_shift-array_unshift-count  
```
<?php
//数组可以从前面压进去，也可从后面压进去，老数据也是一样

$users = ['Jim', 'Kate'];
count($users); //计算数组元素数量

array_push($users, 'Lucy'); //从后压进去；
print_r($users);

$user = array_pop($users); //从后面弹出去
print_r($users);

array_unshift($users, 'David'); //从前面压进去
print_r($users);

array_shift($users); //从前面移除
print_r($users);

count($users);
```

1.42 数组函数array_key_exists-array_keys-array_values-in_array    
```
<?php
//检测数组键名是否存在
$allowImageType = ['jpeg' => 2000000, 'jpg' => 2000000, 'png' => 2000000];
$file = 'test.gif';
$ext = strtolower(substr(strrchr($file, '.'), 1));

if (!array_key_exists($ext, $allowImageType)) {
    echo 'wrong';
} else {
    echo 'success';
}
```
```
<?php
$allowImageType = ['jpeg', 'jpg', 'png'];
$file = 'test.gif';
$ext = strtolower(substr(strrchr($file, '.'), 1));

if (in_array($ext, $allowImageType)) {
    echo 'success';
} else {
    echo 'wrong';
}
```
```
<?php
$allowImageType = ['jpeg' => 2000000, 'jpg' => 2000000, 'png' => 2000000];
$file = 'test.gif';
$ext = strtolower(substr(strrchr($file, '.'), 1));

if (!in_array($ext, array_keys($allowImageType))) {
    echo 'error';
} else {
    echo 'success';
}
```
1.43 数组函数array_filter-array_map-array_values      
1.44 数组函数array_merge-array_change_key_case      
1.45 递归算法改变多维数组键名      
1.46 递归操作多维数组键值      
1.47 超高效的数组值多维操作      
1.48 使用serialize序列化缓存操作与var_export文件持久化      
1.49 时区概念与PHP管理时区      
1.50 时间戳管理与timeµtime构建敏捷的脚本执行时间函数      
1.51 使用date获取ISO标准时间与getdate使用      
1.52 使用strtotime便捷的进行时间计算      
1.53 使用DateTime类维护日期时间技巧      
1.54 使用DateInterval获取时间差与常用时间计算技巧      
1.55 数学函数在页码验证与验证码中的使用实例      
1.56 正则表达式的边界符与元字符详解      
1.57 正则表达式常用函数操作      
1.58 php文件操作常用函数使用   

## 第一天下午
### 2. PHP数据库操作之PDO
2.1 PHP操作数据库说明与建议    
2.2 快速连接Mysql数据库    
2.3 PDO处理错误类型详解    
2.4 PDO快速操作执行语句    
2.5 快速操作MYSQL查询    
2.6 对返回结果集多样设置    
2.7 单条循环获取MYSQL结果集    
2.8 预准备前奏SQL注入实例讲解    
2.9 预准备从根据杜绝SQL注入实操    
2.10 预准备的执行语句操作    
2.11 使用占位符发送预准备操作    
2.12 高可用查询生成器构建    
2.13 添加预准备操作到查询生成器    
2.14 查询器链式操作机制    
2.15 使用生成器完成查询  
2.16 添加数据在生成器中的构建技巧    
2.17 完成SQL生成器的更新与删除操作  

## 第二天上午
  
### 3. 异常处理  
3.1 异常处理解决什么问题与传统错误处理方式  
3.2 Exception异常处理比传统错误处理这么高效  
3.3 多个异常类使用场景详解  
3.4 异常处理优先级问题  
3.5 异常类内置方法使用操作  
3.6 异常处理引擎之composer构建  
3.7 自定义异常处理引擎  
3.8 自定义异常托管  
3.9 视图模板服务构建  
3.10 模板视图异常处理开发完成  
3.11 后台控制器逻辑构建  
3.12 表单验证异常这么神奇  
3.13 业务流程测试  
  
### 4.错误处理  
4.1 开发时显示错误信息  
4.2 PHP语言中的多种错误类型详解  
4.3 常见错误类型与不同场景使用策略  
4.4 开发超方便的自定义错误处理引擎  
4.5 高效处理不同错误类型提供响应视图  
4.6 使用DEBUG来处理错误应用场景  
4.7 使用日志监测错误保证网站健康运行  


### 5. PHP SESSION 和 COOKIE  
5.1 HTTP无状态场景分析与解决思路  
5.2 COOKIE业务原理分析  
5.3 服务器写入COOKIE与浏览器处理过程  
5.4 COOKIE生命周期实例详解  
5.5 COOKIE作用路径PATH使用技巧  
5.6 子域名COOKIE共享实例  
5.7 COOKIE的HTTPS访问限制与JAVASCRIPT禁止操作  
5.8 服务器端SESSION工作原理详解  
5.9 SESSION共享体验与会话变量操作  
5.10 修改SESSION储存目录优化性能  
5.11 session_id与session_name函数使用  
5.12 GC垃圾回收的SESSION原理分析  
5.13 实例操作SESSION的GC垃圾回收  
5.14 初始自定义SESSION引擎类  
5.15 实现SESSION引擎类的开关读写卸垃方法  
5.16 测试优化自定义SESSION引擎  
5.17 多页面使用自定义SESSION引擎  

## 第二天下午
  
### 6. PHP面向对象  
6.1 通俗易懂的面向对象OOP分析  
6.2 类与对象分析与命名规范  
6.3 $this关键指针详细解读  
6.4 Static静态变量使用场景详解  
6.5 静态方法什么时候使用  
6.6 const类常量使用详解  
6.7 使用extends继承实现复用  
6.8 父类方法和属性重写实例操作  
6.9 禁止重写策略  
6.10 抽象类与抽象方法解释的明明白白  
6.11 带你把接口理解的清清楚楚  
6.12 父类方法调用场景实例  
6.13 使用trait实现变相多继承  
6.14 多重类继承优先级处理  
6.15 解决trait冲突这么容易  
6.16 trait访问权限控制  
6.17 多重trait与抽象及静态方法的使用  
6.18 类方法和属性的访问控制  
6.19 构造函数与析构函数实例解析  
6.20 见识__get与__set的真实用例  
6.21 使用魔术方法操作对象属性  
6.22 __call原来可以这么神奇的使用  
6.23 教你正确使用__callStatic的技巧  
  
### 7. 命名空间  
7.1 NAMESPACE解决什么样的问题  
7.2 全名空间最基础演示  
7.3 命名空间限定规则使用详解  
7.4 函数与常量在命名空间中的特殊性  
7.5 命名空间特殊关键字  
7.6 奇妙的类与空间声明  
7.7 多个类声明的定义  
7.8 引入冲突原来这么好解决  
7.9 超简单使用类自动加载处理  
7.10 使用面向对象方式实现自动加载  
7.11 使用Composer自动加载真方便  
7.12 自动加载任意类型文件  
  
### 8. composer的使用  
8.1 composer原理分析  
8.2 window环境下安装composer  
8.3 在github中创建自己的开源项目  
8.4 创建composer.json文件及在packagist.org中提交项目  
8.5 composer整合github实现自动推送  
8.6 定义composer自动加载autoload配置与实例框架控制器  
8.7 创建视图层  
8.8 使用composer安装packagist中的软件包  
8.9 使用国内composer镜像服务器快速安装packagist模块  