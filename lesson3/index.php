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
$foo = [74 => 'John', 0 => 'Jack', 1087 => 'Jackie'];

var_dump($foo);

print $foo[0];








