@extends('BaseTemplate.main')
@section('halaman' , 'Dashboard')
@section('content')
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Book Store</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">     
    {{-- <form action="/logout" method="post">
      @csrf
      <div class="navbar-nav">
        <div class="nav-item text-nowrap"> --}}
          {{-- <a class="nav-link px-3"><button type="submit" class="btn btn-secondary"> Logout</button></a> --}}
          {{-- <button type="submit" class="btn btn-secondary">Logout</button>
        </div>
      </div>
    </form> --}}
    <form action="/" method="post">
      @csrf
      <div>
        <button class="btn btn-secondary">Logout</button>
      </div>
    </form>
  </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span data-feather="home" class="align-text-bottom"></span>
                  Daftar Buku
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file" class="align-text-bottom"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart" class="align-text-bottom"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users" class="align-text-bottom"></span>
                  Customers
                </a>
              </li>

          </div>
        </nav>
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Online Library</h1>
          </div>
          
          <a class="text-decoration-none text-white" href="library/create">
            <button class="btn btn-primary">Tambah Data</button>
          </a>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Jenis Buku</th>
                  <th scope="col">Halaman Buku</th>
                  <th scope="col">Penulis Buku</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $d)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$d->judul}}</td>
                  <td>{{$d->jenis}}</td>
                  <td>{{$d->halaman}}</td>
                  <td>{{$d->penulis}}</td>
                  <td>
                    <a class="text-decoration-none text-white" href=" library/{{$d->id}}/edit">
                      <button class="btn btn-success">Edit</button>
                    </a>
                    <form action="/library/{{$d->id}}" method="post" class="d-inline">
                     @csrf
                     @method('delete')
                       <button type = "submit" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?')">Drop</button>
                    </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
        </main>
      </div>
    </div>
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
@endsection 