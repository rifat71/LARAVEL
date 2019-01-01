<html>
<head>
	<title>Home Admin| Page</title>
	<style>
   .button {
    background-color: #FF5733;
    border: none;
    color: white;
    padding: 10px 90px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
	</style>
</head>
<body align="center" background="{{asset('background/bi2.jpg')}}">
		<h1>Admin {{session('usname')}}</h1><br/><br/>
        <a href="{{route('logout.index')}}">Logout</a> 
		<h1>Doctor with Highest Patient</h1>
        <table border="1" align="center">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>patient number</th>

        </tr>

        @foreach($doctoranalysis as $doctoranalysis)
        <tr>
            
            <td>{{$doctoranalysis->id}}</a></td>
            <td>{{$doctoranalysis->dusername}}</a></td>
            <td>{{$doctoranalysis->nofp}}</a></td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>