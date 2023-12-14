document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form[name="sign-up"]');
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Collect form data
        const data = new FormData(event.target);

        const value = Object.fromEntries(data.entries());

        console.log({ value });
    });
});
