<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Bootstrap dan dataTable-->
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    
    <title>Data Pengembalian</title>
    </head>

    <!--body-->
    <body class="history bg-dark">    
    <div class="container">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand text-dark " href="#page-top">Data Peminjaman</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-dark" href="http://127.0.0.1:8000/anggota">Data Anggota</a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-dark" href="http://127.0.0.1:8000/pinjam">Data Pinjam</a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-dark" href="http://127.0.0.1:8000/kembali">Data Kembali</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link js-scroll-trigger text-dark" href="http://127.0.0.1:8000/buku">Daftar Buku</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="http://127.0.0.1:8000/dashboard" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dashboard
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://127.0.0.1:8000/dashboard">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
        </li>
        </ul>
    </div>
    </div>
    </nav>

    <!--jumbotron-->
    <div class="jumbotron bg-light">
    <!--alert-->
    @if(session('succses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('succses')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif

    <!--table data pinjam-->
    <div class="box-body">
                <table id="example" class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>  
                        <th>Anggota ID</th>
                        <th>Buku ID</th>
                        <th>Tgl Pinjam</th>
                        <th>Tgl Kembali</th>
                    </tr>
                </thead>
                @php
                    $no = 1
                @endphp
                @foreach($data_pinjam as $item)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$item['anggota_id']}}</td>
                        <td>{{$item['buku_id']}}</td>
                        <td>{{$item['tanggal_pinjam']}}</td>
                        <td>{{$item['tanggal_kembali']}}</td>
                    </tr>
                @php
                    $no++
                @endphp
                @endforeach
            </table>
    </div>
    </div>
    </div>

    <!--dataTable-->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    -->
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>
</html>





                            

                        