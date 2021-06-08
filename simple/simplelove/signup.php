<!DOCTYPE html>
<html>
<head>
  <title>Signup Page</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/jquery.js"></script>
</head>
<style type="text/css">
  .mb-3  input[type=name] {
    width: 33.3%;
    padding:1%;
    display: block;
    margin-bottom: 10px;
    border-radius: 5px;
    }  
  .mb-3  input[type=email] {
    width: 33.3%;
    padding:1%;
    display: block;
    margin-bottom: 10px;
    border-radius: 5px;
    }
    .mb-3 input[type=password]{
    width: 33.3%;
    padding:1%;
    display: block;
    margin-bottom: 10px;
    border-radius: 5px;
    }
</style>
<body background="IMG_0546.jpg">
  <header></header>
  <main>
    <div class="container">

  <form action="signup.php" method="POST">
    <div class="mb-3">
      <label class="form-label"> Username</label>
      <input type="name" class="form-control" aria-describedby="nameHelp" name="username">
      <div class="mb-3">
      <label class="form-label"> Email</label>
      <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
      </form>
    </div>
    </main>
    <footer></footer>
</body>
</html>