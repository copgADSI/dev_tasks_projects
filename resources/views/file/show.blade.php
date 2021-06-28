@extends('layouts.app')

@section('template_title')
    {{ $file->name ?? 'Show File' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show File</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('files.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>File:</strong>
                            {{ $file->file }}
                        </div>
                        <div class="form-group">
                            <strong>Fileable Id:</strong>
                            {{ $file->fileable_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fileable Type:</strong>
                            {{ $file->fileable_type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
