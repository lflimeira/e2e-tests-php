<html>
<head>
    <title>Sing in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

  <div class="row" id="pwd-container">
    <div style="text-align: center;" class="col-md-12">
        <?php if(isset($_POST['go'])): ?>
            <?php if($_POST['email'] == "xxx@gmail.com" && $_POST['password'] == "123"): ?>
               <h1>Successfully logged in.</h1>
            <?php else: ?>
               <h1>Failed to login.</h1>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <input type="email" name="email" id="email" placeholder="Email" required class="form-control input-lg" value="" />

          <input type="password" name="password" id="password" class="form-control input-lg" id="password" placeholder="Password" required="" />


          <div class="pwstrength_viewport_progress"></div>


          <button type="submit" id="signin" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a id="signup" href="add_user.php">Create account</a>
          </div>

        </form>
      </section>  
      </div>

      <div class="col-md-4"></div>


  </div>
</div>
</body>
</html>
