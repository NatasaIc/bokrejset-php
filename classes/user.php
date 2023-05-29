<?php
class User {
    private int $id = 0;
    private string $username = "";


    function __construct($id, $username) {
        $this->id = $id;
        $this->user_name = $username;
    }
    
    public function getId() : int {
        return $this->id;
    }
    public function getUserName() : string {
        return $this->user_name;

    }
}