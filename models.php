<?php

class Movie {
    public $title;
    public $year;
    public $genres;

    public function __construct($title, $director, $year, $genres) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
    }

    public function getMovie() {
        $genresString = implode(", ", $this->genres);
        return "Title: " . $this->title . ", Year: " . $this->year . ", Genres: " . $genresString;
    }
}