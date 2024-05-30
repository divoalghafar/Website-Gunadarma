<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Aspirasi</title>
</head>
<body style="background-color: #6E3367;">
    <nav class="navbar navbar-expand-lg" style="background-color: #B3E5BE;">
        <div class="container-fluid">
            <a class="navbar-brand ms-4 text-white" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold;">UG-Foration</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('user.home')}}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 27rem;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('user.about')}}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 14rem;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('user.status')}}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 16rem;">Status</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="{{url('user/aspirasi/save')}}" method="POST" id="aspirasiSave">
        @csrf
        <div class="container-fluid" >
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-center mt-5 text-white">Nama Lengkap</h3>
                        </div>
                        <div class="col-12 ">
                            <input type="text" class="form-control border-end-0 border_kolom ps-4 mt-3 fw-normal fs-5" style="width:26rem; margin-left: 16rem;" name="nama_lengkap" placeholder="Ketikkan Nama Lengkap">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mt-5 text-white" style="margin-left: 16.8rem;">NPM</h3>
                        </div>
                        <div class="col-12 ">
                            <input type="number" class="form-control border-end-0 border_kolom ps-4 mt-3 fw-normal fs-5" style="width:26rem; margin-left: 16rem;" name="npm" placeholder="Ketikkan NPM">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mt-5 text-white" style="margin-left: 16.8rem;">Kelas</h3>
                        </div>
                        <div class="col-12 ">
                            <input type="text" class="form-control border-end-0 border_kolom ps-4 mt-3 fw-normal fs-5" style="width:26rem; margin-left: 16rem;" name="kelas" placeholder="Ketikkan Kelas">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mt-5 text-white" style="margin-left: 16.8rem;">No.Telp</h3>
                        </div>
                        <div class="col-12 ">
                            <input type="tel" class="form-control border-end-0 border_kolom ps-4 mt-3 fw-normal fs-5" style="width:26rem; margin-left: 16rem;" name="tlpn" placeholder="Ketikkan No.Telp">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-center mt-5 text-white">Penyampaian Keresahan/ Keluhan/ Kritik</h4>
                        </div>
                        <div class="col-12 ">
                            <input type="text" class="form-control ps-4 mt-3 fw-normal" style="height: 12.5rem; font-size: 1rem; width:28rem; margin-left: 8.5rem;" name="aspirasi" placeholder="Sampaikan Keresahan/ Keluhan/ Kritik">
                        </div>
                    </div>
                    <div class="row mt-3" style="margin-left: -8.5rem;">
                        <div class="col-12">
                            <h5 class="text-center text-white" style="margin-top:1.25rem; margin-left: -10.5rem;">Upload Identitas</h5>
                        </div>
                        <div class="col-12">
                            <input type="file" class="form-control border-end-0 border_kolom ps-4 mt-3 fw-normal fs-5" style="width:26rem; margin-left: 16rem;" name="gambar">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" style="margin-left: 75.8rem; border-radius: 30px; height: 3rem; background-color: #A86464; width: 10rem;" form="aspirasiSave">SUBMIT</button>
        </div>
    </form>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>