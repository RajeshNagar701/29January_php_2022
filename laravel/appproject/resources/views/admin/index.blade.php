

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href={{url('admin_public/assets/css/bootstrap.css')}} rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href={{url('admin_public/assets/css/font-awesome.css')}} rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href={{url('admin_public/assets/css/custom.css')}} rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Admin Login</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src={{url('admin_public/assets/img/find_user.png')}} class="user-image img-responsive"/>
					</li>
				
					
                   
                 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Login</h2>   
                        <h5>Login Here.... </h5>
						@if(Session()->has('failed'))
							<span class="alert alert-danger">{{Session('failed')}}</span>
						@endif	
						<form action="{{url('/admin_auth')}}" role="form" method="post">
						@csrf
							<div class="form-group">
								<label>User Nmae</label>
								<input type="text" name="username" class="form-control" />
								
							</div>
							
							<div class="form-group">
								<label>Password</label>
								<input type="Password" name="password" class="form-control" />
								
							</div>
							
							<button type="submit" name="submit" class="btn btn-default">Login</button>
						</form>
						
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src={{url('admin_public/assets/js/jquery-1.10.2.js')}}></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src={{url('admin_public/assets/js/bootstrap.min.js')}}></script>
    <!-- METISMENU SCRIPTS -->
    <script src={{url('admin_public/assets/js/jquery.metisMenu.js')}}></script>
      <!-- CUSTOM SCRIPTS -->
    <script src={{url('admin_public/assets/js/custom.js')}}></script>
    
   
</body>
</html>
