@extends('partials.layout')
@section('title', 'Posts')
@section('content')
    <a href="{{ route('posts.create') }}" class="btn join-item btn-outline btn-success">Add Post</a>
    <div class="text-center my-2">
    {{ $posts->links() }}
    </div>
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr class="hover:bg-base-300!">
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <div class="join">
                            <a href="{{ route('posts.show', ['post' => $post]) }}" class="btn join-item btn-outline btn-secondary">View</a>
                            <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn join-item btn-outline btn-accent">Edit</a>
                            <button form="delete-{{$post->id}}" class="btn join-item btn-outline btn-error">Delete</button>

                        </div>
                            <form id="delete-{{$post->id}}" action="{{ route('posts.destroy', ['post' => $post]) }}" method = "POST">
                                @method('DELETE')
                                @csrf
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tfoot>
    </table>
        <div class="text-center my-2">
    {{ $posts->links() }}
    </div>
@endsection
