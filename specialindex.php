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
                <a href="http://www.tidsoftitsolution.wordpress.com" class="simple-text">
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
                <li>
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
                <li class="active">
                    <a href="specialindex.php">
                        <i class="pe-7s-science"></i>
                        <p>Special Savings</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="index.php">
                        <i class="pe-7s-rocket"></i>
                        <p>We Move</p>
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
                    <a class="navbar-brand" href="specialindex.php">Speical Savings</a>
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
                                    <span class="notification hidden-sm hidden-xs">3</span>
									<p class="hidden-lg hidden-md">
										3 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                              <li class="nav-item"> <a class="nav-link" href="#special">Apply</a> </li>
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
                                <h4 class="title">Savings Details</h4>
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
					url:"searchspecial.php",
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

        <div class="content">
                <div class="container-fluid">
            <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Pay Special Savings</h4>
                            </div>
                            <div class="content">
                                <form name="myForm" onsubmit="return validateForm()" action="./payspecial.php" method="POST">
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Membership No</label>
                                                <input type="text" class="form-control" name="m_no" autocomplete="off" placeholder="Membership No." >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Month</label>
                                                <input type="text" name="month" class="form-control" placeholder="Month" required value="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="text" name="amount" class="form-control" placeholder="Amount" required value="">
                                            </div>
                                        </div>    
                                        <button type="submit" name="submit"class="btn btn-info btn-fill pull-right">Pay</button>                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="content">
            
             <div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-md-8">
                        
                        <div class="card">      
                            <div class="header">
                                <h4 class="title">Special Savings</h4>
                            </div>
                            
                            <div class="content">
                            <form name="myForm" onsubmit="return validateForm()" action="./special.php" method="POST" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Surname</label>
                                                <input type="text" name ="s_name"  required class="form-control" placeholder="Surname" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Othername</label>
                                                <input type="text" name="o_name" class="form-control" placeholder="Othername" required value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="gender" placeholder="Status" class ="form-control"  required>
                                            <option value="">Status</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Membership No.</label>
                                                <input type="text" name="m_no" class="form-control" placeholder="Membership No." required value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Business/Occupation</label>
                                                <input type="text" name ="occupation" required class="form-control" placeholder="Occupation" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address </label>
                                                <input type="text" name ="address" class="form-control" placeholder="Home Address" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State of Residence</label>
                                                <input type="text" name ="state" class="form-control" placeholder="State of Residence" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email"  name ="email" class="form-control" placeholder="Email" value="">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" name ="p_number" class="form-control" placeholder="Phone Number" value="">
                                            </div>
                                        </div>
                                    
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" name ="dob" class="form-control" placeholder="Date of Birth" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Business/Employer's Address</label>
                                                <input type="text" name ="be_address" class="form-control" placeholder="Business/Employer's Address" value="">
                                            </div>
                                        </div>
                                    
                                    
                                          
                                    </div>
                                    </div>
                                    <button type="submit" name="submit"class="btn btn-info btn-fill pull-right">Submit</button>  
                                    
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            
        </div>                    
                
            
        

        


    </div>
</div>


        


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
