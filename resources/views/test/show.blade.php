@extends('layouts.app')

@section('template_title')
    {{ $test->name ?? 'Show Test' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Test</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tests.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $test->description }}
                        </div>
                        <div class="form-group">
                            <strong>Startdate:</strong>
                            {{ $test->startDate }}
                        </div>
                        <div class="form-group">
                            <strong>Deliverdate:</strong>
                            {{ $test->deliverDate }}
                        </div>
                        <div class="form-group">
                            <strong>Standbytime:</strong>
                            {{ $test->standbyTime }}
                        </div>
                        <div class="form-group">
                            <strong>Member Id:</strong>
                            {{ $test->member_id }}
                        </div>
                        <div class="form-group">
                            <strong>State Id:</strong>
                            {{ $test->state_id }}
                        </div>
                        <div class="form-group">
                            <strong>Priority Id:</strong>
                            {{ $test->priority_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
