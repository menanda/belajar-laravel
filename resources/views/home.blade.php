<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SELAMAT DATANG DI UT YOGYAKARTA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      </form>
    </div>
  </div>
</nav>
<form>
  <a class="btn btn-primary" href="/login">Login</a>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

<body>
  <h1>List Mahasiswa</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">No Induk</th>
        <th scope="col">Nilai</th>
        <th scope="col">Grade</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($datamahasiswa as $item)
  <th>{{ $loop->iteration }} </th>
  <td>{{ $item ['nama']}} </td>
  <td>{{ $item ['no_induk']}} </td>
  <td>{{ $item ['nilai']}} </td>
<td>
  @switch ($nilai = $item ['nilai'])
  @case ($item ['nilai'] >=90 )
  A
  @break

  @case ($item ['nilai'] >=80 )
  B
  @break
  @default
  C
  @endswitch
</td>
</tr>
@endforeach
</tbody>
</table>

  {{-- <h1>selamat datang {{$user}}</h1>
  <h2>usia : {{$usia}} </h2>
@for ($i=1; $i <= 10; $i++)
item ke {{$i}}
@endfor
  @switch($grade)
  @case($grade >=90 )
  <h1>Grade :A</h1>
  @break
  @case($grade >=80 )
  <h1>Grade :B</h1>
  @break
  @default
  <h1>Grade : C</h1>
  @endswitch 

  @if ($usia >=21)
  <h2>kategori dewasa</h2>
  @else
  <h2>kategori anak-anak</h2>
  @endif
  @if ($ismember)
  <h2>member : {{$ismember}}</h2>
  @else
  <h2>Anda BUkan Member</h2>
  @endif
  <p>copyright {{ date('Y')}} Universitas Terbuka

    <h1>List Mahasiswa</h1>
    @foreach ($datamahasiswa as $item)
<ul>
  <li>Nama : {{ $item ['nama']}} </li>
  <li>No Induk: {{ $item ['no_induk']}} </li>
  <li>Nilai : {{ $item ['nilai']}} </li>

</ul>
@endforeach --}}