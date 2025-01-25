function validateForm() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const errorMessage = document.getElementById("error-message");

    const validUsername = "tryaandini_";
    const validPassword = "cantik123";

    if (username !== validUsername || password !== validPassword) {
        errorMessage.textContent = "Username atau password salah!";
        return false; 
    }

    return true; 
}
