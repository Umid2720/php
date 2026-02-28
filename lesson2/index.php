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

// PHP’da ko’plik yaratayotganda, uning nechta elementi bo’lishini ko’rsatmaymiz.  Ko’plikka yangi qiymat qo’shilganda, php avtomatik ravishda ko’plik hajmini kengaytirib boraveradi:

$foo = [];
$foo[0] = 'John';
$foo[1] = 'Jack';
$foo[2] = 'Jackie';
$foo[3] = 'Jenny';

print $foo[0]; // John
print $foo[1]; // Jack
print $foo[2]; // Jackie
print $foo[3]; // Jenny

// Ko’plikka yangi qiymat qo’shayotganda, uning kalitlarini (index) bo'sh qoldirishimiz mumkin. Kalitlar avtomatik ravishda, tartib bilan yaratiladi:

$arr[] = 'John';
$arr[] = 'Jack';
$arr[] = 'Jackie';
$arr[] = 'Jenny';

print '<h1>Assalomu alaykum</h1>';
print $arr[0]; // John
print $arr[1]; // Jack
print $arr[2]; // Jackie
print $arr[3]; // Jenny

// Ko’plik yaratayotganda, birdaniga uning qiymatlarini ham ko’rsatish mumkin:
$foo = ['John', 'Jack', 'Jackie', 'Jenny'];
print $foo[2];

// Shu bilan birga, ko’plik yaratayotganda, qiymatning kalitlarini ham ko’rsatish mumkin. Buning uchun teng va katta belgisidan (=>) keyin kalit qo’yiladi va PHP avtomatik undan keyingi qiymatlarga tartib bilan kalitlarni qo’yadi:

// Agar, mavjud bo’lmagan kalit kiritsangiz, xato chiqadi:

$foo = ['John', 'Jack', 75 => 'Jackie', 'Jenny'];

print $foo[0]; // John
print $foo[1]; // Jack
// print $foo[2]; // xatolik, chunki 2 kaliti ko’rsatilmagan
print $foo[75]; // Jackie
print $foo[76]; // Jenny

// print_r() funksiyasi orqali ko’pliklar haqidagi ma’lumotlarni qulay formatda olish mumkin:

print "<hr/>";
print_r($foo);

// Undan tashqari, PHP orqali ko’pliklarda kalitlarni string turida ham yaratish mumkin. Bunday turdagi ko’pliklar assotsiativ ko’pliklar deyiladi:

