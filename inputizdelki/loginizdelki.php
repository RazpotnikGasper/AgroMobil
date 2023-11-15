<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
</head>
    <style>

        body{
            background-color: #222222

        }
        .form-bg {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}

    .form-container{
    background: linear-gradient(150deg,#1B394D 33%,#2D9DA7 34%,#2D9DA7 66%,#EC5F20 67%);
    font-family: 'Raleway', sans-serif;
    text-align: center;
    padding: 30px 20px 50px;
}
.form-container .title{
    color: #fff;
    font-size: 23px;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin: 0 0 60px;
}
.form-container .form-horizontal{
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(0,0,0,0.4);
}
.form-horizontal .form-icon{
    color: #fff;
    background-color: #1B394D;
    font-size: 75px;
    line-height: 92px;
    height: 90px;
    width: 90px;
    margin: -65px auto 10px;
    border-radius: 50%;
}
.form-horizontal .form-group{
    margin: 0 0 10px;
    position: relative;
}
.form-horizontal .form-group:nth-child(3){ margin-bottom: 30px; }
.form-horizontal .form-group .input-icon{
    color: #e7e7e7;
    font-size: 23px;
    position: absolute;
    left: 0;
    top: 10px;
}
.form-horizontal .form-control{
    color: #000;
    font-size: 16px;
    font-weight: 600;
    height: 50px;
    padding: 10px 10px 10px 40px;
    margin: 0 0 5px;
    border: none;
    border-bottom: 2px solid #e7e7e7;
    border-radius: 0px;
    box-shadow: none;
}
.form-horizontal .form-control:focus{
    box-shadow: none;
    border-bottom-color: #EC5F20;
}
.form-horizontal .form-control::placeholder{
    color: #000;
    font-size: 16px;
    font-weight: 600;
}
.form-horizontal .forgot{
    font-size: 13px;
    font-weight: 600;
    text-align: right;
    display: block;
}
.form-horizontal .forgot a{
    color: #777;
    transition: all 0.3s ease 0s;
}
.form-horizontal .forgot a:hover{
    color: #777;
    text-decoration:  underline;
}
.form-horizontal .signin{
    color: #fff;
    background-color: #EC5F20;
    font-size: 17px;
    text-transform: capitalize;
    letter-spacing: 2px;
    width: 100%;
    padding: 12px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    transition: all 0.4s ease 0s;
}
.form-horizontal .signin:hover,
.form-horizontal .signin:focus{
    font-weight: 600;
    letter-spacing: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3) inset;
}


    </style>
<body>
    <div class="form-bg">
    <div class="container">
        <div class="row" >
            <div class=" col-md-4 col-sm-offset-3 col-sm-6" style="margin-left:auto; margin-right:auto;">
                <div class="form-container">
                    <h3 class="title">My Account</h3>
                    <form  method="POST" class="form-horizontal" action="zacetnaStranIzdelki.php">
                        <div class="form-icon">
                            <i class="fa fa-user-circle"></i>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                               <input type="text" class="form-control" id="uss" name="username" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                             <input type="password" class="form-control" id="geslo" name="password" required>
                             <span class="forgot"><a href="">Register !</a>
                            <a href="">Forgot Password?</a></span>
                        </div>
                        <button  type="submit"  class="btn signin">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
