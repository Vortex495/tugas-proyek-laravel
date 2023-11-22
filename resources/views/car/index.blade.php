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
                 @if($message = Session::get('success'))
                 <div class="alert alert-success">
                  <p>{{$message}}</p>
                 </div>
                 @endif
                 <div align="right">
                  <a href="{{route('car.create')}}" class="btn btn-primary">Add</a>
                  <br />
                  <br />
                 </div>
                 <table class="table table-bordered table-striped">
                    <tr>
                     <th>Nomor Plat</th>  
                     <th>Brand</th>
                     <th>Nama</th>
                     <th>Warna</th>
                     <th>Masalah</th>
                     <th>Edit</th>
                     <th>Delete</th>
                    </tr>
                    @foreach($car as $row)
                    <tr>
                     <td>{{$row['nomor_plat']}}</td>
                     <td>{{$row['brand']}}</td>
                     <td>{{$row['nama']}}</td>
                     <td>{{$row['warna']}}</td>
                     <td>{{$row['masalah']}}</td>
                     <td><a href="{{route('car.edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
                     <td>
                      <form method="post" class="delete_form" action="{{route('car.delete', $row['id'])}}">
                       {{csrf_field()}}
                       <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </form>
                   </td>
                  </tr>
                  @endforeach
                 </table>
                </div>
               </div>
               <script>
               $(document).ready(function(){
                $('.delete_form').on('submit', function(){
                 if(confirm("Are you sure you want to delete it?"))
                 {
                  return true;
                 }
                 else
                 {
                  return false;
                 }
                });
               });
               </script>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>