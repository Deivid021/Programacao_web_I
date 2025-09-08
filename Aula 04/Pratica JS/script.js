    const userInput = document.getElementById("user")
    const passInput = document.getElementById("pass")
    const button = document.getElementById("btn")

    button.addEventListener("click", function() {
    
    userInput.classList.remove("user_pass_fail");
    passInput.classList.remove("user_pass_fail");

    const user = userInput.value;
    const pass = passInput.value;

    if (user == "user" && pass == "pass") {
        alert("Login OK")
    } else {
        userInput.classList.add("user_pass_fail")
        passInput.classList.add("user_pass_fail")
    }
    });