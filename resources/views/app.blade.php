<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Anime Simple CRUD</title>
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
            <div class="card-header">Form Anime</div>
            <div class="card-body">
              <form action="{{ route('anime.store') }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="">judul</label>
                  <input type="text" class="form-control" name="judul" value="{{ old('judul') }}">
                </div>
                <div class="form-group">
                  <label for="">Tanggal Rilis</label>
                  <input type="text" class="form-control" name="tgl_rilis" value="{{ old('tgl_rilis') }}">
                </div>
                <button class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Data Anime</div>
            <div class="card-body">
              <table class="table table-striped table-hovered">
                <tr>
                  <td>Judul</td>
                  <td>Tanggal Rilis</td>
                  <td>Aksi</td>
                </tr>

                @foreach ($anime as $anime_row)
                  <tr>
                    <td>{{ $anime_row->judul }}</td>
                    <td>{{ $anime_row->tgl_rilis }}</td>
                    <td>
                      <form action="{{ route('anime.destroy', $anime_row->id) }}" method="post">
                        <a href="{{ route('anime.edit', $anime_row->id) }}">
                          <button type="button" class="btn btn-warning"> Ubah </button>
                        </a>
						
                        @csrf
                        @method('DELETE')
                          <button class="btn btn-danger" type="submit" >Hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ url('assets/jquery.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap.min.js') }}"></script>

  </body>
</html>
