<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="view/styles/style.css">
</head>
<body id="index">
    <div class="sampleFormBoxIndex">
        <h1>BookShelf App Login</h1>
        <form action="controller/processLogin.php" method="post" id="loginForm">
                <fieldset>
                    <!-- <legend>Login</legend> -->
                    <p>
                        <label for="uname">Username:</label>
                        <input type="text" name="uname">
                    </p>
                    <p>
                        <label for="upass">Password:</label>
                        <input type="password" name="upass">
                    </p>
                    <p>
                        <input type="submit" value="Submit">
                    </p>
                </fieldset>
        </form>
    </div>
</body>
</html>
