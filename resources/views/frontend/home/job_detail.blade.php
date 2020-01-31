@extends('frontend.template.main')
@section('title','HRM')
@section('content')
    <div class="container-fluid" style="background-color: #e9ebee;  padding-top: 15px;">
        <div class="container" style="background-color: white;">
            <div class="row">
                <div class="col-sm-8">
                        {{--  style="border-right: 1px solid  black"  --}}
                    <span>
                        <div class="text-center">
                            @if ($jobDetail->company->logo)
                                <img src="{{ asset($jobDetail->company->logo)}}">
                            @else

                            @endif
                            <h3 style="margin-top: 10px">{{ $jobDetail->title }}</h3>
                            <p>{!! $jobDetail->company->description !!}</p>
                        </div>
                    </span>
                    <div class="info-section-mb-0">
                        <p>Position Title:  <strong>{!! $jobDetail->title !!}</strong></p>
                        <p>Job Function: <strong>{!! $jobDetail->function->name !!}</strong></p>
                        <p>Location: <strong>{!! $jobDetail->location->name !!}</strong></p>
                        <p>Posted Date: <strong>{!! date("d-m-Y", strtotime($jobDetail->posting_date))  !!}</strong></p>
                        <p>Closing Date: <strong>{!! date("d-m-Y", strtotime($jobDetail->closing_date))  !!}</strong></p>
                    </div>
                    <div class="general-info">
                        <p><strong>General Description</strong>({!! $jobDetail->purpose_of_job_posting !!})</p>
                    </div>
                    <div class="responsibilities-info">
                        <p>
                            <strong>Job Responsibilities</strong>
                        </p>
                        <p>{!! $jobDetail->responsibilities !!}</p>
                    </div>
                    <div class="requirement-info">
                            <p>
                                <strong>Job Requirement</strong>
                            </p>
                            <p>{!! $jobDetail->requirement !!}</p>
                        </div>
                        <div class="how-to-apply-info">
                                <p>
                                    <strong>HOW TO APPLY</strong>
                                </p>
                                <p>{!! $jobDetail->how_to_apply !!}</p>
                            </div>
                </div>
                <div class="col-sm-4">
                    <p class="text-right">Job_id: {!! $jobDetail->job_id !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .info-section-mb-0 p{
            margin-bottom: 0px;
        }
        .general-info{
            margin-top: 15px;
        }
    </style>
@endpush
