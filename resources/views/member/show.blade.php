@extends('layouts.app')

@section('template_title')
    {{ $member->name ?? 'Show Member' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Member</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('members.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $member->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Project Id:</strong>
                            {{ $member->project_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
