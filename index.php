<!DOCTYPE html>
<html lang="en">
<head>
    <title>Card Reader</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Card reader with ESP</h1>
    <div class="forms-wrapper">
        <form action="" method="post" name="sign-in" onsubmit="submitForm(event)">
            <h2>Sign In</h2>
            <input type="text" name="pin" id="card-id" placeholder="type pin or attach your card">
            <input type="submit" id="submit" value="SUBMIT" class="edit-btn btn">
        </form>

        <form name="sign-up">
            <h2>Sign Up</h2>
            <input type="text" id="card-id" placeholder="111111111">
            <input type="text" id="name" placeholder="Type your name">
            <input type="text" id="surname" placeholder="Type your surname">
            <input type="text" id="age" placeholder="Type your age">
            <input type="text" id="faculty" placeholder="Type your faculty">
            <input type="submit" id="submit" value="SUBMIT" class="edit-btn btn">
        </form>
    </div>

    <h2>List of Users</h2>

    <table id="table">
        <tr>
            <th>ID of Card</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Faculty</th>
            <th class="last-th"></th>
        </tr>
    </table>

    <script>
        function submitForm(event) {
            event.preventDefault();

            // Get the pin value from the input
            const pinInput = document.getElementById('card-id');
            const pin = pinInput.value;

            // Send a request to the server
            fetch('handle_form.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ pin }),
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response from the server
                if (data.success) {
                  console.log(data);
                    // Do something on success
                    console.log('Pin is correct!');
                } else {
                    // Do something on failure
                    console.log('Pin is incorrect!');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>

    <script>
        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

    <script type="module" src="./script.js" crossorigin="anonymous"></script>
</body>
</html>
