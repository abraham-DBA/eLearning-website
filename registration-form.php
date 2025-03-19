<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script> <!-- Includes Popper.js -->
</head>

<body>
    <div class="container d-flex justify-content-center">
        <main class="col-md-8 col-lg-6">
            <div class="py-5 text-center">
                <h2>Student Registration</h2>
                <p class="lead">Register now to access our online courses and start learning today!</p>
            </div>

            <div class="card shadow p-4">
                <h4 class="mb-3 text-center">Student Details</h4>
                <form class="needs-validation" novalidate action="database.php" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" placeholder="John" required>
                            <div class="invalid-feedback">First name is required.</div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Doe" required>
                            <div class="invalid-feedback">Last name is required.</div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="johndoe" required>
                                <div class="invalid-feedback">Username is required.</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                            <div class="invalid-feedback">Password is required.</div>
                        </div>

                        <div class="col-md-6">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country" required>
                                <option value="">Choose...</option>
                                <option>Uganda</option>
                                <option>Kenya</option>
                                <option>Tanzania</option>
                                <option>Rwanda</option>
                                <option>Burundi</option>
                                <option>South Sudan</option>
                            </select>
                            <div class="invalid-feedback">Please select a country.</div>
                        </div>

                        <div class="col-md-6">
                            <label for="course" class="form-label">Select Course</label>
                            <select class="form-select" id="course" name="course" required>
                                <option value="">Choose a course...</option>
                                <option>Web Development</option>
                                <option>Data Science</option>
                                <option>Cyber Security</option>
                                <option>AI & Machine Learning</option>
                            </select>
                            <div class="invalid-feedback">Please select a course.</div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit" name="register">Register</button>
                </form>

                <footer class="my-3 pt-3 text-body-secondary text-center text-small">
                    <p class="mb-1">© 2025 SMARTLEARNHUB</p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Privacy</a></li>
                        <li class="list-inline-item"><a href="#">Terms</a></li>
                        <li class="list-inline-item"><a href="#">Support</a></li>
                    </ul>
                </footer>
            </div>
        </main>
    </div>

    <!-- Bootstrap Form Validation Script -->
    <script>
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
