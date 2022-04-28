<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<title>Login</title>

<form class = "container" action="login.php" method = "post">
    <h1 class="text-center my-4">Sign in</h1>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="*Email Address" required>
        <div class="form-text">You must fill in the email according to the email you registered.</div>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="*Password" required>
        <div class="form-text">Fill in the password according to the email you registered.</div>
    </div>
    <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>

<div class="text-center py-5">Not have account? <a href="../register/sign_up.php">Sign up</a></div>