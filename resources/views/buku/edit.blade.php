<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit data buku</title>
    </head>

    <!--body-->
    <body class="edit-buku bg-dark">
        <div class="register">
        <div class="container">
        <h2 class="alert alert-transparent text-center text-white">Form Update Anggota Baru</h2><br>

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
    <form action="/buku/{{$buku->id}}/update" method="POST">
        {{csrf_field()}}
            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="judul">Judul</label>
                  </div>
                  <div class="col-md-9">
                  <input type="text" name="judul" class="form-control" placeholder="Judul" id="judul" value="{{$buku->judul}}">
                  </div>
              </div>
            </div>

            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="pengarang">Pengarang </label>
                  </div>
                  <div class="col-md-9">
                  <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" id="pengarang" value="{{$buku->pengarang}}">
                  </div>
              </div>
            </div>

            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="penerbit">Penerbit</label>
                  </div>
                  <div class="col-md-9">
                  <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" id="penerbit" value="{{$buku->penerbit}}">
                  </div>
              </div>
            </div>

            <div class="form-group text-white">
              <div class="row">
                  <div class="col-md-3">
                  <label for="TahunTerbit">Tahun Terbit </label>
                  </div>
                  <div class="col-md-9">
                  <input type="text" name="tahun_terbit" class="form-control" placeholder="TahunTerbit" id="TahunTerbit" value="{{$buku->tahun_terbit}}">
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
