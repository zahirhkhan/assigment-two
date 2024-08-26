<?php


class Book
{


    // TODO: Adding properties as Private
    private $title;
    private $availableCopies;


    public function __construct($title, $availableCopies)
    {


        // TODO: Initializing properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }


    // TODO: Adding getTitle method

    public function getTitle()
    {
        return $this->title;
    }


    // TODO: Adding getAvailableCopies method
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }


    // TODO: Adding borrowBook method

    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No available copies of " . $this->title . "\n";
        }
    }

    // TODO: Adding returnBook method
    public function returnBook()
    {
        $this->availableCopies++;
    }
}


class Member
{

    // TODO: Adding properties as Private
    private $name;
    private $borrowedBook;

    public function __construct($name)
    {

        // TODO: Initializing properties
        $this->name = $name;
        $this->borrowedBook = null;
    }


    // TODO: Adding getName method
    public function getName()
    {
        return $this->name;
    }
   
    // TODO: Adding borrowBook method

    public function borrowBook(Book $book)
    {
        if ($this->borrowedBook === null) {
            $this->borrowedBook = $book;
            $book->borrowBook();
        } else {
            echo $this->name . " already has a borrowed book.\n";
        }
    }

    // TODO: Adding returnBook method

    public function returnBook()
    {
        if ($this->borrowedBook !== null) {
            $this->borrowedBook->returnBook();
            $this->borrowedBook = null;
        } else {
            echo $this->name . " does not have a borrowed book.\n";
        }
    }
}

// TODO: Creating 2 books

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


// TODO: Applying Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// TODO: Printing Available Copies with their names:

echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";
