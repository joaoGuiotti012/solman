<link href="css/styleLogin02.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class=" container wrapper fadeInDown">

  <div class="  formContent ">
    <div class="container">

      <br><br>
      <img src="img/slack-logo.png" class="text-center" id="icon" alt="User Icon" />
      <br>
      <!--h1 class="title-login text-center">Aditya News</h1-->
    </div>
    <form class="form-group" action="php/controller/logar-usuarios.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1" class="text-uppercase">Username</label>
        <input type="text" class="form-control" name="user" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="text-uppercase">Password</label>
        <input type="password" class="form-control" name="password" placeholder="">
        <br>
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          <small>Remember Me</small>
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Logar</button>
      <br><br>
    </form>
  </div> <br>
  <?php
    if (isset($_GET['msg'])) {
      echo $_GET['msg'];
    }
    ?>
</div>