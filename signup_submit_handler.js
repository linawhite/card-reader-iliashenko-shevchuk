document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form[name="sign-up"]');
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Collect form data
        const formData = new FormData(form);
        const formDataObject = {};
        formData.forEach((value, key) => {
            formDataObject[key] = value;
        });

        // Send data to the server
        fetch("save_user.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(formDataObject),
        })
            .then((response) => response.json())
            .then((data) => {
                console.log("Success:", data);
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    });
});
