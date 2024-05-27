const formOpenbtn = document.querySelector("#form-open"),
      home = document.querySelector(".home"),
      formContainer = document.querySelector(".form_container"),
      formClosebtn = document.querySelector(".form_close"),
      signupbtn = document.querySelector("#signup"),
      pwShowHide = document.querySelectorAll(".pw_hide");

// Show the login form on window load
window.addEventListener("load", () => home.classList.add("show"));

formClosebtn.addEventListener("click", () => home.classList.remove("show"));

pwShowHide.forEach(icon => {
    icon.addEventListener("click", () => {
        var getPwInput = icon.parentElement.querySelector("input");
        if (getPwInput.type === "password") {
            getPwInput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
        } else {
            getPwInput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash");
        }
    });
});

signupbtn.addEventListener("click", (e) => {
    e.preventDefault();
    formContainer.classList.add("active");
});


