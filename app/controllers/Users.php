<?php

class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->roomModel = $this->model('Room');
        $this->inventoryModel = $this->model('Inventory');
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process the form

            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                //error variables
                'email_error' => '',
                'password_error' => '',
            ];

            //validate email
            if (empty($data['email'])) {
                $data['email_error'] = 'Please enter email';
            }

            if (empty($data['password'])) {
                $data['password_error'] = 'Please enter password';
            } elseif (strlen($data['password']) < 6) {
                $data['password_error'] = 'Password must be at least 6 characters';
            }

            //check for user/mail
            if ($this->userModel->findUserByEmail($data['email'])) {
                //user found

            } else {
                //user not found
                $data['email_error'] = 'No user found';
            }

            //make sure errors are empty
            if (empty($data['email_error']) && empty($data['password_error'])) {
                //validated
                //check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if ($loggedInUser) {
                    //create session
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_error'] = 'Password incorrect';
                    $this->view('users/index', $data);
                }
            } else {
                //load view with errors
                $this->view('users/index', $data);
            }
        } else {
            //init data
            $data = [
                'email' => '',
                'password' => '',
                //error variables
                'email_error' => '',
                'password_error' => '',
            ];
            $this->view('users/index', $data);
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->employeeID;
        $_SESSION['user_email'] = $user->Email;
        $_SESSION['user_name'] = $user->Name;
        $_SESSION['user_role'] = $user->Role;
        if ($_SESSION['user_role'] == 'ht_manager') {
            redirect('users/ht_manager');
        }
        else if($_SESSION['user_role'] == 'receptionist') {
            redirect ('users/receptionist');
        }
        else if($_SESSION['user_role'] == 'rs_manager') {
            redirect ('users/rs_manager');
        }

    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }
    //////////////////////////////////////////////ndeveprimi me faqe
    public function ht_manager()
    {
        $this->view('users/ht_manager');
    }

    ///////////////////////////////////
    public function rs_manager()
    {
        $this->view('users/rs_manager');
    }

    public function manage_rs_manager()
    {
        $this->view('users/manage_rs_manager');
    }


    /////////inventory
    public function show_inventory()
    {
        $items = $this->inventoryModel->show();
        $data = [
            'items' => $items
        ];
        $this->view('users/show_inventory', $data);
    }

    public function addInventory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'productName'=> trim($_POST['productName']),
                // 'productQuantity' => trim($_POST['productQuantity']),
                'description' => trim($_POST['description']),
                'sellingPrice' => trim($_POST['sellingPrice'])
            ];

            //need some validation here

            //make sure there are empty error than...
            
            if ($this->inventoryModel->addToInventory($data)) {
               
                redirect('users/show_inventory');
            } else {
                die("Smth Went wrong");
            }
        } else {
            //initialize data
          
            $data = [
                'productName'=> '',
                // 'productQuantity' => '',
                'description' => '',
                'sellingPrice' => ''
            ];
            $this->view('users/addInventory', $data);
        }

    }

    public function manage_inventory(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
           
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'productName'=> trim($_POST['productName']),
                'Quantity' => trim($_POST['Quantity']),
                'purchasePrice' => trim($_POST['purchasePrice']),
                'Action' => trim($_POST['Action']),
            ];
            $current_quantity = $this->inventoryModel->getProductQuantity($data);
            $current_quantity = $current_quantity[0]->productQuantity;
            $current_quantity = $current_quantity + 0;
            $new_quantity = $data['Quantity'];

            if($data['Action'] == 'add'){
                $updated_quantity = $current_quantity + $new_quantity;
            }else{
                $updated_quantity = $current_quantity - $new_quantity;

            }


            $id = $this->inventoryModel->getProductIDbyName($data);
            $id = $id[0]->productID;
            $id = $id + 0;
            
            //need some validation here

            //make sure there are empty error than...
            
            if ($this->inventoryModel->updateManageSupplies($data, $id)) {
               if($this->inventoryModel->updateQuantity($id, $updated_quantity)){
                redirect('users/show_inventory');
               }
                
            } else {
                die("Smth Went wrong");
            }
        } else {
            //initialize data
          
            $data = [
                'productName'=> '',
                'Quantity' => '',
                'purchasePrice' => '',
                'Action' =>  ''
            ];
            $this->view('users/manage_inventory',$data);
        }
        
    }

    public function transactions(){
            $transactions = $this->inventoryModel-> showTransaction();
            $data = [
                'transactions' => $transactions
            ];
            $this->view('users/transactions', $data);
    }


   



    //////////////////////////////////////////////////recepsionist///////////////
    public function receptionist()
    {
        $this->view('users/receptionist');
    }

    public function manage_rec()
    {
        $this->view('users/manage_rec');
    }

    public function clients_rec(){
        $content = $this->userModel->showClients();
        $data = [
            'Client' => $content
        ];
        $this->view('users/clients_rec', $data);

    }

    public function addClient()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'clientName' => trim($_POST['clientName']),
                'Surname' => trim($_POST['Surname']),
                'clientName_err' => '',
                'Surname_err' => ''
            ];
            if (empty($data['clientName_err']) && empty($data['Surname_err'])) {
                if ($this->userModel->addNewClientR($data)) {
                    flash('register_success', 'User is registered.');
                    redirect('users/clients_rec');
                }else{
                    echo "Error";
                }
            }
        }else{
            $data = [
                'clientName' => "",
                'Surname' => "",
                'clientName_err' => '',
                'Surname_err' => ''
            ];
        $this->view('users/addClient', $data);
        }
    }

    public function editClient($clientID){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'clientID' => $clientID,
                'clientName' => trim($_POST['clientName']),
                'Surname' => trim($_POST['Surname']),
                'clientName_err' => '',
                'Surname_err' => ''
            ];
            if (empty($data['clientName_err']) && empty($data['Surname_err'])) {
                if ($this->userModel->editClient($data)) {
                    flash('post_message', 'Client is edited.');
                    redirect('users/clients_rec');
                }else{
                    echo "Error";
                }
            }
        }else{
            $Client = $this->userModel->getClientByID($clientID);

            $data = [
                'clientID' => $clientID,
                'clientName' => $Client->clientName,
                'Surname' => $Client->Surname
            ];
            $this->view('users/editClient', $data);
        }
    }
    public function deleteClient($clientID){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($this->userModel->deleteClient($clientID)) {
                flash('delete_success', 'Client is deleted.');
                redirect('users/clients_rec');
            }
        } else {
            $Client = $this->userModel->getClientByID($clientID);
            $data = [
                'clientID' => $clientID,
                'clientName' => $Client->clientName,
                'Surname' => $Client->Surname
            ];
            $this->view('users/deleteClient', $data);
        }
    }

    // public function reservations(){
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         //Sanitize post data

    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //         $data = [
    //             'clientName' => trim($_POST['clientName'])
    //         ];
    //         $clients = $this->userModel->getClientR($data);
    //         foreach($clients as $client){
    //             echo $client->clientName;
    //         }
    //     }else{
    //         $data = [
    //             'clientName' =>""
    //         ];
    //         $this->view('users/reservations', $data);
    //     }


    // }

    public function reservations(){
        $content = $this->userModel->showReservations();
        $data = [
          'Reservation' =>$content
        ];

        $this->view('users/reservations', $data);

    }

    public function addReservation(){
        $var = $this->roomModel->getRoomsIDNO();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                "RoomsIDNO" =>trim($_POST['RoomIDNO']),
                "clientName" =>trim($_POST['clientName']),
                "stayStartDate" =>trim($_POST['stayStartDate']),
               "stayEndDate" => trim($_POST['stayEndDate']),
                "Surname" => trim($_POST['Surname'])
            ];
            $var2 = $this->userModel->getClient($data);

            $id_to_use = $var2[0]->clientID;
            $id_to_use = $id_to_use + 0;
            if(!empty($var2)){
                if($this->userModel->addNewReservationR($data, (int)$id_to_use)){
                    redirect("users/reservations");
                }
            }
        }else{

            $data = [
                "RoomsIDNO" => $var,
                "clientName" =>"",
                "stayStartDate" => "",
                "stayEndDate" => "",
                "Surname" => "",
            ];
            $this->view('users/addReservation',$data);
        }
    }

    public function editReservation($requestID){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'requestID' => $requestID,
                'clientName' => trim($_POST['clientName']),
                'Surname' => trim($_POST['Surname']),
                "stayStartDate" =>trim($_POST['stayStartDate']),
                "stayEndDate" => trim($_POST['stayEndDate']),
                'RoomID' => trim($_POST['RoomID']),
                'clientName_err' => '',
                'Surname_err' => '',
                "stayStartDate_err" =>'',
                "stayEndDate_err" => ''
            ];
            $client = $this->userModel->getClientID($data);
            $clientID = $client->clientID;
            if (empty($data['clientName_err']) && empty($data['Surname_err'])) {
                if ($this->userModel->editReservation($data, $clientID)) {
                    flash('post_message', 'Reservation is edited.');
                    redirect('users/reservations');
                }else{
                    echo "Error";
                }
            }
        }else{
            $Reservation = $this->userModel->getReservationByID($requestID);
            $Client = $this->userModel->getClientByID($Reservation->clientID);
            $Rooms = $this->roomModel->showRooms();
            $data = [
                'requestID' => $requestID,
                'RoomID' => $Reservation->RoomID,
                'clientName' =>$Client->clientName,
                'Surname' => $Client->Surname,
                'stayStartDate' => $Reservation->stayStartDate,
                'stayEndDate' =>  $Reservation->stayEndDate,
                'Rooms' => $Rooms
            ];
            $this->view('users/editReservation', $data);
        }


    }

   public function deleteReservation($requestID){
       if ($_SERVER['REQUEST_METHOD'] == "POST") {
           if ($this->userModel->deleteReservation($requestID)) {
               flash('delete_success', 'Reservation is deleted.');
               redirect('users/reservations');
           }
       } else {
           $Reservation = $this->userModel->getReservationByID($requestID);
           $Client = $this->userModel->getClientByID($Reservation->clientID);
           $data = [
               'requestID' => $requestID,
               'Reservation' => $Reservation,
               'clientID' => $Client->clientID,
               'clientName' => $Client->clientName,
               'Surname' => $Client->Surname
           ];
           $this->view('users/deleteReservation', $data);
       }


   }

    ////////////////////////////////////////////////////////////////////////////////////
    //extra
    public function showInfo()
    {
        $currUser = $this->userModel->getUserById($_SESSION['user_id']);
        $data = [
            'id' => $_SESSION['user_id'],
            'name' => $currUser->Name,
            'description' => $currUser->Descrition
        ];
        $this->view('users/showInfo', $data);
    }

    public function manage()
    {   
        $this->view('users/manage');
    }

    public function manageUsers()
    {
        $users = $this->userModel->getUsers();
        $data = [
            'users' => $users
        ];
        $this->view('users/manageUsers', $data);
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            //`Name`, `Surname`, `PhoneNo`, `StreetNo`, `ApartamentNo`, `Role`, `Descrition`, `Email`, `Password`
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'name' => trim($_POST['Name']),
                'surname' => trim($_POST['Surname']),
                'phoneNo' => trim($_POST['PhoneNo']),
                'streetNo' => trim($_POST['StreetNo']),
                'apartamentNo' => trim($_POST['ApartamentNo']),
                'role' => trim($_POST['Role']),
                'description' => trim($_POST['Descrition']),
                'email' => trim($_POST['Email']),
                'password' => trim($_POST['Password']),
                'confirm_password' => trim($_POST['confirm_Password']),
                'name_error' => '',
                'phoneNo_error' => '',
                'streetNo_error' => '',
                'apartamentNo_error' => '',
                'email_error' => '',
                'password_error' => '',
                'confirm_password_error' => ''
            ];

            //need some validation here

            //make sure there are empty error than...
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            if ($this->userModel->addNewUser($data)) {
                flash('register_success', 'User is registered.');
                redirect('users/manageUsers');
            } else {
                die("Smth Went wrong");
            }
        } else {
            //initialize data
            //`employeeID`, `Name`, `Surname`, `PhoneNo`, `StreetNo`, `ApartamentNo`, `Role`, `Descrition`, `Email`, `Password`
            $data = [
                'name' => '',
                'surname' => '',
                'phoneNo' => '',
                'streetNo' => '',
                'apartamentNo' => '',
                'role' => '',
                'description' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_error' => '',
                'phoneNo_error' => '',
                'streetNo_error' => '',
                'apartamentNo_error' => '',
                'email_error' => '',
                'password_error' => '',
                'confirm_password_error' => ''
            ];
            $this->view('users/addUser', $data);
        }
    }

    public function editUser($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize Post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'employeeID' => $id,
                'name' => trim($_POST['Name']),
                'surname' => trim($_POST['Surname']),
                'phoneNo' => trim($_POST['PhoneNo']),
                'streetNo' => trim($_POST['StreetNo']),
                'apartamentNo' => trim($_POST['ApartamentNo']),
                'role' => trim($_POST['Role']),
                'description' => trim($_POST['Descrition']),
                'email' => trim($_POST['Email']),
                //'password' => trim($_POST['Password']),
                //'confirm_password' => trim($_POST['confirm_Password']),
                'name_error' => '',
                'phoneNo_error' => '',
                'streetNo_error' => '',
                'apartamentNo_error' => '',
                'email_error' => '',
                'password_error' => '',
                'confirm_password_error' => ''
            ];

            //make sure there is not an error (do not forget if)
            if ($this->userModel->editUserM($data)) {
                flash('post_message', 'User Updated');
                redirect('users/manageUsers');
            } else {
                die('Something went wrong');
            }
        } else {
            //get excisting user from model
            $user = $this->userModel->getUserById($id);
            $data = [
                'employeeID' => $id,
                'name' => $user->Name,
                'surname' => $user->Surname,
                'phoneNo' => $user->PhoneNo,
                'streetNo' => $user->StreetNo,
                'apartamentNo' => $user->ApartamentNo,
                'role' => $user->Role,
                'description' => $user->Descrition,
                'email' => $user->Email,
                //'password' => $user->Password
            ];
            $this->view('users/editUser', $data);
        }
    }

    public function deleteUser($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = $this->userModel->getUserByID($id);

            if ($this->userModel->deleteuserM($id)) {
                redirect('users/manageUsers');
            }
        } else {
            $user = $this->userModel->getUserById($id);
            $data = [
                'employeeID' => $user->employeeID,
                'Name' => $user->Name,
                'Surname' => $user->Surname
            ];
            $this->view('users/deleteUser', $data);
        }
    }
}