<?php include 'header.php' ?>

<style>
.index-bg{
    background: url(assets/images/background.jpg);
    background-size: cover;
    background-position: center;
    min-height: 1000px;
}
@media screen and (max-width: 670px){
    .index-bg{
        min-height:500px;
    }
}
.section{
    padding-top: 4vw;
    padding-bottom: 4vw;
}
.tabs .indicator{
      background-color: #1a237e;
}
.tabs .tab a:focus, .tabs .tab a:focus.active{
    background: transparent;
}
</style>

<div class="index-bg">
    <div class="container valign-wrapper">
        <H3 class="grey-text text-lighten-2" style="font-family: papyrus; padding-top:160px;">FOR<br><br>TRAVELLERS</H3>
    </div>
</div>

<!-- photo / grid -->

<section class="container section" id="photos">
    <div class="row">
        <div class="col s12 l4">
            <img src="assets/images/hotel8.jpg" alt="" class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 offset-l1">
        <h2 class="indigo-text text-darken-4">Easy</h2>
        <p>An easy place to find out various hotels in Nepal, and knowing about its facilities.</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 l4 offset-l1 push-l7">
            <img src="assets/images/hotel2.jpg" alt="" class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 offset-l1 pull-l5 right-align">
        <h2 class="indigo-text text-darken-4">Convenient</h2>
        <p>Convenient as you can easily find hotels in your destination according to your budget.</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 l4">
            <img src="assets/images/hotel3.jpg" alt="" class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 offset-l1">
        <h2 class="indigo-text text-darken-4">Reliable</h2>
        <p>We are reliable as reviews and ratings are provided by our trusted clients.</p>
        </div>
    </div>
</section>

<!-- parallax -->
<div class="parallax-container">
    <div class="parallax">
        <img src="assets/images/hotel5.jpg" alt="" class="responsive-img">
    </div>
</div>
<!-- services / tabs -->
<section class="section container" id="services">
    <div class="row">
      <div class="col s12 l4">
        <h2 class="indigo-text text-darken-4">What we do..</h2>
        <p>Choosing hotels and knowing more about different hotels of particular cities in one place is quite hard to find.</p>
        <p>Therefore, we are here to help you out on knowing various hotels across Nepal, giving its prime features.</p>
      </div>
      <div class="col s12 l6 offset-l2">
        <!-- tabs -->
        <ul class="tabs">
          <li class="tab col s6">
            <a href="#features" class="active grey lighten-4 indigo-text text-darken-4">Key Features</a>
          </li>
          <li class="tab col s6">
            <a href="#objectives" class="indigo-text grey lighten-4 text-darken-4">Objectives</a>
          </li>
        </ul>
        <div id="features" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Key Features</p>
            <p>Made for the travellers.</p>
            <p>Know about your hotel before reaching your destination.</p>
            <p>We are here to provide you tons of hotel recommendations according to your need.</p>
        </div>
        <div id="objectives" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Objectives</p>
            <p>Make your travelling experience a lot more easier and fun with us.</p>
            <p>Always save your valuable time.</p>
            <p>Encourage lots of travellers around the world.</p>
        </div>
        </div>
      </div>
    </div>
  </section>
<!-- parallax -->
<div class="parallax-container">
    <div class="parallax">
        <img src="assets/images/hotel4.jpg" alt="" class="responsive-img">
    </div>
</div>
<!-- contact form -->
<section class="section container" id="contact">
    <div class="row">
        <div class="col s12 l5">
            <h2 class="indigo-text text-darken-4 valign-wrapper">Get In Touch</h2>    
        </div>
        <div class="col s12 l5 offset-l2">
            <form action="get-in-touch.php" method='post'>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <div class="input-field">
                <i class="material-icons prefix">email</i>
                    <?php if(isset($_GET['email'])){ ?>
                        <input type="email" id="email" name="email" value="<?php echo $_GET['email']; ?>">
                    <?php }else{ ?>
                        <input type="email" id="email" name="email">
                    <?php } ?>
                    <label for="email">Your Email</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">message</i>
                    <?php if(isset($_GET['email'])){ ?>
                        <textarea id="message" class="materialize-textarea" name="message" value="<?php echo $_GET['message']; ?>"></textarea>
                    <?php }else{ ?>
                        <textarea id="message" class="materialize-textarea" name="message"></textarea>
                    <?php } ?>
                    <label for="message">Your Message</label>
                </div>
                <div class="input-field center">
                    <button class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

    
<!-- footer -->
    <?php include 'footer.php' ?>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
$(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.parallax').parallax();
    $('.tabs').tabs();
});
</script>

