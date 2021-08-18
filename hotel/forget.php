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
          <h3 class="center">Reset Password</h3>
        </div>
        <div class="card-content">
          <form action="forget_check.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
     		      <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?> 
            <?php if (isset($_GET['success'])) { ?>
     		      <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?> 
            <div class="form-field">      
              <label for="email">Email</label>
              <?php if(isset($_GET['email'])){ ?>
                <input type="email" id="email" name="email" value="<?php echo $_GET['email']; ?>">
              <?php }else{ ?> 
                <input type="email" id="email" name="email">
              <?php } ?>
            </div><br>
            <div class="form-field">            
              <label for="newpassword">New Password</label>
              <input type="password" id="newpassword" name="newpassword">           
            </div><br>
            <div class="form-field">            
              <label for="newrepassword">Confirm Password</label>
              <input type="password" id="newrepassword" name="newrepassword">           
            </div><br>
            <div class="form-field center">
              <button class="btn-large grey darken-2 waves-effect hoverable white-text" type="submit">submit</button>
            </div>
          </form>      
        </div>      
      </div>
    </div>
  </div>
</div>