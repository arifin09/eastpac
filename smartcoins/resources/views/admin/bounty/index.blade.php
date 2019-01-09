@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('dist/css/contribution.css')}}">
@endsection

@section('content')
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
                            <th style="width:150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($referrals as $ref)
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
                                <td>
                                    <button class="btn btn-sm btn-primary">Approve</button>
                                    <button class="btn btn-sm btn-danger">Reject</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{ $referrals->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{asset('dist/js/clipboard/clipboard.min.js')}}"></script>
<script>
    $('.pagination').addClass('pagination-sm no-margin pull-right');
</script>
@endsection
