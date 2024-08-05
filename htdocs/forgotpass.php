<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/forgotpass.css">
</head>
<body>
    <div class="form-container">
        <div class="logo-container">
            Forgot Password
        </div>

        <form class="form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="&nbsp;&nbsp;&nbsp;Enter your email" required="">
            </div>

            <button class="form-submit-btn" type="submit">Send Email</button>
        </form>

        <p class="signup-link">
            Don't have an account?
            <a href="singup.php" class="signup-link link"> Sign up now</a>
        </p>
    </div>
</body>
</html>
