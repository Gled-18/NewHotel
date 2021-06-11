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

    // public function getRoomIDs(){
    //     $this->db->query('SELECT DISTINCT RoomID From Room');
    //     $results = $this->db->resultset();

    //     return $results;
    // }

    // public function getRoomsNo(){
    //     $this->db->query('SELECT DISTINCT RoomNo From Room');
    //     $results = $this->db->resultset();

    //     return $results;
    // }

    public function getRoomsIDNO(){
        $this->db->query('SELECT RoomID, RoomNo From Room');
        $results = $this->db->resultset();

        return $results;
    }

    public function getRoomByID($id){
        $this->db->query("SELECT * FROM Room WHERE RoomID = :id");
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }
}