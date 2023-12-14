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
        <form action="handle_form.php" method="post" name="sign-in">
            <h2>Sign In</h2>
            <input type="text" name="pin" id="card-id" placeholder="type pin or attach your card">
            <input type="submit" id="submit" value="SUBMIT" class="edit-btn btn">
        </form>

        <form name="sign-up">
            <h2>Sign Up</h2>
            <input type="text" name="id" id="sign-up-id" placeholder="111111111">
            <input type="text" name="name" id="name" placeholder="Type your name">
            <input type="text" name="surname" id="surname" placeholder="Type your surname">
            <input type="text" name="age" id="age" placeholder="Type your age">
            <input type="text" name="faculty" id="faculty" placeholder="Type your faculty">

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

    <script src="./signin_submit_handler.js"></script>
    <script src="./signup_submit_handler.js"></script>

    <script>
        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

    <script type="module" src="./script.js" crossorigin="anonymous"></script>
</body>
</html>
