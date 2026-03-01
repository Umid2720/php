<?php
declare(strict_types=1);
ini_set('display_errors', '1');
error_reporting(E_ALL);

// belgi orqali PHP’ni to’xtatish mumkin va undan keyin oddiy HTML kod yozish mumkin. Hozirgi misolda PHP’ni yopib, undan keyin HTML qatorlarini ishlatib ko’ramiz:

// Php’da $_GET super global ko’pligi bor. Bu ko’plikda GET so’rovlari joylashgan bo’ladi:
print_r($_GET);

// Funksiya ichida uning tashqarisidagi o’zgaruvchanlarni ishlatib bo’lmaydi: 
$bar = 'var';

function foo(): void
{
    $bar = 45;
    print $bar;
}

foo();

// Funksiyaga ta’sir qilishning birdan-bir yo’li - bu uning parametrlaridir.
// Funksiya ichidagi va undan tashqarisidagi o’zgaruvchanlarning nomi bir bo’lsa ham, aslida bir-birga aloqasi yo’q. Funksiya ichida yaratilgan o’zgaruvchanlar, tashqaridagilarga ta’sir qilmaydi va aksi: tashqaridagilar funksiya ichiga ta’sir qilmaydi:







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 | PHP and HTML</title>
</head>
<body>

    <h1>Assalomu alaykum!!!</h1>

    <form>
        Ismingiz: <input type="text" name="givenName"> <br />
        Familiyangiz: <input type="text" name="familyName"> <br />
        <button type="submit">Yuborish</button>
    </form>
    
</body>
</html>