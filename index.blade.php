// Letakkan di folder resources/views/
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Perpustakaan</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    <a class="navbar-brand" href="/">
    <img src="https://www.gravatar.com/avatar/62b54bac85724a5e49ba5c9f6ee825b9.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    Hadziq
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="/create?new=Entry+Baru">Entry Baru</a>
        <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
    </div>
    </div>
    </nav>
  <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Daftar Nama Buku</h1>
            </div>
            <div class="panel-body">
                <form action="{{url('create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $key => $d)
                        <tr>
                            <td>{{ $d->kode_buku }}</td>
                            <td>{{ $d->judul }}</td>
                            <td>{{ $d->deskripsi }}</td>
                            <td>
                                <a href="{{url('read',array($d->id))}}" class="badge badge-info">Detail</a>
                                <a href="{{url('delete',array($d->id))}}" class="badge badge-danger">Delete</a>
                                <a href="{{url('edit',array($d->id))}}" class="badge badge-warning">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

