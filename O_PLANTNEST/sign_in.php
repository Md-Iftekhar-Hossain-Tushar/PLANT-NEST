
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="log_in.css">
    <title>Sign UP</title>
</head>
<body>
    <div class="center">
        
        <h1>Sign Up Page</h1>
        <form action="sign_in_php.php" method="post">
            <div class="name_text">
                <label for="username">Name:</label> 
                <br>
                <input id="username" type="text" name="user_name" placeholder="Enter name" required>
            </div>
                <br>
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
            <div class="password_text">
                <label for="userpassword">Confirm Password:</label>
                <br>
                <input id="userpassword" type="password" name="cuser_password" placeholder="Enter password" required>
            </div>
            <br>
            <br>
            <div class="submit_text">
                <input type="submit" value="Sign Up" name="sign_up">
            </div>
            <br>

        </form>
        <div class="already_member_text">
                <label for="a_member">Already a member: </label>
                <a href="log_in.php" id="a_member"><button>Log In</button></a>
            </div>
    </div>
</body>
</html>