<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{

    public $movie;
    // public $genres;


    public function __construct($movie)
    {

        $this->movie = $movie;
        // $this->genres = $genres;
    }


    public function render()
    {
        return view('components.movie-card');
    }
}
