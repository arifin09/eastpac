@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset ('dist/css/kyc-thank-you.css') }}">
@endsection
@section('content')
    
        <div class="page-header page-header-kyc">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7 text-center">
                        <h2 class="page-title">Begin your ID-Verification</h2>
                        <p class="right">Verify your identity to participate in tokensale.</p>
                    </div>
                    <!-- end col-lg-8 col-xl-7 text-center -->
                </div>
                <!-- end row justify-content-center -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page-header page-header-kyc -->

        <!-- start page-content -->
        <div class="page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">
                        <div class="kyc-status card mx-lg-4">
                            <div class="card-innr">
                                <div class="status status-thank px-md-5">
                                    <div class="status-icon">
                                        <i class="fa fa-check-square-o"></i>
                                    </div>
                                    <!-- end status-icon -->

                                    <span class="status-text large text-dark">You have completed the process of KYC</span>
                                    <p class="px-md-5"><br>We are still waiting for your identity verification. Once our team verified your indentity, you will be notified by email. You can also check your KYC  compliance status from your profile page.</p>
                                    <a href="{{route('home.kycapp')}}" class="btn btn-warning">Back to Profile</a>
                                </div>
                                <!-- end status status-thank px-md-5 -->
                            </div>
                            <!-- end card-innr -->
                        </div>
                        <!-- end kyc-status carf mx-lg-4 -->

                        <p class="text-light text-center mgmt-1x">"If you have any question, please contact our support team<a href="#"> info@east.com</a>."
                        </p>
                    </div>
                    <!-- end col-lg-10 col-xl-9 -->
                </div>
                <!-- end row justify-content-center -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page-content -->


@endsection





