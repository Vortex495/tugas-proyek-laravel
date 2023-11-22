<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-12">
                    <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
                        <div class="full-background"
                            style="background-image: url('../assets/img/header-blue-purple.jpg')"></div>
                        <div class="card-body text-start p-4 w-100">
                            <h3 class="text-white mb-2">Database : Car</h3>
                            <img src="../assets/img/3d-cube.png" alt="3d-cube"
                                class="position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                 <br />
                 <h3 aling="center">Add Data</h3>
                 <br />
                 @if(count($errors) > 0)
                 <div class="alert alert-danger">
                  <ul>
                  @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
                  @endforeach
                  </ul>
                 </div>
                 @endif
                 @if(\Session::has('success'))
                 <div class="alert alert-success">
                  <p>{{ \Session::get('success') }}</p>
                 </div>
                 @endif
               
                 <form method="post" action="{{url('car/create/store')}}">
                  {{csrf_field()}}
                  <div class="form-group">
                    <input type="text" name="nomor_plat" class="form-control" placeholder="masukan nomor plat mobil" />
                  </div>
                  <div class="form-group">
                   <input type="text" name="brand" class="form-control" placeholder="masukan nama brand mobil" />
                  </div>
                  <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="masukan nama mobil" />
                   </div>
                  <div class="form-group">
                    <input type="text" name="warna" class="form-control" placeholder="masukan warna mobil" />
                   </div>
                   <div class="form-group">
                    <input type="text" name="masalah" class="form-control" placeholder="permasalahan apa pada mobil?" />
                   </div>
                  <div class="form-group">
                   <input type="submit" class="btn btn-primary" />
                  </div>
                 </form>
                </div>
               </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>