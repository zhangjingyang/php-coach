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

1.5.1.echo

输出一个或者多个字符串。

1.5.2.print

和 echo 最主要的区别： print 仅支持一个参数，并总是返回 1。

1.5.3.print_r

打印关于变量的易于理解的信息,如果给出的是 string、integer 或 float，将打印变量值本身。如果给出的是 array，将会按照一定格式显示键和元素。object 与数组类似。 记住，print_r() 将把数组的指针移到最后边。使用 reset() 可让指针回到开始处。

1.5.4.var_dump

此函数显示关于一个或多个表达式的结构信息，包括表达式的类型与值。数组将递归展开值，通过缩进显示其结构。

1.5.5.var_dump 和 print_r 的区别

var_dump 返回表达式的类型与值而 print_r 仅返回结果，相比调试代码使用 var_dump 更便于阅读。

**练习**  
写出第一个hello world

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
```
<?php
//array_filter();
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];
//筛选出年龄大于等于三十岁的球员
$filterPlayers = array_filter($players,function($player){
    return $player['age'] >= 30;
});

print_r($filterPlayers);
```
```
<?php
//array_map() 函数将用户自定义函数作用到数组中的每个值上，并返回用户自定义函数作用后的带有新值的数组。

//回调函数接受的参数数目应该和传递给 array_map() 函数的数组数目一致。
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];


$mapUsers = array_map(function($player){
    // unset($player['age']);
    $player['club'] = '大连一方';
    return $player;
},$players);
print_r($mapUsers);
```
```
<?php
//array_values() 返回 input 数组中所有的值并给其建立数字索引。
$players = [
    ['name' => '卡拉斯科', 'age' => 26],
    ['name' => '哈姆西克', 'age' => 32],
    ['name' => '龙东', 'age' => 30],
    ['name' => '博阿滕', 'age' => 22],
];
$stringPlayers = array_map(function($player){
    return implode('-',array_values($player));
},$players);

print_r($stringPlayers);
```

