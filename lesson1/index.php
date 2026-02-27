<!-- 
 php -v     php o'rnatilganligini tekshirish 
 php -a     interaktiv rejimda ishlash uchun
 ctrl c || ctrl d || exit    interaktiv rejimdan chiqish uchun
 php -S localhost:8505    vaqtinchalik web serverni yaratish
 ctrl c    web serverni to'xtatish uchun

-->

<?php

print "Hello, World!";

$foo = "Assalomu alaykum, O'zbekistan!";
$number = 42;

print $foo;
print "\n";

$number++;
$number++;
$number--;

print $number;
print "\n";

$foo = "Salom, O'zbekiston!";      // string
$number = 42;                      // integer
$pi = 3.14;                       // float
$isTrue = true;                   // boolean
$nullValue = null;                // null
$arr = [1, 2, 3, 4, 5];            // array
$person = [                       // associative array
    "name" => "Ali",
    "age" => 30,
    "city" => "Tashkent"
];  
