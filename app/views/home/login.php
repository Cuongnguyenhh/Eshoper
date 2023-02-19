<?php
					$message = "";
					$message = "";
					if (isset($_SESSION['message']['login'])) {
						$message = $_SESSION['message']['login'];
					}
					if ($message != "") {
						echo '<span class="alekrt alert-danger">' . $message . '</span>';
						unset($_SESSION['message']);
					}




					 if (isset($_SESSION['siguplog'])) {
						$message =$_SESSION['siguplog'];
					}
					if ($message != "" && $message == 'Name Account is already exists, please choose another name.') {
						echo '<span class="alekrt alert-danger">' . $message . '</span>';
						unset($_SESSION['message']);
					}


					if (isset($_SESSION['siguplog'])) {
						$message = $_SESSION['siguplog'];
					}
					if ($message != "" && $message =='Create Susses! Please login') {
						echo '<span class="alekrt alert-success">' . $message . '</span>';
						unset($_SESSION['siguplog']);
					}
					?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="../../getlogin" method="post">
							<input name="name" type="text" placeholder="Name" />
							<input name="password" type="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="../../getsignin" method="post">
							<input type="text"  name="name" placeholder="Name"/>
							<input type="number" name="phone" placeholder="Phone"/>
							<input type="text" name="user_adr" name="password" placeholder="Address"/>
							<input type="password" name="password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->