
$(document).ready(function(){

	$("form input:radio").click(function(){
	let anonymity = $("input[name='anonymous']:checked").val();	
	if(anonymity == "anonymous"){
		$("#name_input").val("")
		$("#email_input").val("")
		$("#name_input").prop("disabled",true);
		$("#email_input").prop("disabled",true);
	}
	else if(anonymity == "public"){
		$("#name_input").prop("disabled",false);
		$("#email_input").prop("disabled",false);

	}
	})

	$(function(){
		let list_of_comments , new_comment_name , new_comment_email , comment_content ,time_stamp;
		list_of_comments = $("#comment_list");
		new_comment_name = $("#name_input");
		new_comment_email = $("#email_input");
		comment_content = $("#comment_comment");
		time_stamp = new Date();
		$("form").on("submit" , function(e){
			e.preventDefault();
			let name_text = $("#name_input").val();
			let email_text = $("#email_input").val();
			let comment_text = $("#comment_comment").val();

			if(name_text == "" && email_text == ""){
				list_of_comments.append('<li id="comment" class="container"><blockquote class="blockquote">'+comment_text+'<footer>Anonymous</footer><hr></li>');
			}
			else{
			list_of_comments.append('<li id="comment" class="container"><blockquote class="blockquote">'+comment_text+'<br><footer>'+name_text+'<br>'+email_text+'<br>'+time_stamp+'</footer></blockquote><hr></li>');
		}
		});
	})

});
