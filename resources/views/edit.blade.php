<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Edit Page</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="container pt-5">

      @if (count($errors))
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li class="m-0 p-0">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
	  @endif

      @if ($msg = Session::get('success'))
        <div class="alert alert-success">
          {{ $msg }}
        </div>
      @endif

      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Edit Anime</div>
            <div class="card-body">
                <form action="{{ route('anime.update', $anime->id) }}" method="post">

                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" value="{{ $anime->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Rilis</label>
                        <input type="text" class="form-control" name="tgl_rilis" value="{{ $anime->tgl_rilis }}">
                    </div>
                    <button class="btn btn-primary">Simpan</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ url('assets/jquery.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap.min.js') }}"></script>

  </body>
</html>
