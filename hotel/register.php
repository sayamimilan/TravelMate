<?php include 'header.php' ?>

<style>
  .design{
    background-image: url(assets/images/background.jpg);
    position: absolute;
    background-size: cover;
    min-height:1020px;
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


<!-- REGISTER FORM -->

<div class="design" style="width:100%; height:100%;">
  <div class="row login">
    <div class="col s12 m8 offset-m2 l4 offset-l4">
      <div class="card">
        <div class="card-action grey darken-2 white-text">
          <h3 class="center">Register Form</h3>
        </div>
        <div class="card-content">
          <form action="registernow.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <div class="form-field">            
              <label for="username">Username</label>
              <?php if(isset($_GET['username'])){ ?>
                <input type="text" id="username" name="username" value="<?php echo $_GET['username']; ?>">
              <?php }else{ ?>
                <input type="text" id="username" name="username">
              <?php } ?>        
            </div><br>
            <div class="form-field">            
              <label for="fname">First Name</label>
              <?php if(isset($_GET['first_name'])){ ?>
                <input type="text" id="fname" name="first_name" value="<?php echo $_GET['first_name']; ?>">
              <?php }else{ ?>
                <input type="text" id="fname" name="first_name">
              <?php } ?>        
            </div><br>
            <div class="form-field">            
              <label for="lname">Last Name</label>
              <?php if(isset($_GET['last_name'])){ ?>
                <input type="text" id="lname" name="last_name" value="<?php echo $_GET['last_name']; ?>">
              <?php }else{ ?>
                <input type="text" id="lname" name="last_name">
              <?php } ?>        
            </div><br>
            <div class="form-field">            
              <label for="email">Email</label>
              <?php if(isset($_GET['email'])){ ?>
                <input type="email" id="email" name="email" value="<?php echo $_GET['email']; ?>">
              <?php }else{ ?>
                <input type="email" id="email" name="email">
              <?php } ?>        
            </div><br>       
            <div class="form-field">            
              <label for="password">Password</label>
              <input type="password" id="password" name="password">           
            </div><br>
            <div class="form-field">            
              <label for="password">Retype Password</label>
              <input type="password" id="password" name="re_password">           
            </div><br>
            
            <div class="form-field center">
              <button class="btn-large grey darken-2 hoverable white-text">register</button>
            </div>
            <a href="login.php" class="ca">already have an account?</a>
          </form>      
        </div>      
      </div>
    </div>
  </div>
</div>


