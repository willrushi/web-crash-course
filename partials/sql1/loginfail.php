<div class="row" style="justify-content:center;padding-top:50px;">
	<h2>SafeLogin</h2>
</div>
<div class="row" style="justify-content:center;">
	<b>Please enter admin credentials to log in.</b>
</div>
<div class="row" style="padding-top:50px;">
	<div class="col-5"></div>
	<div class="col-2">
		<form action="sql1.php" method="POST">
			<div class="form-group">
				<label for="username">Username</label>
				<input name="username" type="text" class="form-control" id="username" placeholder="Enter username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input name="password" type="password" class="form-control" id="password" placeholder="Enter password">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<div class="row" style="justify-content:center;">
	<h3 style="color:red;padding-top:20px;">ERROR: Incorrect credentials.</h3>
</div>