1.44 数组函数array_merge-array_change_key_case      
```
<?php
/* array_merge() 将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组。

如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。然而，如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。

如果只给了一个数组并且该数组是数字索引的，则键名会以连续方式重新索引。 */

//索引数组是合并
$arr1 = [1,2,3,4,5];
$arr2 = [6,7,8,9,10];
print_r(array_merge($arr1,$arr2));
//关联数组
$arr3 = ['name' => 'Sam','age' => 20];
$arr4 = ['name' => 'Gill','age' => 30];
print_r(array_merge($arr3,$arr4));
//带有数字索引的
$arr5 = ['name' => 'Sam','age' => 20,1 => 1];
$arr6 = ['name' => 'Gill','age' => 30,1 => 2];
print_r(array_merge($arr5,$arr6));
```
```
<?php
// array_change_key_case() 将 array 数组中的所有键名改为全小写或大写。本函数不改变数字索引。
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
```
1.45 递归算法改变多维数组键名     
此节为扩展，跳过 
1.46 递归操作多维数组键值     
此节为扩展，跳过  
1.47 超高效的数组值多维操作 
**array_walk_recursive**
将用户自定义函数 callback 应用到 array 数组中的每个单元。本函数会递归到更深层的数组中去。       
1.48 使用serialize序列化缓存操作与var_export文件持久化      
```
<?php
$database = include 'config/database.php';
// print_r($database);
// var_export($database);

$config = var_export($database,true);
file_put_contents('database.php','<?php return ' . $config . ';');
```
```
<?php
/* serialize() 返回字符串，此字符串包含了表示 value 的字节流，可以存储于任何地方。

这有利于存储或传递 PHP 的值，同时不丢失其类型和结构。 */

$database = include 'config/database.php';
echo serialize($database);
$cache = serialize($database);
print_r(unserialize($cache));
```
1.49 时区概念与PHP管理时区 
这部分了解即可，大部分时候很少用到
```
<?php
//时区PRC Asia/chongqing Asia/shanghai Asia/urumqi
//可以通过修改php.ini的timezone，但是不够灵活，不建议使用
date_default_timezone_set('PRC');//设置时区
echo date_default_timezone_get();//查看时区
echo date('Y-m-d h:i:s');
```     
1.50 时间戳管理与timeµtime构建敏捷的脚本执行时间函数   
```
<?php
//时间戳，从1970年1月1日 0：0：0到现在的秒数
date_default_timezone_set('PRC');
echo time();
echo '<hr>';
echo microtime();//返回微秒
echo '<hr>';
echo microtime(true);//返回浮点数，可以用来计算程序执行时间
```   
1.51 使用date获取ISO标准时间与getdate使用    
```
<?php
date_default_timezone_set('PRC');
echo date('Y-m-d h:i:s');//此处查看文档学习
echo date('Y-m-d h:i:s',time()-3600);//一小时之前的时间

print_r(getdate());//返回时间相关的数组
```  
1.52 使用strtotime便捷的进行时间计算    
```
<?php
//字符串转日期 很常见 日期插件
echo strtotime('2018-08-08');
echo '<hr>';
echo date('Y-m-d H:i:s',1533686400);
echo '<hr>';
echo strtotime('now');//获取当前时间戳
echo '<hr>';
echo strtotime('+1 year');//加1年 主要是培养看手册的习惯
echo '<hr>';
echo strtotime('next friday');//加1年 主要是培养看手册的习惯
```  
1.53 使用DateTime类维护日期时间技巧   
```
<?php
//php时间日期类
//DateTime DateInterval DateTimezone
$timezone = new DateTimeZone('PRC');
$dateTime = new DateTime();
//$dateTime = new DateTime(‘2018-08-08’);
// $dateTime->setDate();
// DateTime::createFromFormat('Y/m/d','2018/08/08');
$dateTime->setTimezone($timezone);
echo $dateTime->format('Y-m-d H:i:s');//ISO格式
echo $dateTime->format('U');//unix时间戳
```
1.54 使用DateInterval获取时间差与常用时间计算技巧 
```
<?php
$dateTime1 = new DateTime();
$dateTime2 = new DateTime('2019-10-27 0:0:0');
$interval = $dateTime1->diff($dateTime2);
echo $interval->format('%m个月%d天,共%a天');
```     
1.55 数学函数在页码验证与验证码中的使用实例     
```
<?php
echo ceil(10.2);//向上取整
echo floor(10.2);//向下取整

echo max(1,3);//取最大值
echo min(1,3);//取最小值

echo round(10.2);//四舍五入
echo round(10.5);

echo mt_rand(1,999);//取1-999的随机数
```
练习：写一个生成验证码的字符串
```
$str = '1234567890asdfghjklzxcv';
$str[0];
```
1.56 正则表达式的边界符
正则表达式涉及篇幅较多，在这里只做函数使用的简单介绍，关于正则表达式的知识自学
```
<?php
//正则表达式，又称规则表达式。（英语：Regular Expression，在代码中常简写为regex、regexp或RE），计算机科学的一个概念。正则表达式通常被用来检索、替换那些符合某个模式(规则)的文本。
//边界符// ## @@都可以
$status = preg_match('/a/','sodifjosida');//查看是否有a
var_dump($status);
```
1.57 正则表达式常用函数操作 
```
<?php
$str = '1@2@3';
preg_match('/\d+/',$str,$matches);//匹配第一个
print_r($matches);

preg_match_all('/\d/',$str,$matches);//匹配所有
print_r($matches);

$arr = preg_split('/@|#/',$str);//拆分
print_r($arr);

echo preg_replace_callback('/\d+/',function($matches){
    if($matches[0]>2){
        return $matches[0] +200;
    }
    return $matches[0];
},$str);
```
1.58 php文件操作常用函数使用   
```

```

