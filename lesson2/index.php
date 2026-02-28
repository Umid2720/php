<?php
declare(strict_types=1);
ini_set('display_errors', '1');
error_reporting(E_ALL);

/*
    Class, extends, interface tushunchalari PHP va Umumiy Dasturlash Teoriyasida bir xil. Faqatgina, PHP’da obyektning xususiyatlariga murojaat qilinganda, nuqta bilan emas, "->" belgisi ishlatiladi. Bundan tashqari, sinf xususiyat va usullariga huquqlarini hozirgi holatda public qilib ishlatamiz. Bu haqida keyingi mavzularda to’liq o’rganamiz:
*/

class Animal
{
    public int $legs = 4;
}

class Primate extends Animal
{
    public int $legs = 2;
    public int $hands = 2;
}

$monkey = new Primate();

print $monkey->hands; // 2
print $monkey->legs; // 2

class Hayvon
{
    public string $name;

    public function sayMyName(): void
    {
        print "<br> Mening ismim $this->name";
    }
}

$eshshak = new Hayvon();
$eshshak->name = "Eshshak";
$eshshak->sayMyName(); // Mening ismim Eshshak

$hayton = new Hayvon();
$hayton-> name = "Jipiriq";
$hayton->sayMyName(); // Mening ismim Jipiriq