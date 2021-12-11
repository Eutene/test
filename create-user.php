<!doctype html>
<html lang="en">
  <head>
    <title>註冊會員 sign-up</title>

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
  <body class="d-flex justify-content-center align-items-center vh-200">
        <div class="login-panel text-center">
            <form action="doSignUp.php" method="post"  >

                <div class="form-group"></div>
                <img class="logo" src="images/logo.png" alt="">
                <div class="progress mb-3">
                    <div class="progress-bar bg-warning " role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                    <div class="form-floating input mb-2">
                        <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
                        <label for="name">姓名</label>
                    </div>
                    <div class="form-floating input mb-2">
                        <input type="text" class="form-control" id="account" placeholder="account" name="account" required>
                        <label for="account">帳號</label>
                    </div>
                    <div class="form-floating input mb-2">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" data-error="郵件格式錯誤">
                        <label for="email">信箱</label>
                    </div>
                    <div class="form-floating input mb-2">
                        <input type="mobile" class="form-control" id="mobile" placeholder="mobile" name="mobile">
                        <label for="mobile">手機</label>
                    </div>

                <div class="form-floating input mb-2">
                    <input type="password" class="form-control" id="password"  name="password" placeholder="設定密碼" pattern="^(?=.*\d)(?=.*[a-zA-Z]).{6,}$" data-error="請輸入含有英文字母及數字的密碼，至少六個字元。" >
                    <label for="password">密碼，請輸入至少六字元的字母與數字</label>
                </div>

                <div class="form-floating input mb-2">
                    <input id="irepassword" name="repassword" class="form-control" type="password" placeholder="確認密碼" data-match="#inputPassword" data-error="密碼未吻合！" required="required">
                    <label for="repassword">確認密碼</label>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="mb-3">
                    <input id="valid" type="hidden" name="valid" class="form-control" >
                </div>
                  <div class="d-grid gap-2 mb-5 mt-3">
                      <div class="help-block with-errors"></div>

                      <button class="btn btn-warning text-white" type="submit">開始書寫 &nbsp; 屬於您和毛孩的爪爪日記</button>
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
