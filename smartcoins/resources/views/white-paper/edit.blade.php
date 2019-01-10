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
                    <h3 class="box-title">Edit File Information</h3>
                    </div>
                    <div class="box-body">
                        <form action="{{url('/administrator/white-paper/update')}}/{{$white_paper->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{ $white_paper->id }}">
                        	<div class="form-group">
                                <label for="" class="col-sm-3">Title</label>
                                <div class="col-sm-9">
                                    <input value="{{ $white_paper->title }}" type="text" name="title" class="form-control input-sm" placeholder="Title">
                                </div>
                            </div>
	                        <div class="form-group">
                                <label for="" class="col-sm-3">Description</label>
                                <div class="col-sm-9">
                                    <input value="{{ $white_paper->description }}" type="text" name="description" class="form-control input-sm col-sm-9" placeholder="Description">
                                </div>
                            </div>
	                        <div class="form-group">
	                            <label class="col-sm-3">Version</label>
	                            <div class="col-sm-9">
	                            	<select name="version" class="form-control" >
                                        
                                        <option value="1.1" {{ ($white_paper->version == '1.1') ? 'selected' : '' }} >1.1</option>
                                        <option value="1.2" {{ ($white_paper->version == '1.2') ? 'selected' : '' }} >1.2</option>
                                        <option value="1.3" {{ ($white_paper->version == '1.3') ? 'selected' : '' }} >1.3</option>
	                            	</select> 
	                            </div>
	                        </div>

                            <div class="form-group">
                                <label class="col-sm-3">File</label>
                                <div class="col-sm-9">
                                    <a href="{{$white_paper->getMedia('files')->last()->getFullUrl()}}" target="_blank">{{$white_paper->getMedia('files')->last()->getFullUrl()}}</a>
                                </div>
                            </div>
                            
    	              
	                        <!-- <div class="form-group">
	                            <label for="password_confirmation" class="col-sm-3">Upload File</label>
	                            <div class="col-sm-9" id="upload-input">
	                                <input id="upload-file" type="file" class="form-control" name="file" value="file">
	                               
	                            </div>
	                        </div> -->
	                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
