<?php
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/jquery.js"></script>
</head>
<body background="assets/images/kimkim.jpg">
<?php
  require('db.php');
    if (isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Bạn đã đăng ký thành công</h3><br/>Click để <a href='login.php'>Đăng nhập</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Đăng ký</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Tên đăng nhập" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Mật khẩu" required />
<input type="submit" name="submit" value="Đăng ký" />
</form>
</div>
<?php } ?>
</body>
</html>