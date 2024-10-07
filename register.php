<?php 
require "includes/header.php"; 
require "config/config.php"; 

if(isset($_SESSION['username'])) {
    header("location: index.php");
}

if(isset($_POST['submit'])) {
    if($_POST['email'] == '' || $_POST['username'] == '' || $_POST['password'] == '') {
        $_SESSION['error'] = "Some inputs are empty.";
    } else {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $insert = $conn->prepare("INSERT INTO users (email, username, password) VALUES (:email, :username, :password)");

        if($insert->execute([
            ':email' => $email,
            ':username' => $username,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
        ])) {
            $_SESSION['success'] = "Registration successful!";
        } else {
            $_SESSION['error'] = "Registration failed!";
        }
    }
}

// After handling the form, check for session messages
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
  <form method="POST" action="register.php">
    <img class="mb-4 mt-5 text-center" src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" alt="" width="100" height="100">
    <h1 class="h3 mt-5 fw-normal text-center">Please Register</h1>

    <div class="form-floating mt-3">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating mt-3">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
      <label for="floatingInput">Username</label>
    </div>

    <div class="form-floating mt-3">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign Up</button>
    <h6 class="mt-3">Already have an account?  <a href="login.php">Login</a></h6>
  </form>
</main>

<?php require "includes/footer.php"; ?>
