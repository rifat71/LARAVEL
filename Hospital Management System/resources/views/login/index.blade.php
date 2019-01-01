<html>
<head>
	<title>Login | Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
}
.bg {
    background-image: url("bi5.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

 .button {
    background-color: #f70b40;
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
	
input[type=text]
	{ 
	   width:150%;
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
	   width:150%;
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
	
	.blue-button{
	   text-decoration:none;
	   font-family:Arial;
	   font-size:17px;
	   border-radius:9px;
	   padding:8px 20px;
	   background-color:#00FFFF;
	   color:black;
	}

</style>
</head>
<body align="center" background="{{asset('background/bi9.jpg')}}">
	<br/><br/>
	<font size="6"><h1 style="color:#050673" align="center">WELCOME TO AIUB HOSPITAL</h1></font>
	<br/><br/><br/><br/>
	<p><font color="red">{{session('message')}}</font></p>
	<form method="post">
	   {{@csrf_field()}}
		<table align="center">
			<tr>
				<td>UID</td><td></td>
				<td><input type="text" name="username" /></td>
			</tr>
			<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
			<tr>
				<td>PASSWORD</td><td></td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
			<tr align="center">
				<td></td><td></td>
				<td align="center"><input align="center" class="blue-button" type="submit" value="Login" /></td>
			</tr>
		</table>
	</form>
</body>
</html>