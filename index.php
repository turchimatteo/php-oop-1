<!-- 
    - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->
<?php
class Movie {
    public $title;
    public $genre;
    public $director;
    public $year;
    public function __costruct($_title, $_year) {
        $this->title = $_title;
        $this->year = $_year;
    }
    public function getMovie() {
        $movieInfo = $this->title . ' ' . $this->genre . ' ' . $this->director . ' ' . $this->year;
        return $movieInfo;
    }
};

$django = new Movie('Django Unchained', 2013);
$django->title = 'Django Unchained';
$django->year = '2013';
$django->genre = 'Action';
$django->director = 'Quentin Tarantino';

$the_hateful_eight = new Movie('The Hateful Eight', 2015);
$the_hateful_eight->title = 'The Hateful Eight';
$the_hateful_eight->year = '2015';
$the_hateful_eight->genre = 'Action';
$the_hateful_eight->director = 'Quentin Tarantino';
?>
<div>
    <ul>
        <li>Nome: <?php echo $django->title; ?></li>
        <li>Age: <?php echo $django->year; ?></li>
        <li>Genre: <?php echo $django->genre; ?></li>
        <li>Director: <?php echo $django->director; ?></li>
        <li>Full Name: <?php echo $django->getMovie(); ?></li>
    </ul>
</div>
<div>
    <ul>
        <li>Nome: <?php echo $the_hateful_eight->title; ?></li>
        <li>Age: <?php echo $the_hateful_eight->year; ?></li>
        <li>Genre: <?php echo $the_hateful_eight->genre; ?></li>
        <li>Director: <?php echo $the_hateful_eight->director; ?></li>
        <li>Full Name: <?php echo $the_hateful_eight->getMovie(); ?></li>
    </ul>
</div>