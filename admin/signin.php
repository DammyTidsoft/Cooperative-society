<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Al-Kawthar Multi-purpose Co-operative Society</title>
  <!-- Bootstrap CSS -->
  <link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<footer class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-3 footer1 d-flex wow bounceInLeft" data-wow-delay=".25s">
        <div class="d-flex flex-wrap align-content-center"> <a href="#"><img src="images/logo.png" alt="logo" /></a>
          <p>Dont be left out of this great opportunity, once opportunitylost can never be regain</p>
          <p>&copy; 2022 Al-Kawthar. All rights reserved.<br> Design by <a href="https://tidsoftitsolution.wordpress.com" target="_blank">Tidsoft</a>.</p>
        </div>
      </div>
      <div class="col-md-6 footer2 wow bounceInUp" data-wow-delay=".25s" id="contact">
        <div class="form-box">
          <h4>SIGN IN</h4>
          <form name="f1" action = "dashboard.php" onsubmit = "return validation()" method = "POST">
          <table class="table table-responsive d-table">
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="text" class="form-control pl-0" name="user_name" placeholder="USERNAME" /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="PASSWORD" class="form-control pl-0" name="password" placeholder="PASSWORD" /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center pl-0"><button type="submit" class="btn btn-dark">SEND</button></td>
            </tr>
            </form>
          </table>
        </div>
      </div>
      <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
      <div class="col-md-3 footer3 wow bounceInRight" data-wow-delay=".25s">
        <h5>ADDRESS</h5>
        <p>C/O 33, Ijaola Street, Bungalow, Ifo, Ogun State.</p>
        <h5>PHONE</h5>
        <p>08030680492, 08061382465, 08096689514, 08067538664</p>
        <h5>EMAIL</h5>
        <p>coopalkawthar@yahoo.com</p>
        <div class="social-links">
          <ul class="nav nav-item">
            <li><a href="https://www.facebook.com/fh5co" class="btn btn-secondary mr-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="#"  class="btn btn-secondary mr-1 ml-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="#"  class="btn btn-secondary mr-1 ml-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="#"  class="btn btn-secondary ml-1 mb-2"><img src="images/facebook.png" alt="facebook" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Bootstrap JS, ... -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/wow.js"></script>
<script src="js/main.js"></script>

</body>
</html>