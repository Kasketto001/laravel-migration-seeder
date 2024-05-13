@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Trains Available</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            @forelse($trains as $train)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{$train->departure_station}} -> {{$train->arrival_station}}</h5>
                            <p class="card-text">Departure Time: {{$train->departure_time}}</p>
                            <p class="card-text">Arrival Time: {{$train->arrival_time}}</p>
                            <p class="card-text">Train Code: {{$train->train_code}}</p>
                            <p class="card-text">Carriages: {{$train->carriages_number}}</p>
                            @if($train->on_schedule)
                                <p class="card-text text-success">On Schedule</p>
                            @else
                                <p class="card-text text-danger">Delayed</p>
                            @endif
                            @if($train->cancelled)
                                <p class="card-text text-danger">Cancelled</p>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">No trains available</h5>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
