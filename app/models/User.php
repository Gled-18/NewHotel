<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();


        $hashed_password = $row->Password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email
    public function findUserByEmail($email)
    {
        $this->db->query("SELECT * FROM user WHERE email = :email");
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM user WHERE employeeID = :id");
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }

    public function getUsers()
    {
        $id = $_SESSION['user_id'];
        $this->db->query("SELECT * FROM user WHERE employeeId != :id");
        $this->db->bind(':id', $id);
        $results = $this->db->resultSet();
        return $results;
    }

    public function addNewUser($data)
    {
        $this->db->query('INSERT INTO user(Name, Surname, PhoneNo, StreetNo, ApartamentNo, Role, Descrition, Email, Password) VALUES(:Name, :Surname, :PhoneNo, :StreetNo, :ApartamentNo, :Role, :Descrition, :Email, :Password)');
        $this->db->bind(':Name', $data['name']);
        $this->db->bind(':Surname', $data['surname']);
        $this->db->bind(':PhoneNo', $data['phoneNo']);
        $this->db->bind(':StreetNo', $data['streetNo']);
        $this->db->bind(':ApartamentNo', $data['apartamentNo']);
        $this->db->bind(':Role', $data['role']);
        $this->db->bind(':Descrition', $data['description']);
        $this->db->bind(':Email', $data['email']);
        $this->db->bind(':Password', $data['password']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function editUserM($data)
    {
        $this->db->query('UPDATE user SET Name = :Name, Surname = :Surname, PhoneNo = :PhoneNo, StreetNo = :StreetNo, ApartamentNo = :ApartamentNo, Role = :Role, Descrition = :Descrition, Email = :Email WHERE employeeID = :id');
        $this->db->bind(':id', $data['employeeID']);
        $this->db->bind(':Name', $data['name']);
        $this->db->bind(':Surname', $data['surname']);
        $this->db->bind(':PhoneNo', $data['phoneNo']);
        $this->db->bind(':StreetNo', $data['streetNo']);
        $this->db->bind(':ApartamentNo', $data['apartamentNo']);
        $this->db->bind(':Role', $data['role']);
        $this->db->bind(':Descrition', $data['description']);
        $this->db->bind(':Email', $data['email']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function deleteUserM($id)
    {
        $this->db->query('DELETE FROM user WHERE employeeID = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //////////recepsionisti
    //nje klient i ri

    function showClients(){

        $this->db->query('Select * from client');

        $result = $this->db->resultset();
        return $result;
    }
    function getClientByID($clientID){
        $this->db->query('Select * from Client where clientID = :clientID');
        $this->db->bind('clientID', $clientID);

        $result =$this->db->single();
        return $result;

    }
    function checkClient($data){
        $this->db->query('SELECT * from client WHERE clientName =:clientName AND Surname =:Surname');
        $this->db->bind(':clientName', $data['clientName']);
        $this->db->bind(':Surname', $data['Surname']);
        $result =$this->db->single();
        return $result;
    }
    function addNewClientR($data){
        $this->db->query('INSERT INTO client(TimeOfRegs, DateOfRegs, clientName, Surname, employeeID) VALUES(CURTIME(), CURDATE(),:clientName, :Surname, :employeeID)');
        $this->db->bind(':clientName', $data['clientName']);
        $this->db->bind(':Surname', $data['Surname']);
        $this->db->bind(':employeeID', $_SESSION['user_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function editClient($data){
        $this->db->query('Update client Set  clientName = :clientName, Surname = :Surname where clientID = :clientID');
        $this->db->bind(':clientName', $data['clientName']);
        $this->db->bind(':Surname', $data['Surname']);
        $this->db->bind(':clientID', $data['clientID']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function deleteClient($clientID){
        $this->db->query('Delete from Client where clientID = :clientID');
        $this->db->bind(':clientID', $clientID);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //rezervimi i klienteve ne dhoma
    function addNewReservationR($data, $var){
        $this->db->query('INSERT INTO ClientRoom(RequestTime, stayStartDate, stayEndDate, clientID, RoomID, employeeID) VALUES(CURTIME(), :stayStartDate, :stayEndDate, :clientID, :RoomID, :employeeID)');
        $this->db->bind(':stayStartDate', $data['stayStartDate']);
        $this->db->bind(':stayEndDate', $data['stayEndDate']);
        $this->db->bind(':clientID', $var);
        $this->db->bind(':RoomID', $data['RoomsIDNO']);
        $this->db->bind(':employeeID', $_SESSION['user_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function getReservationByID($requestID){
        $this->db->query('Select * from clientroom where requestID = :requestID');
        $this->db->bind('requestID', $requestID);

        $results = $this->db->single();
        return $results;

    }

    function showReservations(){
        $this->db->query('Select cr.requestID,room.RoomNo,cr.stayStartDate,cr.stayEndDate,concat(cl.clientName," ",cl.Surname) as Client,concat(user.Name," ", user.Surname) as Employee,DATEDIFF(cr.stayEndDate, cr.stayStartDate) AS DateDiff,rt.price from clientroom as cr, client as cl,room,roomtype as rt,user where cr.clientID=cl.clientID and cr.RoomID = room.RoomID and room.typeID = rt.typeID and cr.employeeID=user.employeeID');

        $content = $this->db->resultset();
        return $content;
    }

    function editReservation($data, $clientID){

        $this->db->query('Update clientroom set stayStartDate = :stayStartDate ,stayEndDate = :stayEndDate,clientID = :clientID, RoomID = :RoomID, employeeID = :employeeID where requestID = :requestID');
        $this->db->bind(':stayStartDate', $data['stayStartDate']);
        $this->db->bind(':stayEndDate', $data['stayEndDate']);
        $this->db->bind(':clientID',$clientID);
        $this->db->bind(':RoomID', $data['RoomID']);
        $this->db->bind(':employeeID', $_SESSION['user_id']);
        $this->db->bind(':requestID', $data['requestID']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function deleteReservation($requestID){
        $this->db->query('Delete from clientroom where requestID = :requestID');
        $this->db->bind(':requestID', $requestID);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }


    }

    function getClientID($data){
        $this->db->query("SELECT clientID FROM client WHERE clientName =:clientName AND Surname =:Surname");
        $this->db->bind(':clientName', $data['clientName']);
        $this->db->bind(':Surname', $data['Surname']);
        $results = $this->db->single();
        return $results;

    }
    // function getClientR($data){
    //     $this->db->query("SELECT * FROM client WHERE clientName like %:clientName%");
    //     $this->db->bind(':clientName', $data['clientName']);
    //     $results = $this->db->resultSet();
    //     return $results;
    // }

    public function getClient($data){
        $this->db->query("SELECT clientID FROM client WHERE clientName =:clientName AND Surname =:Surname");
        $this->db->bind(':clientName', $data['clientName']);
        $this->db->bind(':Surname', $data['Surname']);
        $results = $this->db->resultSet();
        return $results;
    }


}