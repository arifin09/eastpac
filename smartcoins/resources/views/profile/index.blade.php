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
            <div class="col-sm-3">
                <img src="{{asset('dist/img/bio-bg.png')}}" class="user-bg">
                
                @if(Auth::user()->getMedia('avatars')->last() != false)
                    <img src="{{ Auth::user()->getMedia('avatars')->last()->getFullUrl() }}" class="user-icon">
                @else
                    <img src="{{ asset('dist/img/user.png') }}" class="user-icon">
                @endif
                                
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                @if ($errors->has('avatar'))
                    <span class="help-block">
                        <strong>{{ $errors->first('avatar') }}</strong>
                    </span>
                @endif
                <div id="msg" class="alert text-center" style="display:none">
                    <strong></strong>
                </div>
                <div class="box box-warning">
                    <div class="box-header">
                    <h3 class="box-title">Account Information</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                        <label for="fullname" class="col-sm-3 ">Full Name</label>
                        <div class="col-sm-9">
                            <a id="full-name" onclick="showInputFullname();">{{ Auth::user()->name }}</a>
                            <div class="input-group input-group-sm" id="full-name-input" style="display:none">
                                <input type="text" class="form-control" placeholder="Full Name" value="{{ Auth::user()->name }}">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-success btn-flat" id="btnok-submit-fullname"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-danger btn-flat" id="btncancel-submit-fullname"><i class="fa fa-times"></i></button>
                                </span>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="username" class="col-sm-3">Username</label>
                        <div class="col-sm-9">
                            <p>{{ Auth::user()->username }}</p>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="phone" class="col-sm-3">Mobile Phone</label>
                        <div class="col-sm-9">
                            <p>{{ Auth::user()->mobilenumber }}</p>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3">Email</label>
                            <div class="col-sm-9">
                            <p>{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3">Change Password</label>
                            <div class="col-sm-9">
                                <a id="password" onclick="showInputPassword()">Click Here !</a>
                            </div>
                        </div>
                        <div class="form-group password-input"  style="display:none" >
                            <label for="password_old" class="col-sm-3">Old Password</label>
                            <div class="col-sm-8 input-group input-group-sm">
                                <input type="text" class="form-control" id="password_old" placeholder="">
                            </div>
                        </div>
                        <div class="form-group password-input"  style="display:none">
                            <label for="password_now" class="col-sm-3">New Password</label>
                            <div class="col-sm-8 input-group input-group-sm">
                                <input type="text" class="form-control" id="password_now" placeholder="">
                            </div>
                        </div>
                        <div class="form-group password-input"  style="display:none">
                            <label for="password_confirmation" class="col-sm-3">Confirm New Password</label>
                            <div class="col-sm-8 input-group input-group-sm">
                                <input type="password" id="password_confirmation" class="form-control" placeholder="Confirm Password">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-success btn-flat" id="btnok-submit-password"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-danger btn-flat" id="btncancel-submit-password"><i class="fa fa-times"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="col-sm-3">Change avatar</label>
                            <div class="col-sm-9">
                                <a id="upload" onclick="showUpload()">Click Here !</a>
                            </div>
                            <div class="col-sm-8 input-group input-group-sm" id="upload-input" style="display:none">
                                <form action="{{ route('profileUpload') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input id="upload-file" type="file" class="form-control" name="avatar">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success btn-flat" id="btnok-submit-upload"><i class="fa fa-check"></i></button>
                                    <button type="button" class="btn btn-danger btn-flat" id="btncancel-submit-upload"><i class="fa fa-times"></i></button>
                                </span>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

<script>
    $(document).ready(function(){

        // btn full name
        $('#btnok-submit-fullname').click(function() {
            $.ajax({
                url: '/setting/profile/full-name-save-edit',
                type: 'post',
                data: {
                    _token: '{{csrf_token()}}',
                    fullname: $('#full-name-input input').val()
                },
                error: function(datas, status, c) {
                    $('#msg').addClass('alert-'+datas.responseJSON.type);
                    $('#msg').removeClass('alert-success');
                    $('#msg strong').text(datas.responseJSON.msg);
                    $('#msg').show();
                },
                success: function(datas, status,c) {
                    $('#msg').removeClass('alert-danger');
                    $('#msg').addClass('alert-success');
                    $('#msg strong').text(datas.msg);
                    $('#msg').show();
                    $('#full-name').text($('#full-name-input input').val());
                    $('#full-name-input').hide();
                    $('#full-name').show();

                }
            })
        });

        $('#btnok-submit-password').click(function() {
            $.ajax({
                url: '/setting/profile/change-password-save',
                type: 'post',
                data: {
                    _token: '{{csrf_token()}}',
                    password: $('#password_now').val(),
                    password_confirmation: $('#password_confirmation').val(),
                    password_old: $('#password_old').val(),
                },
                error: function(datas, status, c) {
                    $('#msg').addClass('alert-'+datas.responseJSON.type);
                    $('#msg').removeClass('alert-success');
                    $('#msg strong').text(datas.responseJSON.msg);
                    $('#msg').show();
                },
                success: function(datas, status,c) {
                    $('#msg').removeClass('alert-danger');
                    $('#msg').addClass('alert-success');
                    $('#msg strong').text(datas.msg);
                    $('#msg').show();

                }
            })
        });

        // $('#btnok-submit-upload').click(function() {
        //     $.ajax({
        //         url: '/setting/profile/upload',
        //         contentType: "multipart/form-data",
        //         type: 'post',
        //         data: {
        //             _token: '{{csrf_token()}}',
        //             avatar: $('#upload-file').val()
        //         },
        //         error: function(datas, status, c) {
        //             $('#msg').addClass('alert-'+datas.responseJSON.type);
        //             $('#msg').removeClass('alert-success');
        //             $('#msg strong').text(datas.responseJSON.msg);
        //             $('#msg').show();
        //         },
        //         success: function(datas, status,c) {
        //             $('#msg').removeClass('alert-danger');
        //             $('#msg').addClass('alert-success');
        //             $('#msg strong').text(datas.msg);
        //             $('#msg').show();
        //             $('#upload-input').hide();
        //             $('#upload').show();
        //         }
        //     })
        // });

        $('#btncancel-submit-fullname').click(function(){
            $('#full-name-input').hide();
            $('#full-name').show();
        });

        $('#btncancel-submit-password').click(function(){
            $('.password-input').hide();
            $('#password').show();
        });

        $('#btncancel-submit-upload').click(function(){
            $('#upload-input').hide();
            $('#upload').show();
        });
    });

    function showInputFullname() {
        $('#full-name').hide();
        $('#full-name-input').show();
        $('#full-name-input input').focus();
    }

    function showInputPassword() {
        $('#password').hide();
        $('.password-input').show();
        $('#password-input input').focus();
    }

    function showUpload() {
        $('#upload').hide();
        $('#upload-input').show();
    }


</script>
@endsection
