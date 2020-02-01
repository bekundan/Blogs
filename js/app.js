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
	var form_url =from.attr('action');
	var form_type =form.attr('method');
	$ajax({
		type:form_type,
		url:form_url,
		data:form.serialize(),
		success:function(data){
			$("#sign_modal").modal('hide');
			locaton.reload();
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
	e.preventDefault();
	var form =$(this);
	var form_url="action.php";
	var form_type=from.attr('method');
	$ajax({
		type:form_type,
		url:form_url,
		data:form.serialize(),
		success:function(data){
			alert(data);
			console.log(data);
		}
	});

}); //form submit

// searching username

$(".search_users").submit(function(e){
	e.preventDefault;
})


});