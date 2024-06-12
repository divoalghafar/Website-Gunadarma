<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Status</title>
</head>
<body style="background-color: #6E3367;">
    <nav class="navbar navbar-expand-lg" style="background-color: #B3E5BE;">
        <div class="container-fluid">
            <a class="navbar-brand ms-4 text-white" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold;">UG-Foration</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('admin.login')}}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 27rem;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('admin.about')}}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 14rem;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('admin.status')}}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 16rem;">Status</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @foreach ($adminstatus as $datastatus)
    <div class="card" style="width: 60rem; margin-top: 5rem; margin-left: 14rem; border-radius: 30px;">
        <div class="card-header border-dark">
            <div class="row">
                <div class="col-10">
                    <h5 class="card-title nama-lengkap" style="color: #6E3367; font-family: 'Poppins', sans-serif;">{{$datastatus->nama_lengkap}}</h5>
                </div>
                <div class="col-2">
                    <div class="card border-dark text-center" style="color: #6E3367; font-family: 'Poppins', sans-serif; border-radius: 30px; background-color: #bdc3c7;">
                        Status
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body aspirasi" style="height: 10rem;">{{$datastatus->aspirasi}}</div>
    </div>
    @endforeach






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
            $(document).ready(function() {
                function anonymizeName(name) {
                    return name.split(' ').map(function(word) {
                        if (word.length <= 2) return word; // Skip short words
                        return word[0] + '*'.repeat(word.length - 2) + word[word.length - 1];
                    }).join(' ');
                }

                $('.nama-lengkap').each(function() {
                    var originalName = $(this).text();
                    var anonymizedName = anonymizeName(originalName);
                    $(this).text(anonymizedName);
                });

                $('.aspirasi').each(function() {
                    var originalAspirasi = $(this).text();
                    var anonymizedAspirasi = originalAspirasi.replace(/./g, '*');
                    $(this).text(anonymizedAspirasi);
                });
            });
    </script>

</body>
</html>