<html>
<head>
	<title>Supervisor Personal Profile | Page</title>
<style>
	.b{
	 text-align:center;
	 }
	 
	 .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 7px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
	
	 .button2 {
    background-color: #FFC300;
    border: none;
    color: white;
    padding: 5px 50px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
	
	input[type=text]
	{ 
	   width:20%;
	   border:2px solid #aaa;
	   border-radius:4px;
	   margine:8px 0;
	   outline:none;
	   padding:8px;
	   box-sizing:border-box;
	   transition:.3s;
	}
	input[type=password]
	{ 
	   width:100%;
	   border:2px solid #aaa;
	   border-radius:4px;
	   margine:8px 0;
	   outline:none;
	   padding:8px;
	   box-sizing:border-box;
	   transition:.3s;
	}
	input[type=text]
	{ 
	   border-color:dodgerBlue;
	   border-shadow:0 0 8px 0 red;
	}
	input[type=password]
	{ 
	   border-color:dodgerBlue;
	   border-shadow:0 0 8px 0 red;
	}
	</style>
</head>

<body align="center" background="{{asset('background/bi7.jpg')}}">
</br>
<h2><a class="button2" href="/shome" >Home </a></h2>
<div align="center" style="background-color:lightblue">
<h2> PROFILE </h2>
</div>
<br/>
        <a href="{{route('logout.index')}}">Logout</a> 

<br/><br/>
	 <table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Phone</th>
			<th>Address</th>

		</tr>

		@foreach($supervisors as $supervisor)
		<tr>
			
			<td align="center">{{$supervisor->id}}</a></td>
			<td align="center">{{$supervisor->sname}}</a></td>
			<td align="center">{{$supervisor->susername}}</a></td>
			<td align="center">{{$supervisor->spassword}}</td>
			<td align="center">{{$supervisor->sphone}}</td>
			<td align="center">{{$supervisor->saddress}}</td>
		</tr>
		@endforeach
	</table>
	<br/><br/>
	<h2 align="center"><a href="{{route('supervisor.edit',[$supervisor->id])}}" class="button">Edit</a></h2>

</body>
</html>