## 第一天下午
### 2. PHP数据库操作之PDO
2.1 PHP操作数据库说明与建议    
主要介绍PDO，现在实际操作都是应用框架。
2.2 快速连接Mysql数据库    
```
<?php
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
} catch (PDOException $e) {
    die($e->getMessage());
}
```
2.3 PDO处理错误类型详解  
```
<?php
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    // $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo = new PDO($dsn, $config['user'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//另一种设置属性方式
    $pdo->query('asdfasd');
} catch (PDOException $e) {
    die("Exception:" . $e->getMessage());
}
```
2.4 PDO快速操作执行语句    
```
<?php
//执行语句
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo->exec("INSERT INTO users (name,age) VALUES ('Dan',10)");
    echo $pdo->lastInsertId(); //获取自增主键
    // $pdo->exec("UPDATE users SET name='Sam' WHERE age > 10");
    // echo $pdo->exec("DELETE FROM users where age <20");
} catch (PDOException $e) {
    die($e->getMessage());
}
```
2.5 快速操作MYSQL查询    
```
<?php
//执行语句
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_CASE,PDO::CASE_UPPER);//字段名大小写,一般不用设置
    $query = $pdo->query("select * from users");
    $rows = $query->fetchAll();
    print_r($rows);
} catch (PDOException $e) {
    die($e->getMessage());
}
```
2.6 对返回结果集多样设置    
```
<?php
<?php
//执行语句
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
/*     PDO::FETCH_ASSOC：返回一个索引为结果集列名的数组
    PDO::FETCH_BOTH（默认）：返回一个索引为结果集列名和以0开始的列号的数组
    PDO::FETCH_NUM：返回一个索引为以0开始的结果集列号的数组
    PDO::FETCH_OBJ：返回一个属性名对应结果集列名的匿名对象 */
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//字段名大小写
    $query = $pdo->query("select * from users");
    $rows = $query->fetchAll();
    // print_r($rows);
    $json_data = json_encode($rows);
    print_r($json_data);
} catch (PDOException $e) {
    die($e->getMessage());
}

```
2.7 单条循环获取MYSQL结果集    
```
<?php
//执行语句
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//字段名大小写
    $query = $pdo->query("select * from users where id >= 2");
    // print_r($query->fetch());
    // print_r($query->fetch());
    // print_r($query->fetch());
    while($row = $query->fetch()){
        echo $row['name'];
        echo '<hr>';
    }

} catch (PDOException $e) {
    die($e->getMessage());
}
```
2.8 预准备前奏SQL注入实例讲解    
http://localhost/php-coach/2/8/1.php?id=1
http://localhost/php-coach/2/8/1.php?id=1 or id>0
超出预想的
```
<?php
//执行语句
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//字段名大小写
    $query = $pdo->query("select * from users where id = {$_GET['id']} ");
    $rows = $query->fetchAll();
    print_r($rows);
} catch (PDOException $e) {
    die($e->getMessage());
}
```
2.9 预准备从根据杜绝SQL注入实操    
http://localhost/php-coach/2/9/1.php?id=1 or id>0
```
<?php
//执行语句
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//字段名大小写

    $sth = $pdo->prepare("select * from users where id = :id");//:id命名符
    $sth->execute([':id'=>$_GET['id']]);
    $rows = $sth->fetchAll();
    print_r($rows);
} catch (PDOException $e) {
    die($e->getMessage());
}
```
2.10 预准备的执行语句操作    
```
<?php
//执行语句
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//字段名大小写

    $sth = $pdo->prepare("INSERT INTO USERS (name,age) VALUES (:name,:age)");//:id命名符
    $sth->execute([':name'=>'James',':age'=>34]);
} catch (PDOException $e) {
    die($e->getMessage());
}
```
2.11 使用占位符发送预准备操作    
```
<?php
//执行语句
header('Content-type:text/html;charset=utf8');
include '../dbconf.php';
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']);
try {
    $pdo = new PDO($dsn, $config['user'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//字段名大小写

    $sth = $pdo->prepare("select * from users where id > ? and id < ?");//？占位符
    $sth->execute([1,3]);//注意顺序
    $rows = $sth->fetchAll();
    print_r($rows);
} catch (PDOException $e) {
    die($e->getMessage());
}
```
2.12 高可用查询生成器构建   
之后课程涉及到面向对象，而且不涉及到新知识点，是对之前知识点的具体应用案例，所以忽略不讲 
2.13 添加预准备操作到查询生成器    
2.14 查询器链式操作机制    
2.15 使用生成器完成查询  
2.16 添加数据在生成器中的构建技巧    
2.17 完成SQL生成器的更新与删除操作  

## 第二天上午
  
### 3. 异常处理  
3.1 异常处理解决什么问题与传统错误处理方式  
传统自己通过判断返回错误信息
这部分不用介绍也行
3.2 Exception异常处理比传统错误处理这么高效  
```
<?php

try{
    throw new Exception('Opps');
}catch(Exception $e){
   echo $e->getMessage();
}
```
3.3 多个异常类使用场景详解  
```
<?php
class ValidException extends Exception{

}

class CheckException extends Exception{
    public function __toString(){
        return $this->getFile() . $this->getLine();
    }
}

try{
    throw new CheckException('valid exception');
}catch(ValidException $e){
    echo '111';
}catch(CheckException $e){
    echo $e;
}catch(Exception $e){
    echo '333';
}finally{
    echo '444';
}
```
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
在开发的时候我们希望把错误显示出俩，在生产环境中，我们希望把错误输出的错误日志中。
找到php.ini文件
查看display_errors = On是否开启

