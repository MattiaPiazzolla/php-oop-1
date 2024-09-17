<?php 
// definisco la classe MovieInfo per utilizzarla con construct 
class MovieInfo {
    public $description;
    public $genre;
    public $year;
    public $director;
    function __construct($description, $genre, $year, $director) { 
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
        return"". $this->title ." ". $this->cover;
    }
}

// definisco le istanze di MovieInfo
$info_Interstellar = new MovieInfo(
    'Set in a dystopian future where Earth is suffering from catastrophic blight and famine, the film follows a group of astronauts who travel through a wormhole near Saturn in search of a new home for mankind. Syncopy Inc.',
    'Sci-fi/Adventure',
     '2014',
     'Christopher Nolan');

$info_ToyStory = new MovieInfo(
    'A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boy\'s room.',
    'Animation/Adventure/Comedy',
    '1995',
    'John Lasseter'
);

$info_Godfather = new MovieInfo(
    'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
    'Crime/Drama',
    '1972',
    'Francis Ford Coppola'
);


// definisco le istanze di movie 
$interstellar = new Movie(
    "Interstellar",
    "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRf61mker2o4KH3CbVE7Zw5B1-VogMH8LfZHEaq3UdCMLxARZAB",
    $info_Interstellar
);
$godfather = new Movie(
    "The Godfather",
    "https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg",
    $info_Godfather
);

$toyStory = new Movie(
    "Toy Story",
    "https://m.media-amazon.com/images/M/MV5BMDU2ZWJlMjktMTRhMy00ZTA5LWEzNDgtYmNmZTEwZTViZWJkXkEyXkFqcGdeQXVyNDQ2OTk4MzI@._V1_.jpg",
    $info_ToyStory
);
?>