<table class="my-3">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    @foreach($technologies as $technology)
    <tr>
        <td>
            <h5 class="">{{$technology->name}}</h5>
        </td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.technologies.show', $technology->slug)}}"><i
                    class="fa-solid fa-eye"></i></a>
            @if(Auth::id() == 1)
            <a class="btn btn-warning" href="{{route('admin.technologies.edit', $technology->slug)}}"><i
                    class="fa-solid fa-pencil"></i></a>
            <form class="d-inline" action="{{route('admin.technologies.destroy', $technology->slug)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
            @endif
        </td>
    </tr>
    @endforeach
</table>