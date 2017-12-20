@include('admin/header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
                <small>{{ $result->lastPage() }} Page</small>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- Form Modal -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambahkan User</h4>
              </div>
              <div class="modal-body">
                <!-- form start -->
            <form class="form-horizontal" action="{{URL::to('admin/user/create')}}" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputNama" placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputUsername" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputUsername" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputJenKel" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <select name="inputJenKel" class="form-control">
                        <option value="P"> Perempuan </option>
                        <option value="L"> Laki-Laki </option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTanggalLahir" class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-xs-2">
                    <select name="inputTanggal" class="form-control">
                    @for($i=1; $i<=31; $i++)
                        <option value={{$i}}>{{$i}}</option>
                    @endfor
                  </select>
                  </div>
                  <div class="col-xs-5">
                  <select name="inputBulan" class="form-control">
                    <?php $bulan = array("Januari" , "Februari" , "Maret" , "April" , "Mei" , "Juni" , "Juli" , "Agustus" , "September" , "Oktober" , "Novermber" , "Desember");?>
                    @foreach ($bulan as $newbulan)
                        <option value={{$i+1}}> {{$newbulan}} </option>
                    @endforeach
                  </select>
                  </div>
                  <div class="col-xs-3">
                  <select name="inputTahun" class="form-control">
                    @for($i=1940;$i<=2017;$i++)
                        <option value={{$i}}>{{$i}}</option>
                    @endfor
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNoTelepon" class="col-sm-2 control-label">No Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputNoTelepon" placeholder="No Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputKota" class="col-sm-2 control-label">Kota</label>

                  <div class="col-sm-10">
                  <select name="inputKota" class="form-control">
                    @foreach ($kota as $idx => $datakota)
                        <option value={{$datakota->idKota}}>{{$datakota->namaKota}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputKecamatan" class="col-sm-2 control-label">Kecamatan</label>

                  <div class="col-sm-10">
                    <select name="inputKecamatan" class="form-control">
                    @foreach ($kecamatan as $ix => $datakec)
                        <option value={{$datakec->idKecamatan}}>{{$datakec->namaKecamatan}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputAlamat" placeholder="Tuliskan Alamat Lengkap Anda">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <input type="submit" value="Simpan"class="btn btn-success" data-toggle="modal" @if(Session::has('message')) data-target="#modal-message" @endif>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.form-modal -->

        <!-- Message Modal -->
        <div class="modal fade" id="modal-message">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Berhasil</h4>
                {{Session::get('message')}}
                </div>
            </div>
          </div>
        </div>
        <!-- /messagemodal -->

            <!-- AddButton -->
            <div class="margin">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i>  Tambah</button>
              <!-- Pages -->
              <ul class="pagination pagination-sm no-margin pull-right">
                <!-- <li><a href="">&laquo;</a></li> -->
                <li><a href="{{ $result->previousPageUrl() }}">&lt;</a></li>
                <li><a href="#">{{ $result->currentPage() }}</a></li>
                <li><a href="{{ $result->nextPageUrl() }}">&gt;</a></li>
                <!-- <li><a href="{{ $result->LastPage() }}">&raquo;</a></li> -->

              </ul>


              <!-- /pages -->
            </div>
            <!-- /addbutton -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>No Telephone</th>
                  <th>Alamat</th>
                  <th>Rule</th>
                  <th>Update</th>
                </tr>
                @foreach ($result as $index => $datas)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$datas->namaPengguna}}</td>
                  <td>{{$datas->username}}</td>
                  <td>{{
                  date_format(date_create("$datas->tanggalLahir"), "d F Y")
                  }}</td>
                  <td>{{$datas->jenisKelamin}}</td>
                  <td>{{$datas->noHP}}</td>
                  <td>{{$datas->alamat}}</td>
                  <td>{{$datas->rule}}</td>
                  <td>
                    <button type="button" class="btn btn-social-icon btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Password</button>

                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('admin/footer')