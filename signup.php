<!doctype html>
<html lang="en">
  <head>
  	<title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">


	</head>
	<body>
    <!-- display response that comes from when Signup form is empty -->
            	<?php
			    if(isset($_GET['emptyfield1'])){?>
			        
                        <div id="toast-holder" aria-live="polite" aria-atomic="true">
                        
                          <!-- Then put toasts within -->
                          <div id="toast"class="toast show toast-small" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 10px; right: 20px;">
                             <div class="toast-header" style="background:red;">
                                   <!--  <img src="..." class="rounded mr-2" alt="..."> -->
                                    <strong class="mr-auto" style="color:white;font-size:12px !important">Error Message</strong>
                                   
                                    
                                  </div>
                            <div class="toast-body">
                             <span style="font-size:12px !important;">Empty Username Field ,Please Fill The Form!!.</span>
                            </div>
                          </div>
                        </div>
			    <?php }else if(isset($_GET['emptyfield2'])){ ?>
			         <div id="toast-holder" aria-live="polite" aria-atomic="true">
                        
                          <!-- Then put toasts within -->
                          <div id="toast"class="toast show toast-small" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 10px; right: 20px;">
                             <div class="toast-header" style="background:red;">
                                   <!--  <img src="..." class="rounded mr-2" alt="..."> -->
                                    <strong class="mr-auto" style="color:white; font-size:14px; ! important;">Error Message</strong>
                                   
                                    
                                  </div>
                            <div class="toast-body">
                              <span style="font-size:12px !important;">Empty Email Field ,Please Fill The Form!!.</span>
                            </div>
                          </div>
                        </div>
		    	  <?php  }else if(isset($_GET['emptyfield3'])){ ?>
			         <div id="toast-holder" aria-live="polite" aria-atomic="true">
                        
                          <!-- Then put toasts within -->
                          <div id="toast"class="toast show toast-small" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 10px; right: 20px;">
                             <div class="toast-header" style="background:red;">
                                   <!--  <img src="..." class="rounded mr-2" alt="..."> -->
                                    <strong class="mr-auto" style="color:white; font-size:14px; ! important;">Error Message</strong>
                                   
                                    
                                  </div>
                            <div class="toast-body">
                              <span style="font-size:12px !important;">Empty Password Field ,Please Fill The Form!!.</span>
                            </div>
                          </div>
                        </div>
		    	  <?php  }?>
		    	  
		    	  
		<div class="alignment-center mb-4">
		<form action="includes/signup.inc.php" method="POST">
		    	<div class='wraper'>
				<h5>Create Account!</h5>
				<p>Create perfect resumes for the modern job market.</p>
				<!-- form input  starts here-->
				<div class="form-group">
				<label class="form-label">Username</label>
				<input type="text" name="username" placeholder="Enter Username" class="form-control">		
				</div>
				<div class="form-group">
				<label class="form-label">Email</label>
				<input type="Email" name="email" placeholder="Enter Email" class="form-control">		
				</div>
				<div class="form-group" id="main-pwd">
				<label class="form-label">Password</label>
				<input type="password" id="p-input"name="pwd" placeholder="Enter Password" class="form-control">
				<img src="images/eye-regular.svg"class="p-icon">
				<img src="images/eye-slash-solid.svg"class="p-icon2">	
				</div>
				<div class="cta">
					<button class="btn btn-primary" name="signupbtn">Create Account</button>
				</div>
				<p class="text-center loginlinktext" >Already have account? <a href="index.php" class="link text-primary">Login</a></p>
			</div>
		</form>
		</div>
		
		<!-- taoast handling in javascript -->
			<script>
		    let toastholder = document.getElementById('toastholder');
		    let toast = document.getElementById('toast');
		    
		       if(toast.style.display = "block"){
		              
		          	 setTimeout(hideToast, 2000);
		      
		      }else if(toast.style.display = "none"){
		          
		          alert('toast is hidden');
		    }
		    
		    
		 //hide toast after 1 second 
		 
		 function hideToast(){
		     toast.style.display = "none";
		     toastholder.style.display = "none";
		 }
	
		 
		</script>
		
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

