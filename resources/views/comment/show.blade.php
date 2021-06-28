@extends('layouts.app')

@section('template_title')
    {{ $comment->name ?? 'Show Comment' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Comment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comments.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Comment:</strong>
                            {{ $comment->comment }}
                        </div>
                        <div class="form-group">
                            <strong>Commentable Id:</strong>
                            {{ $comment->commentable_id }}
                        </div>
                        <div class="form-group">
                            <strong>Commentable Type:</strong>
                            {{ $comment->commentable_type }}
                        </div>
                        <div class="form-group">
                            <strong>Member Id:</strong>
                            {{ $comment->member_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
