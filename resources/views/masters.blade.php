<!doctype html>
<html lang="en" dir="ltr">
   <head>
      <!-- META DATA -->
      <meta charset="UTF-8">
      <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
      <meta name="author" content="Spruko Technologies Private Limited">
      <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
      <!-- FAVICON -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico')}}" />
      <!-- TITLE -->
      <title>Magnus Digital</title>
      <!-- BOOTSTRAP CSS -->
      <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
      <!-- STYLE CSS -->
      <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />
      <link href="{{ asset('assets/css/dark-style.css')}}" rel="stylesheet" />
      <link href="{{ asset('assets/css/transparent-style.css')}}" rel="stylesheet">
      <link href="{{ asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
      <!--- FONT-ICONS CSS -->
      <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" />
      <!-- COLOR SKIN CSS -->
      <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/colors/color1.css')}}" />
   </head>
   <body>
      <section style="margin-top:150px">
        @include('sweetalert::alert')
         <div class="page">
            <div class="page-main">
               <div class="main-content">
                  <div class="container">
                     <div class="col-xl-12 col-lg-12">
                        <div class="card">
                           <div class="card-body">
                            <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                 <div class="row">
                                    <div class="col-xl-7 col-md-6 ">
                                       <figure style="margin-left: 200px;margin-top: 120px;"><img src="{{ asset('asset/images/signup-image.jpg')}}" alt="sing up image"></figure>
                                    </div>
                                    <div class="col-xl-5 col-md-6" style="margin-left: -3rem;">
                                       <h1 class="form-title text-center mt-4">Register</h1>
                                       <br><br>
                                       <div class="form-group">
                                          <div class=" row mb-5">
                                             <label class="col-md-4 form-label">Nama</label>
                                             <div class="col-md-8">
                                                <input type="text" class="form-control" name="nama" required>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div class=" row mb-5">
                                             <label class="col-md-4 form-label">Jenis kelamin</label>
                                             <div class="col-md-8 mt-2">
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" required>
                                                   <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" required>
                                                   <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div class=" row mb-5">
                                             <label class="col-md-4 form-label">Hobi</label>
                                             <div class="col-md-8 mt-2">
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="hobi[]">
                                                   <label class="form-check-label" for="inlineCheckbox1">Membaca buku</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="hobi[]">
                                                   <label class="form-check-label" for="inlineCheckbox2">Menggambar</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div class=" row mb-5">
                                             <label class="col-md-4 form-label">Email</label>
                                             <div class="col-md-8">
                                                <input type="email" class="form-control" required name="email">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div class=" row mb-5">
                                             <label class="col-md-4 form-label">Telp</label>
                                             <div class="col-md-8">
                                                <input type="number" class="form-control" required name="telp">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div class=" row mb-5">
                                             <label class="col-md-4 form-label">Username</label>
                                             <div class="col-md-8">
                                                <input type="text" class="form-control" maxlength="10" required name="username">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div class=" row mb-5">
                                             <label class="col-md-4 form-label">Password</label>
                                             <div class="col-md-8">
                                                <input type="password" class="form-control" maxlength="7" required name="password">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-2">
                                       <div class="form-group form-button">
                                          <button type="submit" name="register" class="btn btn-success btn-md mb-3 btn-block me-2" style="margin-left: 41.5rem;">Daftar</button>
                                       </div>
                                    </div>
                                    <div class="col-2">
                                       <div class="form-group form-button">
                                          <input type="reset" value="Reset" class="btn btn-light btn-md mb-3 btn-block me-2" style="margin-left: 41.5rem;">
                                          {{-- <button type="submit" name="signup" id="signup" class="btn btn-light btn-md mb-3 btn-block me-2" style="margin-left: 44.5rem;">Reset</button> --}}
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div><br><br>
                  <div class="container">
                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0">#</th>
                                                    <th class="wd-15p border-bottom-0">Nama</th>
                                                    <th class="wd-15p border-bottom-0">Jenis kelamin</th>
                                                    <th class="wd-20p border-bottom-0">Hobi</th>
                                                    <th class="wd-15p border-bottom-0">Email</th>
                                                    <th class="wd-10p border-bottom-0">Telpon</th>
                                                    <th class="wd-25p border-bottom-0">Username</th>
                                                    <th class="wd-15p border-bottom-o">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $no = 1;
                                                ?>
                                                @foreach ($register as $data)
                                                    <tr>
                                                        <td>{{$no++}}</td>
                                                        <td>{{$data->name}}</td>
                                                        <td>{{$data->gender == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                                                        <td>
                                                            <?php
                                                            if ($data->hobi == 1) {
                                                                echo "Membaca buku";
                                                            }elseif ($data->hobi == 2) {
                                                                echo "Menggambar";
                                                            }else {
                                                                echo "Menggambar,   1";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>{{$data->email}}</td>
                                                        <td>{{$data->telp}}</td>
                                                        <td>{{$data->username}}</td>
                                                        <td>
                                                            <form action="{{ url('register/'.$data->id) }}" method="POST" onsubmit="return confirm('Are you sure? This record and its details will be permanantly deleted!')" class="d-inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="ml-3 btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                                    <span class="ri-delete-bin-line"></span>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- JQUERY JS -->
      <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
      <!-- BOOTSTRAP JS -->
      <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
      <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
      <!-- INPUT MASK JS-->
      <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>
      <!-- SIDE-MENU JS-->
      <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>
      <!-- TypeHead js -->
      <script src="{{ asset('assets/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
      <script src="{{ asset('assets/js/typehead.js')}}"></script>
      <!-- SIDEBAR JS -->
      <script src="{{ asset('assets/plugins/sidebar/sidebar.js')}}"></script>
      <!-- Perfect SCROLLBAR JS-->
      <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
      <script src="{{ asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
      <script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>
      <!-- INTERNAL SELECT2 JS -->
      <script src="{{ asset('assets/plugins/select2/select2.full.min.js')}}"></script>
      <script src="{{ asset('assets/js/select2.js')}}"></script>
      <!-- Color Theme js -->
      <script src="{{ asset('assets/js/themeColors.js')}}"></script>
      <!-- Sticky js -->
      <script src="{{ asset('assets/js/sticky.js')}}"></script>
      <!-- CUSTOM JS -->
      <script src="{{ asset('assets/js/custom.js')}}"></script>

      <!-- DATA TABLE JS-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('assets/js/table-data.js')}}"></script>
   </body>
</html>
