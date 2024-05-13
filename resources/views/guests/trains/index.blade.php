@extends('layouts.app')

@section('content')
    <h1>Trains Available </h1>

    <div class="container mt-3">
            <div class="row">
                @forelse($trains as $train)

                <div class="col">
                    <div class="card">
                        <span>{{$train->departure_station}} -> {{$train->arrival_station}}</span>
                    </div>
                </div>
                @empty
                <div class="col">
                    <span>No trains available :(</span>
                </div>
                @endforelse
            </div>
    </div>
@endsection