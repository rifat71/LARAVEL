<html>
<head>
	<title>Edit | Page</title>
</head>
<body>
	<h1>Edit User</h1>
	<form method="post">
		{{@csrf_field()}}
		<table>
			<tr>
				<td>Username</td>
				<td><input name="username" value="{{$user->username}}"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$user->password}}"/></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="{{$user->type}}"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"/></td>
			</tr>
		</table>

	</form>


</body>
</html>