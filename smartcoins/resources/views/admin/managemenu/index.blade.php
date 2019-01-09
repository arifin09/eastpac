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
    @php
        use App\Http\Controllers\MenuController;
    @endphp
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('admin.managemenu.addmenu') }}" class="btn btn-sm btn-primary">Add New Menu</a>
                <br><br>
                <div class="box box-warning">
                    <div class="box-header with-border">
                    <h3 class="box-title">List Menu</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Menu</th>
                            <th>Link</th>
                            {{-- <th>Role</th>
                            <th>Permission</th> --}}
                            <th>Active</th>
                            <th style="width: 100px">Action</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach($menus as $menu)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                {{ $menu->text }}
                                @if(MenuController::loadMenu()->where('parent', $menu->id)->count() > 0)
                                    @foreach (MenuController::loadMenu()->where('parent', $menu->id)->get() as $submenu)
                                        <li>
                                            {{ $submenu->text }}
                                        </li>
                                    @endforeach
                                @endif
                            </td>
                            <td>{{ $menu->link }}</td>
                            {{-- <td>{{ $menu->role }}</td>
                            <td>{{ $menu->permission }}</td> --}}
                            <td>
                                @if($menu->active == 1)
                                    <a href="#" class="btn btn-success btn-sm">Enable</a>
                                @else
                                    <a href="#" class="btn btn-danger btn-sm">Disable</a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.managemenu.destroymenu', $menu->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <a href="{{ route('admin.managemenu.show', $menu->id) }}" class="btn btn-sm btn-primary" title="view detail"> <i class="fa fa-eye"></i> </a>
                                    <button class="btn btn-sm btn-danger" title="ban user"> <i class="fa fa-times"></i> </button>
                                </form>
                            </td>
                        </tr>
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
                    {{ $menus->links() }}
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
