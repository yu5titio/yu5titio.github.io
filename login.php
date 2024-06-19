<?php
session_start();
if(isset($_POST['proses'])){
    require 'config.php';
        
    $user = strip_tags($_POST['user']);
    $pass = strip_tags($_POST['pass']);

    $sql = 'SELECT member.*, login.user, login.pass, login.id_member
            FROM member INNER JOIN login ON member.id_member = login.id_member
            WHERE login.user = ? AND login.pass = ?';
    $row = $config->prepare($sql);
    $row->execute(array($user, $pass));
    $hasil = $row->fetch(PDO::FETCH_ASSOC);
    $jum = $row->rowCount();

    if($jum > 0){
        $_SESSION['admin'] = $hasil;
        // Redirect to appropriate page based on role
        if($hasil['id_member'] == 1) {
            echo '<script>alert("Berhasil Login Sebagai Admin!");window.location="index.php"</script>';
        } elseif($hasil['id_member'] == 2) {
            echo '<script>alert("Berhasil Login Sebagai Customer!");window.location="index.php"</script>';
        } elseif($hasil['id_member'] == 3) {
            echo '<script>alert("Berhasil Login Sebagai Owner!");window.location="index.php"</script>';
        } else {
            echo '<script>alert("Login Sukses, tetapi peran tidak valid");history.go(-1);</script>';
        }
    } else {
        echo '<script>alert("Login Gagal!");history.go(-1);</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | SIWEB Life Balanced</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #6c757d;
    }
    .login-form {
      max-width: 4000px;
      padding: 30px;
      background: #fff;
      border-radius: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      animation: fadeInUp 0.6s ease forwards;
    }
    .login-heading {
      text-align: center;
      margin-bottom: 30px;
      color: #007bff;
    }
    .password-toggle {
      cursor: pointer;
    }
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form class="login-form" method="POST" action="login.php">
          <h2 class="login-heading">Login</h2>
          <div class="form-group">
            <input type="text" class="form-control" name="user" placeholder="User ID" autofocus required>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control password-input" name="pass" placeholder="Password" required>
              <div class="input-group-append password-toggle">
                <span class="input-group-text">
                  <i class="fa fa-eye-slash toggle-icon"></i>
                </span>
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="proses" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.toggle-icon').click(function() {
        var input = $('.password-input');
        if (input.attr('type') === 'password') {
          input.attr('type', 'text');
          $(this).removeClass('fa-eye-slash').addClass('fa-eye');
        } else {
          input.attr('type', 'password');
          $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        }
      });
    });
  </script>
</body>
</html>

