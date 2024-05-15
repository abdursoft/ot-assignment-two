<?php
class Book
{
    // TODO: Add properties as Private
    private $title, $availableCopies;

    public function __construct($title, $availableCopies)
    {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method
    public function getTitle(){
        return $this->title;
    }




    // TODO: Add getAvailableCopies method
    public function getAvailableCopies(){
        return $this->availableCopies;
    }



    // TODO: Add borrowBook method
    public function borrowBook(){
        $this->availableCopies--;
    }



    // TODO: Add returnBook method
    public function returnBook(){
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
    public function getName(){
        return $this->name;
    }

    // TODO: Add borrowBook method
    public function borrowBook($bookName,$copies){
        return "Available Copies of '$bookName': $copies";
    }



    // TODO: Add returnBook method
    public function returnBook($bookName,$copies){
        return "Available Copies of '$bookName': $copies";
    }

}

$book1 = new Book("The Great Gatsby",5);
$book1->borrowBook();
$av1 = $book1->getAvailableCopies();
$b1 = $book1->getTitle();
$member1 = new Member("John Doe");
echo $member1->borrowBook($b1,$av1);

echo PHP_EOL;

$book2 = new Book("To Kill a Mockingbird", 3);
$book2->borrowBook();
$av2 = $book2->getAvailableCopies();
$b2 = $book2->getTitle();
$member2 = new Member("Jane Smith");
echo $member2->returnBook($b2,$av2);