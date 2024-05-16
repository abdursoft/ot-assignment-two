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
    public function borrowBook($bookName){
        $bookName->borrowBook();
        return "Available Copies of '".$bookName->getTitle()."': ".$bookName->getAvailableCopies()."\n";
    }



    // TODO: Add returnBook method
    public function returnBook($bookName){
        $bookName->returnBook();
        return "Available Copies of '".$bookName->getTitle()."': ".$bookName->getAvailableCopies()."\n";
    }

}

$book1 = new Book("The Great Gatsby",5);
$member1 = new Member("John Doe");
echo $member1->borrowBook($book1);
// echo $member1->returnBook($book1);


$book2 = new Book("To Kill a Mockingbird",3);
$member2 = new Member("Jane Smith");
echo $member2->borrowBook($book2);
// echo $member2->returnBook($book2);