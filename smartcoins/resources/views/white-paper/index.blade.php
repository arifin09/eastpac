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



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            	<br>
            	<a type="button" class="btn btn-info" href="{{ route('whitePaper.create') }}">Create</a>
            	<br>
            	<br>
                <div class="box box-warning">
                    <div class="box-header with-border">
                    <h3 class="box-title">File</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Version</th>
                            <th style="width: 190px">Action</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach($white_papers as $white_paper)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $white_paper->title }}</td>
                            <td>{{ $white_paper->description }}</td>
                            <td>{{ $white_paper->version }}</td>
                            <td>
                                <center>
                                    <a class="btn btn-sm btn-primary" href="{{$white_paper->getMedia('files')->last()->getFullUrl()}}" target="_blank"><i class="fa fa-download"></i></a>
                                    <a class="btn btn-sm btn-success" href="{{ route('whitePaper.edit',$white_paper->id) }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger" href="{{ route('WhitePaper.delete',$white_paper->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                    {{--
                                    <a class="btn btn-sm btn-warning" href=""><i class="fa fa-check"></i></a>
                                    --}}
                                    <input type="checkbox" class="form-controll" name="">
                                </center>
                            </td>
                        @endforeach
                    </table>
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
                    {{ $white_papers->links() }}
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

<script>
    $('.pagination').addClass('pagination-sm no-margin pull-right');
</script>

@endsection
