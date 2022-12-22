<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login System</title>
</head>
<body>
<div style="height: 100vh; display: flex; align-items: center; justify-content: center;">
  <form action="check.php" name="login" method="post" style="background: #808080; padding: 30px 70px; color: #efefef; text-align: center;">
    <h1>Username</h1>
    <input type="text" id="username" name="username" ><br>
    <h1>Password</h1>
    <input type="password" id="password" name="password" ><br><br>
    <input style="margin-right: 50px;" type="submit" name="login_user" value="ส่งข้อมูล">
    <input type="reset" name="cancel" value="ยกเลิก"><br><br><br>
  </form> 
</div>

    

</body>
</html>
