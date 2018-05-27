<div class="container">
	<h2>Login Travelin</h2>

	<form action="session/do_login" method="post">
		<div class="form-group">
			<label for="username">Username</label>
			<input class="form-control" type="text" name="uname" id="username" placeholder="Username" minlength="3" required>
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input class="form-control" type="password" name="pass" id="password" placeholder="Password" required>
		</div>
		<button type="submit" class="btb btn-primary">Login</button>
	</form>
</div>