const nameField = document.getElementById("name");
const lastNameField = document.getElementById("lastname");
const emailField = document.getElementById("email");
const pwdField = document.getElementById("password");
const pwdFieldConf = document.getElementById("passwordConf");
const form = document.getElementById("form");

form.addEventListener("submit", (event) => {
  if (!validateInput()) {
    event.preventDefault();
  }
});

const setError = (element, message) => {
  const formControl = element.parentElement;
  const errorDisplay = formControl.querySelector(".error");
  errorDisplay.textContent = message;
  formControl.classList.add("invalid");
  formControl.classList.remove("valid");
};

const setSuccess = (element) => {
  const formControl = element.parentElement;
  const errorDisplay = formControl.querySelector(".error");
  errorDisplay.textContent = "";
  formControl.classList.add("valid");
  formControl.classList.remove("invalid");
};

const isValidEmail = (email) => {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

function validateInput() {
  let isValid = true;

  const name = nameField.value.trim();
  const lastName = lastNameField.value.trim();
  const email = emailField.value.trim();
  const password = pwdField.value.trim();
  const passwordConf = pwdFieldConf.value.trim();

  if (name === "") {
    setError(nameField, "Username is required");
    isValid = false;
  } else {
    setSuccess(nameField);
  }

  if (lastName === "") {
    setError(lastNameField, "User lastname is required");
    isValid = false;
  } else {
    setSuccess(lastNameField);
  }

  if (email === "") {
    setError(emailField, "Email is required");
    isValid = false;
  } else if (!isValidEmail(email)) {
    setError(emailField, "Provide a valid email address");
    isValid = false;
  } else {
    setSuccess(emailField);
  }

  if (password === "") {
    setError(pwdField, "Password is required");
    isValid = false;
  } else if (password.length < 8) {
    setError(pwdField, "Password must be at least 8 characters");
    isValid = false;
  } else if (password.length > 20) {
    setError(pwdField, "Password must be no longer than 20 characters");
    isValid = false;
  } else {
    setSuccess(pwdField);
  }

  if (passwordConf === "") {
    setError(pwdFieldConf, "Password confirmation is required");
    isValid = false;
  } else if (passwordConf !== password) {
    setError(pwdFieldConf, "Passwords do not match");
    isValid = false;
  } else {
    setSuccess(pwdFieldConf);
  }

  return isValid;
}
