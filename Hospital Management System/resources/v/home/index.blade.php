<html>
<head>
	<title>Home|Page</title>
</head>
<body>
	<h1>Welcome {{session('usname')}}</h1>
	<h3>
		<a href="{{route('logout.index')}}">Logout</a> |
		<a href="{{route('user.create')}}">Create New User</a>
	</h3>

	<table border="1">
		<tr>
			<th>Username</th>
			<th>Password</th>
			
		</tr>

		@foreach($users as $user)
		<tr>
			
			<td><a href="{{route('user.show',[$user->id])}}">{{$user->username}}</a></td>
			<td>{{$user->password}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>