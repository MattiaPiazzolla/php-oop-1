<?php
// definisco la classe MovieInfo per utilizzarla con construct 
class MovieInfo {
    public $description;
    public $genre;
    public $year;
    public $director;
    function __construct($description, array $genre, $year, $director) { 
        $this->description = $description;
        $this->genre = $genre;
        $this->year = $year;
        $this->director = $director; 
    }
}

// definisco la classe movie 
class Movie {
    // dichiaro le varibili d'istanza
    public $title;
    public $cover;

    public $info;

    // definisco un costruttore
    public function __construct($_title, $_cover,MovieInfo $_info) {
        $this->title = $_title;
        $this->cover = $_cover;
        $this->info = $_info;
    }
    // definisco un metodo che mi restituisca un paragrafo con tutte le informazioni del film 
    public function printMovieInfo() {
        return "Titolo: " . $this->title . "<br>" .
           "Copertina: <img src='". $this->cover ." alt ='cover-". $this->title ."' style='max-width: 100px; width: auto; height: auto; aspect-ratio: 1 / 1;'> <br>".
           "Descrizione: " . $this->info->description . "<br>" .
           "Genere: " . implode('/', $this->info->genre) . "<br>" .
           "Anno: " . $this->info->year . "<br>" .
           "Regista: " . $this->info->director . "<br><br>" ;
    }
}
?>