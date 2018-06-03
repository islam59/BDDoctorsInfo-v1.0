<!--  Login, Signin & Registraion Form  -->

<div id="modalContainer">
    <div class="reveal" data-reveal id="modalForm" role="dialog" style="border-radius:25px 0px;">
        <div class="row" >
            <div class="medium-12 large-12 columns">
        	    <button class="close-button" data-close aria-label="Close reveal" type="button"> <span aria-hidden="true">&times;</span> </button><br/>
				<div class="accordion" data-accordion style="border:none; box-shadow:none;">
					
					<!-- login -->
					<div class="accordion-item is-active" data-accordion-item>
						<a href="#" class="expanded small hollow accordion-title">Login !</a>
						<div class="accordion-content" data-tab-content>
							<form class="accordion" data-accordion>	
								<center><h4>User Login Form !</h4></center>
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							  	</div>
							    <div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							    </div>
							  	<div class="checkbox">
									<label><input type="checkbox"> Check me out</label>
							  	</div>
							  	<button type="submit" class="expanded button">Login</button>					  
							</form>
						</div>
					</div>	
					  
					<!-- password recovery -->
					<div class="accordion-item" data-accordion-item>
						<a href="#" class="expanded small  hollow accordion-title" style="color:red;">Forget Password !</a>
						<div class="accordion-content" data-tab-content>
							<center><h4>Recover Your Password !</h4></center>
							<form class="accordion" data-accordion>	
							  	<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							  	</div>
							  	<div class="checkbox">
									<label><input type="checkbox"> Send me Email !</label>
							  	</div>
							  	<button type="submit" class="expanded button">Submit</button>					  
							</form>
						</div>
					</div>	

					<!-- registration -->
					<div class="accordion-item" data-accordion-item>
						<a href="#" class="expanded small hollow accordion-title">Register as Doctor !</a>
						<div class="accordion-content" data-tab-content>
							<form class="accordion" data-accordion>	
							  	<center><h4>Doctor's Registration</h4></center>

							  	<div class="form-group">
									<label for="exampleInputEmail1">Enter Name</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" required>
							  	</div>

							  	<div class="form-group">
									<label for="exampleInputEmail1">Email</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g- example@email.com" required>
							  	</div>
							  	<div class="form-group">
									<label for="exampleInputEmail1">Confirm Email</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Confirm Eamil" required>
							  	</div>

							  	<div class="form-group">
									<label for="exampleInputEmail1">Phone Number</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g- +880 555 999999" required>
							  	</div>

							  	<div class="form-group">
									    <label for="exampleInputEmail1">Gender</label>
									    <input type="radio" name="gender" value="Male" id="pokemonRed" required><label for="pokemonRed">Male</label>
									    <input type="radio" name="gender" value="Female" id="pokemonBlue"><label for="pokemonBlue">Female</label>
							  	</div>

							  	<div class="form-group">
									<label for="exampleInputEmail1">Educational Qualification</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g- MBBS(DMC), FCPS(London)" required>
							  	</div>

							  	<div class="form-group">
									<label for="exampleInputEmail1">Designation Title</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g- Professor/ Consultant " required>
							  	</div>

							  	<div class="form-group">
									<label for="exampleInputEmail1">Designation Details</label>
									<textarea row='5' required></textarea>
							  	</div>

							  	<div class="form-group">
									<label for="exampleInputEmail1">Chember Information</label>
									<textarea row='5' required ></textarea>
							  	</div>

							  	<div class="form-group">
							  		<label for="exampleFileUpload" class="button">Upload File</label>
									<input type="file" id="exampleFileUpload" class="show-for-sr">
							  	</div>

							  	<div class="form-group">
									<label for="exampleInputEmail1">Password</label>
									<input type="password" class="form-control" id="exampleInputEmail1" placeholder="At least 6 Character !" required>
							  	</div>
							  	<div class="form-group">
									<label for="exampleInputEmail1">Confirm Password</label>
									<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Confirm your password ! " required>
							  	</div>

							  	<div class="checkbox">
									<label><input type="checkbox" required> Checked All Information !</label>
							  	</div>
							  	<button type="submit" class="expanded button">Register</button>
							</form>
						</div>
					</div>
					  <!-- ... -->
				</div>
					
            </div>
        </div>
    </div>     
</div><!-- end: modalForm content -->