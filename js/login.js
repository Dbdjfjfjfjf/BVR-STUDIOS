// JavaScript
const users = [
  { username: "teste", password: "1234" },
  { username: "user2", password: "password2" },
  { username: "user3", password: "password3" }
];

const loginForm = document.getElementById("login-form");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");

loginForm.addEventListener("submit", function(event) {
  event.preventDefault(); // Impede que o formulário seja enviado

  const username = usernameInput.value;
  const password = passwordInput.value;

  const authenticatedUser = users.find(function(user) {
    return user.username === username && user.password === password;
  });

  if (authenticatedUser) {
    // O usuário está autenticado, faça algo aqui
    console.log("Usuário autenticado!");
  } else {
    // As credenciais de login estão incorretas, faça algo aqui
    console.log("Credenciais de login incorretas!");
  }
});
