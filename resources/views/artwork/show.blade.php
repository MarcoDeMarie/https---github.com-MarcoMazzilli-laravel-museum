@extends('layout.main')

@section('content')

<main>
    <div class="container">
            <div>
                <h3>{{ $artwork->artwork_name }}</h3>
                <img src="{{ $artwork->image }}" alt="">
                <p>{{ $artwork->description }}</p>
                <p>{{ $artwork->year }}</p>
            </div>
        </div>
    </div>
</main>
@endsection
