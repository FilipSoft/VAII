const loginForm = document.getElementById("loginForm");
const passwordInput = document.getElementById("password");
const togglePassword = document.getElementById("togglePassword");
const message = document.getElementById("message");
const forgotLink = document.getElementById("forgotLink");

// Show or hide the password
togglePassword.addEventListener("click", () => {
  const isPassword = passwordInput.type === "password";

  passwordInput.type = isPassword ? "text" : "password";
  togglePassword.textContent = isPassword ? "Hide" : "Show";
  togglePassword.setAttribute(
    "aria-label",
    isPassword ? "Hide password" : "Show password"
  );
});

// Display feedback
function showMessage(text, type) {
  message.textContent = text;
  message.className = `message visible ${type}`;
}

// Demo form submission
loginForm.addEventListener("submit", (event) => {
  event.preventDefault();

  if (!loginForm.checkValidity()) {
    loginForm.reportValidity();
    return;
  }

  const email = document.getElementById("email").value.trim();

  showMessage(
    `Form validated for ${email}. Connect your authentication backend to sign in.`,
    "success"
  );
});

// Placeholder for password recovery
forgotLink.addEventListener("click", (event) => {
  event.preventDefault();

  showMessage(
    "Password recovery is not configured yet. Please contact your administrator.",
    "error"
  );
});