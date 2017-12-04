<html>
<head>
    <title>Sing up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

  <div class="row" id="pwd-container">

    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          
            <input type="text" id="user_name" name="user_name" placeholder="Name" required class="form-control input-lg" value="" />
          
            <input type="email" id="user_email" name="user_email" placeholder="Email" required class="form-control input-lg" value="" />

            <input type="password" class="form-control input-lg" name="user_password" id="user_password" placeholder="Password" required="" />

            <div class="pwstrength_viewport_progress"></div>

            <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign up</button>

         </form>
      </section>  
    </div>

    <div class="col-md-4"></div>

  </div>
</div>
</body>
</html>
