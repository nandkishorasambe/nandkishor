<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('frontend/css/dashboard.css')}}">
</head>
<body>
    <div class="container">

        <div class="sidebar">
            <div class="header">
                <img src="{{url('frontend/image/image.png')}}"  alt="Student Photo" class="student-photo">
                 <div>
                <h2>{{auth()->User()->email}}</h2>
             </div>
            </div>
            <ul class="sidebar-nav">
                <li>
                    <a href="{{route('course')}}">
                        <i class="fas fa-home"></i>
                        <span>My Courses</span>
                    </a>
                </li>
                <li>
                    <a href="" onclick="showSection('Progress')">
                        <i class="fas fa-list"></i>
                        <span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href="" onclick="showSection('Enrollment')">
                        <i class="fas fa-envelope"></i>
                        <span>Enrollment</span>
                    </a>
                </li>
                <li>
                    <a href="" onclick="showSection('Basket')">
                        <i class="fas fa-book"></i>
                        <span>Basket</span>
                    </a>
                </li>
                <li>
                    <a href="" onclick="showSection('My-status')">
                        <i class="fas fa-chart-bar"></i>
                        <span>My Status</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile')}}" onclick="showSection('My-accounts')">
                        <i class="fas fa-user"></i>
                        <span>My Accounts</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout')}}" onclick="showSection('My-accounts')">
                        <i class="fas fa-user"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main-content">
            <div id="My-Courses" class="section active">
                <h1>Courses</h1>
                <p>Welcome to  dashboard!</p>
            </div>
            <div id="Progress" class="section">
                <h1>Progress</h1>
                <p>Your progress details will be displayed here.</p>
            </div>
            <div id="Enrollment" class="section">
                <h1>Enrollment</h1>
                <p>Your enrollment details will be displayed here.</p>
            </div>
            <div id="Basket" class="section">
                <h1>Basket</h1>
                <p>Your selected courses will be listed here.</p>
            </div>
            <div id="My-status" class="section">
                <h1>My Status</h1>
                <p>Your status details will be displayed here.</p>
            </div>
            <div id="My-accounts" class="section">
                <h1>My Accounts</h1>
                <p>Manage your account details here.</p>
            </div>
        </div>
    </div>
    <script>
      
    </script>
</body>
</html>
