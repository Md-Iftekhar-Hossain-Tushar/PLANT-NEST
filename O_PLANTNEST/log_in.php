<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="log_in.css">
    <title>Log In</title>
</head>
<body>
    <div class="center">
        
        <h1>Log In Page</h1>
        <form action="log_in_php.php" method="post">
            <div class="user_mail">
                <label for="mail">Mail:</label> 
                <br>
                <input id="mail" type="text" name="user_mail" placeholder="Enter mail" required>
            </div>
                <br>
                <br>
            <div class="password_text">
                <label for="userpassword">Password:</label>
                <br>
                <input id="userpassword" type="password" name="user_password" placeholder="Enter password" required>
            </div>

            <br>

            <div class="submit_text">
                <input type="submit" value="Log in">
            </div>
            <br>
        </form>
        <div class="notmember_text">
                <label for="not_member">Not a member: </label>
                <a href="sign_in.php" id="not_member"><button>Sign Up</button></a></div>
    </div>
</body>
</html>