<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Admin</title>
</head>
<body style="background-color: #6E3367;">
    <nav class="navbar navbar-expand-lg" style="background-color: #B3E5BE;">
        <div class="container-fluid">
            <a class="navbar-brand ms-4 text-white" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold;">UG-Foration</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 27rem;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 14rem;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 16rem;">Status</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-0 m-0">
        <div class="row">
            <div class="col-6 ms-5" style="margin-top: 8rem;">
                <h2 class="text-white" style="font-family: 'Poppins', sans-serif; font-weight: bold;">Hello, Wellcome to <br>UG-Foration!</br></h2>
                <h5 class="text-white mt-5" style="font-family: 'Poppins', sans-serif; font-weight: bold;">Saatnya kita memperjuangkan hak-hak kita dan meraih impian kita! Mari bersatu dalam satu suara untuk menyampaikan aspirasi kita dan memperjuangkan perubahan yang kita inginkan. Jangan ragu untuk berbicara dan membuat perbedaan!</h5>
                <form method="POST" action="{{ route('admin.authenticate') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 mt-4">
                            <label for="username" class="text-white" style="font-size: 1.25rem; font-family: 'Poppins', sans-serif;">Username</label>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="text" name="username" placeholder="Ketik Username" style="width: 25rem;" class="form-control" id="username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <label for="password" class="text-white" style="font-size: 1.25rem; font-family: 'Poppins', sans-serif;">Password</label>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="password" name="password" placeholder="Ketik Password" style="width: 25rem;" class="form-control" id="password">
                        </div>
                    </div>
                    <div id="usernameError" class="text-danger"></div>
                    <div id="passwordError" class="text-danger"></div>
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <button type="submit" style="width: 10rem; margin-top: 2rem; border-radius: 30px; height: 3rem; background-color: #A86464">Login</button>
                </form>
            </div>
            <div class="col-5">
                <img src="{{ asset('img/Asset.png') }}" alt="logo" width="100%" height="90%" class="ms-5">
            </div>
        </div>
    </div>
    @for($i = 0; $i < 5; $i++)
    <div class="card" style="width: 60rem; margin-top: 5rem; margin-left: 14rem; border-radius: 30px;">
        <div class="card-header border-dark">
            <div class="row">
                <div class="col-10">
                    <h5 class="card-title" style="color: #6E3367; width: 8rem; font-family: 'Poppins', sans-serif;">Anonim Nama</h5>
                </div>
                <div class="col-2">
                    <div class="card border-dark text-center" style="color: #6E3367; font-family: 'Poppins', sans-serif; border-radius: 30px;">
                        Status
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body" style="height: 10rem;">
            
        </div>
    </div>
    @endfor
        <!-- <form method="POST" action="{{ route('admin.authenticate') }}">
            @csrf
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

        </form> -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


        <script>
            // Cek jika terdapat error untuk username atau password
            @if(session('error'))
                var error = "{{ session('error') }}";
                var usernameError = document.getElementById('usernameError');
                var passwordError = document.getElementById('passwordError');
                if (error.includes('username')) {
                    usernameError.innerText = "Username salah.";
                } else if (error.includes('password')) {
                    passwordError.innerText = "Password salah.";
                }
                console.log(error);
            @endif
        </script>




</body>
</html>