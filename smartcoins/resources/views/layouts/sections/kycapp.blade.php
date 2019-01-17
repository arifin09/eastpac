@extends('layouts.app')

@section('css')
<style>
.status {
    padding: 40px 20px;
    border-radius: 4px;
    text-align: center;
    border: 1px solid #dce6f5;
}
.status-empty .status-icon {
    background: #eff6ff;
    border-color: #c8d8f0;
}

.status-icon {
    position: relative;
    height: 100px;
    width: 100px;
    background: #fff;
    border-radius: 50%;
    text-align: center;
    margin: 0 auto 10px;
    /*    border: 2px solid #c8d8f0;*/
}

.imgicon{
    margin-top: 20%;
}

.btn-primary {
    background: #2b56f5;
    border-color: #2b56f5;
    box-shadow: 0px 2px 18px 2px rgba(43, 86, 245, 0.25);
}
</style>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-sm-12" style="margin-top: 10px">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h2 class="box-title">Identity Verification - KYC</h2>
                    <div class="box-body">
                        <p>To comply with regulation each participant will have to go through indentity verification (KYC). So please complete our fast and secure verification process to participate in our token sale. You can proceed from here to verify your identity and also you can check your application status if you submit already.</p>
                        @if($kycStatus == 0)                        
                        <div class="status status-empty">
                            <div class="status-icon">
                                <img class="imgicon" src="{{ asset ('dist/img/create.png')}}">
                            </div>
                            <h4 class="status-text" >You have not submitted your KYC Application</h4>
                            <a href="{{ route('home.kycapp.form') }}" class="btn btn-primary">Click to Proceed</a>
                        </div>    
                        @elseif($kycStatus == 3)
                        <div class="status status-empty">
                            <div class="status-icon">
                                <img class="imgicon" src="{{ asset ('dist/img/okay.png')}}">
                            </div>
                            <h4 style="color:green" class="status-text" >Your Identity Verified.</h4>
                            <p>One fo our team verified your indentity. 
                            You are now in whitelisted for token sale.</p>
                        </div>
                        @elseif($kycStatus == 1)
                        <div class="status status-empty">
                            <div class="status-icon">
                                <img class="imgicon" src="{{ asset ('dist/img/checking.png')}}">
                            </div>
                            <h4 style="color:#f39c12" class="status-text" >Your Application under Process for Verification.</h4>
                            <p>We are still working on your identity verification. Once our team verified your indentity, you will be whitelisted and notified by email.</p>

                        </div>
                        @elseif($kycStatus == 4)
                        {{-- <div class="status status-empty">
                            <div class="status-icon">
                                <img class="imgicon" src="{{ asset ('dist/img/pending.png')}}">
                            </div>
                            <h4 style="color:#f39c12" class="status-text" >We found some information missing in application.</h4>
                            <p>In our verification process, we found information are missing. It would great if you resubmit the form. If face problem in submission please contact us with support team.</p>
                            <a href="kycapp-form.php" class="btn btn-primary">Submit Again</a>
                        </div> --}}
                        <div class="status status-empty">
                            <div class="status-icon">
                                <img class="imgicon" src="{{ asset ('dist/img/reject.png')}}">
                            </div>
                            <h4 style="color:red" class="status-text" >Your application rejected by admin.</h4>
                            <p>In our verification process, we found information incurrect. It would great if you resubmit the form. If face problem in submission please contact us with support team.</p>
                            <a href="kycapp-form.php" class="btn btn-primary">Resubmit</a>
                        </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>

</section>
@endsection

@section('script')

@endsection
