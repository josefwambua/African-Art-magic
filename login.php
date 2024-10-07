<?php 
require "includes/header.php"; 
require "config/config.php"; 

// Redirect if the user is already logged in
if (isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

// Handle the login form submission
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $_SESSION['error'] = "Some inputs are empty.";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare and execute the query to fetch the user
        $login = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $login->bindParam(':email', $email);
        $login->execute();

        // Check if the user exists
        if ($login->rowCount() > 0) {
            $data = $login->fetch(PDO::FETCH_ASSOC);
            // Verify the password
            if (password_verify($password, $data['password'])) {
                $_SESSION['username'] = $data['username'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['success'] = "Login successful!";
                header("location: index.php");
                exit();
            } else {
                $_SESSION['error'] = "Email or password is wrong.";
            }
        } else {
            $_SESSION['error'] = "Email or password is wrong.";
        }
    }
}

// Check for session messages to display them using SweetAlert
if (isset($_SESSION['success'])) {
    echo "<script>
        swal({
            title: 'Success!',
            text: '{$_SESSION['success']}',
            icon: 'success',
            button: 'Okay',
        });
    </script>";
    unset($_SESSION['success']); // Clear the message after displaying
}

if (isset($_SESSION['error'])) {
    echo "<script>
        swal({
            title: 'Error!',
            text: '{$_SESSION['error']}',
            icon: 'error',
            button: 'Okay',
        });
    </script>";
    unset($_SESSION['error']); // Clear the message after displaying
}
?>

<main class="form-signin w-50 m-auto text-center">
  <form method="POST" action="login.php">
    <h1 class="h3 mt-5 fw-normal text-center">Please login</h1>

    <div class="form-floating mt-3 text-center">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    
    <div class="form-floating mt-3">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>
    <h6 class="mt-3">Don't have an account? <a href="register.php">Create your account</a></h6>
  </form>
</main>

<?php require "includes/footer.php"; ?>

