<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <title>Dashboard Admin</title>

    
</head>
<body  style="background-color: #6E3367;"> 
    <nav class="navbar navbar-expand-lg" style="background-color: #B3E5BE;">
        <div class="container-fluid">
            <a class="navbar-brand ms-4 text-white" href="{{ route('admin.login') }}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold;">UG-Foration</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.dashboard') }}" style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; font-weight: bold; margin-left: 72rem;">Status</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-11">
            <input id="searchInput" type="text" placeholder="Nama User" style="margin-top: 10rem; margin-left: 6rem; width: 298px; border-radius: 10px; height: 39px;">
            <button style="margin-bottom: 0.25rem; border-radius: 10px;" class="btn btn-light bi bi-search" type="button" id="searchButton"></button>            
        </div>
        <div class="col-1" style="margin-left: -4.5rem;">
            <button id="downloadExcel" class="bi bi-download btn btn-light shading border-dark" style="border-radius: 10px; height: 39px; margin-top: 10rem;"></button>
        </div>
    </div>
        <table id="mahasiswaTable" class="table table-light table-hover table-striped" style="width: 80rem; margin-left: 5.5rem; margin-top: 1rem;">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>No. Telp</th>
                    <th>Aspirasi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lilis Apriyani</td>
                    <td>10120591</td>
                    <td>3KA14</td>
                    <td>081288930460</td>
                    <td>Vclass sering down</td>
                    <td>
                        <select class="form-select text-white" style="background-color: #39ff14;" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Review</option>
                            <option value="2">On Progress</option>
                            <option value="3">Done</option>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Divo Al Ghafar</td>
                    <td>10120591</td>
                    <td>3KA14</td>
                    <td>081288930460</td>
                    <td>Vclass sering down</td>
                    <td>
                        <select class="form-select text-white" style="background-color: #39ff14;" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Review</option>
                            <option value="2">On Progress</option>
                            <option value="3">Done</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Lilis Apriyani</td>
                    <td>10120591</td>
                    <td>3KA14</td>
                    <td>081288930460</td>
                    <td>Vclass sering down</td>
                    <td>
                        <select class="form-select text-white" style="background-color: #39ff14;" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Review</option>
                            <option value="2">On Progress</option>
                            <option value="3">Done</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Lilis Apriyani</td>
                    <td>10120591</td>
                    <td>3KA14</td>
                    <td>081288930460</td>
                    <td>Vclass sering down</td>
                    <td>
                        <select class="form-select text-white" style="background-color: #39ff14;" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Review</option>
                            <option value="2">On Progress</option>
                            <option value="3">Done</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Lilis Apriyani</td>
                    <td>10120591</td>
                    <td>3KA14</td>
                    <td>081288930460</td>
                    <td>Vclass sering down</td>
                    <td>
                        <select class="form-select text-white" style="background-color: #39ff14;" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Review</option>
                            <option value="2">On Progress</option>
                            <option value="3">Done</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Lilis Apriyani</td>
                    <td>10120591</td>
                    <td>3KA14</td>
                    <td>081288930460</td>
                    <td>Vclass sering down</td>
                    <td>
                        <select class="form-select text-white" style="background-color: #39ff14;" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Review</option>
                            <option value="2">On Progress</option>
                            <option value="3">Done</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Lilis Apriyani</td>
                    <td>10120591</td>
                    <td>3KA14</td>
                    <td>081288930460</td>
                    <td>Vclass sering down</td>
                    <td>
                        <select class="form-select text-white" style="background-color: #39ff14;" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Review</option>
                            <option value="2">On Progress</option>
                            <option value="3">Done</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Lilis Apriyani</td>
                    <td>10120591</td>
                    <td>3KA14</td>
                    <td>081288930460</td>
                    <td>Vclass sering down</td>
                    <td>
                        <select class="form-select text-white" style="background-color: #39ff14;" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Review</option>
                            <option value="2">On Progress</option>
                            <option value="3">Done</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>





    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#mahasiswaTable').DataTable();
        });
        function searchTable() {
            const searchText = $('#searchInput').val().toLowerCase();
            $('#mahasiswaTable tbody tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
            });
        }

        $('#searchButton').click(searchTable);

        function downloadExcel() {
            const table = document.getElementById('mahasiswaTable');
            const wb = XLSX.utils.table_to_book(table, { sheet: "Sheet JS" });
            const selectedStatus = $('.status-dropdown').map(function () { return $(this).val(); }).get();
            const ws = wb.Sheets["Sheet JS"];
            const statusColumnIndex = 6;
            for (let i = 1; i <= selectedStatus.length; i++) {
                const cell = XLSX.utils.encode_cell({ r: i, c: statusColumnIndex });
                if (ws[cell]) ws[cell].v = selectedStatus[i - 1];
            }
            XLSX.writeFile(wb, 'mahasiswa_data.xlsx');
        }

        $('#downloadExcel').click(downloadExcel);
    </script>

</body>
</html>