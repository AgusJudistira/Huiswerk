<?php
class Library {
    public $books = array();
      
    function __construct($books) {
        $this->books = $books;
    }

    public function getNumberOfBooks() {
        return count($this->books);
    }

    public function listBookByTitle() {
        echo "<p>This is a list of all books in the library by title:</p>";
        echo "<ul>";
        foreach ($this->books as $book) {
            echo "<li>$book->title</li>";
        }
        echo "</ul>";
        
    }

    public function readBook($book_index) {
        if ($book_index > count($this->books)-1) {
            return "The book doesn't exist in this library";
        }
        else {        
            return $this->books[$book_index]->content;
        }
    }

    public function findBook($book_title) {
        $search_results = array();

        foreach ($books as $book) {
            if (strpos($book->title, $book_title) > 0) {
                array_push($search_results, $book);
            }
        }

        return $search_results;
    }

    public function addBook($book) {
        array_push($this->books, $book);
    }

    public function removeBook($bookArrayIndex) {
        array_splice($this->books, $bookArrayIndex, 1);
    }
}

class Book {
    public $title;
    public $author;
    public $content;

    function __construct($title, $author, $content) {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
    }

    function bookContent() {
        return $this->content;
    }
}

echo "<h1>PHP OOP huiswerk</h1>";
echo "<h3>Aanmaken en implementeren van Library en Book classes</h3>";
echo "<h4>Uitgevoerd door Agus Judistira</h4>";
echo "<hr>";
$myBooks = array();
$myBook1 = new Book("Square Foot Gardening", "Mel Bartholomew", "When he created the 'Square Foot Gardening'-method, Mel Bartholomew, a retired engineer...");
$myBook2 = new Book("Carrot Love Tomatoes", "Louise Riotte", "Plant parsley and asparagus together and ...");
$myBook3 = new Book("Life and Teachings of the Masters of the Far East", "Baird T. Spalding", "Something very surprising...");
array_push($myBooks, $myBook1, $myBook2, $myBook3);
$myLibrary = new Library($myBooks);
echo "<p>Number of books: " . $myLibrary->getNumberOfBooks() . "</p>";
echo "<p>Content of first book: " . $myLibrary->readBook(0) . "</p>";
echo "<p>Content of second book: " . $myLibrary->readBook(1) . "</p>";
echo "<p>Content of third book: " . $myLibrary->readBook(2) . "</p>";
echo "<p>Content of eleventh book: " . $myLibrary->readBook(10) . "</p>";
$myLibrary->removeBook(1);
echo "<p>Second book is removed.</p>";
echo "<p>Number of books still in the library: " . $myLibrary->getNumberOfBooks() . "</p>";
echo $myLibrary->listBookByTitle();

?>