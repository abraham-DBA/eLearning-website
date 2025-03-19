<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-body-tertiary">
  <main class="p-4 bg-white rounded shadow-sm" style="width: 100%; max-width: 400px;">
    <form class="needs-validation" novalidate action="database.php" method="POST">
      <div class="text-center mb-4">
        <h1 class="fw-bold">SMARTLEARNHUB</h1>
        <h1 class="h4 fw-bold mt-2">Sign In</h1>
      </div>

      <!-- Email Input -->
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="login_email" required>
        <label for="floatingInput">Email address</label>
        <div class="invalid-feedback">Please enter a valid email address.</div>
      </div>

      <!-- Password Input -->
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" minlength="6" name="login_password" required>
        <label for="floatingPassword">Password</label>
        <div class="invalid-feedback">Password must be at least 6 characters long.</div>
      </div>

      <!-- remeber me checkbox  -->
      <div class="form-check text-start mb-3">
        <input class="form-check-input" type="checkbox" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember me</label>
      </div>

      <!-- sign in button  -->
      <button class="btn btn-primary py-2 w-100" type="submit" name="signin">Sign in</button>

      <!-- forgot password link  -->
      <p class="mt-3 text-center">
        <a href="forgot_password.php">Forgot password?</a>
      </p>

      <p class="mt-4 text-body-secondary text-center">© 2024–2025</p>
    </form>
  </main>

  <script>
    // Bootstrap Form Validation Script
    (function () {
      'use strict';
      var forms = document.querySelectorAll('.needs-validation');

      Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>
</body>


</html>