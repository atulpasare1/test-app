@extends('layouts.admin')

@section('content')
<div class="card bg-transparent shadow-none border-0 mb-6">
    <div class="card-body row g-6 p-0 pb-5">
        <div class="col-12 col-md-8 card-separator">
            <h5 class="mb-2">Welcome back,<span class="h4 fw-semibold"> Felecia 👋🏻</span></h5>
            <div class="col-12 col-lg-5">
                <p>Your progress this week is Awesome. let's keep it up and get a lot of points reward !</p>
            </div>
            <div class="d-flex justify-content-between flex-wrap gap-4 me-12">
                <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
                    <div class="avatar avatar-lg">
                        <div class="avatar-initial bg-label-primary rounded-3">
                            <div>
                                <img src="{{Asset('/')}}assets/svg/icons/laptop.svg" alt="paypal" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="content-right">
                        <p class="mb-1 fw-medium">Hours Spent</p>
                        <span class="text-primary mb-0 h5">34h</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-4">
                    <div class="avatar avatar-lg">
                        <div class="avatar-initial bg-label-info rounded-3">
                            <div>
                                <img src="{{Asset('/')}}assets/svg/icons/lightbulb.svg" alt="Lightbulb"
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="content-right">
                        <p class="mb-1 fw-medium">Test Results</p>
                        <span class="text-info mb-0 h5">82%</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-4">
                    <div class="avatar avatar-lg">
                        <div class="avatar-initial bg-label-warning rounded-3">
                            <div>
                                <img src="{{Asset('/')}}assets/svg/icons/check.svg" alt="Check" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="content-right">
                        <p class="mb-1 fw-medium">Course Completed</p>
                        <span class="text-warning mb-0 h5">14</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 ps-md-4 ps-lg-6">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div>
                        <h5 class="mb-1">Time Spendings</h5>
                        <p class="mb-9">Weekly report</p>
                    </div>
                    <div class="time-spending-chart">
                        <h5 class="mb-2">231<span class="text-body">h</span> 14<span class="text-body">m</span></h5>
                        <span class="badge bg-label-success rounded-pill">+18.4%</span>
                    </div>
                </div>
                <div id="leadsReportChart"></div>
            </div>
        </div>
    </div>
</div>
@endsection