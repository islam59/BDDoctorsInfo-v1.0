<?php ob_start(); ?>
<?php 
  include '../lib/Session.php'; 
  Session::init();
?>

<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>
<?php include '../helpers/Format.php'; ?>
<?php 
  $db = new Database();
  $fm = new Format();
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: BDDoctorsInfo.com</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/appmenu.css">
  </head>
  <body>

<div class="wrapper">

<section class="loginfield">
  <div class="row">
      <div class="small-12 medium-12 large-12 columns">
          <div class="small-12 medium-3 large-3 columns"></div>
          <div class="accordion small-12 medium-4 large-4 columns" data-accordion style="border:none; box-shadow:none;">

            <!-- ------login------- -->
            <div class="accordion-item is-active" data-accordion-item >
            <a href="#" class="expanded small hollow accordion-title">Login !</a>
            <div class="accordion-content" data-tab-content>
              <form class="accordion" data-accordion action="" method="post"> 
                <center><h4>Admin Login Form !</h4></center>

<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $fm->validation($_POST['email']);
    $password = $fm->validation(md5($_POST['password']));

    $email =  mysqli_real_escape_string($db->link,$email);
    $password =  mysqli_real_escape_string($db->link,$password);

    $query = "SELECT * FROM tb_user WHERE email='$email' AND password = '$password'";
    $result = $db->select($query);

    if($result != false){
      $value = mysqli_fetch_array($result);
      $row = mysqli_num_rows($result);
      if($row > 0){
          Session::set("login",true);
          Session::set("userid", $value['id']);
          Session::set("username", $value['username']);
          Session::set("Email", $value['email']);
          Session::set("userRole", $value['userrole']);
          header("Location:index.php");
      }else{
        echo "<span style='margin:10px 0px 10px 0px; color:red; font-size:18px;'>No Result Found!!.</span>";
      }
    }else{
      echo "<span style='margin:10px 0px 10px 0px; color:red; font-size:18px;'>Username or Passsword not matched!!.</span>";
    }
  }
    ?>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="checkbox">
                <label><input type="checkbox">Remember Me!</label>
                </div>
                <button type="submit" class="expanded button">Login</button>            
              </form>
            </div>
            </div>  
            
            <!-- ------password recovery------- -->
            <div class="accordion-item" data-accordion-item>
            <a href="#" class="expanded small  hollow accordion-title" style="color:red;">Forget Password !</a>
            <div class="accordion-content" data-tab-content>
              <center><h4>Recover Your Password !</h4></center>
              <form class="accordion" data-accordion> 
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>

                <button type="submit" class="expanded button">Submit</button>           
              </form>
            </div>
            </div>  

            <!-- ... -->
          </div>
      </div>
  </div>

</section>

 




</div>





    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
    <script>
       //$("#modalContainer").load("_form-modal-test.html", function() {
        $(document).foundation();
         //});
    </script> 

  </body>
</html>
