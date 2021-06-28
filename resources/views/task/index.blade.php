@extends('layouts.app')

@section('template_title')
    Task
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Task') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Picture</th>
										<th>Description</th>
										<th>Startdate</th>
										<th>Deliverdate</th>
										<th>Standbytime</th>
										<th>Member Id</th>
										<th>State Id</th>
										<th>Priority Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $task->picture }}</td>
											<td>{{ $task->description }}</td>
											<td>{{ $task->startDate }}</td>
											<td>{{ $task->deliverDate }}</td>
											<td>{{ $task->standbyTime }}</td>
											<td>{{ $task->member_id }}</td>
											<td>{{ $task->state_id }}</td>
											<td>{{ $task->priority_id }}</td>

                                            <td>
                                                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tasks.show',$task->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tasks.edit',$task->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tasks->links() !!}
            </div>
        </div>
    </div>
@endsection
