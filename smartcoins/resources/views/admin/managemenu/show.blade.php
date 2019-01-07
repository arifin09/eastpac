@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="{{ route('admin.managemenu') }}" class="btn btn-sm btn-default" style="font-weight:bold"><i class="fa fa-angle-left"></i> Back</a>
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
                    <h3 class="box-title">Detail - {{ $menu->text }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(session('msg'))
                        <div id="msg" class="alert text-center">
                            <strong>{{session('msg')}}</strong>
                        </div>
                        @endif
                        <form action="{{ route('admin.managemenu.update', $menu->id) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="text-input">Text</label>
                                <input type="text" name="text" class="form-control" id="text-input" value="{{$menu->text}}" placeholder="Text">
                            </div>
                            <div class="form-group">
                                <label for="link-input">Link</label>
                                <input type="text" name="link" class="form-control" id="link-input" value="{{$menu->link}}" placeholder="Link">
                            </div>
                            <div class="form-group">
                                <label for="active-input">Enable</label>
                                <select name="active_menu" class="form-control">
                                    <option value="1" {{ ($menu->active == 1) ? 'selected' : '' }}>Enable</option>
                                    <option value="0" {{ ($menu->active == 0) ? 'selected' : '' }}>Disable</option>
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
                <div class="col-md-6">
                    @if(session('msg'))
                    <div id="msg" class="alert text-center" style="display:none">
                        <strong>{{session('msg')}}</strong>
                    </div>
                    @endif
                    <div id="msg" class="alert text-center" style="display:none">
                        <strong></strong>
                    </div>
                    <div class="box box-warning">
                        <div class="box-header with-border">
                        <h3 class="box-title">Submenu</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Menu</th>
                                    <th>Active</th>
                                    <th style="width: 100px">Action</th>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @forelse (MenuController::loadMenu()->where('parent', $menu->id)->get() as $submenu)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $submenu->text }}</td>
                                        <td>
                                            @if($submenu->active == 1)
                                                Active
                                            @else
                                                Disable
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.managemenu.destroysubmenu', [$menu->id, $submenu->id])}}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button type="submit" class="btn btn-sm btn-danger" title="delete"> <i class="fa fa-times"></i> </button>
                                                <a href="{{ route('admin.managemenu.show', $submenu->id) }}" class="btn btn-sm btn-primary" title="edit"> <i class="fa fa-pencil"></i> </a>
                                            </form>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <a href="{{ route('admin.managemenu.addsubmenu', $menu->id) }}" class="btn btn-sm btn-primary">Add Sub Menu</a>
                                    </td>
                                </tr>
                            </table>
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
