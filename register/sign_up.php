<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<title>Registration</title>

<form class = "container" action="registration.php" method = "post">
    <h1 class="text-center my-4">Sign up</h1>
    <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="*Full Name" required>
        <div class="form-text">Please fill in according to your real name.</div>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="username" placeholder="*Username" required>
        <div class="form-text">Please fill in according to your Username.</div>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="*Email Address" required>
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="*Password" required>
        <div class="form-text"> Your password must be 8-15 characters long, contain letters and numbers, and must not contain spaces, or special characters.</div>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="cpassword" placeholder="*Confirm Password" required>
        <div class="form-text"> Your password must be same with password above.</div>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" required>
        <label class="form-check-label">Accept the <a href="#">license agreement</a> </label>
    </div>
    <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>

<div class="text-center py-5">Already have account? <a href="../login/sign_in.php">Sign in</a></div>