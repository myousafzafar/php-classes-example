<!DOCTYPE html>
<html>
  <head>
    <title>php practice</title>
  </head>

  <body>

<?php


class movie
{
  public $movieName;
  private $rating;

function __construct($moviename, $Rating)
{
    $this->movieName= $moviename;
    $this->setRating($Rating);
}

function getRating()
{
    return $this->rating;
}

function setRating($userRating)
{
  if($userRating =="G" || $userRating=="R" || $userRating=="PG" || $userRating=="NR" || $userRating=="PG-13")
  {
    $this->rating = $userRating;
  }
    
else
{
      $this->rating = "NR"; 
}

}

}

$movie = new movie("shawshank redemption", "R");

echo "Name: ",$movie->movieName, " "; // public variable of class so accessing normally
echo "<br>Rating: ",$movie->getRating(); // private variable so accessing through getter function


?>

</body>
</html>
