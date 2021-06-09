<?php
class Rooms extends Controller
{
    public function __construct()
    {
        $this->roomModel = $this->model('Room');
    }

    public function manageRooms(){

        $content = $this->roomModel->showRooms();
        $data =[
            'Room' => $content
        ];
        $this->view('rooms/manageRooms', $data);
    }
}