
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="signup-container">
        <h2>Create New User</h2>
        <form id="createUserForm" action="data.php" method="POST">
            
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="contact">Contact Number</label>
                <input type="contact" id="contact" name="contact" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="Password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>

    <!-- <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if(username === "user" && password === "password") {
                window.location.href = "home.html";
            } else {
                alert("Invalid username or password");
            }
        });
    </script> -->
</body>
</html>
