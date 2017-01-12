<!-- Portfolio Modal -->
<div class="modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 ajax_content" >
      	<img src="" class="modal_image" style="max-width: 100%;"/></div>
      	<div class="col-md-2"></div>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Contact Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document" ng-controller="FormProcessController">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><strong ng-hide="!user.name">Hello {{ user.name }}</strong></h4>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 ajax_content" >
      	<form novalidate class="simple-form">
			
			  <div class="form-group">
			    <label for="exampleInputEmail1">Name</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" ng-model="user.name" >
			    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
			  </div>
			  
			  <div class="form-group">
			  <label for="exampleInputEmail2">Email address</label>
			    <input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email" ng-model="user.email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			 
			  <div class="form-group">
			    <label for="exampleTextarea">Your Message</label>
			    <textarea class="form-control" id="exampleTextarea" rows="3" ng-model="user.message"></textarea>
			  </div>
			  
			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" class="form-check-input" ng-model="user.agree">
			      Check me out
			    </label>
			  </div>
			  <br/>
			  <button type="submit" class="btn btn-primary btn-xl page-scroll" ng-click="processForm(user)">Submit</button>
			  <p>&nbsp;</p>
			</form>
      	
      	</div>
      	<div class="col-md-1"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login Form</h4>
      </div>
      <div class="modal-body">
      <div class="row">
     <div class="col-md-12 ajax_content" >
      
			<form action="" method="post" name="Login_Form" class="form-signin">       
			    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
				  <hr class="colorgraph"><br>
				  
				  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
				  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>     		  
				 
				  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
			</form>	
      	</div>
      	</div>
      </div>
      <div class="modal-footer">
        <p>&nbsp;</p>
      </div>
    </div>
  </div>
</div>



<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register From</h4>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-md-12 ajax_content" >
      <form class="form-horizontal">
		<fieldset>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">First name</label>  
		  <div class="col-md-6">
		  <input id="textinput" name="textinput" type="text" placeholder="John" class="form-control input-md" required="">
		    
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Last name</label>  
		  <div class="col-md-6">
		  <input id="textinput" name="textinput" type="text" placeholder="Smith" class="form-control input-md" required="">
		    
		  </div>
		</div>
		
		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="selectbasic">Select country</label>
		  <div class="col-md-6">
		    <select id="selectbasic" name="selectbasic" class="form-control">
		      <option value="1">Option one</option>
		      <option value="2">Option two</option>
		    </select>
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="email">E-mail</label>  
		  <div class="col-md-6">
		  <input id="email" name="email" type="text" placeholder="john.smith@mail.com" class="form-control input-md" required="">
		    
		  </div>
		</div>
		
		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="passwordinput">Password</label>
		  <div class="col-md-6">
		    <input id="passwordinput" name="passwordinput" type="password" placeholder="Enter your password" class="form-control input-md" required="">
		    
		  </div>
		</div>
		
		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="passwordinput">Repeat password </label>
		  <div class="col-md-6">
		    <input id="passwordinput" name="passwordinput" type="password" placeholder="Repeat your password" class="form-control input-md" required="">
		    
		  </div>
		</div>
		
		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="singlebutton"></label>
		  <div class="col-md-6">
		    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Register</button>
		  </div>
		</div>
		
		</fieldset>
	</form>
      	</div>
      	</div>
      </div>
      <div class="modal-footer">
        <p>&nbsp;</p>
      </div>
    </div>
  </div>
</div>

