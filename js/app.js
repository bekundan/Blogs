$(document).ready(function(){

	// sign up from validtion
	function signup_valid(){
		var urpass =$("#sign_up_form input[name='pass']").val();
		var confurpass=$("#sign_up_form input[name='repass']").val();
		if(urpass == confurpass){
			return true;
		}
		return false;
	}
	$("#sign_up_form").submit(function(e){
		e.preventDefault();
		if(signup_valid()){
			 $(".signup-msg").html("");
			 var form =$(this);
			 var form_url=form.attr('action');
			 var form_type=form.attr('method');
			 $.ajax({
			 	type:form_type,
			 	url:form_url,
			 	data:form.serialize(),
			 	success:function(data){
			 		$("#sign_modal").modal('hide');
			 		// alert("welcome");
			 		console.log(data);
			 	}
			 });
		}else{
			$(".signup-msg").html("this password doesn't match!")
		}
	});
	// login section

	$(".Login").click(function(){
		
		$(".sign_form").toggle();
		$(".login_from").toggle();
	});

$("#login_froms").submit(function(e){
	e.preventDefault();
	var form =$(this);
	var form_url =form.attr('action');
	var form_type =form.attr('method');
	$.ajax({
		type:form_type,
		url:form_url,
		data:form.serialize(),
		success:function(data){
			$("#sign_modal").modal('hide');
			location.reload();
		}
	});
});

// admin modify button
$(".modify-post").click(function(){
	var target =$(this).attr("post-id");
	$("#"+target).toggle();
});

// submit the updated post
$(".updated_post").submit(function(e){
	e.preventDefault;
	var form =$(this);
	var form_url=form.attr('action');
	var form_type=form.attr('method');
	$.ajax({
		type:form_type,
		url:form_url,
		data:form.serialize,
		success:function(data){
			// alert(data);
			console.log(data);
		}
	});

}); //form submit

// searching username

$(".search_users").submit(function(e){
	e.preventDefault;
	var form=$(this);
	var form_url=form.attr("action");
	var form_type =form.attr("method");
	var form_data= form.serialize;
	$.ajax({
		type:form_type,
		url:form_url,
		data:form_data,
		success:function(){
			$("#user_response tbody").html("");
			var data =JSON.parse(data);
			console.log(data);
			if (data["status"] == "User found"){
				for(i=0; i< Object.keys(data).length-1;i++){
					$("#user_response tbody").append("<tr><td>"+data[i]["Name"]+"</td><td>"+data[i]["phone"]+"</td><td>"+data[i]["Email"]+"</td><td>"+data[i]["Code"]+"</td></tr>");  
					
				}
			}else{
				$("#user_response tbody").html("<tr><td>"+data["status"]+"</td></tr>");
			}			
		}
	});
	
});


});