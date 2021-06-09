<?php
class Room
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function showRooms(){
        $this->db->query('SELECT * From Room');
        $results = $this->db->resultset();

        return $results;
    }
}