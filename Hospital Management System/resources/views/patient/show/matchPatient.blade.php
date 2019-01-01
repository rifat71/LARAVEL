<html>
<head>
	<title> Patient List | Page</title>
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
	   width:25%;
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
<h2><a class="button2" href="/dhome" >Home </a></h2>
<div align="center" style="background-color:lightblue">
<h2>My Patient Details</h2>
</div>
 <a href="{{route('logout.index')}}">Logout</a> 
<br/><br/><br/>
 
        <input type="text" placeholder="search patient by name" id="name"/>
		<button style="background-color:#DAF7A6">Search</button>
		<p align="center" id="search"></p>	
        <br/><br/>

<br/>
	 <table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Doctor Name</th>
			<th>Doctor Id</th>
			<th>Diseases</th>
			<th>Prescription</th>
			<th>Room no.</th>
			<th>Operation</th>

		</tr>

		@foreach($patients as $patient)
		<tr>
			
			<td>{{$patient->id}}</a></td>
			<td>{{$patient->pname}}</a></td>
			<td>{{$patient->pphone}}</td>
			<td>{{$patient->dname}}</td>
			<td>{{$patient->pdoctor}}</td>
            <td>{{$patient->pdiseases}}</td>
            <td>{{$patient->prescription}}</td>
            <td>{{$patient->proom}}</td>

			<td align="center"><a href="{{route('patient.editByDoc',[$patient->id])}}">Add</a></td>
		</tr>
		@endforeach
	</table>
	<script src="{{asset('search/jquery-3.3.1.js')}}"></script>
	<script src="{{asset('search/search_patient.js')}}"></script>
</body>
</html>