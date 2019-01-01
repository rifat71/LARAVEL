<html>
<head>
	<title>Home Receptionist| Page</title>
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
<body align="center" background="{{asset('background/bi2.jpg')}}">
		<h1>Receptionist {{session('usname')}}</h1><br/><br/>
         <a href="{{route('logout.index')}}">Logout</a> 
		<h2><a href="{{route('patient.create')}}" class="button">Add New Patient</a> <br/> <br/></h2>
		<h2><a href="{{route('patient.showall')}}" class="button2">All Patient Details</a> <br/> <br/></h2>
		<h2><a href="{{route('doctor.showall')}}" class="button">Available Doctors</a> <br/> <br/></h2>
        <h2><a href="{{route('room.showEmpty')}}" class="button2">Available Rooms</a> <br/> <br/></h2>
		
</body>
</html>