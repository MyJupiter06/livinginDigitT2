<?php
/*
*Student Code : 026530491011-9
*Author : Warinthon Jaksomsak
*DAte: August 15, 2023
*DEscription: COOKIE & SESSION
*/
 include "./templates/header.php";
 include "./templates/menu.php";
?>
<h1>เข้าสู่ระบบ (Login)</h1>
<form action="./src/set.php" method= "post">
    อีเมล(E-mail): <input type = "text" name = "logfemail" required><br>
    รหัสผ่าน(Password): <input type = "password" name = "logfpassword" required><br>
    <input type = "checkbox" name = "logfrename" value = "1">
    ข้อมูลเข้าสู่ระบบ? <br>
    <button type = "submit" name = "logfsubmit"> เข้าสู่ระบบ</button>
    <button type = "reset">เคลียร์</button>


</form>
<?php
include "./templates/footer.php";
?>