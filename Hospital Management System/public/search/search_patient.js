
$(document).ready(function(){

$("button").click(function(){
	//console.log("vai");
	console.log($('#name').val());

	$.ajax({
		url:"/patient/searchByName/" + $('#name').val(),
		method:"get",
		success:function(result){
			
			//alert(result.length);
			data ="<table border='1'><tr> <th>ID</th> <th>Name</th> <th>Phone</th> <th>Diseases</th> <th>Prescription</th> <th>Proom</th> <th>DoctorName</th></tr>";
			for(var i=0;i<result.length;i++){
				if(result[i].pdiseases==null){result[i].pdiseases="Not Assigned Yet";}
				if(result[i].prescription==null){result[i].prescription="Not Assigned Yet";}
				if(result[i].proom==null){result[i].proom="Not Assigned Yet";}
				data += "<tr> <td>"+result[i].id+"</td> <td>"+result[i].pname+"</td> <td>"+result[i].pphone+"</td> <td>"+result[i].pdiseases+"</td> <td>"+result[i].prescription+"</td> <td>"+result[i].proom+"</td> <td>"+result[i].dname+"</td> </tr>";
				//document.write(res);
			}
			data +="</table>";
			$("#search").html(data);

		}
	});
});


});