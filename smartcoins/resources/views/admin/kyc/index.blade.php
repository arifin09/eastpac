@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        {{ $title }}
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">admin</a></li>
        <li class="active">{{ $title }}</li>
        </ol>
    </section>


<link rel="stylesheet" href="{{asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            	<br>
            	<br>
            	<br>
                <div class="box box-warning">
                    <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="fa fa-table"></i> KYC Request</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table class="table table-bordered" id="tbl-kyc"></table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                    {{-- <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul> --}}
                    {{ $kycs->links() }}
                    </div>
                    
                </div>
                </div>
            </div>
        </div>


        <!-- /.box -->

    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->



@endsection

@section('script')
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
    $('.pagination').addClass('pagination-sm no-margin pull-right');

</script>
<script>
                        
                        $(function(){
                            $('#tbl-kyc').DataTable( {
                                "ajax": "{{route('kyc.getlist')}}",
                                "columns": [
                                    { "data": "id", render:function(data,type,row,meta){
                                        t = '<a href="/administrator/kyc/show/'+data+'" class="btn  btn-sm ';
                                        t += 'btn-primary" title="view detail"> ';
                                        t += '<i class="fa fa-eye"></i> </a>';
                                        return t;
                                    } },
                                    { "data": "document_file" },
                                    { "data": "first_name" },
                                    { "data": "last_name" },
                                    { "data": "mobilenumber" },
                                    { "data": "email" },
                                    { "data": "status", render:function(data){
                                        switch(data)
                                        {
                                            case 1 : return 'PENDING'; break;
                                            case 2 : return 'PROGRESS'; break;
                                            case 3 : return 'APPROVED'; break;
                                            case 4 : return 'REJECT'; break;
                                        }
                                    } } 

                                ]
                            } );
                        })
                    </script>

@endsection
