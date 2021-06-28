@extends('layouts.app')

@section('template_title')
    {{ $task->name ?? 'Show Task' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Task</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Picture:</strong>
                            {{ $task->picture }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $task->description }}
                        </div>
                        <div class="form-group">
                            <strong>Startdate:</strong>
                            {{ $task->startDate }}
                        </div>
                        <div class="form-group">
                            <strong>Deliverdate:</strong>
                            {{ $task->deliverDate }}
                        </div>
                        <div class="form-group">
                            <strong>Standbytime:</strong>
                            {{ $task->standbyTime }}
                        </div>
                        <div class="form-group">
                            <strong>Member Id:</strong>
                            {{ $task->member_id }}
                        </div>
                        <div class="form-group">
                            <strong>State Id:</strong>
                            {{ $task->state_id }}
                        </div>
                        <div class="form-group">
                            <strong>Priority Id:</strong>
                            {{ $task->priority_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
