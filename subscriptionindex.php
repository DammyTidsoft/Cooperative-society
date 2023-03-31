<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Al Kawthar Multipurpose Cooperative Society</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.tidosftitsolution.wordpress.com" class="simple-text">
                    Al Kawthar
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="subscriptionindex.php">
                        <i class="pe-7s-user"></i>
                        <p>Subscription</p>
                    </a>
                </li>
                <li>
                    <a href="assetindex.php">
                        <i class="pe-7s-note2"></i>
                        <p>Asset Acquisition</p>
                    </a>
                </li>
                <li>
                    <a href="loanindex.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Loan</p>
                    </a>
                </li>
                <li>
                    <a href="specialindex.php">
                        <i class="pe-7s-science"></i>
                        <p>Special Savings</p>
                    </a>
                </li>
                
				<li class="active-pro">
                    <a href="index.php">
                        <i class="pe-7s-rocket"></i>
                        <p>WE MOVE</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Subscription</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">2</span>
									<p class="hidden-lg hidden-md">
										2 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                              <li class="nav-item"> <a class="nav-link" href="#pay">Pay</a> </li> 
                              <li class="nav-item"> <a class="nav-link" href="#details">Details</a> </li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="dashboard.php">
                               <p>Account</p>
                            </a>
                        </li>
                        <li>
                            <a href="signin.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

       
        <div class="content">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Monthly Details</h4>
                            </div>
                            <div class="content">
                                <form>
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Membership Number</label>
                                                <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search...." >
                                            </div>
                                        </div>
                                        <div id="searchresult"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#live_search").keyup(function(){
			var input =$(this).val();
			//alert(input);
			if(input != ""){
				$.ajax({
					url:"search.php",
					method:"POST",
					data:{input:input},
					success:function(data){
						$("#searchresult").html(data);
						$("#searchresult").css("display","block");
					}
				});
			}else{
				$("#searchresult").css("display","none");
			}
		});
		});
	</script>
                                    </div>
                                    
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Monthly Subscription</h4>
                            </div>
                            <div class="content">
                                <form name="myForm" onsubmit="return validateForm()" action="./subscription.php" method="POST" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Membership Number</label>
                                                <input type="text" name ="m_no" class="form-control" placeholder="Membership Number" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Month</label>
                                                <input type="text" name="month" class="form-control" placeholder="Month" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="text" name ="amount" class="form-control" placeholder="Amount" value="">
                                            </div>
                                        </div>
                                    </div>

                                    
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Pay</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="tidsoftitsolution.wordpress.com">Tidsoft</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
