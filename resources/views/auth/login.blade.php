<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/login.css')}}">
</head>
<body>
    <div class="container">
        <div class="title">
            <p>Login</p>
        </div>
       
        @if (session('error'))
        <div >
         <p class="alert-error"> {{ session('error') }} </p>
        </div>
       @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="user_details">
                <div class="input_box">
                    <label for="email">Email</label>
                    <input type="email"  name ="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="input_box">
                    <label for="pass">Password</label>
                    <input type="password" id="pass"  name="password" placeholder="Enter your password" required>
                </div>
            </div>
            <div class="login_btn">
                <input type="submit" value="Login">
            </div>
            <div class="register_link">
                <p>Don't have an account? <a href="{{ route('register')}}">Register</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>
