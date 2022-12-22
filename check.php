<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Login</title>
</head>
<body>
<div style="text-align: center;">
  <?php
    $username = $password = "";
    $_SESSION['level'] = ""; 
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo '<h2 style="margin-top: 80px; font-size: 80px ">ตรวจสอบ Session</h2>';
    echo "<h2>username: $username</h2>";
    echo "<h2>password: $password</h2>";

    if($_POST['username']== 'abcd' && $_POST['password'] == '123456'){
      $_SESSION['level'] = "manager";
      echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=http://localhost/sessioncookie/system-login/manager.php">';
    }elseif ($_POST['username']== 'mnop' && $_POST['password'] == '987654') {
      $_SESSION['level'] = "employee";
      echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=http://localhost/sessioncookie/system-login/employee.php">';
    }else{
      echo "<h2>ไม่มีสิทธิ์ในการเข้าใช้งาน<h2>";
      echo '<META HTTP-EQUIV="Refresh" CONTENT="5;URL=http://localhost/sessioncookie/system-login/login.php">';
    }
  ?>
</div>

  
  
</body>
</html>