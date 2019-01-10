@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('dist/css/contribution.css')}}">
@endsection

@section('content')
@php
    use App\Referral;
@endphp
<!-- Main content -->
<section class="content" style="padding-left: 30px;padding-right: 30px;">
    <!-- start card -->
    <div class="card">
        <div class="row">
            <div class="col-md-6">
                <!-- Start box box-warning -->
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Referral</h3>
                    </div>
                    <!-- Start box-body -->
                    <div class="box-body">
                        <h4>Invite your friends and family and recive free tokens</h4><br>
                        <p>The referral link may be used during a token contribution, in the pre-sale and the ICO.</p>
                        <p align="justify">Imagine giving your unique referral link to your crypto-friend and he or she contributes tokens using your link, the bonus will be sent to your account automatically. The strategy is simple: the more links you send to your collagues, family and friends - the more tokens you may earn!</p>
                        <hr>
                        <h6>My unique referral link</h6>
                        <!-- Start refferal-info -->
                        <form method="post" action="{{route('home.referral.store')}}">
                        @csrf
                        <div class="refferal-info">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" style="border:1px solid #f39c12" value="{{env('APP_URL')}}?ref={{base64_encode(Auth::user()->username.Auth::user()->email)}}" readonly>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-copy"></i></button>
                                </span>
                            </div>
                        </div><!-- .refferal-info --> 
                        
                        <h6>Share with</h6>
                        <!-- Start referal-info -->
                        <div class="refferal-info">
                            <div class="input-group input-group-sm col-md-12">
                                <select class="form-control" style="border:1px solid #f39c12;  max-width: 100%;" name="ref_type">
                                    @foreach ($sosmed as $key => $item)
                                        @if(Referral::where('referral_type', $key)->where('user_id', Auth::user()->id)->count() == 0)
                                        <option value="{{$key}}">{{$item}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- End .share with --> 
                        
                        <h6>Share link</h6>
                        <div class="refferal-info">
                            <div class="input-group input-group-sm col-md-12">
                                <input type="text" class="form-control" style="border:1px solid #f39c12" name="ref_share_link">
                            </div>
                        </div><!-- .share link --> 
                        <br>
                        <button class="btn btn-sm btn-warning">Submit</button>
                        </form>
                    </div>
                    <!-- End box-body -->
                </div>
                <!-- End box box-warning -->
            </div>
            <!-- End Col -->
            
            <div class="col-md-6">
                <!--Table Section-->
                <!-- Start box box-warning -->
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Referral List</h3>
                    </div> 
                    <!-- End box box-warning header -->
                    <!-- Start box-body -->
                    <div class="box-body">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Link</th>
                                    <th>Channel</th>
                                    <th>Status</th>                                                                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Referral::where('user_id', Auth::user()->id)->get() as $ref)
                                    <tr>
                                        <td>
                                            <a href="{{$ref->referral_link}}">{{$ref->referral_link}}</a>
                                        </td>
                                        <td>
                                            @if($ref->referral_type == 1)
                                                Facebook
                                            @elseif($ref->referral_type == 2)
                                                Twitter
                                            @endif
                                        </td>
                                        <td>{{$ref->status}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End box-body -->
                </div>
                <!-- End box box-warning -->
            </div>
            <!-- End col -->
        </div>
        <!-- End row card -->
    </div>
    <!-- End card -->
</section>
<!-- End section -->
@endsection

@section('script')
<script src="{{asset('dist/js/clipboard/clipboard.min.js')}}"></script>
<script>
    
    
    $(document).ready(function() {
        new ClipboardJS('.refferal-copy');
        var responseObj = [
        { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
        { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
        { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
        { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
        { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
        { "referee": "Cynthia Foster", "btoken": "800",  "bonus":"8", "date":"25-12-2018", "channel":"Facebook"},
        
        
        ];
        $('#example').dataTable({
            "data": responseObj,
            "columns": [
            
            { "data": "referee"},
            { "data": "btoken"},
            { "data": "bonus"},
            { "data": "date"},
            { "data": "channel"},
            ]
        });
        
        
        
        
    });
    
</script>
@endsection
