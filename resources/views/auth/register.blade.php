<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{url('frontend/css/register.css')}}">
</head>
<body>
    <div class="container">
        <div class="title">
            <p>Registration</p>
        </div>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="error">
                <ul>
                    <p>Error:</p>
                    @foreach ($errors->all() as $error)
                        <li>&#x2022;{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- User Type -->
        <div class="input_box1">
            <label for="usertype_id">Choose a User Type:</label>
            <select name="usertype_id" id="usertype_id" required>
                @foreach ($userTypes as $type)
                    <option value="{{ $type->id }}">{{ $type->description }}</option>
                @endforeach
            </select>
        </div>
         <!-- First Name -->
         <div class="user_details">
         <div class="input_box">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <!-- Middle Name -->
        <div class="input_box">
            <label for="middle_name">Middle Name</label>
            <input type="text" id="middle_name" name="middle_name">
        </div>
        <!-- Last Name -->
        <div class="input_box">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
    
        <!-- Email -->
        <div class="input_box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <!-- Password -->
        <div class="input_box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <!-- Confirm Password -->
        <div class="input_box">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <!-- Phone -->
        <div class="input_box">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <!-- Date of Birth -->
        <div class="input_box">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <!-- Gender -->
        <div class="gender">
            <span class="gender_title">Gender</span>
            <input type="radio" name="gender" id="radio_1" value="male">
            <input type="radio" name="gender" id="radio_2" value="female">
            <input type="radio" name="gender" id="radio_3" value="other">
            <div class="category">
                <label for="radio_1">
                    <span class="dot one"></span>
                    <span>Male</span>
                </label>
                <label for="radio_2">
                    <span class="dot two"></span>
                    <span>Female</span>
                </label>
                <label for="radio_3">
                    <span class="dot three"></span>
                    <span>Other</span>
                </label><br>
            </div>
        </div>
       
        <div>
            <button  class="register-btn" type="submit" > Register</button>
        </div>
        <div  class="login_link">
            <p>You have account <a href="{{ route('login')}}">Login</a></p>
        </div>
        </div>
    </form>
    </div>
</body>
</html>
