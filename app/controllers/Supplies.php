<?php /*
class Supplies extends Controller{

  public function __construct(){
    $this->userSupply = $this->model('Supply');
  }

  public function index(){
    $quatity = 0;
    $mybool = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $quantity = $_POST['prodName'];
          $productName = [
            'productName' => $_POST['prodName']
          ];
          $description = [
            'description' => $_POST['description']
          ];
          $sellingPrice = [
            'sellingPrice' => $_POST['sellPrice']
          ];
          $Quantity = [
            'Quantity' => $_POST['quantity']
          ];
          $purchasePrice = [
            'purchasePrice' => $_POST['purPrice']
          ];   

      // for($i=0;$i<$quantity;$i++){
      //   if($this->userSupply->addSupply($data)){
      //     $mybool = true;
      //   }
      // }
      if($this->userSupply->addSupply($productName, $description,$sellingPrice,$Quantity,$mybool)){
        redirect('users/manage');
      }else{
        ('users/index');
      }
    }else{
      $productName = [
        'productName' => ""
      ];
      $description = [
        'description' => ""
      ];
      $sellingPrice = [
        'sellingPrice' => ""
      ];
      $Quantity = [
        'Quantity' => ""
      ];
      $sellingPrice = [
        'purchasePrice' => ""
      ];
      $this->view1('supplies/index',$productName, $description,$sellingPrice,$Quantity);
    }
    
  }
}*/