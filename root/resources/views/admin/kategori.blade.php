@include('admin/header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori
        <small>Control Panel</small>

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dokumen</li>
        <li class="active">Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kategori</h3>
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
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Update</th>
                </tr>
                </thead>
                <tbody id="kategori_list">
                @foreach ($result as $index => $datas)
                <tr id="{{$datas->idKategori}}">
                  <td>{{$datas->idKategori}}</td>
                  <td>{{$datas->namaKategori}}</td>
                  <td>
                    <button type="button" class="btn btn-social-icon btn-primary btn-xs open_modal" data-toggle="modal" data-target="#modal-default" value="{{$datas->idKategori}}"><i class="fa fa-pencil"></i></button>
                  </td>
                </tr>
                @endforeach
                </tbody>
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

 <!-- Form Modal -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Masukkan Data Kategori</h4>
              </div>
              <div class="modal-body">
                <!-- form start -->
                
            {!! Form::open(array('class' =>  'form-horizontal', 'id' => 'formInput', 'role' => 'form' )) !!}
              <div class="box-body">
                <div class="form-group">
                  {!! Form::label ('inputNamaKategori','Nama', array('class'=>'col-sm-2 control-label')) !!}

                  <div class="col-sm-10">
                    {!! Form::text('namaKategori','' , array('class' => 'form-control', 'placeholder' =>'Nama Kategori','id' => 'namaKategori')) !!}
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              
            {!! Form::close() !!}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                {!! Form::submit('Simpan', array('class'=>'add-modal btn btn-success', 'id'=>'btn-save', 'data-dismiss' => 'modal', 'value' => '')) !!}
                <!-- <input id="butSave"type="submit" onclick="add_data()"value="Simpan" class="btn btn-success"> -->
                <input type="hidden" id="idKategori" name="idKategori" value="">
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

<script type="text/javascript">
var url = "{{URL::to('')}}";
  //Edit
  $(document).on('click','.open_modal',function(){
        var idKategori = $(this).val();
       
        $.get(url + '/' + idKategori, function (data) {
            //success data
            console.log(data);
            $('#idKategori').val(data.idKategori);
            $('#namaKategori').val(data.namaKategori);
            $('#btn-save').val("update");
            $('#modal-default').modal('show');
        }) 
    });
    // Add
  $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#formInput').trigger("reset");
        $('#modal-default').modal('show');
  });
  //create new product / update existing product
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
            namaKategori: $('#namaKategori').val(),
            
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var idKategori = $('#idKategori').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/admin/kategori' + idKategori;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var kategori = '<tr id="' + data.idKategori + '"><td>' + data.idKategori + '</td><td>' + data.namaKategori + '</td>';
                kategori += '<td><button data-toggle="modal" data-target="#modal-default" class="btn btn-warning btn-detail open_modal" value="' + data.idKategori + '">Edit</button>/td></tr>';
                if (state == "add"){ //if user added a new record
                    $('#kategori_list').append(kategori);
                }else{ //if user updated an existing record
                    $("#kategori" + idKategori).replaceWith( kategori );
                }
                $('#formInput').trigger("reset");
                $('#modal-default').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
</script>
  @include('admin/footer')