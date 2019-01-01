<html>
<head>
	<title>Edit Supervisor | Page</title>
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
	   width:100%;
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
	   border-shadow:0 0 8px 0 dodgerBlue;
	}
	input[type=password]
	{ 
	   border-color:dodgerBlue;
	   border-shadow:0 0 8px 0 dodgerBlue;
	}
	</style>
</head>
<body align="center">
</br><br/><br/>
<h2><a class="button2" href="/shome" >Home </a></h2>
<div align="center" style="background-color:lightblue">
<h2>Supervisor Profile Edit </h2>
</div>
<h3><a href="{{route('logout.index')}}">Logout</a></h3>

<br/>

<br/>
	<form method="post">
		{{@csrf_field()}}
		<input type="hidden" name="uid" value="<%=aid %>"/>
		<table align="center">
			<tr>
				<td> Address</td>
				<td><input style="background-color:#DAF7A6" type="text" name="address" value="{{$supervisor->saddress}}"/></td>
			</tr>
			<tr>
				<td> Phone</td>
				<td><input style="background-color:#DAF7A6" type="text" name="phone" value="{{$supervisor->sphone}}"/></td>
			</tr>
			<tr>
				<td> Password</td>
				<td><input style="background-color:#DAF7A6" type="text" name="password" value="{{$supervisor->spassword}}"//></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td></td>
				<td class="b"><input type="submit" value="Save" /></td>
			</tr>
		</table>
	</form>
</body>
</html>