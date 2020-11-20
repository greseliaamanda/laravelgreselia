<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit data anggota</title>
    </head>

    <!--body-->
    <body class="edit-anggota bg-dark">
        <div class="register">
        <div class="container">
        <h2 class="alert alert-transparent text-center text-white">Form Pendaftaran Anggota Baru</h2><br>

    <!--alert-->
    @if(session('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('sukses')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif

    <!--form-->
    <form action="/anggota/{{$anggota->id}}/update" method="POST">
        {{csrf_field()}}
            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="NamaDepan">Nama</label>
                  </div>
                  <div class="col-md-9">
                  <input type="text" name="nama_depan" class="form-control" placeholder="Masukkan Nama Anda" id="NamaDepan" value="{{$anggota->nama_depan}}">
                  </div>
              </div>
            </div>

            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="Email">Email </label>
                  </div>
                  <div class="col-md-9">
                  <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat Email Anda" id="Email" value="{{$anggota->email}}">
                  </div>
              </div>
            </div>

            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="NomorTelepon">Nomor Telepon </label>
                  </div>
                  <div class="col-md-9">
                  <input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon Anda" id="NomorTelepon" value="{{$anggota->no_telp}}">
                  </div>
              </div>
            </div>

            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="Alamat">Alamat </label>
                  </div>
                  <div class="col-md-9">
                  <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda" id="Alamat" value="{{$anggota->alamat}}">
                  </div>
              </div>
            </div>

            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="TanggalLahir">Tanggal Lahir </label>
                  </div>
                  <div class="col-md-9">
                  <input type="date" name="tanggal_lahir" class="form-control" id="TanggalLahir" value="{{$anggota->tanggal_lahir}}">
                  </div>
              </div>
            </div>

            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="jenisKelamin">Jenis Kelamin </label>
                  </div>
                  <div class="col-md-9">
                  <select name="jenis_kelamin" class="form-control" id="jenisKelamin">
                    <option value="L" @if($anggota->jenis_kelamin=="L") selected @endif>Laki-laki</option>
                    <option value="P" @if($anggota->jenis_kelamin=="P") selected @endif>Perempuan</option>
                  </select>
                  </div>
              </div>
            </div>

            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="Pekerjaan">Status/Pekerjaan </label>
                  </div>
                  <div class="col-md-9">
                  <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Status/Pekerjaan Anda" id="Pekerjaan" value="{{$anggota->pekerjaan}}">
                  </div>
              </div>
            </div>

          <button type="submit" class="btn btn-primary" >Update</button>
        </form>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
