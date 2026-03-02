<?php
declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);

function getUserInfo($userId) {
    // Simulate fetching user info from a database
    $users = [
        1 => ['name' => 'Alice', 'email' => 'alice@example.com'],
        2 => ['name' => 'Bob', 'email' => 'bob@example.com'],
        3 => ['name' => 'Charlie', 'email' => 'charlie@example.com']
    ];

    return $users[$userId] ?? null;
}

print_r(getUserInfo(1));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
</head>
<body>

    <hr>

    <?php
    // Agar, foydalanuvchi uylanganmisiz savoliga javob bersa, unda javobiga qarab matn chiqaramiz:
        if(isset($_GET['givenName'], $_GET['familyName'])){
            print 'Your given name:' . $_GET['givenName'] . '<br>';
            print 'Your family name:' . $_GET['familyName'] . '<br>';

            if(isset($_GET['isMarried'])){
                if($_GET['isMarried'] === 'yes'){
                    print 'Married' . '<br>';
                } else {
                    print 'Not married' . '<br>';
                }
            } 
            
            if(isset($_GET['football'])){
                print 'I like football' . '<br>';
            }

            if(isset($_GET['volleyball'])){
                print 'I like volleyball' . '<br>';
            }

            if(isset($_GET['chess'])){
                print 'I like chess' . '<br>';
            }
            
        } else{
            print 'Please fill in the form';
        }

        var_dump($_POST);
    ?>

    <hr/>
    <h1>Form</h1>
    <form method="post">
        Your given name: <input type="text" name="givenName"><br>
        Your family name: <input type="text" name="familyName"><br>

        Are you married? <br>
        <input type="radio" name="isMarried" value="yes"> Yes <br>
        <input type="radio" name="isMarried" value="no"> No<br> <br>

        Which sports do you like? <br>
        <input type="checkbox" name="football"> Football <br>
        <input type="checkbox" name="volleyball"> Volleyball <br>
        <input type="checkbox" name="chess"> Chess <br>

        <input type="submit" value="Submit">
    </form>

    <!-- 
        1. Biz brauzer orqali HTTP get usuli orqali so’rov yubordik va server bizga javob qaytardi:
        http://localhost:8080/lesson5/index.php?givenName=John&familyName=Doe&isMarried=yes&football=on&volleyball=on&chess=on

        2. Agar, ma’lumotlar post http usuli (method) orqali jo’natilgan bo’lsa, PHP’da ushbu ma’lumotlarni $_POST super global ko’pligi orqali topamiz:

        3. HTTP so’rovlarining usullari:
            GET (Biror ma’lumotni olish uchun ishlatiladi. URL’da ko’rinib turadi)
            POST (Yangi ma’lumotni qo’shish uchun ishlatiladi)
            PUT (Ma’lumotni almashtirish (to’liq o’zgartirish) uchun ishlatiladi)
            PATCH (Ma'lumotni (qisman) o’zgartirish uchun ishlatiladi)
            DELETE (Ma’lumotni o’chirish uchun ishlatiladi)
 

        4. HTTP javoblarining status kodlari:
            
        4.1 Hammasi joyida
            200 - Ok. Hammasi joyida. Get so’rovlarida muvaffaqiyatli javob sifatida qaytariladi.
            201 - Created. Yaratildi. Post so’rovlarida muvaffaqiyatli javob sifatida qaytariladi.
            204 - No content. Kontentsiz. Muvaffaqiyatli, lekin hech narsa qaytarilmaydi. Odatda, delete so’rovlariga javob.

            4.2 Foydalanuvchi xatosi
                400 - Bad request. So’rov noto’g’ri berilgan.
                401 - Unauthorized. Avtorizatsiyadan o’tmagan.
                403 - Forbidden. ushbu so’rov uchun vakolatingiz yo’q.
                404 - Not found. Topilmadi.
                405 - Method not allowed. Ushbu so’rovga, ushbu http usul orqali murojaat qilish mumkin emas. 

            4.3 Dasturiy xato
                500 - Internet server error. Yuqoridagilar aslida xato emas edi, dasturimiz ishlab
                turgan edi. Shunchaki foydalanuvchiga ma’lumot berilayotgan edi: “Hammasi
                joyida”, “Ma’lumot topilmadi” va hokazo deb. 500-status esa, biz kutmagan -
                dasturimizdagi, kodimizdagi xato. Uni tuzatish kerak.
     -->

</body>
</html>