<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Illuminate Minds</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="https://illuminateminds.com/wp-content/uploads/cropped-Batch-2023-3-1-32x32.png" sizes="32x32">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
  <h1>Students</h1>
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover">Sign Up </h2>
    <div class="fadeIn first">
      <img src="./images/logo.png" id="icon" alt="User Icon" />
    </div>
    <form method="POST" action="auth.php">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="LOGIN">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="PASSWORD">
      <input type="submit" id="submitbtn" class="fadeIn fourth" value="Log In">
    </form>

    <a href="#">OWNER LOGIN</a>
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<script>
      
</script>
</body>
</html>
