<?php include 'header.php' ?>

<style>
  .design{
    position: absolute;
    top: 60px;
    left:0;
    background-image: url(assets/images/background.jpg);
    background-size: cover;
  }
  .login{
    margin-top: 100px;
  }
  .login .card{
    background: rgba(0, 0, 0, 0.6);
  }
  .login label{
    font-size:16px;
    color:#ccc;
  }
  .login input{
    font-size:20px !important;
    color: #fff;
  }
  .login button:hover{
    padding:0px 40px;
  }

</style>

<!-- LOGIN FORM -->
<div class="design" style="width:100%; height:100%;">
  <div class="row login">
    <div class="col s12 m8 offset-m2 l4 offset-l4">
      <div class="card">
        <div class="card-action grey darken-2 white-text">
          <h3 class="center">Login</h3>
        </div>
        <div class="card-content">
          <form action="login_check.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
     		      <p class="error"><?php echo $_GET['error']; ?></p>
     	      <?php } ?> 
            <div class="form-field">      
              <label for="username">Username</label>
              <input type="text" id="username" name="username">           
            </div><br>
            <div class="form-field">            
              <label for="password">Password</label>
              <input type="password" id="password" name="password">           
            </div><br>
            <div class="form-field center">
              <button class="btn-large grey darken-2 waves-effect hoverable white-text" type="submit">Login</button>
            </div>
            <a href="register.php" class="ca">Create an account</a>
            <a href="forget.php" class="ca right">Forgot password?</a>
          </form>      
        </div>      
      </div>
    </div>
  </div>
</div>

