<?php
session_start();
include_once("../Db_connect/connection.php");

if(isset($_POST['Submit'])){

    $id =$_POST['id'];
    $p_id=$_POST['P_id'];
    $H_id=$_POST['H_id'];
    $fname=$_POST['fname'];
    $Mname=$_POST['Mname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $blood =$_POST['Blood'];
    $bdate =$_POST['Bdate'];


 

    $bplace =$_POST['Bplace'];
    $stat =$_POST['Stat'];
    $religion =$_POST['religion'];
    $national =$_POST['Nationality'];
    $pwd =$_POST['pwd'];
    $remark =$_POST['remark'];
    $Date =$_POST['date'];

    
    $statement = $conn->prepare("UPDATE resident SET P_id =:P_id , householdNO=:H_id , R_firstname=:fname , R_Middilename=:Mname ,
     R_Lastname=:lname  , R_gender=:gender, R_bloodtype= :blood , R_birthdate=:Bdate, R_Birthplace=:Bplace , R_status=:stat , R_religion=:religion , R_nationality=:national,Pwd=:pwd,Remark=:remark,Date=:date
     WHERE Resident_id =:id ");
    
    $statement->bindValue(':P_id', $p_id);
    $statement->bindValue(':H_id', $H_id);
    $statement->bindValue(':fname',$fname);
    $statement->bindValue(':Mname',$Mname);
    $statement->bindValue(':lname',$lname);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':blood', $blood);
    $statement->bindValue(':Bdate', $bdate);
    $statement->bindValue(':Bplace', $bplace);
    $statement->bindValue(':stat', $stat);
    $statement->bindValue(':religion', $religion);
    $statement->bindValue(':national', $national);
    $statement->bindValue(':pwd',$pwd);
    $statement->bindValue(':remark',$remark);
    $statement->bindValue(':date',$Date);
    $statement->bindValue(':id',$id);
    
    $result = $statement ->execute(); 
    
$statement =$conn ->prepare("INSERT INTO logs(A_id,L_date,L_time,L_action)VALUES(:id,:Ldate,:ltime,:laction)");


$account=$_SESSION["bhuid"];

date_default_timezone_set('Asia/Manila');
$todays_date = date("y-m-d h:i:sa");
$today = strtotime($todays_date);
$time=date("h:i:sa", $today);

$action="Update Resident";
$date = date('Y-m-d');

$statement->bindValue(':id',$account);
$statement->bindValue(':Ldate', $date);
$statement->bindValue(':ltime', $time);
$statement->bindValue(':laction',$action);
$result = $statement ->execute(); 

    
    header("location: ../bhwResident.php");
}
?>