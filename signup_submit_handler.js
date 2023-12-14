document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form[name="sign-up"]');
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(form);

        // Log FormData contents (for debugging)
        formData.forEach((value, key) => {
            console.log(key, value);
        });

        fetch("https://citacka.azurewebsites.net/save_user.php", {
            method: "POST",
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                // Handle the response from the server
                if (data.success) {
                    console.log(data);
                    alert("works");
                } else {
                    console.log(data);
                    alert("doesn't work");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    });
});
