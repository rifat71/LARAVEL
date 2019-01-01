<html>
<head>
	<title>Create Doctor | Page</title>
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
	   border-shadow:0 0 8px 0 red;
	}
	input[type=password]
	{ 
	   border-color:dodgerBlue;
	   border-shadow:0 0 8px 0 red;
	}
	</style>
</head>
<body align="center" background="{{asset('background/bi2.jpg')}}">
</br><br/><br/>
<h2><a class="button2" href="/shome" >Home </a></h2>
<div align="center" style="background-color:lightblue">
<h2>Doctor Add Form</h2>
</div>
<a href="{{route('logout.index')}}">Logout</a> 
<br/>

<br/>
	<form method="post">
	{{@csrf_field()}}
		<table align="center">
			<tr>
				<td>Doctor Name</td>
				<td><input style="background-color:#DAF7A6" type="text" name="name" /></td>
			</tr>
			<tr>
				<td>Doctor Address</td>
				<td><input style="background-color:#DAF7A6" type="text" name="address" /></td>
			</tr>
			<tr>
				<td>Doctor Phone</td>
				<td><input style="background-color:#DAF7A6" type="text" name="phone" /></td>
			</tr>
			<tr>
				<td>Doctor Username</td>
				<td><input style="background-color:#DAF7A6" type="text" name="username" /></td>
			</tr>
			<tr>
				<td>Doctor Password</td>
				<td><input style="background-color:#DAF7A6" type="text" name="password" /></td>
			</tr>
			<tr>
				<td>Doctor Type</td>
				<td><input style="background-color:#DAF7A6" type="text" name="type" /></td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td></td>
				<td class="b"><input type="submit" value="Submit" /></td>
			</tr>
		</table>
	</form>
	<h2 align="center"><a href="/homeadmin/patient" class="button"  >Back to Patient List</a></h2>
</body>
</html>