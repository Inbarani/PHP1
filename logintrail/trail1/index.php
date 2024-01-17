<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }

    .btn {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #45a049;
    }

    .signup-link {
      margin-top: 15px;
      display: block;
      color: #4caf50;
      text-decoration: none;
    }
  </style>
</head>
<body>

<?php
  session_start();
  $error = '';

  // Database connection
  $db = new mysqli('localhost', 'root', '', 'booktour');

  if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['signIn'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result = $db->query($query);

      if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
      } else {
        $error = 'Invalid username or password';
      }
    } elseif (isset($_POST['signUp'])) {
      $newUsername = $_POST['newUsername'];
      $newPassword = $_POST['newPassword'];

      $query = "INSERT INTO users (username, password) VALUES ('$newUsername', '$newPassword')";
      if ($db->query($query) === TRUE) {
        $_SESSION['username'] = $newUsername;
        header('Location: welcome.php');
      } else {
        $error = 'Error creating user';
      }
    }
  }
?>

<div class="login-container">
  <h2>Login</h2>
  <form method="post" action="login.html">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" class="btn" name="login">Sign In</button>
  </form>
  <p style="color: red;"><?php echo $error; ?></p>
  <a href="#" class="signup-link" onclick="showSignUpForm()">Don't have an account? Sign Up</a>
</div>

<div id="signupContainer" style="display: none;" class="login-container">
  <h2>Sign Up</h2>
  <form method="post" action="login.html">
    <div class="form-group">
      <label for="newUsername">Username:</label>
      <input type="text" id="newUsername" name="newUsername" required>
    </div>
    <div class="form-group">
      <label for="newPassword">Password:</label>
      <input type="password" id="newPassword" name="newPassword" required>
    </div>
    <button type="submit" class="btn" name="signup">Sign Up</button>
  </form>
  <p style="color: red;"><?php echo $error; ?></p>
  <a href="#" class="signup-link" onclick="showSignInForm()">Already have an account? Sign In</a>
</div>

<script>
  function showSignUpForm() {
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('signupContainer').style.display = 'block';
  }

  function showSignInForm() {
    document.getElementById('loginForm').style.display = 'block';
    document.getElementById('signupContainer').style.display = 'none';
  }

  function signIn() {
    // Implement authentication logic here
    alert('Sign In logic will go here.');
  }

  function signUp() {
    // Implement user registration logic here
    alert('Sign Up logic will go here.');
  }
</script>

</body>
</html>