4.2 PHP语言中的多种错误类型详解  
1. 语法错误
php在执行前会分析代码
```
<?php
echo 2//没有分号，报语法错误
```
2. 运行时错误
```
<?php
echo 1;
require 'common';//该文件不存在
```
3. 逻辑错误
```
<?php
for($i = 0;$i < 5;$i--){//死循环，需要自己注意
    echo $i;
}
```
4.3 常见错误类型与不同场景使用策略  
**常见错误类型**
|值|常量|说明|
|--|--|--|
|1|E_ERROR (integer)|致命的运行时错误。这类错误一般是不可恢复的情况，例如内存分配导致的问题。后果是导致脚本终止不再继续运行。|
|2|E_WARNING (integer)|	运行时警告 (非致命错误)。仅给出提示信息，但是脚本不会终止运行。|
|8|E_NOTICE (integer)|运行时通知。表示脚本遇到可能会表现为错误的情况，但是在可以正常运行的脚本里面也可能会有类似的通知。|
|64|E_COMPILE_ERROR (integer)|致命编译时错误。类似E_ERROR, 但是是由Zend脚本引擎产生的。|
|2048|E_STRICT (integer)|启用 PHP 对代码的修改建议，以确保代码具有最佳的互操作性和向前兼容性。|
|8192|E_DEPRECATED (integer)|运行时通知。启用后将会对在未来版本中可能无法正常工作的代码给出警告。|
|30719|E_ALL (integer)|E_STRICT出外的所有错误和警告信息。|
（@）在PHP中用作错误控制操作符。当表达式附加@符号时，将忽略该表达式可能生成的错误消息。
```
<?php
@require 'a';
```
我们可以通过error_reporting()函数来控制显示错误的级别
也可以通过修改php.ini的error_reporting属性来控制显示错误的级别
建议使用函数方式控制，比较灵活，也不受服务器配置限制
```
<?php

// 关闭所有PHP错误报告
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// 报告 E_NOTICE也挺好 (报告未初始化的变量
// 或者捕获变量名的错误拼写)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// 除了 E_NOTICE，报告其他所有错误
error_reporting(E_ALL ^ E_NOTICE);

// 报告所有 PHP 错误 (参见 changelog)
error_reporting(E_ALL);

// 报告所有 PHP 错误
error_reporting(-1);

// 和 error_reporting(E_ALL); 一样
ini_set('error_reporting', E_ALL);
```
开发环境全显示
4.4 开发超方便的自定义错误处理引擎  
4.5 高效处理不同错误类型提供响应视图  
4.6 使用DEBUG来处理错误应用场景  
4.7 使用日志监测错误保证网站健康运行  


### 5. PHP SESSION 和 COOKIE  
5.1 HTTP无状态场景分析与解决思路  
cookie 是服务器留在用户计算机中的小文件，网站可以用它来识别访问网站的计算机。
5.2 COOKIE业务原理分析  
5.3 服务器写入COOKIE与浏览器处理过程  
https://www.php.net/manual/zh/function.setcookie.php  
**创建 cookie**  
通过 setcookie() 函数来创建一个 cookie ，成功返回 TRUE ，否则返回 FALSE 。
**创建cookie的例子：**
```
<?php
setcookie("username", "xiaoli", time()+3600);
```
在该例子中，我们设置了一个名称为 username 的cookie，其值为 xiaoli ，并在1小时候后过期。如果时间也被省略，cookie 将会在会话结束后（一般是浏览器关闭）失效。

cookie 会以一定格式被存储在用户计算机特定位置。

**一个更完整的例子：**
```
<?php
setcookie("username", "xiaoli", time()+3600, "/", "localhost");
```
该例子使用了 path 和 domain 参数，即在 5idev.com 域名的 / 路径下该 cookie 都有效（即全站有效）。

**读取 cookie**
PHP 内置了 $_COOKIE 变量以访问设置的 cookie 值。

例子：
```
<?php
echo $_COOKIE["username"];	//输出 xiaoli
```
使用 isset() 函数来检测 cookie 变量是否已经被设置：
```
<?php
if (isset($_COOKIE["username"])) {
    echo "欢迎你： ".$_COOKIE["username"];
} else {
    echo "请登陆";
}
```
**销毁 cookie**
可以通过设置 cookie 过期时间为以前的时间点来销毁一个 cookie ：
```
<?php
setcookie("username", "", time()-3600);

```
**提示**
+ 由于协议限制，在设置 cookie 之前，不能有任何内容向浏览器输出
+ cookie 不会在设置的当前页生效，要访问设置的 cookie ，必须是另一个页面在过期之前访问
+ 由于 cookie 信息存储于用户的计算机中，那么就有可能伪造 cookie 从而造成 cookie 欺骗，一般可以对 cookie 的值进行加密来预防欺骗。读取 cookie 的时候，对 cookie 解密即可

5.4 COOKIE生命周期实例详解  
浏览器的过期时间是以UTC时区显示
5.5 COOKIE作用路径PATH使用技巧  
5.6 子域名COOKIE共享实例  
通过设置域名参数 例如有两个域名，一个为www.test.com 另一为edu.test.com
把域名参数设置为.test.com或test.com即可使其他子域名都可以访问cookie

5.7 COOKIE的HTTPS访问限制与JAVASCRIPT禁止操作  
通过设置secure和httponly参数即可  

