@extends('layouts.app')

@section('content')
    <div class="cards-container">
        <div class="row d-flex flex-wrap p-5 gap-3 flex-center-stretch">

            @foreach ($movies as $movie)
                <div class="card" style="max-width: 540px;">
                    <div class="row g-0">

                        <div class="col-md-4">
                            <img src="{{ $movie->image }}" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-md-8">

                            <div class="card-body p-1">
                                <h4 class="card-title text-center">{{ $movie->title }}</h4>
                            </div>

                            <ul class="list-group list-group-flush m-0">
                                <li class="list-group-item">
                                    <h5 class="m-0">
                                        Titolo Originale:
                                    </h5>

                                    <span class="original-title fs-6">
                                        {{ $movie->original_title }}
                                    </span>
                                </li>

                                <li class="list-group-item">
                                    <h5 class="m-0">
                                        Voto:
                                    </h5>
                                    <span class="vote fs-6">
                                        {{ $movie->vote }}
                                    </span>
                                </li>
                                <li class="list-group-item">
                                    <h5 class="m-0">
                                        Data Di Uscita:
                                    </h5>
                                    <span class="vote fs-6">
                                        {{ $movie->date }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
