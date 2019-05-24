@extends('admin.layout.master')
	@section('header')
		<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('static/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
	<style type="text/css">
    .table_list {
      list-style: none;
      padding: 3px;
      margin-left: -30px;
    }
  </style>
  @endsection
	@section('body')
  <div class="row">

    <div class="col-md-12">
      <div class="box">
       <div class="box-header">
            <h3 class="box-title">Products</h3>
        </div>
            <!-- /.box-header -->
       <div class="box-body">
           <table id="example1" class="table table-bordered table-striped">
             <thead>
                <tr>
                  <th>No</th>
                  <th>Photo</th>
                  <th>Product</th>
                  <th>Stock</th>
                  <th>User</th>
                  <th>Action</th>
                </tr>
              </thead>
                
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach($product as $item) 
                <tr>
                  <td>{{ $no++ }}</td>
                  <td><img src="{{ url($item->photo) }}" width="50px"></td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->stock }}</td>
                  <td>{{ $item->user->name }}</td>
                  <td><a = href="{{url('admin/product/'.$item->id.'/edit') }}" class="btn btn-sm btn-primary">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
            <!-- /.box-body -->
      </div>
          <!-- /.box -->
    </div>
  </div>

		
	@endsection
	@section('footer')
	 <!-- DataTables -->
<script src="{{ asset('static/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('static/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
	@endsection
@show