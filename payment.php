<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>
</head>
<body>
  <div style="text-align: center;">
    <?php 
      if ($_SESSION['level'] == "manager" or $_SESSION['level'] ==  "employee") {
        print "<h2 style='margin-top: 80px; font-size: 80px '>ยินดีต้อนรับสู่หน้า Payment<h2>";
        print "<a href='login.php'>ต้องการ Logout ไหม</a>";
      }else{
        print "<h2 style='margin-top: 80px; font-size: 80px '>ไม่มีสิทธิ์ในการเข้าใช้งาน<h2>";
        print "<a href='login.php'>กรุณา Login ใหม่อีกครั้ง</a>";
      }
    ?>
  </div>

</body>
</html>
