<?php
//echo "đây là trang chủ";
// include :
// include_one;
// required 
// required_one;


// include "demo.php";
// include "demo.php";
// include "demo.php";
// include "demo.php";
// include "demo.php";

// include_once "demo.php";
// include_once "demo.php";
// include_once "demo.php";
// include_once "demo.php";
// include_once "demo.php";

// require "demo.php";
// require "demo.php";
// require "demo.php";
// require "demo.php";
// require "demo.php";

// require_once "demo.php";
// require_once "demo.php";
// require_once "demo.php";
// require_once "demo.php";
// require_once "demo.php";

require "Student.php";

echo "<pre>";
$std = new \buoi5\Student("ph33824", "zxhcsa");
var_dump($std);
echo $std->xinChao();
echo "<br>";
// unset($std);

$std1 = new \buoi5\Student("ph33333", "aka");
var_dump($std1);
echo $std1->xinChao();
echo "<br>";