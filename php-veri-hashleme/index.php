<?php

$parola = "admin";
echo "Parolaniz : " . md5($parola) . "<br>";

// --- Parolaniz : 21232f297a57a5a743894a0e4a801fc3 --- //

// --- Hash çakışması --- //

$parola = "admin";
echo "1. Kullanici Parolasi : " . md5($parola) . "<br>";

$parola2 = "admin";
echo "2. Kullanıcı Parolasi : " . md5($parola2) . "<br>";

// --- 1. Kullanici Parolasi : 21232f297a57a5a743894a0e4a801fc3 --- //
// --- 2. Kullanıcı Parolasi : 21232f297a57a5a743894a0e4a801fc3 --- //

// SHA1 Algoritması

$sifre = "admin12";
echo "Parolanız : " . sha1($sifre) . "<br>";

// --- Parolanız : 38f078a81a2b033d197497af5b77f95b50bfcfb8 --- //

// --- SHA1 Algoritması Hash çakışması --- //

$pwd = "admin15";
echo "Parolanız : " . sha1($pwd) . "<br>"; 

$pwd2 = "admin15";
echo "Parolanız : " . sha1($pwd2) . "<br>"; 

// --- Parolanız : 24df3191692bd98d2bd36da36007b0be158eefbf --- //
// --- Parolanız : 24df3191692bd98d2bd36da36007b0be158eefbf --- //

// --- İki hashleme algoritmasının birleşimi --- //

$parola = "Admin_Admin";
echo "2 Algoritma ile hashlenmiş şifre : " . sha1(md5($parola)) . "<br>";

// --- 2 Algoritma ile hashlenmiş şifre : ce54850caccf10ea047ce0cde9552baf0aa0996d --- //

// --- İki algoritma hashlemesi ile hash çakışması --- //

$parola = "Admin_Admin";
echo "1. Kullanıcı Şifresi : " . sha1(md5($parola)) . "<br>";

 $parola2 = "Admin_Admin";
 echo "2. Kullanıcı Şifresi : " . sha1(md5($parola2)) . "<br>";  

// --- 1. Kullanıcı Şifresi : ce54850caccf10ea047ce0cde9552baf0aa0996d --- //
// --- 2. Kullanıcı Şifresi : ce54850caccf10ea047ce0cde9552baf0aa0996d --- //

// --- Salt değeri bulunan Bcrypt algoritması ile veri hashleme --- //
$parola = "admin";

$hashliParola = password_hash($parola, PASSWORD_BCRYPT);

echo "salt değerli parolanız : " . $hashliParola . "<br>";

// --- salt değerli parolanız : $2y$10$4RsMUow43iQj8ccZVbM/heFOqIqIajO38Pnug6tUFjny1h8myEbzq --- //

// --- Hash çakışması deneyi --- //

$parola = "admin";

$hashliParola = password_hash($parola, PASSWORD_BCRYPT);

echo "1. Kullanıcı Şifresi : " . $hashliParola . "<br>";

$parola2 = "admin";

$hashliParola2 = password_hash($parola2, PASSWORD_BCRYPT);

echo "2. Kullanıcı Şifresi : " . $hashliParola2 . "<br>";

// --- 1. Kullanıcı Şifresi : $2y$10$q4WS9.v61kxQHiJjFtZNp.b/jhUwnCgCXmt9OxjfbhIpy7gdbF2cO --- //
// --- 2. Kullanıcı Şifresi : $2y$10$nPx2yy0xcKKzOgZFNMQvY.oMNrTet1sdjgJwYy3AwZxF2eTp797bK --- //

// --- Bcrypt ile mesaj hashleme --- //

$Ahmet = "Selam, Nasılsın?";

$hashliMesaj = password_hash($Ahmet, PASSWORD_BCRYPT);

echo "Ahmetin Mesajı : " . $hashliMesaj . "<br>";

$Mehmet = "İyiyim sen nasılsın?";

$hashliMesaj2 = password_hash($Mehmet, PASSWORD_BCRYPT) . "<br>";

echo "Mehmetin Mesajı : " . $hashliMesaj2;

// --- Ahmet'in Mesajı : $2y$10$BDhGS7Bdj2hGdaWmN7vKZe0UkjGRqPHHABfpzax1hYJfKbaJO5wWG --- //
// --- Mehmet'in Mesajı : $2y$10$5GkXj/lf3eaF/hkDITBc9eMHyP/n.WCcuZbMQGnXdMxyYAAW1e23e --- //

// --- SHA256 Algoritması --- //

$password = "admin-admin";
$sha256_hash = hash('sha256', $password);

echo "SHA256 Algoritması Çıktısı : $sha256_hash" . "<br>";

// --- SHA256 Hash Çakışması Deneyi --- //

$sifreliPass = "admin-admin";
$sha_data = hash('sha256', $sifreliPass) . "<br>" ;

echo "1. Kullanıcı Parolası : $sha_data";

$sifreliPass2 = "admin-admin";
$sha_data2 = hash('sha256', $sifreliPass2); 

echo "2. Kullanıcı Parolası : $sha_data2";

// --- 1. Kullanıcı Parolası : 46f26d9c811eb9dd84062a69677474a17fa92b3831cf6ab95bc50503d8908825 --- //
// --- 2. Kullanıcı Parolası : 46f26d9c811eb9dd84062a69677474a17fa92b3831cf6ab95bc50503d8908825 --- //

?>