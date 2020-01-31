@extends('frontend.template.main')
@section('title','HRM')
@section('content')
<div class="container-fluid" style="background-color: #e9ebee;  padding-top: 15px;">
    <div class="container" style="background-color: white;">
        <div class="row">
            <!-- <div class="col-sm-4"> -->
            {{--  <p class="text-right">Job_id: {!! $jobDetail->job_id !!}</p>  --}}
            <!-- </div> -->
            <div class="col-sm-12">
                <div class="mt-5">
                    <h5>JOB CATEGORIES</h5>
                </div>
                @foreach ($jobByFunction as $jobByFunctions)
                <div class="job-list col-sm-12 mt-3">
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="thumb">
                                <a href="job-details.html"><img src="{{ asset($jobByFunctions->company->logo)}}"></a>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div class="job-list-content">
                                <h4><a href="job-details.html">{!! $jobByFunctions->title !!}</a><span
                                        class="full-time">{!! $jobByFunctions->jobType->name !!}</span>
                                </h4>
                                <p>
                                    {!! $jobByFunctions->purpose_of_job_posting !!}
                                </p>
                                <div class="job-tag">
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                            <span>{!! $jobByFunctions->function->name !!}</span>
                                            <span>{!! $jobByFunctions->location->name !!}</span>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="icon">
                                            <i class="ti-heart"></i>
                                        </div>
                                        <a href="{!! url('/job/'.$jobByFunctions->job_id) !!}" class="btn btn-common btn-rm">More Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
<style>
    .job-list {
        border: 1px solid #f1f1f1;
        padding: 15px;
        display: inline-block;
        margin-bottom: 15px;
    }

    .job-list .thumb {
        float: left;
    }

    .job-list .thumb img {
        border-radius: 4px;
    }

    .job-list .job-list-content {
        display: block;
        margin-left: 125px;
        position: relative;
    }

    .job-list .job-list-content h4 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .full-time {
        background: #FF4F57;
    }

    .full-time {
        font-size: 12px;
        color: #fff;
        background: #2c3e50 !important;
        border-radius: 4px;
        margin-left: 10px;
        padding: 7px 18px;
    }

    .job-list .job-list-content p {
        margin-bottom: 20px;
    }

    p {
        font-size: 14px;
        font-family: 'Nunito Sans', sans-serif;
        margin: 0;
        line-height: 24px;
        font-weight: 400;
    }

    .job-list .job-tag {
        border-top: 1px solid #ddd;
        padding: 15px 0;
        line-height: 35px;
    }

    .pull-left {
        float: left;
    }

    .pull-right {
        float: right;
    }

    .job-list .job-tag .meta-tag span {
        font-size: 14px;
        color: #999;
        margin-right: 10px;
    }

    .btn-common:hover,
    .btn-common:focus {
        background: #f96b73;
    }

    .btn-common,
    .btn-common:focus {
        color: #fff;
        background: #ea4249;
        box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.12), 0 1px 6px 0 rgba(0, 0, 0, 0.12);
    }
</style>
@endpush
