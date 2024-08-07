<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/course.css')}}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" >Student Learning</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Career Support</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Success Stories</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Enterprise</a></li>
                <li class="nav-item"><a class="nav-link" href="#">For Recruiters</a></li>
                <li class="nav-item"><a class="nav-link" href="#">More</a></li>
            </ul>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <!-- Card Section -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{url('frontend/image/Dashboard/AI.jpeg')}}"  class="card-img-top" alt="Artificial Intelligence & Machine Learning">
                            <div class="card-body">
                                <div class="program-title"> Artificial Intelligence & Machine Learning</div>
                                <div class="program-duration">12 Months · Online</div>
                                <a  class="btn btn-primary btn-sm mt-2" href="{{ route('Machine_learning_enroll')}}">View Program</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{url('frontend/image/Dashboard/Data Science.jpeg')}}"  src="image\Data Science.jpeg" class="card-img-top" alt="Data Science">
                            <div class="card-body">
                                <div class="program-title">Program in Data Science</div>
                                <div class="program-duration">12 Months · Online</div>
                                <a  class="btn btn-primary btn-sm mt-2" href="{{ route('data_science_enroll')}}">View Program</a>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{url('frontend/image/Dashboard/Programming in Java.jpeg')}}" class="card-img-top" alt="Programming in Java">
                            <div class="card-body">
                                <div class="program-title">Programming in Java</div>
                                <div class="program-duration">6 Months · Classroom</div>
                                <a  class="btn btn-primary btn-sm mt-2" href="{{ route('java_enroll')}}">View Program</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{url('frontend/image/Dashboard/python.jpeg')}}"  class="card-img-top" alt="Programming in Python">
                            <div class="card-body">
                                <div class="program-title">Programming in Python</div>
                                <div class="program-duration">6 Months · Classroom</div>
                                <a  class="btn btn-primary btn-sm mt-2" href="{{ route('java_enroll')}}">View Program</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards as needed -->
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="sidebar">
                    <h5 class="text-primary font-weight-bold">FIND YOUR IDEAL</h5>
                    <h2>Programs from world's best universities</h2>
                    <div class="header mt-3">
                        <i class="fas fa-star"></i>
                        <span>Popular Courses</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-brain"></i>
                                <a href="">AI & Machine Learning</a>
                            </div>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-plane"></i>
                                <a href="">Programming in Java</a>
                            </div>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-chart-line"></i>
                                <a href=""> Data Science</a>
                            </div>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fab fa-microsoft"></i>
                                <a href="">Microsoft Programs</a>
                            </div>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-briefcase"></i>
                                <a href="">Management</a>
                            </div>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-rocket"></i>
                                <a href="">Programming in Python</a>
                            </div>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>
