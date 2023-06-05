<!DOCTYPE html>
<html>
<head>
  <title>CHATEAU</title>
  <link rel="stylesheet" href="login/login_page_css.css">
  <link rel="icon" type="image/x-icon" href="/misc/castel.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrap">
  <form class="login-form" action="login_script.php" method="post">
    <div class="form-header">
      <h3>CHATEAU</h3>
      <p>Log in to your account!</p>
    </div>
    <div class="form-group">
      <input type="text" class="form-input" placeholder="Username" required name="userlogin">
    </div>

    <div class="form-group">
      <input type="password" class="form-input" id="input" placeholder="Password" required name="passlogin">
    </div>
    <label class="container">
      <input type="checkbox" checked id="hide_show" onclick="myFunction()">
      <img class="img-checked"  src="./misc/eye_closed.png" width="20px">
      <img class="img-unchecked"    src="./misc/eye_open.png"   width="20px">
      Show Password
    </label>
    <div class="form-group">
      <button class="form-button" type="submit" name="login-submit">Login</button>
    </div>
    <div class="form-footer">
        Don't have an account? <a href="signup_page.php"><strong>Sign up!</strong></a>
            <?php if (isset($_GET['error'])) {
            if ($_GET['error'] == "wrongpassword") {
            echo '<p class="error">Wrong password!</p>';
            }
            if ($_GET['error'] == "nouser") {
                echo '<p class="error">No user found!</p>';
            } }?>
    </div>
  </form>
</div>
</body>
<script>
</script>
</html>