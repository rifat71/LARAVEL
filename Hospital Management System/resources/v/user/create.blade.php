<html>
<head>
	<title>Create | Page</title>
</head>
<body>
	<h1>Create User</h1>
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
				<td>Type</td>
				<td><input type="text" name="type"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Create"/></td>
			</tr>
		</table>

	</form>

		@if($errors->any())
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach

		@endif

</body>
</html>