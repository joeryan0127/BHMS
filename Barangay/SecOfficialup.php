<?php
session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['submit3'])){
    

        $id =$_POST['id'];
        $position =$_POST['Pos'];
        $name=$_POST['uname'];
        $contact=$_POST['contact1'];
        $address=$_POST['address'];
        $start=$_POST['Start1'];
        $end=$_POST['end1'];


        $statement = $conn ->prepare("UPDATE officials SET Position=:position ,Full_Name=:fname ,	Contact_no=:contact,Address=:addres , Start_Term=:S , End_Term=:E WHERE Offcial_id =:id ");

            $statement->bindValue(':position', $position);
            $statement->bindValue(':fname', $name);
            $statement->bindValue(':contact',$contact);
            $statement->bindValue(':addres',$address);
            $statement->bindValue(':S',$start);
            $statement->bindValue(':E', $end);
            $statement->bindValue(':id',$id);

            $result = $statement ->execute(); 

         
         

          $statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


          $account=$_SESSION["Suid"];
          
          date_default_timezone_set('Asia/Manila');
          $todays_date = date("y-m-d h:i:sa");
          $today = strtotime($todays_date);
          $time=date("h:i:sa", $today);
          
          $action="Update Official";
          $date = date('Y-m-d');
          
          $statement->bindValue(':id',$account);
          $statement->bindValue(':Ldate', $date);
          $statement->bindValue(':ltime', $time);
          $statement->bindValue(':laction',$action);
          $result = $statement ->execute(); 

          header("location: ../secofficial.php");
}

?>


