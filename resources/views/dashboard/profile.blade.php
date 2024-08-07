<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{url('frontend/css/profile.css')}}">
</head>

<body>

   
   
    <div class="background"></div>
    <div class="content">

        <form method="POST" action="{{ route('profile.update') }}" >
            @csrf
          
            <div class="profile-container">
                @if (session('success'))
                <div class="alert-success">
                   {{ session('success') }}
                </div>
               @endif
               @if (session('error'))
               <div class="alert-error">
                 <h1> &#128532; {{ session('error') }} </h1>
               </div>
              @endif
                <h2>Profile</h2>
                <div class="profile-section">
                    <h3>Personal Information</h3>
                    <label for="First-Name" class="profile-label">First Name:</label>
                    <input type="text" name="first_name" class="profile-input"  value="{{ $student->first_name }}" >

                    <label for="middle-name" class="profile-label">Middle Name:</label>
                    <input type="text" name="middle_name" class="profile-input" value="{{  $student->middle_name }}" >

                    <label for="last-name" class="profile-label">Last Name:</label>
                    <input type="text" name="last_name" class="profile-input" value="{{ $student->last_name  }}">

                    <label for="DOB" class="profile-label">Date Of Birth:</label>
                    <input type="date" id="DOB" name="dob" class="profile-input" value="{{ $student->dob  }}" >

                    <label for="Contact Number" class="profile-label">Contact Number:</label>
                    <input type="tel" name="phone" class="profile-input" value="{{  $student->phone  }}">

                    <label for="Email" class="profile-label">Email-ID:</label>
                    <input type="email" name="email" class="profile-input"   value="{{ auth()->user()->email }}"  disabled>

                    <label for="Gender" class="profile-label">Gender:</label>
                    <select name="gender" class="profile-input" >
                        <option value="male" {{  $student->gender  == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{  $student->gender  == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{  $student->gender  == 'other' ? 'selected' : '' }}>Other</option>
                    </select>

                    <label for="father-name" class="profile-label">Father's Name:</label>
                    <input type="text" id="father_name" name="father_name" class="profile-input" value="{{ $student->father_name }}" >

                    <label for="mother-name" class="profile-label">Mother's Name:</label>
                    <input type="text" id="mother_name" name="mother_name" class="profile-input" value="{{ $student->mother_name  }}" >

                    <label for="blood-group" class="profile-label">Blood Group:</label>
                    <input type="text" id="blood-group" name="blood_group" class="profile-input" value="{{ $student->blood_group  }}">

                    <label for="marital-status" class="profile-label">Marital Status:</label>
                    <select id="marital-status" name="marital_status" class="profile-input" value="{{  $student->marital_status  }}">
                        <option value="married">Married</option>
                        <option value="unmarried">Unmarried</option>
                    </select>

                    <label for="cast" class="profile-label">Cast:</label>
                    <select id="cast" name="cast" class="profile-input" value="{{  $student->cast }}">
                        <option value="open">Open</option>
                        <option value="obc">OBC</option>
                        <option value="sc/st/vj/nt/ews">SC/ST/VJ/NT/EWS</option>
                    </select>
                </div>
                <div class="profile-section">
                    <h3>Identity</h3>
                    <label for="aadhar-number" class="profile-label">Aadhar Number:</label>
                    <input type="text" id="aadhar-number" name="aadhar_number" class="profile-input" value="{{$student->aadhar_number  }}">
                    <label for="abc-id" class="profile-label">ABC ID:</label>
                    <input type="text" id="abc-id" name="abc_identity" class="profile-input"  value="{{  $student->abc_identity }}">

                 </div>
                <div class="profile-section">
                    <h3>Family Information</h3>
                    <label for="family-income" class="profile-label">Family Income:</label> 
                    <input type="text" id="family-income" name="family_income" class="profile-input" value="{{  $student->family_income  }}">
                </div>
                <div class="profile-section">
                   
                </div>
                <div class="profile-section">
                    <h3>Upload a Photo</h3>
                    <label for="file" class="profile-label">Choose a photo:</label>
                    <input type="file" name="file" id="file" accept="image/*" class="profile-input">
                    <br><br>
                <div>
                    <a  class="btn btn-success" href="{{ route('dashboard')}}">Back</a>
                    <button type="submit" class="btn btn-success">Update Profile</button>
                </div>
                </div>
            </div>
        </form>
        
    </div>
    <script src="script.js">
        @if(Session::has('success'))
           toastr.success("{{session('success')}}")
        @endif
    </script>
</body>

</html>
