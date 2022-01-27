<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="main">
        <div class="left-side">
            <img src="assets/image/facebook Signin image.png" alt="">
        </div>
        <div class="right-side">
            <div class="error"></div>
            <h1 style="color:#212121">Create an account</h1>
            <div style="color:#212121; font-size:20px;">It's free and always will be</div>
            <form action="sign.php" method="post" name="user-sign-up">
                <div class="sing-up-form">
                    <div class="sing-up-name">
                        <input type="text" name="first-name" id="first-name" class="text-field" placeholder="First Name">
                        <input type="text" name="last-name" id="last-name" class="text-field" placeholder="Last Name">
                    </div>
                    <div class="sign-wrap-mobile">
                        <input type="text" name="email-mobile" id="up-email" placeholder="Mobile number or email address" class="text-input">
                    </div>
                    <div class="sign-up-password">
                        <input type="password" name="up-password" id="up-password" class="text-input">
                    </div>
                    <div class="sing-up-birthday">
                        <div class="bday">Birthday</div>
                        <div class="form-birthday">
                            <select name="birth-day" id="days" class="select-body"></select>
                            <select name="birth-month" id="months" class="select-body"></select>
                            <select name="birth-years" id="years" class="select-body"></select>
                        </div>    
                    </div>
                    <div class="gender-wrap">
                            <input type="radio" name="gen" id="fem" value="female" class="m0">
                            <label for="fem" class="gender">Female</label>
                            <input type="radio" name="gen" id="male" value="male" class="m0">
                            <label for="male" class="gender">Male</label>
                    </div>
                    <div class="term">
                        By clicking Sing Up, you agree to our terms, Data policy and Cookie policy. You may receive SMS notification from us and can opt out at any time.
                    </div>
                    <input type="submit" value="Sign UP" class="sign-up">
                </div>
            </form>
        </div>

    </div>
    
</body>
</html>