5.8 服务器端SESSION工作原理详解  
**PHP Session 概述**
session 是一种客户与网站（服务器）更为安全的对话方式。一旦开启了 session 会话，便可以在网站的任何页面使用（保持）这个会话，从而让访问者与网站之间建立了一种“对话”机制。

常见的网上购物车，就是一个session会话的典型应用。我们在预定商品的时候，将选择好的商品放入购物车，实际就是开启一个商品的session会话。如果对选择的商品下了订单，则会将对应信息写入数据库；如果最终没有下订单，在用户关闭浏览器或退出登陆的时候，则会关闭session会话，选择的商品随即失效。

session 会话会为每一个开启了 session 会话的访问者建立一个唯一的会话 ID ，用于识别用户。该会话 ID 可能存储于用户电脑的 cookie 内，也可能通过 URL 来传递。而对应的具体 session 值会存储于服务器端，这也是与 cookie 的主要区别，并且安全性相对较高。

**创建 session**
要创建 session ，必须先使用 session_start() 函数开启一个 session 会话，系统会分配一个会话 ID：
+ 通过phpinfo查看session文件存储路径（C:\xampp\tmp）
+ 打开文件夹

**读取 session**
PHP 内置的 $_SESSION 变量可以很方便的访问设置的 session 变量。
```
<?php
session_start();
$_SESSION['name'] = 'Mike';
var_dump($_SESSION);
```
5.9 SESSION共享体验与会话变量操作  
```
<?php
session_start();
$_SESSION['name'] = 'Mike';
var_dump($_SESSION);
unset($_SESSION['name']);
$_SESSION = [];
session_destroy();//删除session文件
```
5.10 修改SESSION储存目录优化性能  
如果一个服务器运行多个网站，都放在一个目录下不现实，影响性能
通过session_save_path()函数可以指定存储路径
```
<?php
session_save_path('session');
session_start();
$_SESSION['name'] = 'Mike';
var_dump($_SESSION);
```
5.11 session_id与session_name函数使用  
```
<?php
session_name('php-course');
session_id(md5('php-course'));
session_start();
$_SESSION['name'] = 'Mike';
var_dump($_SESSION);
```
5.12 GC垃圾回收的SESSION原理分析  

session.gc_divisor 与 session.gc_probability 合起来定义了在每个会话初始化时启动 gc（garbage collection 垃圾回收）进程的概率。此概率用 gc_probability/gc_divisor 计算得来。例如 1/100 意味着在每个请求中有 1% 的概率启动 gc 进程。session.gc_divisor 默认为 100。

比如：session.gc_maxlifetime=30，session.gc_divisor=1000，session.gc_probability=1，就表示每一千个用户调用session_start()的时候，就百分百的会执行一次垃圾回收机制，将磁盘上没用的session文件删除。

注意：一般对于一些大型的门户网站，建议将session.gc_divisor调大一点，减少开销
```
session.gc_probability=1
session.gc_divisor=1000
session.gc_maxlifetime=1440
```
5.13 实例操作SESSION的GC垃圾回收  
修改php配置文件之后要重启才能生效
5.14 初始自定义SESSION引擎类  
5.15 实现SESSION引擎类的开关读写卸垃方法  
5.16 测试优化自定义SESSION引擎  
5.17 多页面使用自定义SESSION引擎  

## 第二天下午
  
### 6. PHP面向对象  
6.1 通俗易懂的面向对象OOP分析  
举个最简单点的例子来区分 面向过程和面向对象

有一天你想吃鱼香肉丝了，怎么办呢？你有两个选择
1、自己买材料，肉，鱼香肉丝调料，蒜苔，胡萝卜等等然后切菜切肉，开炒，盛到盘子里。

2、去饭店，张开嘴：老板！来一份鱼香肉丝！

看出来区别了吗？这就是1是面向过程，2是面向对象。

面向对象有什么优势呢？首先你不需要知道鱼香肉丝是怎么做的，降低了耦合性。如果你突然不想吃鱼香肉丝了，想吃洛阳白菜，对于1你可能不太容易了，还需要重新买菜，买调料什么的。对于2，太容易了，大喊：老板！那个鱼香肉丝换成洛阳白菜吧，提高了可维护性。总的来说就是降低耦合，提高维护性！

面向过程是具体化的，流程化的，解决一个问题，你需要一步一步的分析，一步一步的实现。

面向对象是模型化的，你只需抽象出一个类，这是一个封闭的盒子，在这里你拥有数据也拥有解决问题的方法。需要什么功能直接使用就可以了，不必去一步一步的实现，至于这个功能是如何实现的，管我们什么事？我们会用就可以了。

面向对象的底层其实还是面向过程，把面向过程抽象成类，然后封装，方便我们我们使用的就是面向对象了。

面向过程：

