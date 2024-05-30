<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card {
            background: linear-gradient(#F6D8CE, #6E3367);

            
        }
    </style>
</head>
<body style="background-color: #6E3367;">
    <nav class="navbar navbar-expand-lg" style="background-color: #B3E5BE;">
        <div class="container-fluid">
            <a class="navbar-brand ms-4 text-white" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold;">UG-Foration</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('user.home') }}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 27rem;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('user.about') }}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 14rem;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('user.status') }}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 16rem;">Status</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container p-0 m-0">
        <div class="row">
            <div class="col-6 ms-5" style="margin-top: 3rem;">
                <img src="{{ asset('img/Asset 2.png') }}" alt="logo" width="100%" height="90%" class="ms-5">
            </div>
            <div class="col-5 ms-5" style="margin-top: 7rem;">
                <h1 class="text-white" style="font-family: 'Poppins', sans-serif; font-weight: bold;">What is<br>UG-Foration?!</br></h1>
                <h4 class="text-white mt-4" style="font-family: 'Poppins', sans-serif; font-weight: bold;">UG-Foration yaitu sebuah platform website terpusat yang memfasilitasi interaksi dan kolaborasi antara mahasiswa Universitas Gunadarma dengan Pemangku Kebijakan, untuk menyalurkan aspirasi selama keberlangsungan belajar mengajar di Universitas Gunadarma.</h4>
            </div>
        </div>        
    </div>
    <h1 class="text-center text-white" style="font-family: 'Poppins', sans-serif; font-weight: bold; margin-bottom: 2rem;">Tujuan UG-Foration?!</h1>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-4" style="margin-left: 11rem;">
                    <div class="card" style="width: 566px; background-color: #F6D8CE; border-radius: 20px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{ asset('img/Asset 3.png') }}" alt="logo" width="100%" height="90%">
                                </div>
                                <div class="col-6">
                                    <div style="font-family: 'Poppins', sans-serif; margin-top: 3.5rem;">Untuk memfasilitasi mahasiswa Universitas Gunadarma dalam menyampaikan aspirasi mereka kepada pihak pemangku kebijakan.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="width: 566px; margin-left: 5rem; background-color: #F6D8CE; border-radius: 20px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 mt-3">
                                    <img src="{{ asset('img/Asset 4.png') }}" alt="logo" width="63%" height="90%">
                                </div>
                                <div class="col-6">
                                    <div style="font-family: 'Poppins', sans-serif; margin-top: 3.5rem;">Memberikan sebuah saluran yang efektif bagi pihak pemangku kebijakan untuk memperbaiki pelayanan mereka.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="row">
                <div class="col-4" style="margin-left: 11rem;">
                    <div class="card" style="width: 566px; background-color: #F6D8CE; border-radius: 20px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{ asset('img/Asset 5.png') }}" alt="logo" width="76.5%" height="90%">
                                </div>
                                <div class="col-6">
                                    <div style="font-family: 'Poppins', sans-serif; margin-top: 2.5rem;">Untuk memfasilitasi mahasiswa Universitas Gunadarma dalam menyampaikan aspirasi mereka kepada pihak pemangku kebijakan.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="width: 566px; margin-left: 5rem; background-color: #F6D8CE; border-radius: 20px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 mt-3">
                                    <img src="{{ asset('img/Asset 6.png') }}" alt="logo" width="100%" height="90%">
                                </div>
                                <div class="col-6">
                                    <div style="font-family: 'Poppins', sans-serif; margin-top: 2rem;">Memberikan sebuah saluran yang efektif bagi pihak pemangku kebijakan untuk memperbaiki pelayanan mereka.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>
</html>