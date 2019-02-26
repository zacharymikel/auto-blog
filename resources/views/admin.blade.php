@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group">
                    @foreach($posts as $post)
                        <li class="list-group-item list-group-container">
                        <h3>{{ $post->title  }}</h3>
                        <img src="{{ $post->image_name }}">
                        <p>
                            Created on {{ $post->created_at }}
                            Last update on {{ $post->updated_at }}
                        </p>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
