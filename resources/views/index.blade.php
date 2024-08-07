<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit-Based Education System</title>
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/contact.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

     
</head>
<body>
<section id="home" class="hero">
<header class="main-header">
    <div class="header-top">
        <div class="container">
            <nav class="navbar" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register')}}">Sign Up /</a>
                    </li>
                    <li class="nav-left">
                      <a class="nav-link" href="{{ route('login')}}">Log In</a>
                  </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<video autoplay muted loop id="bg-video">
    <source src="{{url('frontend/video/vid.MP4')}}" type="video/mp4">
    Your browser does not support the video tag.
</video>
<div class="hero-content">
    <h1>Welcome to LMS</h1>
    <h2>Your academic journey, visually tracked and showcased.</h2>
    <a href="#about" class="btn">Learn More</a>
</div>
</section>
<section id="about">
<br>
<header>
    <h1>About Us</h1>
</header>

    <div class="container">
        <!-- About Section -->
         <div>
            <section class="about-section">
                <h2>Our Company</h2>
                <p1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce auctor elit eu ex dapibus, non dignissim turpis porta. Aliquam feugiat justo vel nunc tincidunt feugiat. Donec ullamcorper vestibulum felis eget volutpat. Duis nec massa augue.</p1>
            </section>
            
        </div>
    </div>
</section>

<section id="features" >
<header>  <h1 onclick="toggleSection('about-content')">Features</h1></header>
      

        <div class="container">
        <div id="feature-content">
            <div class="feature">
            <h3>Track Your Subjects</h3>
            <p>Easily track which subjects you have learned and how many credits you have earned.</p>
        </div>
   
        <div class="feature">
            <h3>Visualize Your Progress</h3>
            <p>Our interactive dashboard helps you visualize your academic progress.</p>
        </div>
        <div class="feature">
            <h3>Customizable Profiles  jj</h3>
            <p>Create and customize your student profile with ease.</p>
        </div>
         </div>
        </div>
</section>
             <!-- Contact Start -->
<section  id="contact">
           <h1>Contact Us</h1>

             <div class="container">
    
    <div class="contact-info">
      <div class="item">
        <h3>Feedback</h3>
        <div class="i_con">
        <i class="fas fa-envelope"></i>
        </div>
        <div class="m-icon"><p>feedb@example.com</p></div>
      </div>
      <div class="item">
        <h3>General</h3>
        <div class="i_con">
        <i class="fas fa-envelope"></i>
        </div>
        <div class="m-icon"><p>info@example.com</p></div>
      </div>
      <div class="item">
        <h3>Technical</h3>
        <div class="i_con">
        <i class="fas fa-envelope"></i>
        </div>
        <div class="m-icon"><p>tech@example.com</p></div>
      </div>
    </div>

    <div class="group">
    <form>
      <div class="form-group">
      
        <input type="text" id="name" name="name" placeholder="Your Name">
      </div>
      <div class="form-group">
       
        <input type="email" id="email" name="email" placeholder="Your Email">
      </div>
      <div class="form-group">
        <input type="text" id="subject" name="subject" placeholder="Subject">
      </div>
      <div class="form-group">
        <textarea id="message" name="message" placeholder="Enter a Massage"></textarea>
      </div>
      <br>
      <button type="submit" class="btn">SEND MESSAGE</button>
    </form>
    </div>
    
          
    <div  class="group-map">
    <div class="map">
      <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
     </div>
     <br>
     <br>
     </div>
    <script src="script.js"></script>
</section>


 <!-- footer  start-->
          

<br>
 <footer>
  
    <div class="row">
      <div class="col-md-3">
        <h5>Company</h5>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Reservation</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Condition</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Contact</h5>
        <p>123 Street, New York, USA</p>
        <p>+012 345 67890</p>
        <p><a href="mailto:info@example.com">info@example.com</a></p>
        <p>Opening: Monday - Saturday 09AM - 09PM, Sunday 10AM - 08PM</p>
      </div>
      <div class="col-md-3">
        <h5>Newsletter</h5>
        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
        <input type="email" placeholder="Your email">
        <button>SIGNUP</button>
      </div>
      <div>
      <div class="p-size">
      <p> Your Site Name, All Right Reserved. Designed By HTML Codex Distributed By ThemeWagon
      </p>
      </div>
        <div class="footer-menu">
          <a href="">Home</a>
          <a href="">Cookies</a>
          <a href="">Help</a>
          <a href="">FQAs</a>
      </div>
    </div>
    </div>
</footer>
</body>
</html>
