<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/ivy.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/toastr.min.css">

    <script src="js/jquery.js"></script>
    <script>
        if (sessionStorage.getItem('user') != null)
            location.replace('dashboard');
    </script>

    <title>UneFois - Connexion</title>
</head>
<body>
<div class="container">
    <div class="row logo">
        <h5>UneFois</h5>
    </div>

    <div class="row login-container">
        <div class="row">
            <form id="login-form" action="">
                <h6>LOG IN</h6>
                <div class="row input-control">
                    <input type="email" class="input-form u-full-width" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="row input-control">
                    <input type="password" class="input-form u-full-width" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="row form-button">
                    <button class="button-success u-full-width">Login to your account</button>
                </div>

            </form>
        </div>
    </div>

    <div class="row exist">
        <p>New to UneFois? <a href="{{ route('signup') }}">Sign Up</a></p>
        <a href="#">Forgot your password?</a>
    </div>
</div>

<script src="js/underscore.js"></script>
<script src="js/toastr.min.js"></script>
<script src="js/helpers.js"></script>

<!-- Login Script -->
<script>
    toastr.options.progressBar = true;
    toastr.options.closeButton = true;

    $('#login-form').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();

        const email = $('#email').val();
        const password = $('#password').val();

        $.ajax({
            url: "{{ env('API_ENDPOINT') . '/login'  }}",
            method: "POST",
            data: { email: email, password: password },
            success: function (data) {
                toastr.success(data.message, "Success");
                sessionStorage.setItem('user', JSON.stringify(data.user));

                setTimeout(() => {
                    location.replace('/dashboard');
                }, 2000);
            },
            error: function (data) {
                toastr.error(data.responseJSON.message, "Error");
                console.log(data);
            }
        });
    });
</script>
</body>
</html>