<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-body-tertiary">
  <main class="p-4 bg-white rounded shadow-sm" style="width: 100%; max-width: 400px;">
    <form action="/forgot-password" method="POST" class="needs-validation" novalidate>
      <div class="text-center mb-4">
        <h1 class="fw-bold">SMARTLEARNHUB</h1>
        <h1 class="h4 fw-bold mt-2">Forgot Password</h1>
        <p class="text-muted">Enter your email to reset your password.</p>
      </div>

      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
        <div class="invalid-feedback">Please enter a valid email address.</div>
      </div>

      <button class="btn btn-primary py-2 w-100" type="submit">Reset Password</button>

      <p class="mt-3 text-center">
        <a href="login.php">Back to Sign In</a>
      </p>

      <p class="mt-4 text-body-secondary text-center">© 2024–2025</p>
    </form>
  </main>

  <script>
    // Bootstrap form validation
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