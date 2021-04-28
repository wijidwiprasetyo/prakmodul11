<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light mt-2" style="background-color: #f0072a;">
    <div class="container-fluid m-3">
        <a class="navbar-brand text-white" href="#">LAPAK ANAK TEKNIK || PANIK.COM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav float-end">
            <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="#">Katalog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="#">Kontak Kami</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-2">
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <div class="container-fluid mt-2">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari Produk" aria-label="Search">
                    <button class="btn btn-danger ml-2" type="submit">Cari Produk</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-3">
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-danger">Urutkan berdasarkan nama</button>
                <button type="button" class="btn btn-danger mt-2">Urutkan berdasarkan harga</button>
            </div>
        </div>
        <div class="col-8">
        @forelse ($mahasiswas as $mahasiswa)
            <div class="card d-inline-block" style="width: 12rem;">
                <img src="{{ url('/img/'.$mahasiswa->foto) }}" class="card-img-top" widht="150px">
                <div class="card-body">
                    <h6 class="card-title">{{$mahasiswa->nama}}</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan' : 'Laki-laki'}}</li>
                    <li class="list-group-item">{{$mahasiswa->jurusan}}</li>
                    <li class="list-group-item">{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</li>
                </ul>
            </div>
        @empty
        @endforelse
        </div>
    </div>
</div>
</div>
<footer class="mt-5 p-3" style="background-color: #f0072a;">
    <h1 class="text-center text-white">KONTAK KAMI</h1>
    <div class="contact d-inline">
        <p class="text-center text-white">Mas Satrio Bima Sakti : 085885588585</p>
    </div>
</footer>
<footer class="p-3 mt-1 mb-2" style="background-color: #f0072a;">
    <p class="text-center text-white">Copyright panik.com | 2021</p>
</footer>
<!-- <div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="py-4 d-flex justify-content-end align-items-center">
                <h2 class="mr-auto">Tabel Mahasiswa</h2>
                <a href="{{route('mahasiswas.create')}}" class="btn btn-primary mr-2">Tambah Mahasiswa</a>
                <a type="a" class="btn btn-primary mr-2" href="/mahasiswas-sortbynim">Sort by NIM</a>
                <a type="a" class="btn btn-primary" href="/mahasiswas-sortbyname">Sort by Name</a>
                <a href="{{ route('logout') }}" class="form-inline my-2 ml-2 btn btn-danger">Logout</a>
            </div>
            @if(session()->has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswas as $mahasiswa)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td><a href="{{url('/mahasiswas/'.$mahasiswa->id)}}">{{$mahasiswa->nim}}</td>
                        <td>{{$mahasiswa->nama}}</td>
                        <td>{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
                        <td>{{$mahasiswa->jurusan}}</td>
                        <td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
                    </tr>
                    <div class="card d-inline-block m-4" style="width: 18rem;">
                        <img src="{{ url('/img/'.$mahasiswa->foto) }}" class="card-img-top" widht="150px">
                        <div class="card-body">
                            <h5 class="card-title">{{$mahasiswa->nama}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan' : 'Laki-laki'}}</li>
                            <li class="list-group-item">{{$mahasiswa->jurusan}}</li>
                            <li class="list-group-item">{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</li>
                        </ul>
                    </div>
                    @empty
                        <td colspan="6" class="text-center">Tidak ada data...</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
