<!DOCTYPE html>
<html>
    <head>
        <title>College App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
        </div>
        <form action="{{route('store')}}" id="studentForm" method="POST">
        @csrf
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="email"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" id="name" required>

                <label for="rollnum"><b>Roll Number</b></label>
                <input type="text" placeholder="Enter Password" name="rollnum" id="rollnum" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

                <label for="phone"><b>Phone</b></label>
                <input type="text" placeholder="Enter phone" name="phone" required>

                <hr>

                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="submit" class="registerbtn">Register</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>
        </form>
    </body>
</html>