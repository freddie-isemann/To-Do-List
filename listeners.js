document.getElementById('register-button').addEventListener('click', function() {
    console.log('Register button clicked');
    // Will perform register functions using PHP when clicked (not implemented yet)
})

document.getElementById('login-button').addEventListener('click', function() {
    console.log('Login button clicked');
    // Will perform login functions using PHP when clicked (not implemented yet)
})

document.getElementById('logout-button').addEventListener('click', function() {
    console.log('Logout button clicked');
    // Will perform logout functions using PHP when clicked (not implemented yet)
})

document.getElementById('add-task-button').addEventListener('click', function() {
    console.log('Task added!');
    // Will perform add task functions using PHP when clicked (not implemented yet)
})

document.getElementById('delete-task-button').addEventListener('click', function() {
    console.log('Task deleted!');
    // Will perform delete task functions using PHP when clicked (not implemented yet)
})

document.getElementById('login-page-button').onclick = function() {
    location.href = "login.html";
    // Will redirect to login page when clicked
}

document.getElementById('register-page-button').onclick = function() {
    location.href = "register.html";
    // Will redirect to register page when clicked
}

// All the above functions will be implemented using PHP and mySQL in the future
// For now they are just placeholders
// Database will be implemented using mySQL through xampp server and interacted with PHP