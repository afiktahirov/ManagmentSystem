<?php

require_once 'db.php';

$db = new Database();

if(isset($_POST['action']) && $_POST['action']=='view'){
    $output = '';
    $data = $db->read();
    if($db->totalRowCount()>0){
        $output .='<table class="table table-stripe table-sm table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';
        foreach($data as $row){
          $output .='<tr class="text-center text-secondary">
          <td>'.$row['id'].'</td>
          <td>'.$row['first_name'].'</td>
          <td>'.$row['last_name'].'</td>
          <td>'.$row['email'].'</td>
          <td>'.$row['phone'].'</td>
          <td>
             <a href="" title="View Details" class="text-success p-2"><i class="fa-solid fa-circle-info"></i></a>
             <a href="" title="View Details" class="text-primary p-2"><i class="fa-solid fa-pen-to-square"></i></a>
             <a href="" title="View Details" class="text-danger  p-2"><i class="fa-solid fa-trash"></i></a>
          </td>
          </tr>
          '; 
        }
        $output .= '</tbody></table>';
        echo $output;                
    }
    else{
        echo "<h3 class='text-center text-secondary mt-5'>No any user</h3>";
    }

}

if(isset($_POST['action']) && $_POST['action'] == 'insert'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $db->insert($fname,$lname,$email,$phone);
}