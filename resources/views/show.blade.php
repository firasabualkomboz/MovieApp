@extends('layouts.main')

@section('content')


    {{-- <div class="card" style="width: 18rem;">
                <img src="{{ 'https://image.tmdb.org/t/p/w500/' .$movie['poster_path']}}" class="card-img-top" alt="...">
                <div class="card-body"  style="background-color: rgb(42, 40, 80)">
                <h5 class="card-title">{{$movie['title']}}</h5>
                <span class="ml-1">{{ $movie['vote_average'] *10 .'%'}}</span>

                </div>
            </div> --}}


    {{-- show single page movie --}}
    <div class="single-movie" style="padding: 50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/' .$movie['poster_path']}}" class="card-img-top" alt="...">
                </div>
                <div class="col-lg-6">
                    <h4>{{$movie['title']}}</h4>
                    <ol class="list-unstyled">
                        <li><span class="ml-1"> <i  style="color: rgb(240, 197, 9)" class="fa fa-star"></i> {{ $movie['vote_average'] *10 .'%'}}</span></li>
                        <li><span>{{ $movie['release_date'] }}</span> </li>
                        <li>
                            <span>
                                @foreach ($movie['genres'] as $genre)
                                    {{$genre['name']}} @if (!$loop->last),
                                    @endif
                                @endforeach
                            </span>
                        </li>
                    </ol>

                    <p>{{$movie['overview']}}</p>


                        <h5>Featured Crew</h5>
                        @foreach ($movie['credits']['crew'] as $crew)
                        @if ($loop -> index <2 )
                        <div class="row">
                        <div class="col-lg-4">{{$crew['name']}}</div>
                        <div class="col-lg-4">{{$crew['job']}}</div>
                        @endif
                        @endforeach

                        @if (count($movie['videos']['results']) > 0)

                        <a class="mt-3" target="_blank" href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}"><button class="btn btn-warning"> <i class="fa fa-play"></i> Play Trailer</button></a>


                        @endif

                        </div>



                </div>
            </div>
        </div>

        {{-- start cast --}}

        <div class="container">
            <div class="cast" style="margin-top: 50px">
                <h2 class="mt-4 mb-4">Cast</h2>
                <div class="row">

                    @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop ->index <4 )


                    <div class="col-lg-3 mt-3 mb-3">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' .$cast['profile_path']}}" class="card-img-top" alt="...">
                        <div class="body-cast mt-2 mb-2">
                            <h4>{{$cast['name']}}</h4>
                            <span>{{$cast['character']}}</span>
                        </div>



                </div>
                @endif
                    @endforeach


                </div>
            </div>
        </div>

        <div class="movie-images">
            <div class="container">
                <div class="cast" style="margin-top: 50px">
                    <h2 class="mt-4 mb-4">Images</h2>
                    <div class="row">

                        @foreach ($movie['images']['backdrops'] as $image)
                        @if ($loop ->index < 9 )


                        <div class="col-lg-4 mt-3 mb-3">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/' .$image['file_path']}}" class="card-img-top" alt="...">

                    </div>
                    @endif
                        @endforeach


                    </div>
                </div>

        </div>

    </div>
@endsection
