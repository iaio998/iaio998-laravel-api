@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Show Categories</h1>

    <div class="col-12 col-md-12 text-center g-2">
        <button class="btn btn-danger"><a href="{{route('admin.categories.index')}}">Go back</a></button>
        <div class="">
            <h2 class="fs-4">
                {{ $category->name }}
            </h2>
            <ul>
                @forelse ($category->projects as $project)
                @if (Auth::id() == $project->user_id || Auth::id() == 1)
                <li class="list-group-item">
                    <a href="{{route('admin.projects.show', $project->slug)}}"
                        class="link-underline link-underline-opacity-0"> {{$project->title}}</a>
                </li>
                @endif
                @empty
                <li>No projects</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection