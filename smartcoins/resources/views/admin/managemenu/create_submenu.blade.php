@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="{{ route('admin.managemenu.show', $menu->id) }}" class="btn btn-sm btn-default" style="font-weight:bold"><i class="fa fa-angle-left"></i> Back</a>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">admin</a></li>
        <li class="active">{{ $title }}</li>
        </ol>
    </section>
    @php
        use App\Http\Controllers\MenuController;
    @endphp
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-warning">
                    <div class="box-header with-border">
                    <h3 class="box-title">Add sub menu to - {{ $menu->text }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(session('msg'))
                        <div id="msg" class="alert text-center">
                            <strong>{{session('msg')}}</strong>
                        </div>
                        @endif
                        <form action="{{ route('admin.managemenu.storesubmenu', $menu->id) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="text-input">Parent</label>
                                <input type="text" name="text" class="form-control" id="text-input" value="{{$menu->text}}" placeholder="Text" disabled>
                            </div>
                            <div class="form-group">
                                <label for="text-input">Text</label>
                                <input type="text" name="text" class="form-control" id="text-input" value="" placeholder="Text">
                            </div>
                            <div class="form-group">
                                <label for="link-input">Link</label>
                                <input type="text" name="link" class="form-control" id="link-input" value="" placeholder="Link">
                            </div>
                            <div class="form-group">
                                <label for="active-input">Enable</label>
                                <select name="active_menu" class="form-control">
                                    <option value="1">Enable</option>
                                    <option value="0">Disable</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
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
