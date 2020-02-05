<div class="row" style="justify-content:center;padding-top:50px;">
	<p><b>Please enter admin credentials to log in.</b></p>
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
	<p style="color:red;">ERROR: Incorrect credentials.</p>
</div>