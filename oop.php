<?php
class Book
{
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }


    // TODO: Add getTitle method
    public function getTitle()
    {
        return $this->title;
    }
    // TODO: Add getAvailableCopies method
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }
    // TODO: Add borrowBook method
    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }



    // TODO: Add returnBook method
    public function returnBook()
    {
        $this->availableCopies++;
    }
}


class Member
{
    // TODO: Add properties as Private
    private $name;
    public function __construct($name)
    {
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method
    public function getName()
    {
        return $this->name;
    }
    // TODO: Add borrowBook method
    public function borrowBook($book)
    {
        if ($book->borrowBook()) {
            echo $this->name."BorroWing successfully '" . $book->getTitle() ."'.\n";
        } else {
            echo "Sorry, this book is not available anymore.\n";
        }
    }
    // TODO: Add returnBook method
    public function returnBook($book)
    {
        if ($book->returnBook()) {
            echo $this->name.", Thank you for returning the book '". $book->getTitle() ."'.\n";
        } else {
            echo "Sorry, this book is not available anymore.\n";
        }
    }
}
// Usage
// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.
// TODO: Create 2 books with the following properties
$Book1 = new Book('The Great Gatsby', 5);
$Book2 = new Book('To Kill a Mockingbird', 3);

// TODO: Create 2 members with the following properties
$Member1 = new Member('John Doe');
$Member2 = new Member('Jane Smith');

// TODO: Apply Borrow book method to each member
$Member1->borrowBook($Book1);
$Member2->borrowBook($Book2);

// TODO: Print Available Copies with their names:
echo "Available Copies of '" . $Book1->getTitle() . "': " . $Book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $Book2->getTitle() . "': " . $Book2->getAvailableCopies() . "\n";
