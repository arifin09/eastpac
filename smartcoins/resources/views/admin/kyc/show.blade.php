@extends('layouts.app')
@section('content')
<div class="container">
    <div class="content">
    <div class="row">
        <div class="col-md-4">
            @if ($kyc->getMedia('document_files')->count()>0)
            <div class="box box-primary">
            <div class="box-body box-profile">
              
              <img class="img img-responsive img-circle" src="{{ $kyc->getMedia('document_files')->last()->getFullUrl() }}" alt="User profile picture">
              
              
            </div>
            @else 
            <div></div>
            @endif
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-8">
            <div class="box box-primary">
            <div class="box-body box-profile">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>User Name</b> <a class="pull-right">{{ $kyc->user->username }}</a>
                </li>
                <li class="list-group-item">
                  <b>First Name</b> <a class="pull-right">{{ $kyc->first_name }}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{ $kyc->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Mobile Number</b> <a class="pull-right">{{ $kyc->mobilenumber }}</a>
                </li>
                <li class="list-group-item">
                  <b>DOB</b> <a class="pull-right">{{ $kyc->date_of_birth }}</a>
                </li>
                <li class="list-group-item">
                  <b>Address #1</b> <a class="pull-right">{{ $kyc->address_1 }}</a>
                </li>
                <li class="list-group-item">
                  <b>Address #2</b> <a class="pull-right">{{ $kyc->address_2 }}</a>
                </li>
                <li class="list-group-item">
                  <b>City </b> <a class="pull-right">{{ $kyc->city }}</a>
                </li>
                <li class="list-group-item">
                  <b>State</b> <a class="pull-right">{{ $kyc->state }}</a>
                </li>
                <li class="list-group-item">
                  <b>Zip Code</b> <a class="pull-right">{{ $kyc->zip_code }}</a>
                </li>
                <li class="list-group-item">
                  <b>Nationality</b> <a class="pull-right">{{ $kyc->nationality }}</a>
                </li>
                <li class="list-group-item">
                  <b>Wallet Address</b> <a class="pull-right">{{ $kyc->wallet_address }}</a>
                </li>
                <li class="list-group-item">
                  <b>Document File</b> <a class="pull-right">{{ $kyc->document_file }}</a>
                </li>
                <li class="list-group-item">

                  <img src="{{ $kyc->getMedia('document_files')->first()->getFullUrl() }}">
                </li>
              </ul>
<a href="#" data-el={{route('kyc.update_status') . "?id=".$kyc->id."&st=3"}} class="btn btn-primary btn-block btn-status"><b>Approve</b></a>
<a href="#" data-el={{route('kyc.update_status') . "?id=".$kyc->id."&st=4"}} class="btn btn-primary btn-block  btn-status"><b>Reject</b></a>
              
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('script')
<script>

                        
                        $(function(){
                            $('.btn-status').click(function(el){
                                 loc = ($($(el)[0].currentTarget).attr('data-el'));
                                 $.ajax({
                                    url:loc,
                                    success:function() {
                                       document.location = '/administrator/kyc'
                                    }
                                 })
                                
                            })
                        })
                    </script>

@endsection
