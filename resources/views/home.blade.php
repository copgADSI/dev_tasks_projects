@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="form-group">
                            <div class="justify-content-center">
                                <a href="" class="btn btn-primary m-3" id="my_Task"><i class="fas fa-tasks" ></i> My
                                    Tasks</a>
                                <a href="" class="btn btn-primary m-3" id="teammates"><i class="fas fa-users" ></i>
                                    Teammates</a>
                                <a href="" class="btn btn-primary m-3" id="reports"><i class="fas fa-chart-line" ></i>
                                    Reports</a> 
                                <a href="" class="btn btn-primary m-3" id="asign_Inssue"><i class="fas fa-thumbtack" ></i>
                                    Assign Issue </a>
                            </div>
                        </div>
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
