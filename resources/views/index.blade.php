@extends('layout')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">All Tasks</h4>
        </div>
        <div class="float-end">
            <a href="{{ route('task.create') }}" class="btn btn-primary">
               <i class="fa fa-plus-circle"></i> Create Task
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    @foreach ($tasks as $task)
        <div class="card mt-3" style="border: none; box-shadow: 0.1px 2px 10px 10px rgb(64 99 29 / 18%); border-radius: calc(3.25rem - 40px) calc(3.25rem - 40px) 0 0;">
            <h5 class="card-header" style="padding: 1rem 1rem;">
                @if ($task->status === 'Not Started')
                    {{ $task->title }}

                @elseif ($task->status === 'In Progress')
                        {{ $task->title }}
                @else
                    <del>{{ $task->title }}</del>
                @endif

                <span class="badge rounded-pill bg-warning text-dark">
                    {{ $task->created_at->diffForHumans() }}
                </span>
            </h5>

            <div class="card-body">
                <div class="card-text">
                    <div class="float-start">
                        @if ($task->status === 'Not Started')
                            {{ $task->description }}

                        @elseif ($task->status === 'In Progress')
                                {{ $task->description }}
                        @else
                            <del>{{ $task->description }}</del>
                        @endif
                        <br>

                        @if ($task->status === 'Not Started')
                            <span class="badge rounded-pill bg-danger text-white">
                                Not Started
                            </span>

                        @elseif ($task->status === 'In Progress')
                            <span class="badge rounded-pill bg-warning text-white">
                                In Progress
                            </span>
                        @else
                            <span class="badge rounded-pill bg-success text-white">
                                Done
                            </span>
                        @endif


                        <small>Last Updated - {{ $task->updated_at->diffForHumans() }} </small>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-success">
                           <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{ route('task.destroy', $task->id) }}" style="display: inline" method="POST" onsubmit="return confirm('Are you sure to delete ?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @endforeach

    @if (count($tasks) === 0)
        <div class="alert alert-danger p-2">
            No Task Found. Please Create one task
            <br>
            <br>
            <a href="{{ route('task.create') }}" class="btn btn-primary">
                <i class="fa fa-plus-circle"></i> Create Task
             </a>
        </div>
    @endif

@endsection
