<html>
<head>
	<title>Login | Page</title>
</head>
<body>
	<form method="post">
		{{@csrf_field()}}
		<table>
			<tr>
				<td>Username</td>
				<td><input name="username"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Login"/></td>
			</tr>
		</table>

	</form>

	<p>{{session('message')}}</p>

</body>
</html>