<html>
<head>
	<title>Patient update by Doctor| Page</title>
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
<h2><a class="button2" href="/dhome" >Home </a></h2>
<div align="center" style="background-color:lightblue">
<h2>Add on Patient Profile</h2>
</div>
<a href="{{route('logout.index')}}">Logout</a> 
<br/>

<br/>

	<form method="post">
		{{@csrf_field()}}
		<input type="hidden" name="pid" value="{{$patient->id}}"/>

		<table align="center">
			<tr>
				<td>Short Prescription</td>
				<td><input type="text" name="pres" value="{{$patient->prescription}}"/></td>
			</tr>
			<tr>
				<td>Diseases</td>
				<td><input type="text" name="diseases" value="{{$patient->pdiseases}}"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="button" value="Save"/></td>
			</tr>
		</table>

	</form>
</body>
</html>