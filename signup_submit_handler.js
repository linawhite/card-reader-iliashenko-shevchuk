document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form[name="sign-in"]'); //correct
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(form);
        console.log(formData);
        fetch("https://citacka.azurewebsites.net/handle_form.php", {
            method: "POST",
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                // Handle the response from the server
                if (data.success) {
                    console.log(data);
                    // Do something on success
                    alert("Pin is correct!");
                } else {
                    console.log(data);

                    // Do something on failure
                    alert("Pin is incorrect! Go to sign-up form!!!");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    });
});
