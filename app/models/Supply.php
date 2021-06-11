<?php
/*
class Supply
{
    private $db;


    public function __construct()
    {
      // $connect=mysqli_connect($host,$user,$pass);
      // $db1=mysqli_select_db($connect, $dbname);	 
        $this->db = new Database();
    }

    public function addSupply($productName, $description,$sellingPrice,$Quantity,$value){
      for($i=0;$i<$value;$i++){
        $this->db->query('INSERT INTO manageSupplies(manageSuppliesDate, Quantity, sellingPrice, description, purchasePrice, productName,productID, employeeID) VALUES(curdate(), :Quantity, :sellingPrice, :description, :purchasePrice, :productName,1, :employeeID)'); 
        $this->db->bind(':Quantity', $Quantity['Quantity']);
        $this->db->bind(':sellingPrice', $sellingPrice['sellingPrice']);
        $this->db->bind(':description', $description['description']);
        $this->db->bind(':purchasePrice', $purchasePrice['purchasePrice']);
        $this->db->bind(':productName', $productName['productName']);
        $this->db->bind(':employeeID', $_SESSION['user_id']);
        if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }

      }
      // $this->db->query('INSERT INTO manageSupplies(manageSuppliesDate, Quantity, sellingPrice, description, purchasePrice, productName,productID, employeeID) VALUES(curdate(), :Quantity, :sellingPrice, :description, :purchasePrice, :productName,1, :employeeID)'); 
      //   $this->db->bind(':Quantity', $data['Quantity']);
      //   $this->db->bind(':sellingPrice', $data['sellingPrice']);
      //   $this->db->bind(':description', $data['description']);
      //   $this->db->bind(':purchasePrice', $data['purchasePrice']);
      //   $this->db->bind(':productName', $data['productName']);
      //   $this->db->bind(':employeeID', $_SESSION['user_id']);
      //   mysqli_query($connect,"insert into managesupplies values('$name[$i]','$age[$i]','$job[$i]')");	 

        // foreach($_POST['Quantity'] as $params) {
        //   $smt->execute($params);
        // }
        // if ($this->db->execute()) {
        //     return true;
        // } else {
        //     return false;
        // }
    }

  }*/