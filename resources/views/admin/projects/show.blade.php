@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Show</h1>

    <div class="col-12 col-md-12 text-center g-2">
        <button class="btn btn-success"><a href="{{route('admin.projects.edit', $project->slug)}}">Edit</a></button>
        <div class="img-cont">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{$project->title}}">
        </div>
        <div class="">
            <h2 class="fs-4">
                {{ $project->title }}
            </h2>
            <div>
                <p>Description: {{ $project->body }}</p>
                @if($project->category_id)
                <a class="badge text-bg-primary"
                    href="{{route('admin.categories.show', $project->category->slug)}}">{{$project->category->name}}
                </a>
                @else
                <p>No category</p>
                @endif
            </div>
            <div>
                @if(count($project->technologies) > 0)
                <p>Technologies:</p>
                @foreach($project->technologies as $technology)
                <a class="badge rounded-pill text-bg-success"
                    href="{{route('admin.technologies.show', $technology->slug)}}">{{$technology->name}}</a>
                @endforeach
                @else
                <p>No category</p>
                @endif
            </div>
        </div>
        <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection