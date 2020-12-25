<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/img/logoutama.png" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/iconic/css/material-design-iconic-font.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/main2.css" />
    <title>Login Page Say Story'Shop</title>
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100" style="background-image: url('bg21.jpg')">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
          <form class="login100-form validate-form" action="" method="POST">
            <span class="login100-form-title p-b-49"> Login </span>
            <div
              class="wrap-input100 validate-input m-b-23"
              data-validate="Username is reauired"
            >
              <span class="label-input100">Username</span>
              <input
                class="input100"
                type="text"
                name="username"
                placeholder="Type your username"
              />
              <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>
            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <span class="label-input100">Password</span>
              <input
                class="input100"
                type="password"
                name="pass"
                placeholder="Type your password"
              />
              <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>

            <div class="text-right p-t-8 p-b-31">
              <a href="#"> Forgot password? </a>
            </div>
            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" type="submit" name="login"
                  >Login</button
                >
              </div>
            </div>

            <div class="txt1 text-center p-t-54 p-b-20">
              <span> Or Sign Up Using </span>
            </div>
            <div class="flex-c-m">
              <a href="https://id-id.facebook.com/" class="btn-face m-b-20">
                <i class="fa fa-facebook-official"></i>
                Facebook
              </a>

              <a
                href="https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?response_type=code&client_id=297207864678-a7h18gnepq1aqevfkn102bvknndl45ne.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Fcpanel.hostinger.com%2Fpublic%2Foauth%2Fprovider%2Fgoogle%2Ftype%2Fregister&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&state=5fc48aea7b4be&flowName=GeneralOAuthFlow"
                class="btn-google m-b-20"
              >
                <img src="images/icons/icon-google.png" alt="GOOGLE" />
                Google
              </a>
            </div>
            <div class="flex-c-m">
              <a
                href="https://twitter.com/login?lang=id"
                class="btn-twit m-b-20"
              >
                <i class="fa fa-twitter"></i>
                Twitter
              </a>
            </div>
            <div class="flex-col-c p-t-155">
              <span class="txt11 p-b-17"> Or Sign Up Using </span>

              <a href="#" class="txt2"> Sign Up </a>
            </div>
          </form>
          <?php
            if (isset($_POST['login']) ) {
                include"koneksi.php";
                $username = $_POST['username'];
                $pass     = $_POST['pass'];

                $cek_user = mysqli_query( $conn,"SELECT * FROM login WHERE username='$username'");
                $row      = mysqli_num_rows($cek_user);

                if( $row === 1){
                    //jalankan prosedur seleksi password
                    $fetch_pass = mysqli_fetch_assoc($cek_user);
                    $cek_pass   = $fetch_pass['password'];
                    if($cek_pass <> $pass){
                        echo"<script>alert('Password salah');</script>";
                    }else{
                        echo"<script>alert('Login Berhasil');document.location.href='afterlogin.php'</script>";
                    }
                }else{
                    echo"<script>alert('Username salah atau belum terdaftar');</script>";
                }
            }
          ?>
        </div>
      </div>
    </div>
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </body>
</html>