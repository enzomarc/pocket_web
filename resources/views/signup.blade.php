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
    <link rel="stylesheet" href="css/toastr.min.css">

    <script src="js/jquery.js"></script>
    <script>
        if (sessionStorage.getItem('user') != null)
            location.replace('dashboard');
    </script>

    <title>Pocket - Register</title>
</head>
<body>
    <div class="container">
        <div class="row logo">
            <h5>Pocket</h5>
        </div>

        <div class="row login-container">
            <div class="six columns right-side">
                <h6>CREATE YOUR ACCOUNT</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam ducimus enim facere nam! A, asperiores et id illo libero mollitia.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequuntur earum exercitationem laudantium sunt? Amet explicabo.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet explicabo facilis illum neque porro. Amet explicabo facilis illum facilis illum.</p>
                <span class="tiny">CEO, Pocket</span>
            </div>
            <div class="six columns">
                <form id="signup-form" action="">
                    <div class="row input-control">
                        <label for="business">Business / App Name</label>
                        <input type="text" class="input-form u-full-width" name="business" id="business" required>
                    </div>
                    <div class="row input-control">
                        <label for="email">Your Work Email Address</label>
                        <input type="email" class="input-form u-full-width" name="email" id="email" required>
                    </div>
                    <div class="row input-control">
                        <label for="password">Your Password</label>
                        <input type="password" class="input-form u-full-width" name="password" id="password" required>
                    </div>
                    <div class="row" id="pwd-rules">
                        <p id="8chars">- 8 characters minimum</p>
                        <p id="number">- One number</p>
                        <p id="special">- One special char</p>
                    </div>
                    <div class="row terms">
                        <p>By clicking button below, you agree to Pocket's <a href="#">terms of acceptable use</a></p>
                    </div>
                    <div class="row form-button">
                        <button class="button-success u-full-width">Create My Account</button>
                    </div>
                    <div class="row exist">
                        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/underscore.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/helpers.js"></script>

    <!-- Sign-up Script -->
    <script>
        $('#signup-form').submit(function (e) {
            e.preventDefault();
            e.stopPropagation();

            const business = $('#business').val();
            const email = $('#email').val();
            const password = $('#password').val();

            $.ajax({
                url: "{{ env('API_ENDPOINT') . '/register'  }}",
                method: "POST",
                data: { business_name: business, email: email, password: password },
                success: function (data) {
                    toastr.success(data.message + " Login to access your shop.", "Success");
                    setTimeout(() => {
                        location.replace('login');
                    }, 2000);
                },
                error: function (data) {
                    toastr.error(data.responseJSON.message, "Error");
                    console.log(data);
                }
            });
        });

        /* Password format verification */
        const password_field = $('#password');

        password_field.focus(function () {
            $('#pwd-rules').slideDown(400);
        });

        password_field.focusout(function () {
            $('#pwd-rules').slideUp(400);
        });

        password_field.keyup(function () {
            const content = $(this).val();
            const length = content.length;

            if (length >= 8) {
                $('#pwd-rules #8chars').text('- 8 characters minimum (Done)');
            } else {
                $('#pwd-rules #8chars').text('- 8 characters minimum');
            }

            if (content.includes('0') || content.includes(1) || content.includes(2) || content.includes(3) || content.includes(4) || content.includes(5) || content.includes(6) || content.includes(7) || content.includes(8) || content.includes(9)) {
                $('#pwd-rules #number').text('- One number (Done)');
            } else {
                $('#pwd-rules #number').text('- One number');
            }
        });
    </script>
</body>
</html>