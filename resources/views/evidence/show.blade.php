@extends('layouts.app')

@section('template_title')
    {{ $evidence->name ?? 'Show Evidence' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Evidence</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('evidence.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Information:</strong>
                            {{ $evidence->information }}
                        </div>
                        <div class="form-group">
                            <strong>Evidenceable Id:</strong>
                            {{ $evidence->evidenceable_id }}
                        </div>
                        <div class="form-group">
                            <strong>Evidenceable Type:</strong>
                            {{ $evidence->evidenceable_type }}
                        </div>
                        <div class="form-group">
                            <strong>State Id:</strong>
                            {{ $evidence->state_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
