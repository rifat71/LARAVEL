<html>
<head>
	<title>Show|Page</title>
</head>
<body>
	<h1>Show Details</h1>
	<h3>
		<a href="{{route('logout.index')}}">Logout</a> |
		<a href="{{route('user.edit',[$user->id])}}">Edit User</a> |
		<a href="{{route('user.delete',[$user->id])}}">Delete User</a>
	</h3>

	<table>
		
		<tr>
			<td>Username:</td>
			<td>{{$user->username}}</td>
			
		</tr>

		
		<tr>
			<td>Password:</td>
			<td>{{$user->password}}</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>{{$user->type}}</td>
		</tr>
		
	</table>
</body>
</html>