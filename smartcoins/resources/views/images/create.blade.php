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
                    <h3 class="box-title">Upload Image</h3>
                    </div>
                    <div class="box-body">
                        <form action="{{ route ('images.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                        	<div class="form-group">
		                        <label for="title" class="col-sm-3">Title</label>
		                        <div class="col-sm-9">
		                            <input type="text" name="title" class="form-control">
		                        </div>
    	                    </div>
	                        <div class="form-group">
		                        <label for="description" class="col-sm-3">Description</label>
		                        <div class="col-sm-9">
		                        	<textarea name="description" name="description" class="form-control"></textarea>
								</div>
    	                    </div>
    	              
	                        <div class="form-group">
	                            <label for="upload_images" class="col-sm-3">Upload Images</label>
	                            <div class="col-sm-9" id="upload-input">
	                                <input id="upload-image" type="file" class="form-control" name="image">
	                                	
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
