@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>Responsive Image Gallery</h2>

<a type="button" class="btn btn-info" href="{{ route('images.create') }}">Upload image</a>
<br>
<br>

@foreach($images as $image)
<div class="responsive">
  <div class="gallery">
    <a class="btn btn-sm btn-success" href="{{ route('images.edit',$image->id) }}"><i class="fa fa-edit"></i></a>
    <a class="btn btn-sm btn-danger" href="{{ route('images.destroy',$image->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>

    <a target="_blank" href="{{ $image->getMedia('images')->last()->getFullUrl() }}">
      <img src="{{ $image->getMedia('images')->last()->getFullUrl() }}" alt="Cinque Terre" style="height:200px;" width="600" height="200">
    </a>
    <br>
    <div class="desc">{{ $image->title }}</div>
    <div class="desc">{{ $image->description }}</div>   
  </div>
</div>
@endforeach

<div class="clearfix"></div>

{{$images->links()}}

</body>
</html>



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
