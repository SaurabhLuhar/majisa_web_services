document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function(event) {
        const name = document.querySelector("[name='name']").value.trim();
        const email = document.querySelector("[name='email']").value.trim();
        const message = document.querySelector("[name='message']").value.trim();

        if (name === "" || email === "" || message === "") {
            alert("All fields are required!");
            event.preventDefault();
        }
    });
});
