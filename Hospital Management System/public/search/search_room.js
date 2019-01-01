
$(document).ready(function(){

$("button").click(function(){
	//console.log("vai");
	console.log($('#name').val());

	$.ajax({
		url:"/room/searchById/" + $('#name').val(),
		method:"get",
		success:function(result){
			
			//alert(result.length);
			data ="<table border='1'><tr><th>ID</th><th>PID</th></tr>";
			for(var i=0;i<result.length;i++){
				data += "<tr><td>"+result[i].rid+"</td> <td>"+result[i].pid+"</td></tr>";
				//document.write(res);
			}
			data +="</table>";
			$("#search").html(data);

		}
	});
});


});

/*//////////////////////
<table border='1'><tr><th>ID</th><th>User Name</th><th>Password</th></tr><tr><td>"+res.aname+"</td> <td>"+res.aid+"</td> <td>"+res.apassword+"</td></tr></table>
$(document).ready(function(){
        
$("button").click(function(){
	
    colsole.log("vai");
	$.ajax({
		url:"/homeadmin/searchAdmin",
		method:"post",
		data:{
			name:$('#name').val()
		},
		success:function(res){
			//for(var i=0;i<res.length;i++){
			$("#search").html("<table border='1'><tr><th>Name</th><th>User Name</th><th>Password</th><th>Contact</th></tr><tr><td>"+res[i].aname+"</td> <td>"+res[i].aid+"</td> <td>"+res[i].apassword+"</td> <td>"+res[i].aphone+"</td></tr></table>");
				//}
		}
	});
});


});*/
