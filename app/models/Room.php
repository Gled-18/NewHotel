<?php

class Room
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function showRoomTypes()
    {
        $this->db->query("Select * from roomType");

        $content = $this->db->resultset();
        return $content;
    }

    public function addNewRoomType($data)
    {
        $this->db->query('Insert into RoomType(typeName,price) values (:typeName, :price)');
        $this->db->bind(':typeName', $data['typeName']);
        $this->db->bind(':price', $data['price']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getRoomTypeByID($typeID)
    {
        $this->db->query('Select * from RoomType where typeID = :typeID');
        $this->db->bind(':typeID', $typeID);

        $row = $this->db->single();
        return $row;
    }

    public function editType($data)
    {
        $this->db->query('Update RoomType SET typeName = :typeName, price = :price WHERE typeID = :typeID');
        $this->db->bind(':typeName', $data['typeName']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':typeID', $data['typeID']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteType($typeID)
    {
        $this->db->query('Delete from RoomType where typeID = :typeID');
        $this->db->bind(':typeID', $typeID);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
