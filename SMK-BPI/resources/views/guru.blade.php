<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/siswa">Data Siswa</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/guru">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Guru</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-goup">
                    @forelse ($guru as $val)
                        <li class="list-group-item">{{$val}}</li>
                    @empty
                        <div class="alert alert-dark d-inline-block">Tidak ada data.....</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            sistem infromasi guru | copyright &#169; {{date("Y")}} Ganisa
        </div>
    </footer>
</body>
</html>