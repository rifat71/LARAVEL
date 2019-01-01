<html>
<head>
	<title>Home Receptionist| Page</title>
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
<body align="center">
		<h1>Receptionist {{session('usname')}}</h1><br/><br/>
        <a href="{{route('logout.index')}}">Logout</a> 
		<h2><a href="{{route('patient.create')}}">Add New Patient</a> <br/> <br/></h2>
		<h2><a href="#">All Patient Details</a> <br/> <br/></h2>
		
</body>
</html>