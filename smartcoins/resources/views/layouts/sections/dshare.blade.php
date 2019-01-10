@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('dist/css/contribution.css')}}">
<style>
    #clockdiv{
        font-family: sans-serif;
        color: #fff;
        display: contents;
        font-weight: 100;
        text-align: center;
        font-size: 20px;
        
    }
    
    #clockdiv td > div{
        padding: 3px;
        border-radius: 5px;
        /*  background: #701296;*/
        display:table-cell;
        margin-left: 0px;
    }
    #clockdiv table{
        margin: auto;
    }
    #clockdiv table td{
        padding: 0px;
    }
    #clockdiv td div > span{
        padding: 5px 3px;
        border-radius: 5px;
        background: #b060d0;
    }
    .smalltext{
        padding-top: 5px;
        font-size: 10px;
    }
    .token-countdown{
        background: #f39c12;
        padding: 0px;
    }
    .token-countdown-title{
        color: #fff;
        margin-bottom: 10px;
    }
    
    @media only screen and (max-width: 991px) {
        .div-btn-process{
            margin-top:20px;
        }
        .div-btn-process .pull-right{
            float:none !important;
        }
    }
    
</style>
@endsection

@section('content')
<section class="content" style="min-height: 25px;">  
    <!-- Start box box-warning -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">D - Share</h3>
        </div>
        <!-- Start User-panel -->
        <div class="user-panel">
            <div class="row">
                <div class="col-md-9" border="1">
                    <div class="box box-solid box-warning">
                        <!-- Start Box-Body -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="tile-item tile-primary">
                                        <div class="tile-bubbles"></div>
                                        <h6 class="tile-title">YOUR D-SHARE</h6>
                                        <h4 class="tile-info">1250</h4>
                                    </div>
                                </div><!-- .col -->
                                
                                <div class="col-md-4">
                                    <div class="tile-item tile-primary">
                                        <div class="tile-bubbles"></div>
                                        <h6 class="tile-title">YOUR EAST BALANCE</h6>
                                        <h4 class="tile-info">120,000 EAST</h4>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-4">
                                    <div class="tile-item tile-primary">
                                        <div class="tile-bubbles"></div>
                                        <h6 class="tile-title">YOUR CONTRIBUTION</h6>
                                        <h4 class="tile-info">1246 ETH</h4>
                                    </div>
                                </div><!-- .col -->
                            </div><hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" style="border:1px solid #f39c12">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-warning btn-flat">EAST</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-1" style=" text-align: center; margin-top:10px"><i class="fa fa-exchange"></i></div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" style="border:1px solid #f39c12">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-warning btn-flat">D-SHARE</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2 div-btn-process"><button class="btn btn-lg btn-warning pull-right" onclick="processExchange()">Process</button></div>
                            </div><hr>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Transaction</h4>
                                    <!-- Start Data Table -->
                                    <div class="table-responsive">
                                        <table id="example" class="display dt-responsive" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>TxHash</th>
                                                    <th>Block</th>
                                                    <th>Age</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                    <th>Value</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>   
                            </div>
                            <!-- End Box-body -->
                        </div>
                        <!-- End box box-solid box-warning  -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
                
                <!--company news-->
                <div class="col-md-3" border="1px">
                    <div class="box box-solid box-warning">
                        <div class="box-header with-border">
                            <div class="box-title"><h3>D-Share Current Price</h3></div>
                        </div>
                        
                        <!-- Start Box-body -->
                        <div class="box-body">
                            <!--
                                <h6>D-SHARE PRICE</h6>
                                <h4>1 D-SHARE = 10 EAST</h4>
                                <hr>
                            -->
                            <h6>EXCHANGE RATE</h6>
                            <h4>1 ETH = 10 EAST = 1 D-SHARE</h4>
                            <hr>
                            <!-- countdown-->
                            
                            
                        </div>
                        <!-- End Box-body -->
                    </div>
                    <!-- End Box Box-solid box-warning -->
                    
                    <!-- Start token-countdown -->
                    <div class="token-countdown" style="padding-bottom: 10px; margin-top: 10px;">
                        <span class="token-countdown-title">SALE END IN</span>
                        <!-- Start clockdiv -->
                        <div id="clockdiv">
                            <!-- Start Table -->
                            <table>
                                <tr>
                                    <td>
                                        <!-- Days -->
                                        <div>
                                            <span class="days"></span>
                                            <div class="smalltext">Days</div>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <!-- Hours -->
                                        <div>
                                            <span class="hours"></span>
                                            <div class="smalltext">Hours</div>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <!-- Minutes -->
                                        <div>
                                            <span class="minutes"></span>
                                            <div class="smalltext">Minutes</div>
                                        </div>    
                                    </td>
                                    
                                    <td>
                                        <!-- Seconds -->
                                        <div>
                                            <span class="seconds"></span>
                                            <div class="smalltext">Seconds</div>
                                        </div>
                                    </td>
                                    
                                </tr>
                            </table>
                            <!-- End Table -->
                        </div>
                        <!-- End clockdiv -->
                    </div>
                    <!-- End token-countdown -->
                    
                    <br>
                    <!-- Start box box-solid box-warning  -->
                    <div class="box box-solid box-warning">
                        <!-- Start boz-header -->
                        <div class="box-header with-border">
                            <div class="box-title"><h3>Latest News</h3></div>
                        </div>
                        <!-- End Box-header -->
                        
                        <!-- Start box-body -->
                        <div class="box-body" style="text-align:justify">
                            <p>The global economy looks poised to slow moderately from 3.8% in 2018 to 3.5% next year in Goldman Sachs Research’s view, led by deceleration in the US and further softening in China <a href="#">Read more...</a> 
                            </p>
                        </div>
                        <!-- End Box-body -->
                    </div>
                    <!-- End box box-solid box-warning -->
                    
                </div>
                <!-- End User-panel -->
            </div>
            <!-- End Box-warning -->
        </section>
        @endsection
        
        @section('script')
        
        @endsection
        