优点：性能比面向对象好，因为类调用时需要实例化，开销比较大，比较消耗资源。
缺点：不易维护、不易复用、不易扩展.

优点：易维护、易复用、易扩展，由于面向对象有封装、继承、多态性的特性，可以设计出低耦合的系统，使系统 更加灵活、更加易于维护 .
缺点：性能比面向过程差

6.2 类与对象分析与命名规范  
对象是通过类生成出来的
类命第一个字母要大写
类有属性和方法
```
<?php
class User{
    private $name;
    public function say(){
        return 'hello ' . $this->name;
    }
    public function setName(string $name){
        $this->name = $name;
    }
}

$obj = new User;
// var_dump($obj);
$obj->setName('world');
echo $obj->say();
```
6.3 $this关键指针详细解读  
$this代表的是当前对象的指针
属性是专属于不同对象的，方法是共用的
```
<?php
class User{
    private $name;
    public function say(){
        return 'hello ' . $this->getName();
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

$obj = new User;
$obj->setName('world');
echo $obj->say();
echo '<hr>';
$user = new User;
$user->setName('Sam');
echo $user->say();
```
6.4 Static静态变量使用场景详解  
static和self关键字
static属性是属于类本身的
self代表当前类
```
<?php
class User{
    protected $name;
    protected static $group = 'visitor';
    public function say(){
        return self::$group . 'hello ' . $this->getName();
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

$obj = new User;
$obj->setName('world');
echo $obj->say();
```
6.5 静态方法什么时候使用  
静态方法不能使用$this,类的公共操作，效率高,一般工具类使用较多，用起来比较方便，效率快。
```
<?php
class Area
{
    public static function square(int $a, int $b)
    {
        return $a * $b;
    }
}

echo Area::square(3, 4);
```
6.6 const类常量使用详解  
```
<?php
class Area
{
    const PIE = 3.14;
    public static function square(int $a, int $b)
    {
        return $a * $b;
    }
    public static function circle(float $r)
    {
        return self::PIE * $r * $r;
    }
}

echo Area::circle(2);
```
6.7 使用extends继承实现复用  
```
<?php
class Monsters
{
    protected $hp = 100;
    protected $mp = 100;
    protected $attack = 5;
    protected $defence = 2;

    public function shout()
    {
        return 'Lok Tar!';
    }
}

class Goblin extends Monsters
{
    public function beat()
    {
        echo $this->shout();
        echo ' attack value is ' . $this->attack;
    }
}

(new Goblin)->beat();
```
6.8 父类方法和属性重写实例操作  
```
<?php
class Monsters
{
    protected $hp = 100;
    protected $mp = 100;
    protected $attack = 5;
    protected $defence = 2;

    public function shout()
    {
        return 'Lok Tar!';
    }

    public function magic()
    {
        echo 'fireball';
    }
}

class Goblin extends Monsters
{
    protected $attack = 4;
    public function beat()
    {
        echo $this->shout();
        echo ' attack value is ' . $this->attack;
    }

    public function magic()
    {
        echo 'throw lance';
    }
}

(new Goblin)->magic();

```
6.9 禁止重写策略  
父类的方法在function前加关键字final可以禁止继承类重写该方法
6.10 抽象类与抽象方法解释的明明白白  
**什么是php抽象方法？**
抽象方法是没有方法体的方法，没有方法体是指方法声明时没有花括号以及其中的内容，而是声明方法时直接在方法名后加上分号结束，声明抽象方法要使用abstract关键字修饰。声明抽象方法格式：abstract function();
**什么是php抽象类？**
只要声明抽象方法的类就是抽象类，抽象类也要使用abstract关键字修饰，抽象类中可以有不是抽象方法的方法和成员属性，但访问权限不能是私有（private关键字修饰的）。
**PHP中的抽象类作用？**
抽象类是不能直接使用，抽象类中没有被实现的抽象方法，所以抽象类是不能被实例化的，创建不了对象，也就不能使用它。抽象类不能直接使用，它有什么作用？使用抽象类包含了继承关系，它作为它的子类定义的公共接口，它的操作交给它的子类实现。换句话说抽象类是作为子类重载模板使用的，在某种程度上说抽象类就是一种规范，这种规范是要求它的子类遵守，子类按照自己的需求去实现。
```
<?php
abstract class BaseAction
{
    abstract public function log();
}

class Action extends BaseAction
{
    public function log()
    {
        echo 'log';
    }
}

(new Action())->log();
```
6.11 带你把接口理解的清清楚楚  
使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
接口中定义的所有方法都必须是公有，这是接口的特性。

