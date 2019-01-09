@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('dist/css/contribution.css')}}">
@endsection

@section('content')
<!-- Main content -->
<section class="content" style="padding-left: 30px;padding-right: 30px;">
    <div class="card">
        <div class="row">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Referral</h3>
                </div>

                <div class="box-body">
                <div class="user-panel">
                    @php
                        use App\Referral;
                    @endphp

                    <h4>Invite your friends and family and recive free tokens</h4><br>
                    <p><strong>Each member recives a unique referral link to share with friends and family and recive a bonus - 5% of the value of their contribution.</strong></p>
                    <p>The referral link may be used during a token contribution, in the pre-sale and the ICO.</p>
                    <p>Imagine giving your unique referral link to your crypto-friend and he or she contributes tokens using your link, the bonus will be sent to your account automatically. The strategy is simple: the more links you send to your collagues, family and friends - the more tokens you may earn!</p><br>
                    <h6>My unique referral link</h6>
                    <div class="refferal-info">
                        <span class="refferal-copy-feedback copy-feedback"></span>
                        <i class="fa fa-link"></i>
                        <form method="post" action="{{route('home.referral.store')}}">
                        @csrf
                        <input type="text" class="refferal-address" id="ref-link" value="{{env('APP_URL')}}?ref={{base64_encode(Auth::user()->username.Auth::user()->email)}}" readonly>
                        <button class="refferal-copy copy-clipboard" data-clipboard-target="#ref-link"><i class="fa fa-copy" id="btn-cpy-link-ref"></i></button>
                        <div class="row" style="margin-top:2%;">
                            <div class="col-md-5">
                                <label for="ref-type">Refferal share type</label>
                                <select class="form-control" id="ref-type" name="ref_type">
                                    @foreach ($sosmed as $key => $item)
                                        @if(Referral::where('referral_type', $key)->where('user_id', Auth::user()->id)->count() == 0)
                                        <option value="{{$key}}">{{$item}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label for="ref-share-link" class="control-label">Refferal Share Link</label>
                                    <input type="text" class="form-control" id="ref-share-link" name="ref_share_link" placeholder="Refferal Share link">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div><!-- .refferal-info --> <!-- @updated on v1.0.1 -->
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Table Section-->
<section class="content" style="padding-left: 30px;padding-right: 30px;">
    <div class="card">
        <div class="row">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Referral List</h3>
                </div>

                <div class="box-body">
                    <table id="example" class="display table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Link Share</th>
                            <th>Referrer Type</th>
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
            </div>
        </div>
    </div>
</section>
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
