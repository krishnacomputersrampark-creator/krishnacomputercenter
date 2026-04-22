function login() {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;
    let msg = document.getElementById("loginMsg");

    if (user === "admin" && pass === "1234") {
        msg.innerHTML = "Login Successful!";
        msg.style.color = "green";
    } else {
        msg.innerHTML = "Invalid Username or Password";
        msg.style.color = "red";
    }

    return false;
}