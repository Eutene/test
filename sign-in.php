<!doctype html>
<html lang="en">
  <head>
    <title>Sign in</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background: #FFF center center;
            background-size: cover;
        }
        .logo{
            width: 400px;
            display:block;
            margin:auto;
        }
        .login-panel{
            width: 400px;
        }
        .form-control{
            position: relative;
        }
        .form-control:focus{
            z-index: 1;
        }
        .form-floating>label{
            z-index: 2;
        }
        .input-up .form-control{
            border-radius: .25rem .25rem 0 0;
        }
        .input-bottom .form-control{
            border-top: none;
            border-radius: 0 0 .25rem .25rem ;
        }
    </style>
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">
      

        <div class="login-panel text-center">
            <form action="doLogin.php" method="post">
            <div class="">
                <img class="logo" src="images/logo.png" alt="">
                <div class="form-floating input-up">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                    <label for="floatingInput">Email</label>
                  </div>
                  <div class="form-floating input-bottom">
                    <input type="password" class="form-control" id="password" placeholder="name@example.com" name="password" required>
                    <label for="password">Password</label>
                  </div>
                  <div class="d-grid gap-2 mb-5 mt-3">
                      <button class="btn btn-warning text-white" type="submit">爪爪日記 &nbsp;&nbsp; 歡迎您</button>
                      <a class="btn btn-outline-warning text-warning" href="create-user.php">還沒有日記本嗎？ &nbsp;&nbsp; 請點我</a>
                  </div>
                  <div class="text-muted">© moebook 2021</div>
            </div>
            </form>
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
