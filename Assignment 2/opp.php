<?php

class Book {
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;
    
    public function __construct($title, $availableCopies) {
        // TODO: Initialize properties
        $this->title=$title;
        $this->availableCopies= $availableCopies;
        
        }
   
   
   // TODO: Add getTitle method
   
   public function getTitle(){
    echo   $this->title ;
   }
    

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies(){
 echo $this->availableCopies ;
    }
   
   
   
    // TODO: Add borrowBook method
    
   public function borrowBook(){
 return $this->availableCopies;
   }
   
   
    // TODO: Add returnBook method
    public function returnBook(){
      
    }

   }
   $bookName = new Book("Book 1 - Name: The Great Gatsby ,"," Available Copies: 5 <br>");
    echo $bookName->getTitle();
   echo $bookName->getAvailableCopies();
   $bookName2 = new Book("Book 2 - Name: To Kill a Mockingbird","");
   echo $bookName2->borrowBook();

//    echo $memberName;
   
   class Member {
    // TODO: Add properties as Private
   
   private $name;
   
   public function __construct($name) {
    // TODO: Initialize properties
  $this->name = $name;
  echo "Member 1 - Name: {$this->name}";
   }
   
   
   
    // TODO: Add getName method
     function getName($name){
        $this->name=$name;
    }
    // TODO: Add borrowBook method
    
   public function borrowBook(){

   }
   
   
    // TODO: Add returnBook method
    public function returnBook(){

    }

   }
   $memberObj = new Member("John Doe");
  
   
 
   