<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 400px;">
            <h3 class="text-center mb-3">Login</h3>

            <form method="POST" action="/login">
                <input type="email" name="email" class="form-control mb-2" placeholder="Email">
                <input type="password" name="password" class="form-control mb-3" placeholder="Password">
                <button class="btn btn-success w-100">Login</button>
            </form>

            <p class="text-center mt-3">
                Belum punya akun? <a href="/register">Register</a>
            </p>
        </div>
    </div>

</body>

</html>