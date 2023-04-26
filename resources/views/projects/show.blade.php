@extends('layouts.app')

@section('content')

<div class="container">
        <h3>Project SHOW</h3>
        <div class="d-flex align-itmes-center">

            <div class="me-auto">
                <h1>{{ $project->title }}
                    @if ($project->category)
                        <span class="badge rounded-pill bg-primary"> {{ $project->category->name }} </span>
                    @else
                        <span class="badge rounded-pill bg-secondary"> Nesuna categoria </span>
                    @endif
                </h1>

                <p>{{ $project->slug }}</p>

            </div>

            <div>
                <a class="btn btn-sm btn-secondary" href="{{ route('projects.edit',$project) }}">
                    Modifica
                </a>
            </div>



        </div>
    </div>
    <div class="container">
        <p>
            {{ $project->description }}
        </p>
    </div>

@endsection
