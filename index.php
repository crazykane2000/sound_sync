<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->
<head>
    <title>Sound Sync :  The Digital Platform For Blockchain Audio Selling and Buying</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="Kishan Sharma">
    <meta name="MobileOptimized" content="320">    
    <style type="text/css">
        .inputs {
            height: 25px;
            border: 0px;
            border-radius: 0px;
            border: solid 1px #eee;
            width: 100%;
            padding:10px;
            background-color: transparent;
            border:solid 1px #10318a;
            /* box-shadow: 0px 0px 10px #ccc; */
        }
    </style>
</head>
<body style="background-image: url('images/pokl.jpg');">
    <div style="min-height: 20vh"></div>
	<form method="POST" action="dashboard.php" novalidate="" onsubmit="return validate();">
     <div style="padding: 40px;background-color: #07163f;width: 350px;margin:0 auto">
        <div style="color: #fff;text-align: center;font-family: arial">Welcome to <a style="color: #2196f3;text-decoration: none;" href="index.php">SoundSync</a></div>
        <div style="padding: 5px;"></div>
        <div style="padding: 10px;"></div>

        <div class="row">
          <div class="col-sm-12">
            <input type="text" class="form-control inputs" name="user" placeholder="Enter Email Address">
              <input type="hidden" name="role" value="User-Agent-x">
            <div id="email_error" style="color: red;font-size: 12px;display: none;">Enter Correct Email Address</div>
            <div style="padding: 14px;" class="mobs"></div>
          </div>
        </div>
          <div style="padding: 5px;"></div>

        <div class="row">

           <div class="col-sm-12">
             <input type="password" class="form-control inputs" name="pass" placeholder="Enter Password">
             <div id="password_error" style="color: red;font-size: 12px;display: none;">Enter Password</div>
             <div style="padding: 14px;" class="mobs"></div>
          </div>
        </div>
        <div style="padding: 5px;"></div>

       <input type="hidden" name="tx_address">
        <div class="row">
          <div class="col-sm-12">
           <button class="inputss " name="login" style="width: 100%;background-color: #2196f3;border:0px;padding:10px;color:#fff;font-size: 16px;">Login Now</button>
          </div>
        </div>
        <div style="padding:3px;"></div>
         <div style="color: #fff;text-align: center;font-family: arial">New to <a style="color: #2196f3;text-decoration: none;" >SoundSync</a></div>
         <div style="padding: 10px;"></div>
          <a href="index.php"><button type="button" name="New_sign_in" style="width: 45%;background-color: #2196f3;border:0px;padding:10px;color:#fff;font-size: 16px;background-color: transparent;border: solid 1px #104f82;float: left;">Signup</button></a>
          <a href="register.php"><button  name="Register" style="width: 45%;background-color: #2196f3;border:0px;padding:10px;color:#fff;font-size: 16px;background-color: transparent;border: solid 1px #104f82;float: left;margin-left: 20px;">Explore</button></a>
          <div style="clear:both"></div>
        <!--  <center><a href="forgot_password.php" style="color: #800">Forgot Password? Click Here </a></center> -->
    </div>

    </form>
    
</body>

</html>