要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。类可以实现多个接口，用逗号来分隔多个接口的名称。
实现多个接口时，接口中的方法不能有重名。
接口也可以继承，通过使用 extends 操作符。
类要实现接口，必须使用和接口中所定义的方法完全一致的方式。否则会导致致命错误。
```
<?php
interface CacheInterface{
    public function get();
    public function set();
}

class Mysql implements CacheInterface{
    public function get(){

    }
    public function set(){

    }
}

class Redis implements CacheInterface{
    public function get(){

    }
    public function set(){

    }
}

class Cache{
    public static function instance($driver){
        switch(strtolower($driver)){
            case 'mysql':
                return new Mysql;
            case 'redis':
                return new Redis;
        }
    }
}

$cache = Cache::instance('redis');
var_dump($cache);
```
6.12 父类方法调用场景实例  
使用parent关键字调用父类方法
```
<?php
class Monsters
{
    protected $hp = 100;
    protected $mp = 100;
    protected $attack = 5;
    protected $defence = 2;

    public function shout()
    {
        return 'Lok Tar!';
    }

    public function magic()
    {
        echo 'fireball';
    }

    public function die(){
        $this->knock_down();
        $this->disappear();
    }

    public function knock_down(){
        echo 'knock down ';
    }

    public function disappear(){
        echo 'disappear';
    }
}

class Goblin extends Monsters
{
    protected $attack = 4;
    public function beat()
    {
        echo $this->shout();
        echo ' attack value is ' . $this->attack;
    }

    public function magic()
    {
        echo 'throw lance';
    }

    public function die(){
        echo 'time is money. ';
        parent::die();
    }
}

(new Goblin)->die();
```
6.13 使用trait实现变相多继承  
Trait 是为类似 PHP 的单继承语言而准备的一种代码复用机制。Trait 为了减少单继承语言的限制，使开发人员能够自由地在不同层次结构内独立的类中复用 method。
Trait 和 Class 相似，但仅仅旨在用细粒度和一致的方式来组合功能。 无法通过 trait 自身来实例化。它为传统继承增加了水平特性的组合；也就是说，应用的几个 Class 之间不需要继承。
```
<?php
trait Log{
    public function log(){
        return __METHOD__;
    }
}

trait Comment{
    public function total(){
        return __METHOD__;
    }
}

class Topic{
    use Log,Comment;
}

$topic = new Topic;
echo $topic->log();
```
6.14 多重类继承优先级处理  
```
<?php
trait Log{
    public function log(){
        return __METHOD__;
    }
}

trait Comment{
    public function total(){
        return __METHOD__;
    }
}

class Site{
    public function total(){
        return __METHOD__;
    }
}

class Topic extends Site{
    use Log,Comment;
    // public function total(){
    //     return __METHOD__;
    // }
}

$topic = new Topic;
echo $topic->total();
```
6.15 解决trait冲突这么容易  
```
<?php
trait Log{
    public function save(){
        return __METHOD__;
    }
}

trait Comment{
    public function save(){
        return __METHOD__;
    }
}

class Topic{
    use Log,Comment{
        Log::save insteadOf Comment;
        Comment::save as send;
    }
}

$topic = new Topic;
echo $topic->save();
echo $topic->send();
```
6.16 trait访问权限控制  
```
<?php
trait Log{
    public function save(){
        return __METHOD__;
    }
}

trait Comment{
    public function save(){
        return __METHOD__;
    }
}

class Topic{
    use Log,Comment{
        Log::save insteadOf Comment;
        Log::save as protected;
        Comment::save as protected send;
    }
}

$topic = new Topic;
echo $topic->save();
echo $topic->send();
```
6.17 多重trait与抽象及静态方法的使用  
trait也可以使用其他的trait，也可以在trait里面定义抽象和静态方法
6.18 类方法和属性的访问控制  
|关键字|权限|
|--|--|
|public| 表示全局，类内部外部子类都可以访问|
|private|表示私有的，只有本类内部可以使用|
|protected|表示受保护的，只有本类或子类或父类中可以访问|

