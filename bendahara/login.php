<?php
require_once('./koneksi/conn.php');
error_reporting(0);
session_start();
if(isset($_SESSION['user'])) {
  header('location: ./index.php');  
}

include './helpers/Format.php';
$fm=new Format();

header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache"); 
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
header("Cache-Control: max-age=2592000");
$errors = array();
if(isset($_POST['login-submit'])) { 
	  $username = $fm->validation($_POST['username']);
	  $password = $fm->validation($_POST['password']);
      $user = $conn->real_escape_string($username);
      $pass = $conn->real_escape_string($password);

     if(empty($user) || empty($pass)) {
          if($user == "") {
            $errors[] = "Username Wajib di isi";
          } 
          if($pass == "") {
            $errors[] = "Password Wajib di isi";
          }
      }else {
      	$sql1 = $conn->query("SELECT username FROM tbl_bendahara WHERE username = '$user'");
      	if ($sql1->num_rows > 0) {
      		$sql = $conn->query("SELECT password FROM tbl_bendahara WHERE username = '$user'");
            $data = $sql->fetch_assoc();
            $hash = $data['password'];
            $pass1 = password_verify($pass,$hash);
             if($pass1){
                $sesi = $conn->query("SELECT * FROM tbl_bendahara WHERE username='$user'");
                  $value = $sesi->fetch_assoc();
                  // set session
                  $_SESSION['user'] = $value['name'];
                  $_SESSION['id'] = $value['id'];
                  header('location: ./index.php');

                }else{
                   $errors[] = "Password Salah !";
                }
      	}else{
      		$errors[] = "Username tidak ditemukan !";
      	}

            

    }
} //tutup post
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FAMMI | Bendahara</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="../assets/images/favicon.png">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../fammi/assets/plugins/iCheck/square/blue.css">


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div>
   <p><div class="col-lg-12">
								<?php if($errors) {
					                foreach ($errors as $key => $value) {
					                  echo '<div class="alert alert-danger" role="alert">
					                  <i class="glyphicon glyphicon-exclamation-sign"></i>
					                  '.$value.'</div>';                    
					                  }
					                } ?>
							</div></p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"> <img width="100px;" src="../assets/images/fammi.png"></p><div>
		<center><p><b>FORUM ANAK MUDA MASJID INDONESIA</b></p>
		</div><hr/>
<CENTER><p>Login Bendahara</p>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
		<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-primary btn-block btn-flat" value="Sign In">
          
        </div>
        <!-- /.col -->
		 
      </div>
    </form>


    <!-- /.social-auth-links -->
    <hr/>
    <span>Powered By: <a href="http://chanofficial.rf.gd">chanofficial</span>
  </div>
 
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
