const formElement = document.querySelector("form");
const submitButton = document.getElementById("submit_btn");
const nameErrorText = document.getElementById("name_error_text");
const emailErrorText = document.getElementById("email_error_text");
const PasswordErrorText = document.getElementById("password_error_text");

submitButton.addEventListener("click", (e) => {
	formValidation(e);
});

function formValidation(e) {
	e.preventDefault();
	const name = formElement.fullName.value;
	const email = formElement.email.value;
	const password = formElement.password.value;
	if (name.length <= 0) {
		document.getElementById("name").classList.add("error");
		nameErrorText.classList.remove("span-hidden");
	} else if (email.length <= 0) {
		document.getElementById("email").classList.add("error");
		emailErrorText.classList.remove("span-hidden");
	} else if (password.length <= 8) {
		document.getElementById("password").classList.add("error");
		PasswordErrorText.classList.remove("span-hidden");
	} else {
		formElement.action = "../php/process.php";
		// formElement.fullName.value = "";
		// formElement.email.value = "";
		// formElement.password.value = "";

		document.getElementById("name").classList.remove("error");
		nameErrorText.classList.add("span-hidden");
		document.getElementById("email").classList.remove("error");
		emailErrorText.classList.add("span-hidden");
		document.getElementById("password").classList.remove("error");
		PasswordErrorText.classList.add("span-hidden");
	}
}
