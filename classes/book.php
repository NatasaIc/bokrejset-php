<?php

class Book {
    private int $id = 0;
    private string $title = "";
    private int $year = 0;
    private int $pages = 0;


    function __construct($id, $title, $year, $pages){
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->pages = $pages;
    }

    public function getId() : int {
    return $this->id;
    }
    public function getTitle() : string {
        return $this->title;
    }
    public function getYear() : int {
        return $this->year;
    }
    public function getPages() : int {
        return $this->pages;
    }
   
}
