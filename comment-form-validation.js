/******************************************************************************/
/* Constants */
/******************************************************************************/
const COMMENT_FORM = "comment-form";
const USER_COMMENT_FORM_NAME = "commenter-name";
const USER_COMMENT_FORM_TEXT = "comment-text";

/******************************************************************************/
/* Form Validation */
/******************************************************************************/
function validateEmailMessage() {
	let commentMessage = document.getElementById(USER_COMMENT_FORM_TEXT);
	
	if (! commentMessage) {
		return false;	
	}

	let button = document.getElementById("post");
	let commentMessageValue = commentMessage.value;
	if (/\S/.test(commentMessageValue)) {
		button.classList.add("button");
	}
	else {
		button.classList.remove("button");
	}
	
	return true;
}

function alert() {
	let commenterName = document.getElementById(USER_COMMENT_FORM_NAME);
	if (commenterName == null) {
		alert("Are you sure you want to post your comment anonymously?");
	}
}

/******************************************************************************/
/* Registering Event Handlers */
/******************************************************************************/
function attachHandlers() {
	let formElement = document.getElementById(COMMENT_FORM);
	let commentMessage = document.getElementById(USER_COMMENT_FORM_TEXT);
	
	/*if (formElement) {
		formElement.addEventListener("submit", function(event) {
			event.preventDefault();
		});
	}*/

}


window.addEventListener("load", attachHandlers, false);