6.19 构造函数与析构函数实例解析  
```
<?php
class Capcha{
    protected $width;
    protected $height;
    protected $len;
    public function __construct(int $width = 500, int $height = 100,int $len = 5){
        $this->width = $width;
        $this->height = $height;
        $this->len = $len;
    }

    public function show(){
        echo "width = {$this->width}, height = {$this->height} ";
    }

    public function __destruct(){
        echo __METHOD__;
    }
}

$code = new Capcha(300);
$code->show();
```
6.20 见识__get与__set的真实用例  
在给不可访问属性赋值时，__set() 会被调用。
读取不可访问属性的值时，__get() 会被调用。
```
<?php
class Model{
    private $id;
    private $name;

    public function __get($name){
        return $this->$name;
    }

    public function __set($name,$value){
        $this->$name = $value;
    }
}

$model = new Model;
$model->id = 1;
echo $model->id;
```
6.21 使用魔术方法操作对象属性  
当对不可访问属性调用 isset() 或 empty() 时，__isset() 会被调用。
当对不可访问属性调用 unset() 时，__unset() 会被调用。
6.22 __call原来可以这么神奇的使用  
在对象中调用一个不可访问方法时，__call() 会被调用。
```
<?php
class Model{
    private $id;
    private $name;

    public function __get($name){
        return $this->$name;
    }

    public function __set($name,$value){
        $this->$name = $value;
    }

    public function __call($name,$arg){
        $action = 'getAttribute' . ucfirst($name);
        if(method_exists($this,$action)){
            return call_user_func_array([$this,$action],$arg);
        }
    }

    public function getAttributePhone(){
        echo 'phone';
    }
}



$model = new Model;
$model->phone();
```
6.23 教你正确使用__callStatic的技巧  
在静态上下文中调用一个不可访问方法时，__callStatic() 会被调用。
```
<?php
class Model{
    private $id;
    private $name;

    public function __get($name){
        return $this->$name;
    }

    public function __set($name,$value){
        $this->$name = $value;
    }

    public function __call($name,$arg){
        $action = 'getAttribute' . ucfirst($name);
        if(method_exists($this,$action)){
            return call_user_func_array([$this,$action],$arg);
        }
    }

    public function getAttributePhone(){
        echo 'phone';
    }

    public static function __callStatic($name,$arg){
        switch($name){
            case 'do':
                return call_user_func_array([new static(),'did'],$arg);
            break;
        }
    }

    public static function did(){
        echo 'did';
    }
}



Model::do();
```
### 7. 命名空间  
7.1 NAMESPACE解决什么样的问题  
命名空间解决的是类重名的问题，我们在实际项目中会用很多第三方的依赖，很难保证不发生重名现象。

7.2 全名空间最基础演示  
```
<?php
namespace App\Controller;

class User
{
    public static function make()
    {
        return __METHOD__;
    }
}
```
```
<?php

namespace Helper;

function show()
{
    return __METHOD__;
}
```
```
<?php
include 'User.php';
include 'helper.php';

echo App\Controller\User::make();

echo Helper\show();
```
7.3 命名空间限定规则使用详解  
参照代码  
7.4 函数与常量在命名空间中的特殊性  
函数如果没有namespace限制是属于全局的，但是如果当前命名空间有函数和引入文件的函数重名，会优先调用当前命名空间的函数。
通过define定义的常量不受namespace的限制，通过const定义的常量受命名空间的限制。
参照代码  
7.5 命名空间特殊关键字  
namespace关键字和__NAMESPACE__变量的使用，这两个用的比较少，做一下了解。  
参照代码  
7.6 奇妙的类与空间声明  
如果一个命名空间特别长的话，多次调用就会很麻烦，通过声明空间和类可以使代码得到简化。
参照代码  
7.7 多个类声明的定义  
可以用逗号对不同声明进行分割也可以用多个use，一般使用多个use，排版显得比较整齐。
```
use A,B;

use A;
use B;
```
7.8 引入冲突原来这么好解决  
通过使用as关键字给冲突的类命起别名
```
use App\A;
use Server\A as AServer;
```
7.9 超简单使用类自动加载处理  
使用spl_autoload_register进行自动加载，被引入的子类也可以使用自动加载
参照代码
7.10 使用面向对象方式实现自动加载  
详见代码  
7.11 使用Composer自动加载真方便  

7.12 自动加载任意类型文件  
  
### 8. composer的使用  
8.1 composer原理分析  
https://php.cnpkg.org/
https://developer.aliyun.com/composer
github->packgist->local
github->packgist->mirron->local
8.2 window环境下安装composer  
添加php环境变量
直接安装exe文件就可以了
8.3 在github中创建自己的开源项目  
创建之后在本地git clone
8.4 创建composer.json文件及在packagist.org中提交项目  

8.5 composer整合github实现自动推送  
webhooks
8.6 定义composer自动加载autoload配置与实例框架控制器  
更新完之后不要忘记composer dump更新一下
8.7 创建视图层  
8.8 使用composer安装packagist中的软件包  
安装gregwar/captcha依赖
8.9 使用国内composer镜像服务器快速安装packagist模块  


--prefer-dist 会从github 上下载.zip压缩包，并缓存到本地。下次再安装就会从本地加载，大大加速安装速度。但她没有保留 .git文件夹,没有版本信息。适合基于这个package进行开发。

--prefer-source 会从github 上clone 源代码，不会在本地缓存。但她保留了.git文件夹，从而可以实现版本控制。适合用于修改源代码。


https://packagist.org/about#how-to-update-packages