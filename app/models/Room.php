<?php
class Room
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function showRooms(){
        $this->db->query('SELECT * From Room, RoomType where Room.typeID = RoomType.typeID');
        $results = $this->db->resultset();

        return $results;
    }

    public function addRoom($data){
        $this->db->query('Insert into Room(RoomNo,Floor,Status,typeID) values (:RoomNo, :Floor, :Status, :typeID)');
        $this->db->bind(':RoomNo', $data['RoomNo']);
        $this->db->bind(':Floor', $data['Floor']);
        $this->db->bind(':Status', $data['Status']);
        $this->db->bind(':typeID', $data['typeID']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getRoomType(){
        $this->db->query("Select * from roomType");

        $content = $this->db->resultset();
        return $content;
    }

    public function editRoom($data){
        $this->db->query('Update Room SET RoomNo = :RoomNo, Floor = :Floor, Status = :Status, typeID = :typeID WHERE RoomID = :RoomID');
        $this->db->bind(':RoomID', $data['RoomID']);
        $this->db->bind(':RoomNo', $data['RoomNo']);
        $this->db->bind(':Floor', $data['Floor']);
        $this->db->bind(':Status', $data['Status']);
        $this->db->bind(':typeID', $data['typeID']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function getRoomByID($id){
        $this->db->query('Select * From Room where RoomID = :RoomID');
        $this->db->bind(':RoomID', $id);

        $row = $this->db->single();
        return $row;
    }

    public function deleteRoom($RoomID){
        $this->db->query('Delete from Room where RoomID = :RoomID');
        $this->db->bind(':RoomID', $RoomID);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}