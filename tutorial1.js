function validate_input(){
	var identity = document.forms["comment_form"]["anonymous"];
	var name = document.forms['comment_form']["comment_name"];
	var email = document.forms["comment_form"]["comment_email"];
	var comment = document.forms["comment_form"]["comments"];

	// if(anonymous.value = )
	if(identity.value == "anonymous")
	{
		window.alert("Your comment is already published on the web");
		return false;
	}

	if(name.value == "")
	{
		window.alert("enter name");
		name.focus();
		return false;
	}

	if(email.value == "")
	{
		window.alert("enter email");
		email.focus();
		return false;
	}

}