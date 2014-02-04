$(function(){
     
       $("#loginbtn").click(function(){
       		if($("#userlog").val()=="" || $("#passlog").val()=="")
       			$("#warning").html("Please enter both username and password");
       		else
       			$.post($("#logForm").attr("action"),
       				   $("#logForm :input").serializeArray(),
       				   function(data){
       				   	$("#warning").html(data);
       				   });
       		$("#logForm").submit(function(){
       			return false;
       		});
       });
    
});


