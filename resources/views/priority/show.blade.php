@extends('layouts.app')

@section('template_title')
    {{ $priority->name ?? 'Show Priority' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Priority</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('priorities.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Priority:</strong>
                            {{ $priority->priority }}
                        </div>
                        <div class="form-group">
                            <strong>Descriptionpriority:</strong>
                            {{ $priority->descriptionPriority }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
