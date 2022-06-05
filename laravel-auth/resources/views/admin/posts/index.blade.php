@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 ">
                <div class="allPosts d-flex justify-content-between align-items-center">
                    <h1>Tutti i posts</h1>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-info"> Crea nuovo post</a>

                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th class="text-center">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-outline-info">
                                        Visualizza
                                    </a>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-outline-info">
                                        Modifica
                                    </a>
                                    <a href="{{ route('admin.posts.show', $post->id) }}">
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                            class="d-inline-block ">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger"
                                                onclick="return confirm('Sei sicuro di voler eliminare il post?');">
                                                Elimina
                                            </button>
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
