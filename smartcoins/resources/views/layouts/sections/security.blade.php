@extends('layouts.app')

@section('css')
<style>
    .status {
        padding: 40px 20px;
        border-radius: 4px;
        /*    text-align: center;*/
        border: 1px solid #dce6f5;
    }
    .status-empty .status-icon {
        background: #eff6ff;
        border-color: #c8d8f0;
    }
    
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }
    
    .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
    }
    
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }
    
    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }
    
    input:checked + .slider {
        background-color: #2196F3;
    }
    
    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }
    
    .slider.round:before {
        border-radius: 50%;
    }
    
</style> 
@endsection

@section('content')

<section class="content" style="padding-left: 30px;padding-right: 30px;">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h2 class="box-title">Security Settings</h2>
        </div>
        <!-- End box-header with-border -->
        <div class="box-body">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs ">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Security</a></li>
                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Activity Log</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1"><!--start tab content security-->
                            <h3>General Security Option</h3><br>
                            <div class="status status-empty">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="switch">
                                                <input type="checkbox"><span class="slider round"></span>                
                                            </label>
                                        </div>
                                        <!-- End form-group slinder round -->
                                    </div>
                                    <!-- End col-md-1 -->
                                    <div class="col-md-6" style="margin-left:-1%">
                                        Save my Activities Log
                                    </div>
                                    <!-- End col -->
                                </div>
                                <!-- End row -->
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="switch">
                                                <input type="checkbox"><span class="slider round"></span>                
                                            </label>
                                        </div>
                                        <!-- End form-group -->
                                    </div>
                                    <!-- End col -->
                                    <div class="col-md-6" style="margin-left:-1%">
                                        Confirm me through email before password change
                                    </div>
                                    <!-- End col -->
                                </div>
                                <!-- End row -->
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="switch">
                                                <input type="checkbox"><span class="slider round"></span>                
                                            </label>
                                        </div>
                                        <!-- end form -->
                                    </div>
                                    <!-- End col -->
                                    <div class="col-md-6" style="margin-left:-1%">
                                        Ask me password before token withdraw
                                    </div>
                                    <!-- End col -->
                                </div>
                                <!-- End row -->
                                
                            </div>
                            <!-- End status status-empty -->
                            <hr>
                            <div class="row">
                                <div class="col-md-12"><h3>Two-Factor Security Option</h3><br>
                                    <p>Two-factor authentication is a method for protection your web account. When it is activated you need to enter not only your password, but also a special code. You can receive this code by in mobile app. Even if third person will find your password, then can't access with that code.</p>
                                </div>
                            </div>
                            <!-- End row -->
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    Current Status: <button class="btn btn-default btn-sm">Disabled</button>
                                </div>
                            </div>
                            <!-- End row -->
                            <br> 
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="switch">
                                            <input type="checkbox" id="securityToogle"><span class="slider round"></span>                
                                        </label>
                                    </div>
                                </div>
                                <!-- End col -->
                                <div class="col-md-6" style="margin-left:-1%">
                                    Enable and use an authenticator App
                                </div>
                                <!-- End col -->
                            </div>
                            <!-- End row -->
                            <div id="securityDiv" style="display:none;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><b>1) Install an authentication app on your device. Any app that supports the Time-based One-Time Password (TOTP) protocol should work, including:</b></p>
                                        
                                        <p>- Google Authenticator (Android/iOS)</p>
                                        <p>- Authy (Android/iOS)</p>
                                        <p>- Microsoft Authenticator (Windows Phone)</p>
                                    </div>
                                    <!-- End col -->
                                    
                                </div>
                                <!-- End row -->
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><b>2) Use the authenticator app to scan the barcode below.</b></p>
                                        <img src="{{asset('dist/img/eth-qr.png')}}" width="10%" style="margin-left:1.5%">
                                    </div>
                                    <!-- End col -->
                                </div>
                                <!-- End row -->
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><b>3) Enter the code generated by the authenticator app.</b></p>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-md" id="code-generator" placeholder="">
                                            </div>
                                        </div>
                                        <!-- End col-md-12 -->
                                    </div>
                                    <!-- End col -->
                                </div>
                                <!-- end row -->
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-md btn-primary" style="margin-left:1.5%">VERIFY</button>
                                    </div>
                                    <!-- End col -->
                                </div>
                                <!-- End row -->
                                <br><br>
                                <div class="row">
                                    <div class="col-md-1" style="color:red">
                                        <i class="fa fa-info-circle" ></i>
                                    </div>
                                    <!-- End col-md-1 -->
                                    <div class="col-md-11" style="color:red; margin-left:-5%">
                                        <p>Important! In case of loss of access to the mobile application, you can regain it using mobile number that specified in your profile. If you don't save that, we will not able to help you to regain.</p>
                                    </div>
                                    <!-- End col-md-11 -->
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- End securityDiv -->
                        </div>
                        <!--end tab content security-->
                        <!--start tab content activity log-->
                        <div class="tab-pane" id="tab_2">
                            <div class="col-md-12"></div>
                            <h3>Activity</h3><br>
                            <p>Here is your recent activities. you can also clear this log as well as disable this feature from security settings.</p><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="table-activities" class="display table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>DATE</th>
                                                <th>DESCRIPTION</th>
                                                <th>DEVICE</th>
                                                <th>BROWSER</th>
                                                <th>IP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($activities as $activity)
                                            <tr>
                                                <td>{{$activity->created_at}}</td>
                                                <td>{{$activity->description}}</td>
                                                <td>{{$activity->getExtraProperty('device')}}</td>
                                                <td>{{$activity->getExtraProperty('browser')}}</td>
                                                <td>{{$activity->getExtraProperty('ip_addr')}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End col -->
                            </div>
                            <!-- End row -->
                        </div>
                        <!--end tab content activity log-->
                    </div>
                    <!-- end tab-content -->
                </div>
                <!-- End nav-tabs-custom -->
            </div>
            <!-- End col -->
        </div>
        <!-- End box-body -->
    </div>
    <!-- End box-warning -->
</section>  

@endsection

@section('script')
<script src="{{ asset('bower_componens/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('#table-activities').DataTable();
</script>
<script>
$(document).ready(function() {
    //     var responseObj = [
    //     { "date": "01-16-2019 09:04PM", "device": "Mac",  "browser":"Chrome", "ip":"198.51.100.0"},
    //     { "date": "01-02-2019 11:09PM", "device": "Windows",  "browser":"Firefox", "ip":"198.51.93.0"},

    // ];
    // $('#example').dataTable({
    //     "data": responseObj,
    //     "columns": [
    //         { "data": "date"},
    //         { "data": "device"},
    //         { "data": "browser"},
    //         { "data": "ip"}
    //     ]
    // });
});
    
$(function () {
        $("#securityToogle").click(function () {
            if ($(this).is(":checked")) {
                $("#securityDiv").show();
            } else {
                $("#securityDiv").hide();
            }
        });
    });

</script>
@endsection
