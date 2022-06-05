@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                {{-- Titolo card --}}
                <div class="card">
                    <div class="card-header">Scrivi un nuovo post</div>

                    {{-- / Titolo card --}}
                    <div class="card-body">
                        <form action="{{ route('admin.posts.store') }}" method="POST">
                            {{-- Token --}}
                            @csrf
                            {{-- / Token --}}

                            {{-- titolo post --}}
                            <div class="form-group">
                                <label for="title">Titolo:</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror "
                                    placeholder="Titolo post">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- / titolo post --}}

                            {{-- contenuto post --}}
                            <div class="form-group">
                                <label for="content">Contenuto:</label>
                                <textarea type="text" name="content" class="form-control @error('content') is-invalid @enderror"
                                    placeholder="Contenuto post">
                                </textarea>
                                @error('content')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- / contenunto post --}}

                            <div class="form-group">
                                <input type="submit" class="btn btn-success white" value="Crea Post">
                            </div>
                        </form>
                    </div>
                </div>
                {{-- link per tornare indietro --}}
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary"> Indietro</a>
                {{-- / link per tornare indietro --}}
            </div>
        </div>
    </div>
@endsection
