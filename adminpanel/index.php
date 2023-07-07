
<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .error {
        color: red;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h3 class="mb-3">Silakan Login</h3>
                <form action="aksi_login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"> <span class="error">
                            <?php if (isset($errors['username'])) echo $errors['username']; ?> </span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"> <span class="error">
                            <?php if (isset($errors['password'])) echo $errors['password']; ?> </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>