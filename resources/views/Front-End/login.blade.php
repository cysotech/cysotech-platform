<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <title>Cysotech || Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/wind2.png">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
     <div class="row">
     
      <div class="centered">
         <form class="needs-validation" novalidate>
             <div class="h3">Client Login</div>
             <hr>
          <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
<!--            form validation message-->
            <div class="invalid-feedback">
              Please enter a valid email.
            </div>
            <small id="emailHelp" class="form-text text-default">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
            <div class="invalid-feedback text-danger" id="feedback">
              Password must contain at least 8 characters.
            </div>
          </div>
<!--
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
-->
          <button type="submit" class="btn btn-primary float-right">Log In</button><br><br>
          <button class="btn btn-block button-color text-default">Forgotten Password?</button>
          <button class="btn btn-block button-color text-default">Create Account</button>
        </form>
        </div>
    </div>
  </div>
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/login.js" charset="utf-8"></script>
  </body>
</html>