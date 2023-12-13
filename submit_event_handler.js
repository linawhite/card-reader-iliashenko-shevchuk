document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form[name="sign-in"]'); //correct
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(form);
        console.log(formData);
        fetch("http://localhost/card-reader/handle_form.php", {
            method: "POST",
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                // Handle the response from the server
                if (data.success) {
                    console.log(data);
                    // Do something on success
                    console.log("Pin is correct!");
                } else {
                    console.log(data);

                    // Do something on failure
                    console.log("Pin is incorrect!");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    });
});

// function submitForm(event) {
//     event.preventDefault();

//     // Get the pin value from the input
//     const pinInput = document.getElementById('card-id');
//     const pin = pinInput.value;

//     // Send a request to the server
//     fetch('handle_form.php', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify({ pin }),
//     })
//     c
//     });
//
