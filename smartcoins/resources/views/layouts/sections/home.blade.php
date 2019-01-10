@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('dist/css/contribution.css')}}">
<style>
.card-innr{
    border: 2px solid #dce6f5;
    padding: 15px;
}

/*countdown timer*/
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
    padding: 1px;
}
#clockdiv td div > span{
    padding: 5px;
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

/*progress-bar*/
.progress-info{
    padding-left: 0px;
}
.progress-info li{
    list-style: none;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    color: #495463;
    line-height: 1.4;
}
.progress-info li span {
    color: #758698;
    display: block;
    font-size: 12px;
}
</style>
@endsection

@section('content')
<section class="content" style="min-height: 25px;">
    <div class="box box-warning">
        <div class="user-panel">
            <div class="row">
                <div class="col-md-4"><!--start east token-->
                    <div class="tile-item tile-primary">
                        <div class="tile-bubbles"></div>
                        <h6 class="tile-title">EAST TOKEN BALANCE</h6>
                        <h1 class="tile-info">120,000,000 EAST</h1>
                    </div>
                </div><!-- end east token -->
                <div class="col-md-4"><!-- start eth contribution -->
                    <div class="tile-item tile-primary">
                        <div class="tile-bubbles"></div>
                        <h6 class="tile-title">YOUR CONTRIBUTION</h6>
                        <h1 class="tile-info">1256 ETH</h1>
                    </div>
                </div><!-- end eth contribution -->
                <div class="col-md-4"><!-- start exchange -->
                    <div class="tile-item tile-primary">
                        <div class="tile-bubbles"></div>
                        <h1 class="tile-title">1 ETH = 1000 EAST</h1>
                        <h6 class="tile-info">1 ETH = 156.89 USD</h6>
                    </div>
                </div><!-- end exchange -->
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="info-card info-card-bordered">
                        <div class="row align-items-center">
                            <div class="col-sm-3">
                                <div class="info-card-image">
                                    <img src="dist/img/vector-a.png" alt="vector">
                                </div>
                            <div class="gaps-2x d-md-none"></div>
                            </div>
                            <div class="col-sm-9">
                                <h4>Thank you for your interest towards to our ICO Crypto Projects</h4>
                                <p>You can contribute EAST tokens in <a href="contribution.php">Contributions</a> section.</p>
                                <p>Don’t hesitate to invite your friends! If your invited referral purchased token then both of you get 10% bonus.</p>
                            </div>
                        </div>
                    </div><!-- .info-card -->
                </div>
                <div class="col-md-4"><!--calculation-->
                    <div class="box box-solid box-warning">
                        <div class="box-header with-border">
                            <div class="box-title"><h3>Calculation</h3></div>
                        </div>
                        <div class="box-body">
                            <h5>Enter Amount to Calculate Token</h5>
                            <div class="row">
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                <div class="input-group input-group-md">
                                    <input type="text" class="form-control" style="border:1px solid #f39c12">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-warning btn-flat">ETH</button>
                                    </span>
                                </div>
                                </div>
                            <div class="col-md-1 col-sm-1 col-xs-1" style="margin-top:10px"><i class="fa fa-exchange"></i></div>       
                            <div class="col-md-4 col-sm-2 col-xs-2" style="margin-top:10px"><p><b>100 EAST</b></p></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><i class="fa fa-info-circle"></i> Amount calculated based current tokens price</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><button class="btn btn-sm btn-warning pull-right">Buy Token</button></div>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-8 col-lg-8"><!--start token sale graph-->
                    <div class="token-sale-graph card card-full-height">
                        <div class="card-innr">
                            <div class="chart-tokensale"><canvas id="lineChart" height="128px"></canvas></div>
                        </div>
                    </div><!-- .card -->
                </div><!--end token sale graph-->
                <!--start token sale progress-->
                <div class="col-xl-12 col-md-4 col-lg-4">
                    <div class="box box-solid box-warning">
                        <div class="box-header with-border">
                            <div class="box-title"><h3>Token Sales Progress</h3></div>
                        </div>
                        <div class="box-body">
                            <ul class="progress-info">
                                <li><span>Raised</span> 2,758 TWZ</li>
                                <li class="text-right"><span>TOTAL</span> 1,500,000 TWZ</li>
                            </ul>
                            <div class="progress-bar" style="width: 100%">
                                <div class="progress-hcap" data-percent="83" style="width: 83%;"><div>Hard cap <span>1,400,000</span></div></div>
                                <div class="progress-scap" data-percent="24" style="width: 24%;"><div>Soft cap <span>40,000</span></div></div>
                                <div class="progress-percent" data-percent="28" style="width: 28%;"></div>
                            </div>
                            <div style="clear: both"></div>
                            <!--start countdown timer-->
                            <div class="token-countdown" style="padding-bottom: 10px; margin-top: 10px;">
                                    <span class="token-countdown-title">SALE END IN</span>
                                    <div id="clockdiv">
                                        <table>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <span class="days"></span>
                                                        <div class="smalltext">Days</div>
                                                    </div>
                                                </td>
                                                <td>
                                                        <div>
                                                        <span class="hours"></span>
                                                        <div class="smalltext">Hours</div>
                                                        </div>
                                
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="minutes"></span>
                                                        <div class="smalltext">Minutes</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <span class="seconds"></span>
                                                        <div class="smalltext">Seconds</div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                            </div> 
                        </div>
                    </div>     
                </div><!--end token sale progress-->
            </div>
            <hr>
            <div class="gaps-3x">
                <table class="table table-bordered" class="display" style="width:100%">
                    <tbody>
                        <tr>
                            <th>Presale</th>
                            <th>Sale Stage 1</th>
                            <th>Sale Stage 2</th>
                        </tr>

                        <tr>
                            <td>03 January 2019</td>
                            <td>10 March 2019</td>
                            <td>15 June 2019</td>
                        </tr>

                        <tr>
                            <td>15 June 2019</td>
                            <td>05 September 2019</td>
                            <td>20 December 2019</td>
                        </tr>

                        <tr>
                            <td>20 December 2019</td>
                            <td>16 February 2020</td>
                            <td>19 May 2020</td>
                        </tr>

                        <tr>
                            <td>19 May 2020</td>
                            <td>15 August 2020</td>
                            <td>01 November 2020</td>
                        </tr>

                        <tr>
                            <td>01 November 2020</td>
                            <td>15 February 2021</td>
                            <td>20 July 2021</td>
                        </tr>

                    </tbody>
                
            
                </table>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>                
    </div>
</section>
@endsection

@section('script')
<script>
    //countdown timer
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
    initializeClock('clockdiv', deadline);
</script>

<script>
//table
$(document).ready(function() {
        var responseObj = [
        { "presale": "03 Jan 2019", "sale1": "15 Aug 2019",  "sale2":"28 Oct 2019"},
    ];
    $('#example').dataTable({
        "data": responseObj,
        "columns": [
            { "data": "presale"},
            { "data": "sale1"},
            { "data": "sale2"},

        ]
    });
});
</script>

<script>
    //chart
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14"],
        datasets: [{
            label: "Tokens Sale Graph",
            data: [65, 59, 80, 81, 56, 55, 40, 24, 46, 94, 53, 25, 64, 37],
            backgroundColor: [
            'rgba(105, 0, 132, .2)',
            ],
            borderColor: [
            'rgba(200, 99, 132, .7)',
            ],
            borderWidth: 2
        },
        ]
    },
    options: {
        responsive: true
    }
    });
</script>
@endsection
