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
                @if ($errors->has('file'))
                    <span class="help-block">
                        <strong>{{ $errors->first('file') }}</strong>
                    </span>
                @endif
                <div id="msg" class="alert text-center" style="display:none">
                    <strong></strong>
                </div>
                <div class="box box-warning">
                    <div class="box-header">
                    <h3 class="box-title">Input File Information</h3>
                    </div>
                    <div class="box-body">
                        <form action="{{ route ('whitePaper.store')}}" method="post" enctype="multipart/form-data">
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
	                            <label class="col-sm-3">Version</label>
	                            <div class="col-sm-9">
	                            	<select name="version" class="form-control">
	                            		<option value="1.1">1.1</option>
	                            		<option value="1.2">1.2</option>
	                            		<option value="1.3">1.3</option>
	                            	</select>
	                            </div>
	                        </div>
    	              
	                        <div class="form-group">
	                            <label for="password_confirmation" class="col-sm-3">Upload File</label>
	                            <div class="col-sm-9" id="upload-input">
	                                <input id="upload-file" type="file" class="form-control" name="file">
	                                	
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
