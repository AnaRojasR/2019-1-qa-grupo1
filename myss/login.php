<?php
include_once "header.php";
include_once "banner.php";
?>

<section class="login">
    <div class="container" style="padding-top: 150px;">

        <center>
            <div class="col-md-6" style="box-shadow: 0px 20px 30px rgba(0, 35, 71, 0.1);background: #ffffff;height:340px;">
                <h1><i class="fa fa-smile"></i>MYSS</h1>
                <form method="post" class="form-signin">
                    <h3 class="form-signin-heading">Login</h3><br>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" required placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                    </div>
                    <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">Login</button>
                    <br/>
                    <a class="btn" href="signup.php" role="button">Don't have an account yet? Register here.</a>
                    <a class="btn" href="#" role="button">Forgot your password?</a>
                </form>
            </div><!-- /.col -->


        </center>
    </div><!-- /.container -->
</section> 

</body>
</html>
