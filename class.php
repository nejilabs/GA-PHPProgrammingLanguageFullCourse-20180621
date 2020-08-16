<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Book {
        public $title;
        public $author;
        public $pages;
        private $rating;

        function __construct($aTitle, $aAuthor, $aPages, $rating){
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
          $this->setRating($rating);


          echo "
            Title: $this->title <br />
            Author: $this->author <br />
            Number of Pages: $this->pages <br /><br />
          ";
        }

        function isLong(){
          if ($this->pages > 500){
            return "Lots of pages";
          } else{
            return "Pages are okay";
          }
        }

        //returns rating
        function getRating(){
          return $this->rating;
        }

        //validation
        function setRating($rating){
          if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"  ){
            $this->rating = $rating;
          } else {
            $this->rating = "NR";
          }

        }

      }

      $book1 = new Book("Harry Potter","JK Rowling",400,"G");
      $book2 = new Book("Lord of the Rings","Tolkien",700, "PG");

      echo $book1->isLong();
      echo $book1->setRating("H");

      echo "<br/>Rating: ".$book1->getRating();

    ?>
  </body>
</html>
