<?php

declare(strict_types=1);
ini_set('display_errors', '1');
error_reporting(E_ALL);

/*
    Ko’plikning qiymatlari haqida kengroq ma’lumot olish uchun, var_dump() funksiyasidan foydalanamiz. Ushbu funksiya ko'plik elementlarining turi va qiymatlarini ekranga chiqaradi:
*/

$foo = ["berilganism" => 'Doniyor', 'sementchi' => 'Xushnud'];

print $foo;


// Ko’plik kalitlarini ham yaratganda, uning tartibining ahamiyati yo’q:
$foo = [74 => 'John', 0 => 'Jack', 1087 => 'Jackie', 'gashr'=> 'so"k'];

var_dump($foo);

print $foo[0];

// isset() funksiyasiga argument sifatida o’zgaruvchan yuborsak, u bizga boolen turiga mansub javob qaytaradi. Agar, yuborgan o’zgaruvchanimiz PHP’ga ma’lum bo’lsa, ya’ni u oldinroq yaratilgan bo’lsa, isset() true qaytaradi, bo’lmasa false:

print('<hr>');
var_dump(isset($gashr));

print('<hr>');
var_dump(isset($foo));

// isset() funksiyasi orqali biror ko’plikning kaliti bor, yoki yo’qligini ham tekshirish mumkin:

print('<hr>');
var_dump(isset($foo['0']));
var_dump(isset($foo[0]));
var_dump(isset($foo['gashr']));




