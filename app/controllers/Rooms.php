<?php

class Rooms extends Controller
{
    public function __construct()
    {
        $this->roomModel = $this->model('Room');
    }

    public function index()
    {
        $this->view('rooms/index');
    }

    public function roomType()
    {
        $var = $this->roomModel->showroomTypes();
        $data = [
            "roomType" => $var
        ];
        $this->view('rooms/roomType', $data);
    }

    public function addRoomType()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'typeName' => trim($_POST['typeName']),
                'price' => trim($_POST['price']),
                'typeName_error' => '',
                'price_error' => ''
            ];
            // Validation


            if ($this->roomModel->addNewRoomType($data)) {
                flash('register_success', 'Room Type is registered.');
                redirect('rooms/roomType');
            } else {
                die("Smth Went wrong");
            }

        } else {
            $data = [
                'typeName' => '',
                'price' => ''
            ];
            $this->view('rooms/addRoomType', $data);
        }
    }

    public function editRoomType($typeID)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'typeID' => $typeID,
                'typeName' => trim($_POST['typeName']),
                'price' => trim($_POST['price']),
                'typeName_error' => '',
                'price_error' => ''
            ];
            print_r($data);
            //make sure there is not an error (do not forget if)
            if ($this->roomModel->editType($data)) {
                flash('post_message', 'Room Updated');
                redirect('rooms/roomType');
            } else {
                die('Something went wrong');
            }

        } else {
            $roomType = $this->roomModel->getRoomTypeByID($typeID);
            $data = [
                'typeID' => $typeID,
                'typeName' => $roomType->typeName,
                'price' => $roomType->price
            ];
            $this->view('rooms/editRoomType', $data);
        }
    }

    public function deleteRoomType($typeID)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($this->roomModel->deleteType($typeID)) {
                flash('delete_success', 'Room Type is deleted.');
                redirect('rooms/roomType');
            }
        } else {
            $roomType = $this->roomModel->getRoomTypeByID($typeID);
            $data = [
                'typeName' => $roomType->typeName,
                'typeID' => $roomType->typeID
            ];
            $this->view('rooms/deleteRoomType', $data);
        }
    }
}