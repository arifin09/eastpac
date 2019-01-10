@extends('layouts.app')

@section('css')

<style>
.user-bg .user-icon{
    position: absolute;
}

.user-bg{
    width: 75%;
    position: absolute;
    z-index: 0;
    margin-left: 15%;
}
.user-icon{
  position: absolute;
	width: 80%;
	margin-top: 20%;
	left: 45%;
	z-index: 10;
}
</style>

@endsection

@section('content')

<section class="content container-fluid" style="margin-top: 20px; margin-left:20px; margin-right:20px;">

    <div class="form-horizontal" id="frm_transfer_eth">
        <div class="row">
            
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                @if ($errors->has('images'))
                    <span class="help-block">
                        <strong>{{ $errors->first('images') }}</strong>
                    </span>
                @endif
                <div id="msg" class="alert text-center" style="display:none">
                    <strong></strong>
                </div>
                <div class="box box-warning">
                    <div class="box-header">
                    <h3 class="box-title">Edit</h3>
                    </div>
                    <div class="box-body">
                        <form action="{{url('/administrator/images/update')}}/{{$images->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                        	<input type="hidden" name="id" value="{{ $images->id }}">
                            <div class="form-group">
                                <label for="" class="col-sm-3">Title</label>
                                <div class="col-sm-9">
                                    <input value="{{ $images->title }}" type="text" name="title" class="form-control input-sm" placeholder="Title">
                                </div>
                            </div>
    	                   
	                        <div class="form-group">
                                <label for="" class="col-sm-3">Description</label>
                                <div class="col-sm-9">
                                    <input value="{{ $images->description }}" type="text" name="description" class="form-control input-sm col-sm-9" placeholder="Description">
                                </div>
                            </div>
    	              
	                        <div class="form-group">
	                            <label for="upload_images" class="col-sm-3">Upload Images</label>
	                            <div class="col-sm-9" id="upload-input">
	                                <input id="upload-image" type="file" class="form-control" name="image" value="{{ $images->image }}">

	                                	
	                            </div>
	                        </div>
	                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
